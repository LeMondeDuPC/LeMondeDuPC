<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Product;
use App\Form\ContactType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Service\SenderService;
use Cocur\Slugify\SlugifyInterface;
use ReCaptcha\ReCaptcha;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Packages;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PageController
 * @package App\Controller
 */
class PageController extends AbstractController
{

    /**
     * @Route("rss.xml", name="page_rss", defaults={"_format"="xml"})
     * @param Request $request
     * @param ProductRepository $productRepository
     * @param SlugifyInterface $slugify
     * @param Packages $assetPackage
     * @return Response
     */
    public function rss(Request $request, ProductRepository $productRepository, SlugifyInterface $slugify, Packages $assetPackage): Response
    {
        $hostname = $request->getSchemeAndHttpHost();
        $items = [];
        foreach ($productRepository->findBy(['validated' => Product::VALIDATED], ['timePublication' => 'DESC']) as $product) {
            $time = ($product->getTimeUpdate() === null) ? $product->getTimePublication() : $product->getTimeUpdate();
            $items[] = [
                'title' => $product->getTitle(),
                'description' => $product->getDescription(),
                'link' => $hostname . $this->generateUrl('product_show', [
                        'id' => $product->getId(),
                        'slug' => $slugify->slugify($product->getTitle()),
                    ]),
                'pubDate' => $time->format('D, d M Y'),
                'category' => $product->getCategory()->getName(),
                'image' => [
                    'url' => $hostname . $assetPackage->getUrl($product->getFile()->getWebPath()),
                    'link' => $hostname . $this->generateUrl('product_show', [
                            'id' => $product->getId(),
                            'slug' => $slugify->slugify($product->getTitle()),
                        ]),
                    'title' => $product->getTitle(),
                ]
            ];
        }

        $response = new Response(
            $this->renderView('page/rss.html.twig', [
                'hostname' => $hostname,
                'items' => $items,
            ]),
            200
        );

        $response->headers->set('Content-Type', 'text/xml');

        return $response;
    }

    /**
     * @Route("robots.txt", name="page_robots", defaults={"_format"="txt"})
     * @param Request $request
     * @return Response
     */
    public function robots(Request $request): Response
    {
        $hostname = $request->getSchemeAndHttpHost();
        $robots = [];
        $robots[] = [
            'agent' => '*',
            'disallow' => [
                '',
            ],
        ];
        $response = new Response(
            $this->renderView('page/robots.html.twig', [
                'robots' => $robots,
                'sitemap' => $hostname . $this->generateUrl('page_sitemap'),
            ]),
            200
        );

        $response->headers->set('Content-Type', 'text/plain');

        return $response;
    }

    /**
     * @Route("sitemap.xml", name="page_sitemap", defaults={"_format"="xml"})
     * @param Request $request
     * @param ProductRepository $productRepository
     * @param CategoryRepository $categoryRepository
     * @param SlugifyInterface $slugify
     * @param Packages $assetPackage
     * @return Response
     */
    public function sitemap(Request $request, ProductRepository $productRepository, CategoryRepository $categoryRepository, SlugifyInterface $slugify, Packages $assetPackage): Response
    {
        $hostname = $request->getSchemeAndHttpHost();
        $urls = [];

        $urls[] = ['loc' => $hostname . $this->generateUrl('page_about')];
        $urls[] = ['loc' => $hostname . $this->generateUrl('page_contact')];
        $urls[] = ['loc' => $hostname . $this->generateUrl('user_login')];
        $urls[] = ['loc' => $hostname . $this->generateUrl('user_new')];

        foreach ($productRepository->findBy(['validated' => Product::VALIDATED], ['timePublication' => 'DESC']) as $product) {
            $time = ($product->getTimeUpdate() === null) ? $product->getTimePublication() : $product->getTimeUpdate();
            $urls[] = [
                'loc' => $hostname . $this->generateUrl('product_show', [
                        'id' => $product->getId(),
                        'slug' => $slugify->slugify($product->getTitle()),
                    ]),
                'lastmod' => $time->format('Y-m-d'),
                'image' => [
                    'loc' => $hostname . $assetPackage->getUrl($product->getFile()->getWebPath()),
                    'title' => $product->getTitle(),
                ]
            ];
        }

        foreach ($categoryRepository->findAll() as $category) {
            $urls[] = ['loc' => $hostname . $this->generateUrl('category_show', [
                        'id' => $category->getId(),
                        'name' => $slugify->slugify($category->getName()),
                    ]
                )];
        }
        $response = new Response(
            $this->renderView('page/sitemap.html.twig', [
                'urls' => $urls,
            ]),
            200
        );

        $response->headers->set('Content-Type', 'text/xml');

        return $response;

    }

    /**
     * @Route("/a-propos", name="page_about"): Response
     * @return Response
     */
    public function about(): Response
    {
        return $this->render('page/about.html.twig');
    }

    /**
     * @Route("/contact", name="page_contact")
     * @param Request $request
     * @param SenderService $senderService
     * @param ReCaptcha $ReCaptcha
     * @return Response
     */
    public function contact(Request $request, SenderService $senderService, ReCaptcha $ReCaptcha): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $response = $ReCaptcha->verify($_POST['g-recaptcha-response']);
            if ($response->isSuccess()) {
                $senderService->contactEmail($contact);
                $this->addFlash('success', 'Votre message a bien été envoyé !');
            } else {
                $this->addFlash('danger', 'Veuillez valider le ReCaptcha');
            }
        }
        return $this->render('page/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
