<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Cocur\Slugify\Slugify;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CategoryController
 * @package App\Controller
 */
class CategoryController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * LocationsController constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return Response
     */
    public function _index()
    {
        return $this->render('category/_index.html.twig', [
            'categories' => $this->categoryRepository->findAll()
        ]);
    }

    /**
     * @Route("/categorie/{id}-{name}/{page<\d+>?1}", name="category_show", methods={"GET"})
     * @param Category $category
     * @param int $page
     * @param PaginatorInterface $paginator
     * @param ProductRepository $productRepository
     * @param string|null $name
     * @return Response
     */
    public function show(Category $category, int $page, PaginatorInterface $paginator, ProductRepository $productRepository, string $name = null): Response
    {
        $categorySlug = (new Slugify())->slugify($category->getName());
        if ($name !== $categorySlug) {
            return $this->redirectToRoute('category_show', [
                'id' => $category->getId(),
                'name' => $categorySlug,
            ], 308);
        }
        $products = $paginator->paginate(
            $productRepository->findBy(['category' => $category]),
            $page,
            Product::ITEM_ON_PAGE
        );
        return $this->render('category/show.html.twig', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    /**
     * @Route("/admin/categories", name="category_manage", methods={"GET"})
     * @return Response
     */
    public function manage(): Response
    {
        if ($this->isGranted('ROLE_MANAGE_CATEGORIES')) {
            return $this->render('category/manage.html.twig', [
                'categories' => $this->categoryRepository->findAll(),
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @Route("/admin/categorie/nouveau", name="category_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        if ($this->isGranted('ROLE_MANAGE_CATEGORIES')) {
            $category = new Category();
            $form = $this->createForm(CategoryType::class, $category);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($category);
                $entityManager->flush();
                $this->addFlash('success', 'La catégorie a bien été ajouté !');
                return $this->redirectToRoute('category_manage');
            }
            return $this->render('category/new.html.twig', [
                'category' => $category,
                'form' => $form->createView(),
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @Route("/admin/categorie/{id}/modifier", name="category_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Category $category
     * @return Response
     */
    public function edit(Request $request, Category $category): Response
    {
        if ($this->isGranted('ROLE_MANAGE_CATEGORIES')) {
            $form = $this->createForm(CategoryType::class, $category);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                $this->addFlash('success', 'La catégorie a bien été modifié !');
                return $this->redirectToRoute('category_manage');
            }
            return $this->render('category/edit.html.twig', [
                'category' => $category,
                'form' => $form->createView(),
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @Route("/admin/categorie/{id}", name="category_delete", methods={"DELETE"})
     * @param Request $request
     * @param Category $category
     * @return Response
     */
    public function delete(Request $request, Category $category): Response
    {
        if ($this->isGranted('ROLE_MANAGE_CATEGORIES')) {
            if ($this->isCsrfTokenValid('delete' . $category->getId(), $request->request->get('_token'))) {
                $products = $category->getProducts();
                foreach ($products as $product) {
                    $category->removeProduct($product);
                }
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($category);
                $entityManager->flush();
                $this->addFlash('success', 'La catégorie a bien été supprimé !');
            }
            return $this->redirectToRoute('category_manage');
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }
}
