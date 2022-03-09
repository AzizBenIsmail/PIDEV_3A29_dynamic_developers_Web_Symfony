<?php

namespace App\Controller;

use App\Entity\ReservationExcursion;
use App\Form\ReservationExcursionType;
use App\Repository\ExcursionRepository;
use App\Repository\ReservationExcursionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
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
    public function index(ReservationExcursionRepository $reservationExcursionRepository ,UserRepository $userRepository)
    {
        $user=$this->getUser()->getUsername();
        $client=$userRepository->findOneBy(array('UserName' =>$user),null,null,0);
        return $this->render('excursion/show.html.twig', [
            'reservations' => $reservationExcursionRepository->findby(array('Client' =>$client->getId()),null,null,0),
        ]);
    }

    /**
     * @Route("/new", name="reservation_excursion_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository
        ,ExcursionRepository $excursionRepository, PaginatorInterface $paginator): Response
    {
        $reservationExcursion = new ReservationExcursion();
        $form = $this->createForm(ReservationExcursionType::class, $reservationExcursion);
        $form->handleRequest($request);
        $user=$this->getUser()->getUsername();
        $client=$userRepository->findOneBy(array('UserName' =>$user),null,1,0);
        $reservationExcursion->setClient($client);
        $reservationExcursion->setDateReservationExcursion(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationExcursion);
            $entityManager->flush();

            return $this->redirectToRoute('reservation_excursion_index', [], Response::HTTP_SEE_OTHER);
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

        return $this->render('reservation_excursion/showReservation.html.twig', [
            'reservation_excursion' => $reservationExcursion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservation_excursion_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReservationExcursion $reservationExcursion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationExcursionType::class, $reservationExcursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('reservation_excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_excursion/edit.html.twig', [
            'reservation_excursion' => $reservationExcursion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_excursion_delete", methods={"POST"})
     */
    public function delete($id,ReservationExcursionRepository $reservationExcursionRepository)
    {

        $r=$reservationExcursionRepository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($r);
        $em->flush();

        return $this->redirectToRoute('reservation_excursion_index');


    }
}
