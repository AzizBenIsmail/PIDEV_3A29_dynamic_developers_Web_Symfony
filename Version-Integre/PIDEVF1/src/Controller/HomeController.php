<?php

namespace App\Controller;

use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(VoyageRepository $voyageRepository): Response
    {
        return $this->render('Front/front.html.twig', [
            'controller_name' => 'HomeController','voyages' => $voyageRepository->findAll(),
        ]);
    }
}
