<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Form\PostsType;
use App\Repository\PostsRepository;
use DateTime;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PostsController
 * @package App\Controller
 */
class PostsController extends AbstractController
{
    /**
     * @var PostsRepository
     */
    private $_postRepository;

    /**
     * PostsController constructor.
     * @param PostsRepository $postsRepository
     */
    public function __construct(PostsRepository $postsRepository)
    {
        $this->_postRepository = $postsRepository;
    }

    /**
     * @Route("/{page<\d+>?1}", name="posts_index", methods={"GET"})
     * @param int $page
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(int $page, PaginatorInterface $paginator): Response
    {
        $posts = $paginator->paginate(
            $this->_postRepository->findBy(['validated' => Posts::VALIDATED]),
            $page,
            2
        );
        return $this->render('posts/index.html.twig', [
            'posts' => $posts
        ]);

    }

    /**
     * @Route("/{id}-{slug}", name="posts_show", methods={"GET"})
     * @param Posts $post
     * @return Response
     */
    public function show(Posts $post): Response
    {
        $post = $this->_postRepository->findOneBy(['id' => $post->getId(), 'validated' => Posts::VALIDATED]);
        return $this->render('posts/show.html.twig', [
            'post' => $post,
            'location' => $post->getLocation()
        ]);
    }

    /**
     * @Route("/posts/search-article/{page<\d+>?1}", name="posts_search", methods={"POST"})
     * @param Request $request
     * @param int $page
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function search(Request $request, int $page, PaginatorInterface $paginator)
    {
        $search = $request->request->get('q');
        $posts = $paginator->paginate(
            $this->_postRepository->findByWord($search, Posts::VALIDATED),
            $page,
            2
        );
        return $this->render('posts/result.html.twig', [
            'posts' => $posts,
            'search' => $search
        ]);
    }

    /**
     * @Route("/admin/posts", name="posts_manage", methods={"GET"})
     * @return Response
     */
    public function manage(): Response
    {
        if ($this->isGranted('ROLE_MANAGE_POSTS')) {
            return $this->render('posts/manage.html.twig', [
                'posts' => $this->_postRepository->findAll(),
            ]);
        } elseif ($this->isGranted('ROLE_CREATE_POSTS')) {
            return $this->render('posts/manage.html.twig', [
                'posts' => $this->_postRepository->findBy(['idUser' => $this->getUser()->getId()]),
            ]);
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }

    /**
     * @Route("/admin/posts/nouveau", name="posts_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        if (!$this->isGranted('ROLE_CREATE_POSTS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        $post = new Posts();
        $form = $this->createForm(PostsType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post->setIdUser(($this->getUser() !== null) ? $this->getUser()->getId() : null);
            $post->setTimePublication(new DateTime());
            $post->setValidated(false);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('posts_index');
        }

        return $this->render('posts/new.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/posts/{id}/modifier", name="posts_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Posts $post
     * @return Response
     */
    public function edit(Request $request, Posts $post): Response
    {
        if (($this->getUser() !== null ? $this->getUser()->getId() : null) !== $post->getIdUser() and !$this->isGranted('ROLE_MANAGE_POSTS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        $form = $this->createForm(PostsType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('posts_manage');
        }

        return $this->render('posts/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/posts/{id}", name="posts_delete", methods={"DELETE"})
     * @param Request $request
     * @param Posts $post
     * @return Response
     */
    public function delete(Request $request, Posts $post): Response
    {
        if (($this->getUser() !== null ? $this->getUser()->getId() : null) !== $post->getIdUser() and !$this->isGranted('ROLE_MANAGE_POSTS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        if ($this->isCsrfTokenValid('delete' . $post->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($post);
            $entityManager->flush();
        }

        return $this->redirectToRoute('posts_manage');
    }
}
