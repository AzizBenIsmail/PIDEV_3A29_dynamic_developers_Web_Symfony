<?php

namespace App\Controller;

use App\Entity\ReservationExcursion;
use App\Form\ReservationExcursionType;
use App\Repository\ReservationExcursionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservation/excursion")
 */
class ReservationExcursionController extends AbstractController
{
    /**
     * @Route("/", name="reservation_excursion_index", methods={"GET"})
     */
    public function index(ReservationExcursionRepository $reservationExcursionRepository): Response
    {
        return $this->render('reservation_excursion/index.html.twig', [
            'reservation_excursions' => $reservationExcursionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reservation_excursion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservationExcursion = new ReservationExcursion();
        $form = $this->createForm(ReservationExcursionType::class, $reservationExcursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationExcursion);
            $entityManager->flush();

            return $this->redirectToRoute('reservation_excursion_index');
        }

        return $this->render('reservation_excursion/new.html.twig', [
            'reservation_excursion' => $reservationExcursion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_excursion_show", methods={"GET"})
     */
    public function show(ReservationExcursion $reservationExcursion): Response
    {
        return $this->render('reservation_excursion/show.html.twig', [
            'reservation_excursion' => $reservationExcursion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservation_excursion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ReservationExcursion $reservationExcursion): Response
    {
        $form = $this->createForm(ReservationExcursionType::class, $reservationExcursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_excursion_index');
        }

        return $this->render('reservation_excursion/edit.html.twig', [
            'reservation_excursion' => $reservationExcursion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_excursion_delete", methods={"POST"})
     */
    public function delete(Request $request, ReservationExcursion $reservationExcursion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationExcursion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationExcursion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_excursion_index');
    }
}
