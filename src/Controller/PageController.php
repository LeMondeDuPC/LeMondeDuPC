<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
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
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $senderService->contactEmail($contact);
            $this->addFlash('success', 'Votre message a bien été envoyé !');
        }
        return $this->render('page/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
