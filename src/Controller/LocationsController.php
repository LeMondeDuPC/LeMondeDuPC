<?php

namespace App\Controller;

use App\Entity\Locations;
use App\Form\LocationsType;
use App\Repository\LocationsRepository;
use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LocationsController
 * @package App\Controller
 */
class LocationsController extends AbstractController
{

    /**
     * @var LocationsRepository
     */
    private $_locationsRepository;

    /**
     * LocationsController constructor.
     * @param LocationsRepository $locationsRepository
     */
    public function __construct(LocationsRepository $locationsRepository)
    {
        $this->_locationsRepository = $locationsRepository;
    }

    /**
     * @return Response
     */
    public function _index()
    {
        return $this->render('locations/_index.html.twig', [
            'locations' => $this->_locationsRepository->findAll()
        ]);
    }

    /**
     * @Route("/categorie/{id}-{name}", name="locations_show", methods={"GET"})
     * @param Locations $location
     * @param PostsRepository $postsRepository
     * @return Response
     */
    public function show(Locations $location, PostsRepository $postsRepository): Response
    {
        return $this->render('locations/show.html.twig', [
            'location' => $location,
        ]);
    }

    /**
     * @Route("/admin/categories", name="locations_manage", methods={"GET"})
     * @return Response
     */
    public function manage(): Response
    {
        if ($this->isGranted('ROLE_MANAGE_LOCATIONS')) {
            return $this->render('locations/manage.html.twig', [
                'locations' => $this->_locationsRepository->findAll(),
            ]);
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }

    /**
     * @Route("/admin/categorie/nouveau", name="locations_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        if ($this->isGranted('ROLE_MANAGE_LOCATIONS')) {
            $location = new Locations();
            $form = $this->createForm(LocationsType::class, $location);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($location);
                $entityManager->flush();
                $this->addFlash('success', 'La catégorie a bien été ajouté !');
                return $this->redirectToRoute('locations_manage');
            }
            return $this->render('locations/new.html.twig', [
                'location' => $location,
                'form' => $form->createView(),
            ]);
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }

    /**
     * @Route("/admin/categorie/{id}/modifier", name="locations_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Locations $location
     * @return Response
     */
    public function edit(Request $request, Locations $location): Response
    {
        if ($this->isGranted('ROLE_MANAGE_LOCATIONS')) {
            $form = $this->createForm(LocationsType::class, $location);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                $this->addFlash('success', 'La catégorie a bien été modifié !');
                return $this->redirectToRoute('locations_manage');
            }
            return $this->render('locations/edit.html.twig', [
                'location' => $location,
                'form' => $form->createView(),
            ]);
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }

    /**
     * @Route("/admin/categorie/{id}", name="locations_delete", methods={"DELETE"})
     * @param Request $request
     * @param Locations $location
     * @return Response
     */
    public function delete(Request $request, Locations $location): Response
    {
        if ($this->isGranted('ROLE_MANAGE_LOCATIONS')) {
            if ($this->isCsrfTokenValid('delete' . $location->getId(), $request->request->get('_token'))) {
                $posts = $location->getPosts();
                foreach ($posts as $post) {
                    $location->removePostLink($post);
                }
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($location);
                $entityManager->flush();
                $this->addFlash('success', 'La catégorie a bien été supprimé !');
            }
            return $this->redirectToRoute('locations_manage');
        } else {
            throw $this->createAccessDeniedException('No access!');
        }
    }
}
