<?php

namespace App\Controller;

use App\Entity\File;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use DateTime;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class PostsController
 * @package App\Controller
 */
class ProductController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * PostsController constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @Route("/{page<\d+>?1}", name="product_index", methods={"GET"})
     * @param int $page
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(int $page, PaginatorInterface $paginator): Response
    {
        $products = $paginator->paginate(
            $this->productRepository->findBy(['validated' => Product::VALIDATED], ['timePublication' => 'DESC']),
            $page,
            2
        );
        return $this->render('product/index.html.twig', [
            'products' => $products
        ]);

    }

    /**
     * @Route("/{id}-{slug}", name="product_show", methods={"GET"})
     * @param Product $product
     * @return Response
     */
    public function show(Product $product): Response
    {
        $product = $this->productRepository->findOneBy(['id' => $product->getId(), 'validated' => Product::VALIDATED]);
        if ($product !== null) {
            return $this->render('product/show.html.twig', [
                'product' => $product
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @Route("/products/search/{page<\d+>?1}", name="product_search")
     * @param Request $request
     * @param int $page
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function search(Request $request, int $page, PaginatorInterface $paginator)
    {
        if ($request->isMethod('POST') and $request->request->has('q')) {
            $search = $request->request->get('q');
            $products = $paginator->paginate(
                $this->productRepository->findByWord($search, Product::VALIDATED),
                $page,
                2
            );
            return $this->render('product/result.html.twig', [
                'products' => $products,
                'search' => $search
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @Route("/admin/products", name="product_manage", methods={"GET"})
     * @return Response
     */
    public function manage(): Response
    {
        if ($this->isGranted('ROLE_MANAGE_PRODUCTS')) {
            return $this->render('product/manage.html.twig', [
                'products' => $this->productRepository->findBy([], ['timePublication' => 'DESC']),
            ]);
        } elseif ($this->isGranted('ROLE_CREATE_POSTS')) {
            return $this->render('product/manage.html.twig', [
                'products' => $this->getUser()->getProducts(),
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @Route("/admin/product/nouveau", name="product_new", methods={"GET","POST"})
     * @param Request $request
     * @param Security $security
     * @return Response
     */
    public function new(Request $request, Security $security): Response
    {
        if ($this->isGranted('ROLE_CREATE_PRODUCTS')) {
            $product = new Product();
            $file = new File();
            $form = $this->createForm(ProductType::class, $product, ['security' => $security]);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $product->setUser($this->getUser());
                $product->setTimePublication(new DateTime());
                if (!$form->has('validated')) {
                    $product->setValidated(false);
                }
                $file->setDescription($form->get('file')->getData());
                $file->setProduct($product);
                $file->setFile($form->get('file')->getData());
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($product);
                $entityManager->persist($file);
                $entityManager->flush();
                if ($this->isGranted('ROLE_MANAGE_PRODUCTS')) {
                    $this->addFlash('success', 'Votre article a bien été posté !');
                } else {
                    $this->addFlash('success', 'Votre article a bien été envoyé, en attente de validation...');
                }
                return $this->redirectToRoute('product_index');
            }

            return $this->render('product/new.html.twig', [
                'product' => $product,
                'form' => $form->createView(),
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @Route("/admin/product/{id}/modifier", name="product_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Product $product
     * @param Security $security
     * @return Response
     */
    public function edit(Request $request, Product $product, Security $security): Response
    {
        if ((($this->getUser() !== null and $product->getUser() !== null) ? ($this->getUser()->getId() === $product->getUser()->getId()) : false) or $this->isGranted('ROLE_MANAGE_PRODUCTS')) {
            $form = $this->createForm(ProductType::class, $product, ['security' => $security]);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                if (!$form->get('file')->isEmpty() and !$form->get('file_description')->isEmpty()) {
                    $file = $product->getFile();
                    $file->setDescription($form->get('file_description')->getData());
                    $file->setProduct($product);
                    $file->setFile($form->get('file')->getData());
                    $entityManager->persist($file);
                }
                $entityManager->flush();
                $this->addFlash('success', 'Votre article a bien été modifié !');
                return $this->redirectToRoute('product_manage');
            }
            return $this->render('product/edit.html.twig', [
                'product' => $product,
                'form' => $form->createView(),
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @Route("/admin/product/{id}", name="product_delete", methods={"DELETE"})
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function delete(Request $request, Product $product): Response
    {
        if ((($this->getUser() !== null and $product->getUser() !== null) ? ($this->getUser()->getId() === $product->getUser()->getId()) : false) or $this->isGranted('ROLE_MANAGE_PRODUCTS')) {
            if ($this->isCsrfTokenValid('delete' . $product->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($product);
                $entityManager->flush();
                $this->addFlash('success', 'Votre article a bien été supprimé !');
            }

            return $this->redirectToRoute('product_manage');
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }
}
