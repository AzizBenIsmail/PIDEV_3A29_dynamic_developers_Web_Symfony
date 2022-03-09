<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Repository\CommentaireRepository;
use App\Repository\ExcursionRepository;
use App\Repository\ReservationRestaurantRepository;
use App\Repository\ReservationVoyageRepository;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use App\Repository\VoyageRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(UserRepository $clientRepository ,VoyageRepository $voyageRepository,RestaurantRepository $restaurantRepository,
                          CommentaireRepository $commentaireRepository,ExcursionRepository $excursionRepository,ReservationVoyageRepository $reservationVoyageRepository
   , Request $request, PaginatorInterface $paginator,ReservationRestaurantRepository $reservationRestaurantRepository): Response
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $donnees = $this->getDoctrine()->getRepository(Voyage::class)->findAll();
        $voyages = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );

        return $this->render('Front/front.html.twig', [
            'clients' => $clientRepository->findAll(),'voyages' => $voyages,'restaurants' => $restaurantRepository->findAll(),
            'commentaires' => $commentaireRepository->findAll(),'excursions' => $excursionRepository->findAll(),'reservation_restaurants' => $reservationRestaurantRepository->findAll(),'reservation_voyages' => $reservationVoyageRepository->findAll(),
        ]);
    }
}
