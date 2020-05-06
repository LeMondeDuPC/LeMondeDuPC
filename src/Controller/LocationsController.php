<?php

namespace App\Controller;

use App\Entity\Locations;
use App\Form\LocationsType;
use App\Repository\LocationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/locations")
 */
class LocationsController extends AbstractController
{
    /**
     * @Route("/", name="locations_index", methods={"GET"})
     */
    public function index(LocationsRepository $locationsRepository): Response
    {
        return $this->render('locations/index.html.twig', [
            'locations' => $locationsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="locations_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if (!$this->isGranted('ACCESS_MANAGE_LOCATIONS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        $location = new Locations();
        $form = $this->createForm(LocationsType::class, $location);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($location);
            $entityManager->flush();

            return $this->redirectToRoute('locations_index');
        }

        return $this->render('locations/new.html.twig', [
            'location' => $location,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="locations_show", methods={"GET"})
     */
    public function show(Locations $location): Response
    {
        return $this->render('locations/show.html.twig', [
            'location' => $location,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="locations_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Locations $location): Response
    {
        if (!$this->isGranted('ACCESS_MANAGE_LOCATIONS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        $form = $this->createForm(LocationsType::class, $location);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('locations_index');
        }

        return $this->render('locations/edit.html.twig', [
            'location' => $location,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="locations_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Locations $location): Response
    {
        if (!$this->isGranted('ACCESS_MANAGE_LOCATIONS')) {
            throw $this->createAccessDeniedException('No access!');
        }
        if ($this->isCsrfTokenValid('delete' . $location->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($location);
            $entityManager->flush();
        }

        return $this->redirectToRoute('locations_index');
    }
}
