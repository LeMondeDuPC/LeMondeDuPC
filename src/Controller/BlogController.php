<?php

namespace App\Controller;

use App\Repository\InteractionsRepository;
use App\Repository\PostsRepository;
use App\Repository\TagsRepository;
use App\Repository\UsersRepository;
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
    public function __construct(
        PostsRepository $postsRepository,
        UsersRepository $usersRepository,
        InteractionsRepository $interactionsRepository,
        TagsRepository $tagsRepository
    ) {
        $this->postsRepository = $postsRepository;
        $this->usersRepository = $usersRepository;
        $this->interactionsRepository = $interactionsRepository;
        $this->tagsRepository = $tagsRepository;
    }

    /**
     *
     * @Route(
     *     "/{tag<\w+>?all}",
     *     name="blog_posts"
     * )
     * @param $tag null
     * @param $target null
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPosts($tag, $target = null)
    {
        $target = ($target!=null)? $target : '/blog/posts.html.twig';
        $array = [];
        $posts = $this->postsRepository->findAll();
        foreach ($posts as $post) {
            array_push($array, [
                'interactions' => $this->interactionsRepository->findBy(['postId' => $post->getId()]),
                'user' => $this->usersRepository->find($post->getAuthorId()),
                'tags' => $this->tagsRepository->findBy(['id' => $post->getTagsIds()]),
                'post' => $this->postsRepository->find($post->getId())
            ]);
        }
        dump($array);
        return $this->render($target, ['posts' => $array]);
    }

    /**
     * @Route(
     *     "/{id<\d+>}-{slug}",
     *     name="blog_post"
     * )
     * @Route(
     *     {"fr": "/a-propos"},
     *     name="blog_about"
     * )
     * @param $id int id of the post
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPost($id = null)
    {
        if ($id !== null) {
            return $this->render('/blog/show.html.twig',
                [
                    'post' => $post = $this->postsRepository->find($id),
                    'tags' => $this->tagsRepository->findBy(['id' => $post->getTagsIds()]),
                    'interactions' => $this->interactionsRepository->findBy(['postId' => $id]),
                    'user' => $this->usersRepository->find($post->getAuthorId())
                ]
            );
        } else {
            return $this->render('/blog/about.html.twig');
        }

    }


}