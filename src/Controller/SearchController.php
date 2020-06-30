<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Search;
use App\Form\SearchType;
use App\Repository\ProductRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SearchController
 * @package App\Controller
 */
class SearchController extends AbstractController
{

    /**
     * @var Search
     */
    private $search;

    /**
     * SearchController constructor.
     */
    public function __construct()
    {
        $this->search = new Search();
    }

    /**
     * @Route("/recherche/{page<\d+>?1}", name="product_search")
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @param ProductRepository $productRepository
     * @param int $page
     * @return Response
     */
    public function productSearch(Request $request, PaginatorInterface $paginator, ProductRepository $productRepository, int $page): Response
    {
        $form = $this->createSearchForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $products = $paginator->paginate(
                $productRepository->findByWordQuery($this->search),
                $page,
                Product::ITEM_ON_PAGE
            );
            return $this->render('search/result_product.html.twig', [
                'products' => $products,
                'search' => $this->search
            ]);
        } else {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    /**
     * @return FormInterface
     */
    private function createSearchForm(): FormInterface
    {
        return $this->createForm(SearchType::class, $this->search, [
            'action' => $this->generateUrl('product_search'),
            'method' => 'GET',
        ]);
    }

    /**
     * @return Response
     */
    public function createView(): Response
    {
        return $this->render('search/form/_search_form.html.twig', [
            'form' => $this->createSearchForm()->createView(),
        ]);
    }
}
