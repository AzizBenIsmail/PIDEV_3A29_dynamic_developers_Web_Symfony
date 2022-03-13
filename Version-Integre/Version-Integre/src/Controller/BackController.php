<?php

namespace App\Controller;


use App\Repository\ClientRepository;
use App\Repository\CommentaireRepository;
use App\Repository\ExcursionRepository;
use App\Repository\PostRepository;
use App\Repository\ReclamationRepository;
use App\Repository\ReservationExcursionRepository;
use App\Repository\ReservationRestaurantRepository;
use App\Repository\ReservationVoyageRepository;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class BackController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/back", name="back")
     */
    public function index(UserRepository $clientRepository ,
                          ReservationRestaurantRepository $reservationRestaurantRepository,
                          VoyageRepository $voyageRepository,
                          RestaurantRepository $restaurantRepository,
                 CommentaireRepository $commentaireRepository,
                          ExcursionRepository $excursionRepository,
                          ReservationVoyageRepository $reservationVoyageRepository,
                          ReclamationRepository $reclamationRepository,
                          ReservationExcursionRepository $reservationExcursionRepository,
                          PostRepository $postRepository): Response
    { $reclamations=$reclamationRepository->findAll();
        return $this->render('Back/Back.html.twig', [
            'clients' => $clientRepository->findAll(),
            'voyages' => $voyageRepository->findAll(),
            'restaurants' => $restaurantRepository->findAll(),
            'reservation_restaurants' => $reservationRestaurantRepository->findAll(),
            'commentaires' => $commentaireRepository->findAll(),
            'excursions' => $excursionRepository->findAll(),
            'reservation_voyages' => $reservationVoyageRepository->findAll(),
            'reclamations' => $reclamations,
            'reservation_excursions' => $reservationExcursionRepository->findAll(),
             'posts'=>$postRepository->findAll(),
        ]);

    }
}
