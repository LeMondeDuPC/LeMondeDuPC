<?php

namespace App\Controller;

use App\Form\PageType;
use App\Service\SenderService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/a-propos", name="page_about")
     * @return Response
     */
    public function about()
    {
        return $this->render('page/about.html.twig');
    }

    /**
     * @Route("/contact", name="page_contact")
     * @param Request $request
     * @param SenderService $senderService
     * @return Response
     */
    public function contact(Request $request, SenderService $senderService)
    {
        $form = $this->createForm(PageType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $senderService->contactEmail(
                $form->get('name')->getData(),
                $form->get('email')->getData(),
                $form->get('subject')->getData(),
                $form->get('message')->getData());
            $this->addFlash('success', 'Votre message a bien été envoyé !');
        }
        return $this->render('page/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
