<?php

namespace App\Controller;


use App\Repository\ClientRepository;
use App\Repository\CommentaireRepository;
use App\Repository\ExcursionRepository;
use App\Repository\ReservationVoyageRepository;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    /**
     * @Route("/back", name="back")
     */
    public function index(UserRepository $clientRepository ,VoyageRepository $voyageRepository,RestaurantRepository $restaurantRepository,
                 CommentaireRepository $commentaireRepository,ExcursionRepository $excursionRepository,ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('Back/Back.html.twig', [
            'clients' => $clientRepository->findAll(),'voyages' => $voyageRepository->findAll(),'restaurants' => $restaurantRepository->findAll(),
            'commentaires' => $commentaireRepository->findAll(),'excursions' => $excursionRepository->findAll(),'reservation_voyages' => $reservationVoyageRepository->findAll(),
        ]);

    }
}
