<?php

namespace App\Controller;

use App\Repository\InteractionsRepository;
use App\Repository\PartnersRepository;
use App\Repository\PostsRepository;
use App\Repository\TagsRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminController
 * @package App\Controller
 */
class AdminController extends AbstractController
{

    /**
     * @var PostsRepository
     */
    private $postsRepository;
    /**
     * @var InteractionsRepository
     */
    private $interactionsRepository;
    /**
     * @var TagsRepository
     */
    private $tagsRepository;
    /**
     * @var PartnersRepository
     */
    private $partnersRepository;
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    /**
     * AdminController constructor.
     * @param PostsRepository $postsRepository
     * @param InteractionsRepository $interactionsRepository
     * @param TagsRepository $tagsRepository
     * @param PartnersRepository $partnersRepository
     * @param UsersRepository $usersRepository
     */
    public function __construct(
        PostsRepository $postsRepository,
        InteractionsRepository $interactionsRepository,
        TagsRepository $tagsRepository,
        PartnersRepository $partnersRepository,
        UsersRepository $usersRepository
    ) {
        $this->postsRepository = $postsRepository;
        $this->interactionsRepository = $interactionsRepository;
        $this->tagsRepository = $tagsRepository;
        $this->partnersRepository = $partnersRepository;
        $this->usersRepository = $usersRepository;
    }


    /**
     * @Route(
     *     "/administration",
     *      name="admin_index"
     * )
     */
    public function index()
    {

    }

    /**
     * @Route(
     *     {"fr": "/admin/liste/{data}", "/admin/list/{data}"},
     *      name="admin_lists"
     * )
     * @param $data string
     */
    public function showLists($data)
    {

    }

    /**
     * @Route(
     *     {"fr": "/admin/ajouter/{type}", "/admin/add/{type}"},
     *      name="admin_add"
     * )
     * @param $type string
     */
    public function add($type)
    {

    }

    /**
     * @Route(
     *     {"fr": "/admin/modifier/{type}-{id}", "/admin/edit/{type}-{id}"},
     *      name="admin_edit"
     * )
     * @param $type string
     * @param $id int
     */
    public function editData($type, $id)
    {

    }


}