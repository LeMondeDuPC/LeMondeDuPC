<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Form\PostsType;
use App\Repository\PostsRepository;
use DateTime;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class PostsController
 * @package App\Controller
 */
class PostsController extends AbstractController
{
    /**
     * @var PostsRepository
     */
    private $_postRepository;

    /**
     * PostsController constructor.
     * @param PostsRepository $postsRepository
     */
    public function __construct(PostsRepository $postsRepository)
    {
        $this->_postRepository = $postsRepository;
    }

    /**
     * @Route("/{page<\d+>?1}", name="posts_index", methods={"GET"})
     * @param int $page
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(int $page, PaginatorInterface $paginator): Response
    {
        $posts = $paginator->paginate(
            $this->_postRepository->findBy(['validated' => Posts::VALIDATED], ['timePublication' => 'DESC']),
            $page,
            2
        );
        return $this->render('posts/index.html.twig', [
            'posts' => $posts
        ]);

    }

    /**
     * @Route("/{id}-{slug}", name="posts_show", methods={"GET"})
     * @param Posts $post
     * @return Response
     */
    public function show(Posts $post): Response
    {
        $post = $this->_postRepository->findOneBy(['id' => $post->getId(), 'validated' => Posts::VALIDATED]);
        if (!is_null($post)) {
            return $this->render('posts/show.html.twig', [
                'post' => $post
            ]);
        } else {
            throw $this->createNotFoundException();
        }
    }

    /**
     * @Route("/posts/search-article/{page<\d+>?1}", name="posts_search", methods={"POST"})
     * @param Request $request
     * @param int $page
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function search(Request $request, int $page, PaginatorInterface $paginator)
    {
        $search = $request->request->get('q');
        $posts = $paginator->paginate(
            $this->_postRepository->findByWord($search, Posts::VALIDATED),
            $page,
            2
        );
        return $this->render('posts/result.html.twig', [
            'posts' => $posts,
            'search' => $search
        ]);
    }

    /**
     * @Route("/admin/posts", name="posts_manage", methods={"GET"})
     * @return Response
     */
    public function manage(): Response
    {
        if ($this->isGranted('ROLE_MANAGE_POSTS')) {
            return $this->render('posts/manage.html.twig', [
                'posts' => $this->_postRepository->findBy([], ['timePublication' => 'DESC']),
            ]);
        } elseif ($this->isGranted('ROLE_CREATE_POSTS')) {
            return $this->render('posts/manage.html.twig', [
                'posts' => $this->getUser()->getPosts(),
            ]);
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }

    /**
     * @Route("/admin/posts/nouveau", name="posts_new", methods={"GET","POST"})
     * @param Request $request
     * @param Security $security
     * @return Response
     */
    public function new(Request $request, Security $security): Response
    {
        if ($this->isGranted('ROLE_CREATE_POSTS')) {
            $post = new Posts();
            $form = $this->createForm(PostsType::class, $post, ['security' => $security]);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $post->setUser($this->getUser());
                $post->setTimePublication(new DateTime());
                if (!$form->has('validated')) {
                    $post->setValidated(false);
                }
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($post);
                $entityManager->flush();
                if ($this->isGranted('ROLE_MANAGE_POSTS')) {
                    $this->addFlash('success', 'Votre article a bien été posté !');
                } else {
                    $this->addFlash('success', 'Votre article a bien été envoyé, en attente de validation...');
                }
                return $this->redirectToRoute('posts_index');
            }

            return $this->render('posts/new.html.twig', [
                'post' => $post,
                'form' => $form->createView(),
            ]);
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }

    /**
     * @Route("/admin/posts/{id}/modifier", name="posts_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Posts $post
     * @param Security $security
     * @return Response
     */
    public function edit(Request $request, Posts $post, Security $security): Response
    {
        if (((!is_null($this->getUser()) and !is_null($post->getUser())) ? ($this->getUser()->getId() === $post->getUser()->getId()) : false) or $this->isGranted('ROLE_MANAGE_POSTS')) {
            $form = $this->createForm(PostsType::class, $post, ['security' => $security]);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                $this->addFlash('success', 'Votre article a bien été modifié !');
                return $this->redirectToRoute('posts_manage');
            }
            return $this->render('posts/edit.html.twig', [
                'post' => $post,
                'form' => $form->createView(),
            ]);
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }

    /**
     * @Route("/admin/posts/{id}", name="posts_delete", methods={"DELETE"})
     * @param Request $request
     * @param Posts $post
     * @return Response
     */
    public function delete(Request $request, Posts $post): Response
    {
        if (((!is_null($this->getUser()) and !is_null($post->getUser())) ? ($this->getUser()->getId() === $post->getUser()->getId()) : false) or $this->isGranted('ROLE_MANAGE_POSTS')) {
            if ($this->isCsrfTokenValid('delete' . $post->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($post);
                $entityManager->flush();
                $this->addFlash('success', 'Votre article a bien été supprimé !');
            }

            return $this->redirectToRoute('posts_manage');
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }
}
