<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Entity\Users;
use App\Form\UsersType;
use App\Repository\UsersRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class UsersController
 * @package App\Controller
 */
class UsersController extends AbstractController
{
    /**
     * @var UsersRepository
     */
    private $_usersRepository;

    /**
     * UsersController constructor.
     * @param UsersRepository $usersRepository
     */
    public function __construct(UsersRepository $usersRepository)
    {
        $this->_usersRepository = $usersRepository;
    }

    /**
     * @Route("/email/test/design", name="test_email")
     * @return Response
     */
    public function testEmail()
    {
        return $this->render('emails/test.html.twig', ['user_id' => 2, 'confirm_key' => 254511816, 'user_name' => 'Niels']);
    }

    /**
     * @Route("/membre/connexion", name="users_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('users_show', ['id' => $this->getUser()->getId()]);
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('users/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/membre/deconnexion", name="users_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route("/admin/membres", name="users_manage", methods={"GET"})
     * @return Response
     */
    public function manage(): Response
    {
        return $this->render('users/manage.html.twig', [
            'users' => $this->_usersRepository->findBy([], ['timePublication' => 'DESC']),
        ]);
    }

    /**
     * @Route("/membre/inscription", name="users_new", methods={"GET","POST"})
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param Security $security
     * @param MailerInterface $mailer
     * @return Response
     */
    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder, Security $security, MailerInterface $mailer): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user, ['security' => $security]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setConfirmKey(md5(bin2hex(openssl_random_pseudo_bytes(30))));
            $user->setTimePublication(new DateTime());
            $user->setValidated(false);
            $user->setRoles(['ROLE_SUPER_ADMIN']);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            /*$email = (new TemplatedEmail())
                ->from(new Address('no-reply@lemondedupc.fr', 'Le Monde Du PC'))
                ->to(new Address($user->getEmail(), $user->getUsername()))
                ->subject('Merci de votre inscription !')
                ->htmlTemplate('emails/signup.html.twig')
                ->context([
                    'user_name' => $user->getUsername(),
                    'user_id' => $user->getId(),
                    'confirm_key' => $user->getConfirmKey()
                ]);

            $mailer->send($email);*/
            $this->addFlash('success', 'Votre compte a bien été créer ! Veuillez confirmé votre inscription via le mail qui vous a été envoyé');
            return $this->redirectToRoute('users_login');
        }

        return $this->render('users/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/membre/validation/{id}/{confirmKey}", name="users_validate", methods={"GET"})
     * @param $confirmKey
     * @param Users $user
     * @return Response
     */
    public function validateUser(string $confirmKey, Users $user)
    {
        $message = 'Une erreur s\'est produite lors de la confirmation de votre compte ou votre compte a déjà été confirmé';
        if ($user->getConfirmKey() === $confirmKey and $user->getValidated() !== Users::VALIDATED) {
            $entityManager = $this->getDoctrine()->getManager();
            $user->setValidated(Posts::VALIDATED);
            $entityManager->persist($user);
            $entityManager->flush();
            $message = 'Votre compte a bien été confirmé, vous pouvez maintenant vous connecter !';
        }
        return $this->render('users/validation.html.twig', [
            'message' => $message,
        ]);
    }

    /**
     * @Route("/membre/{id}", name="users_show", methods={"GET"})
     * @param Users $user
     * @return Response
     */
    public function show(Users $user): Response
    {
        return $this->render('users/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/membre/{id}/parametres", name="users_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Users $user
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param Security $security
     * @return Response
     */
    public function edit(Request $request, Users $user, UserPasswordEncoderInterface $passwordEncoder, Security $security): Response
    {
        if (($this->getUser() !== null ? $this->getUser()->getId() : null) !== ($user !== null ? $user->getId() : null) and !$this->isGranted('ROLE_MANAGE_USERS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        $form = $this->createForm(UsersType::class, $user, ['security' => $security]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('plainPassword')->isEmpty() === false) {
                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
            }

            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Votre compte a bien été créer ! Veuillez confirmé votre inscription via le mail qui vous a été envoyé');
            return $this->redirectToRoute('users_show', ['id' => $user->getId()]);
        }

        return $this->render('users/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/membre/{id}", name="users_delete", methods={"DELETE"})
     * @param Request $request
     * @param Users $user
     * @return Response
     */
    public function delete(Request $request, Users $user): Response
    {
        if (($this->getUser() !== null ? $this->getUser()->getId() : null) !== ($user !== null ? $user->getId() : null) and !$this->isGranted('ROLE_MANAGE_USERS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $posts = $user->getPosts();
            foreach ($posts as $post)
            {
                $user->removePostLink($post);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('posts_index');
    }
}
