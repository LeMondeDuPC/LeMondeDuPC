<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Service\SenderService;
use ReCaptcha\ReCaptcha;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PageController
 * @package App\Controller
 */
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
     * @param ReCaptcha $ReCaptcha
     * @return Response
     */
    public function contact(Request $request, SenderService $senderService, ReCaptcha $ReCaptcha)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $response = $ReCaptcha->verify($_POST['g-recaptcha-response']);
            if ($response->isSuccess()) {
                $senderService->contactEmail($contact);
                $this->addFlash('success', 'Votre message a bien été envoyé !');
            } else {
                $this->addFlash('danger', 'Veuillez valider le ReCaptcha');
            }
        }
        return $this->render('page/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
