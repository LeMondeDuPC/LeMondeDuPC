<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\User\LoginType;
use App\Form\User\RegistrationType;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class UserController
 * @package App\Controller
 */
class UserController extends AbstractController
{

    /**
     * @var UsersRepository
     */
    private $usersRepository;

    /**
     * UserController constructor.
     * @param UsersRepository $usersRepository
     */
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }


    /**
     * @Route(
     *     {"fr": "/membre/inscription"},
     *     name="user_registration"
     * )
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function newUser(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $user = new Users();
        $registrationForm = $this->createForm(RegistrationType::class, $user);
        $registrationForm->handleRequest($request);

        /*if ($registrationForm->isSubmitted() AND $registrationForm->isValid()) {
            $user->setValidation(false);
            $user->setConfirmKey(bin2hex(random_bytes(Users::CONSTANTS['sizeKey'])));
            $user->setPassword($passwordEncoder->encodePassword($user, $registrationForm->get('Password')->getData()));
            $entityManager->persist($user);
            $entityManager->flush();
        }*/

        return $this->render('/user/account.html.twig', [
            'formRegistration' => $registrationForm->createView()
        ]);
    }

    /**
     * @Route(
     *     {"fr": "/membre/connexion"},
     *     name="user_connection"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function loginUser(Request $request)
    {
        $registrationForm = $this->createForm(LoginType::class);
        $registrationForm->handleRequest($request);
        return $this->render('/user/account.html.twig', [
            'formLogin' => $registrationForm->createView()
        ]);
    }

    /**
     * @Route(
     *     {"fr": "/membre/{id}"},
     *     name="user_profile"
     * )
     * @param $id int
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showUser($id)
    {
        $user = $this->usersRepository->find($id);
        return $this->render('/user/show.html.twig', [
            'user' => $user
        ]);
    }


    /**
     * @Route(
     *     {"fr": "/membre/{id}/parametre"},
     *     name="user_params"
     * )
     * @param $id int
     */
    public function paramsUser($id)
    {

    }

    /**
     * @Route(
     *     {"fr": "/membre/{id}/modifier"},
     *     name="user_params"
     * )
     * @param $id int
     */
    public function editUser($id)
    {

    }

}
