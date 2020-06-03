<?php

namespace App\Controller;

use App\Form\PageType;
use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/a-propos", name="page_about")
     * @param PartnerRepository $partnerRepository
     * @return Response
     */
    public function about(PartnerRepository $partnerRepository)
    {
        return $this->render('page/about.html.twig', [
            'partners' => $partnerRepository->findAll(),
        ]);
    }

    /**
     * @Route("/contact", name="page_contact")
     * @return Response
     */
    public function contact()
    {
        $form = $this->createForm(PageType::class);
        return $this->render('page/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
