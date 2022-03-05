<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('Front/front.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu(): Response
    {
        return $this->render('Front/Menu.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
