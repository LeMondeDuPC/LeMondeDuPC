<?php

namespace App\Controller;

use App\Entity\Search;
use App\Form\SearchType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;

class SearchController extends AbstractController
{
    /**
     * @Route("/search/{page<\d+>?1}", name="product_search")
     * @param Request $request
     * @param int $page
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function productSearch(Request $request, PaginatorInterface $paginator, int $page = 1, ProductRepository $productRepository)
    {
        $search = new Search();
        $form = $this->createForm(SearchType::class, $search, [
            'action' => $this->generateUrl('product_search'),
            'method' => 'GET',
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $products = $paginator->paginate(
                $productRepository->findByWordQuery($search),
                $page,
                2
            );
            return $this->render('search/result_product.html.twig', [
                'products' => $products,
                'search' => $search
            ]);
        }
        return $this->render('search/form/_search_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
