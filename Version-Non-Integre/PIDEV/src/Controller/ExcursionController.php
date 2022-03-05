<?php

namespace App\Controller;

use App\Entity\Excursion;
use App\Form\ExcursionType;
use App\Repository\ExcursionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/excursion")
 */
class ExcursionController extends AbstractController
{
    /**
     * @Route("/", name="excursion_index", methods={"GET"})
     */
    public function index(ExcursionRepository $excursionRepository): Response
    {
        return $this->render('excursion/index.html.twig', [
            'excursions' => $excursionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="excursion_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $excursion = new Excursion();
        $form = $this->createForm(ExcursionType::class, $excursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($excursion);
            $entityManager->flush();

            return $this->redirectToRoute('excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('excursion/new.html.twig', [
            'excursion' => $excursion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="excursion_show", methods={"GET"})
     */
    public function show(Excursion $excursion): Response
    {
        return $this->render('excursion/show.html.twig', [
            'excursion' => $excursion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="excursion_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Excursion $excursion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExcursionType::class, $excursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('excursion/edit.html.twig', [
            'excursion' => $excursion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="excursion_delete", methods={"POST"})
     */
    public function delete(Request $request, Excursion $excursion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$excursion->getId(), $request->request->get('_token'))) {
            $entityManager->remove($excursion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('excursion_index', [], Response::HTTP_SEE_OTHER);
    }
}
