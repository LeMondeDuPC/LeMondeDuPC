<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Vote;
use App\Form\VoteType;
use App\Repository\VoteRepository;
use Cocur\Slugify\SlugifyInterface;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/vote")
 */
class VoteController extends AbstractController
{

    /**
     * @Route("/heart/{id}", name="vote_heart", methods={"GET"})
     * @param Product $product
     * @param VoteRepository $voteRepository
     * @param SlugifyInterface $slugify
     * @return Response
     */
    public function heart(Product $product, VoteRepository $voteRepository, SlugifyInterface $slugify): Response
    {
        if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            if ($voteRepository->count(['product' => $product, 'type' => Vote::TYPE_HEART, 'user' => $this->getUser()]) === 0) {
                $vote = new Vote();
                $vote->setProduct($product);
                $vote->setType(Vote::TYPE_HEART);
                $vote->setContent(null);
                $vote->setUser($this->getUser());
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($vote);
                $entityManager->flush();
            } else {
                $vote = $voteRepository->findOneBy(['product' => $product, 'type' => Vote::TYPE_HEART, 'user' => $this->getUser()]);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($vote);
                $entityManager->flush();
            }
        } else {
            $this->addFlash('warning', 'Veuillez vous connecter');
        }
        return $this->redirectToRoute('product_show', ['id' => $product->getId(), 'slug' => $slugify->slugify($product->getTitle())]);
    }

    /**
     * @Route("/comment/{id}", name="vote_comment", methods={"POST"})
     * @param Product $product
     * @param Request $request
     * @param SlugifyInterface $slugify
     * @return Response
     */
    public function newComment(Product $product, Request $request, SlugifyInterface $slugify)
    {
        $vote = new Vote();
        $form = $this->createForm(VoteType::class, $vote, [
            'action' => $this->generateUrl('vote_comment', ['id' => $product->getId()]),
            'method' => 'POST',
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
                    $vote->setTimePublication(new DateTime());
                    $vote->setProduct($product);
                    $vote->setType(Vote::TYPE_COMMENT);
                    $vote->setContent($form->get('content')->getData());
                    $vote->setUser($this->getUser());
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($vote);
                    $entityManager->flush();
                    return $this->redirectToRoute('product_show', ['id' => $product->getId(), 'slug' => $slugify->slugify($product->getTitle())]);
                } else {
                    $this->addFlash('warning', 'Veuillez vous connecter');
                    return $this->redirectToRoute('product_show', ['id' => $product->getId(), 'slug' => $slugify->slugify($product->getTitle())]);
                }
            } else {
                return $this->redirectToRoute('product_show', ['id' => $product->getId(), 'slug' => $slugify->slugify($product->getTitle())]);
            }
        }
        return $this->render('vote/form/_comment_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/comment/delete/{id}", name="vote_comment_delete", methods={"DELETE"})
     * @param Request $request
     * @param Vote $vote
     * @param SlugifyInterface $slugify
     * @return Response
     */
    public function deleteComment(Request $request, Vote $vote, SlugifyInterface $slugify): Response
    {
        if ((($this->getUser() !== null and $vote->getUser() !== null) ? ($this->getUser()->getId() === $vote->getUser()->getId()) : false) or $this->isGranted('ROLE_MANAGE_COMMENTS')) {
            if ($this->isCsrfTokenValid('delete' . $vote->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($vote);
                $entityManager->flush();
            }
        } else {
            $this->addFlash('warning', 'Vous ne pouvez pas supprimer ce commentaire');
        }
        if ($this->isGranted('ROLE_MANAGE_VOTES')) {
            return $this->redirectToRoute('votes_manage');
        }
        return $this->redirectToRoute('product_show', ['id' => $vote->getProduct()->getId(), 'slug' => $slugify->slugify($vote->getProduct()->getTitle())]);
    }

    /**
     * @Route("/admin/votes", name="votes_manage", methods={"GET"})
     * @param VoteRepository $voteRepository
     * @return Response
     */
    public function manage(VoteRepository $voteRepository): Response
    {
        if ($this->isGranted('ROLE_MANAGE_VOTES')) {
            return $this->render('vote/manage.html.twig', [
                'votes' => $voteRepository->findAll(),
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }
}
