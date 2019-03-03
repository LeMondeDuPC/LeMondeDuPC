<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UserLoginType;
use App\Form\UserRegistrationType;
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
     *     {"fr": "/inscription", "/registration"},
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
        $registrationForm = $this->createForm(UserRegistrationType::class, $user);
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
     *     {"fr": "/connexion", "/connection"},
     *     name="user_connection"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function loginUser(Request $request)
    {
        $registrationForm = $this->createForm(UserLoginType::class);
        $registrationForm->handleRequest($request);
        return $this->render('/user/account.html.twig', [
            'formLogin' => $registrationForm->createView()
        ]);
    }

    /**
     * @Route(
     *     {"fr": "/membre/{id}", "/user/{id}"},
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
     *     {"fr": "/membre/{id}/parametre", "/user/{id}/params"},
     *     name="user_params"
     * )
     * @param $id int
     */
    public function paramsUser($id)
    {

    }

    /**
     * @Route(
     *     {"fr": "/membre/{id}/modifier", "/user/{id}/edit"},
     *     name="user_params"
     * )
     * @param $id int
     */
    public function editUser($id)
    {

    }

}
