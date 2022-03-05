<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Repository\ClientRepository;
use App\Repository\CommentaireRepository;
use App\Repository\ExcursionRepository;
use App\Repository\RestaurantRepository;
use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    /**
     * @Route("/back", name="back")
     */
    public function index(VoyageRepository $voyageRepository,RestaurantRepository $restaurantRepository,
                          ClientRepository $clientRepository, CommentaireRepository $commentaireRepository,ExcursionRepository $excursionRepository): Response
    {
        return $this->render('Back/Back.html.twig', [
            'voyages' => $voyageRepository->findAll(),'restaurants' => $restaurantRepository->findAll(),'clients' => $clientRepository->findAll(),
            'commentaires' => $commentaireRepository->findAll(),'excursions' => $excursionRepository->findAll(),
        ]);

    }
}
