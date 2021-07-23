<?php

namespace App\Controller;

use App\Entity\Partner;
use App\Form\PartnerType;
use App\Repository\PartnerRepository;
use DateTime;
use Psr\Cache\InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PartnersController
 * @package App\Controller
 */
class PartnerController extends AbstractController
{

    /**
     * @var PartnerRepository
     */
    private PartnerRepository $partnersRepository;

    /**
     * PartnersController constructor.
     * @param PartnerRepository $partnersRepository
     */
    public function __construct(PartnerRepository $partnersRepository)
    {
        $this->partnersRepository = $partnersRepository;
    }

    /**
     * @return Response
     */
    public function _indexPartner(): Response
    {
        return $this->render('partner/_indexPartner.html.twig', [
            'partners' => $this->partnersRepository->findBy(['visibled_in_list' => true]),
        ]);
    }

    /**
     * @return Response
     * @throws InvalidArgumentException
     */
    public function _indexRss(AdapterInterface $cache)
    {
        $cachedRss = $cache->getItem('rss_' . md5(date('Y-m-d')));
        $cachedRss->expiresAt(new DateTime('tomorrow'));
        if (!$cachedRss->isHit()) {
            $rss = $this->loadRss();
            $cachedRss->set($rss);
            $cache->save($cachedRss);
        }
        $rss = $cachedRss->get();
        return $this->render('partner/_indexRss.html.twig', [
            'rss' => $rss
        ]);
    }

    /**
     * @Route("/admin/partenaires", name="partner_manage", methods={"GET"})
     * @return Response
     */
    public function manage(): Response
    {
        if ($this->isGranted('ROLE_MANAGE_PARTNERS')) {
            return $this->render('partner/manage.html.twig', [
                'partners' => $this->partnersRepository->findBy([], ['id' => 'DESC']),
            ]);
        } else {
            return $this->redirectToRoute('user_login');
        }
    }

    /**
     * @Route("/admin/partenaire/nouveau", name="partner_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        if ($this->isGranted('ROLE_MANAGE_PARTNERS')) {
            $partner = new Partner();
            $form = $this->createForm(PartnerType::class, $partner);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($partner);
                $entityManager->flush();
                $this->addFlash('success', 'Le partenaire a bien été ajouté !');
                return $this->redirectToRoute('partner_manage');
            }

            return $this->render('partner/new.html.twig', [
                'partner' => $partner,
                'form' => $form->createView(),
            ]);
        } else {
            return $this->redirectToRoute('user_login');
        }
    }

    /**
     * @Route("/admin/partenaire/{id}/modifier", name="partner_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Partner $partner
     * @return Response
     */
    public function edit(Request $request, Partner $partner): Response
    {
        if ($this->isGranted('ROLE_MANAGE_PARTNERS')) {
            $form = $this->createForm(PartnerType::class, $partner);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                $this->addFlash('success', 'Le partenaire a bien été modifié !');
                return $this->redirectToRoute('partner_manage');
            }

            return $this->render('partner/edit.html.twig', [
                'partner' => $partner,
                'form' => $form->createView(),
            ]);
        } else {
            return $this->redirectToRoute('user_login');
        }
    }

    /**
     * @Route("/admin/partenaire/{id}", name="partner_delete", methods={"DELETE"})
     * @param Request $request
     * @param Partner $partner
     * @return Response
     */
    public function delete(Request $request, Partner $partner): Response
    {
        if ($this->isGranted('ROLE_MANAGE_PARTNERS')) {
            if ($this->isCsrfTokenValid('delete' . $partner->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($partner);
                $entityManager->flush();
                $this->addFlash('success', 'Le partenaire a bien été supprimé !');
            }
            return $this->redirectToRoute('partner_manage');
        } else {
            return $this->redirectToRoute('user_login');
        }
    }

    private function loadRss()
    {
        $feed = [];
        foreach ($this->partnersRepository->findBy(['rss' => true]) as $partner) {
            $xml = json_decode(json_encode((array)simplexml_load_file($partner->getLink())), true);
            foreach ($xml['channel']['item'] as $item) {
                $feed[] = $item;
            }
        }
        $feed = array_slice($feed, 0, Partner::RSS_ITEM_ON_PAGE);
        usort($feed, function ($a, $b) {
            return strtotime($b['pubDate']) - strtotime($a['pubDate']);
        });
        return $feed;
    }
}
