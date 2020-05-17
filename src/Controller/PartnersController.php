<?php

namespace App\Controller;

use App\Entity\Partners;
use App\Form\PartnersType;
use App\Repository\PartnersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PartnersController
 * @package App\Controller
 */
class PartnersController extends AbstractController
{

    /**
     * @var PartnersRepository
     */
    private $_partnersRepository;

    /**
     * PartnersController constructor.
     * @param PartnersRepository $partnersRepository
     */
    public function __construct(PartnersRepository $partnersRepository)
    {
        $this->_partnersRepository = $partnersRepository;
    }

    /**
     * @Route("/partenaires/{name}", name="partners_show", methods={"GET"})
     * @param Partners $partner
     * @return Response
     */
    public function show(Partners $partner): Response
    {
        return $this->render('partners/show.html.twig', [
            'partner' => $partner,
        ]);
    }

    /**
     * @Route("/admin/partenaires", name="partners_manage", methods={"GET"})
     * @return Response
     */
    public function manage(): Response
    {
        if (!$this->isGranted('ROLE_MANAGE_PARTNERS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        return $this->render('partners/manage.html.twig', [
            'partners' => $this->_partnersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/partenaire/nouveau", name="partners_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        if (!$this->isGranted('ROLE_MANAGE_PARTNERS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        $partner = new Partners();
        $form = $this->createForm(PartnersType::class, $partner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partner);
            $entityManager->flush();

            return $this->redirectToRoute('partners_manage');
        }

        return $this->render('partners/new.html.twig', [
            'partner' => $partner,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/partenaire/{id}/modifier", name="partners_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Partners $partner
     * @return Response
     */
    public function edit(Request $request, Partners $partner): Response
    {
        if (!$this->isGranted('ROLE_MANAGE_PARTNERS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        $form = $this->createForm(PartnersType::class, $partner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partners_manage');
        }

        return $this->render('partners/edit.html.twig', [
            'partner' => $partner,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/partenaire/{id}", name="partners_delete", methods={"DELETE"})
     * @param Request $request
     * @param Partners $partner
     * @return Response
     */
    public function delete(Request $request, Partners $partner): Response
    {
        if (!$this->isGranted('ROLE_MANAGE_PARTNERS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        if ($this->isCsrfTokenValid('delete' . $partner->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partner);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partners_manage');
    }
}
