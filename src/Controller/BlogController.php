<?php

namespace App\Controller;

use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class BlogController
 * @package App\Controller
 */
class BlogController extends AbstractController
{

    /**
     * @var PostsRepository
     */
    private $postsRepository;

    /**
     * BlogController constructor.
     * @param PostsRepository $postsRepository
     */
    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    /**
     * @Route(
     *     "/",
     *     name="blog_index"
     * )
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $posts = $this->postsRepository->findValidatedPosts();
        return $this->render('/blog/filter.html.twig',
            [
                'posts' => $posts
            ]
        );
    }

    /**
     * @Route(
     *     {"fr": "/a-propos", "/about"},
     *     name="blog_about"
     * )
     * @Route(
     *     "/{id<\d+>}-{slug}",
     *     name="blog_post"
     * )
     * @param $id int
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPost($id = null)
    {
        if ($id === null) {
            return $this->render('/blog/about.html.twig');
        } else {
            $post = $this->postsRepository->findValidatedPost($id);
            return $this->render('/blog/show.html.twig',
                [
                    'post' => $post
                ]
            );
        }

    }


    /**
     * @Route(
     *     {"fr": "/categorie/{tag}", "/tag/{tag}"},
     *     name="blog_tag"
     * )
     * @param $tag string
     * @param $target null
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPosts($tag, $target = null)
    {
        $posts = $this->postsRepository->findValidatedPosts($tag);
        if ($target === null) {
            return $this->render('/blog/filter.html.twig',
                [
                    'posts' => $posts
                ]
            );
        } else {
            return $this->render('/libs/_asidePosts.html.twig',
                [
                    'posts' => $posts
                ]
            );
        }
    }

}