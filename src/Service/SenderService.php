<?php


namespace App\Service;


use App\Entity\Contact;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\ProductRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class SenderService
{

    private $mailer;
    private $productRepository;

    public function __construct(MailerInterface $mailer, ProductRepository $productRepository)
    {
        $this->mailer = $mailer;
        $this->productRepository = $productRepository;
    }

    public function welcomeEmail(User $user)
    {
        $products = $this->productRepository->findBy(['validated' => Product::VALIDATED], ['timePublication' => 'DESC']);
        $email = (new TemplatedEmail())
            ->from(new Address('no-reply@lemondedupc.fr', 'Le Monde Du PC'))
            ->to(new Address($user->getEmail(), $user->getUsername()))
            ->subject('Merci de votre inscription !')
            ->htmlTemplate('email/signup.html.twig')
            ->context([
                'user_name' => $user->getUsername(),
                'user_id' => $user->getId(),
                'confirm_key' => $user->getConfirmKey(),
                'products' => $products
            ]);
        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $e) {
        }
    }

    public function newsletterEmail($users)
    {
        $products = $this->productRepository->findBy(['validated' => Product::VALIDATED], ['timePublication' => 'DESC']);
        foreach ($users as $user) {
            $email = (new TemplatedEmail())
                ->from(new Address('no-reply@lemondedupc.fr', 'Le Monde Du PC'))
                ->to(new Address($user->getEmail(), $user->getUsername()))
                ->subject('Newsletter')
                ->htmlTemplate('email/newsletter.html.twig')
                ->context([
                    'user_name' => $user->getUsername(),
                    'products' => $products,
                ]);

            try {
                $this->mailer->send($email);
            } catch (TransportExceptionInterface $e) {
            }
        }
    }

    public function contactEmail(Contact $contact)
    {
        $email = (new Email())
            ->from(new Address($contact->getEmail(), $contact->getName()))
            ->to(new Address('contact@lemondedupc.fr', 'Le Monde Du PC'))
            ->subject('Mail de contact : ' . $contact->getSubject())
            ->text("Mail : " . $contact->getEmail() . "\nNom : " . $contact->getName() . "\nMessage :\n" . $contact->getMessage());
        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $e) {
        }
    }
}