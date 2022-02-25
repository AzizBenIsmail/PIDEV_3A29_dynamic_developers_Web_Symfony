<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Form\SearchVoyageType;
use App\Form\VoyageType;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/voyage")
 */
class VoyageController extends AbstractController
{
    /**
     * @Route("/", name="voyage_index", methods={"GET"})
     */
    public function index(VoyageRepository $voyageRepository): Response
    {
        return $this->render('voyage/index.html.twig', [
            'voyages' => $voyageRepository->findAll(),
        ]);
    }
    /**
     * @Route("/order_By_Dest", name="order_By_Dest" ,methods={"GET"})
     */
    public function order_By_Dest(Request $request,VoyageRepository $voyageRepository): Response
    {
//list of students order By Dest
        $VoyageByDest = $voyageRepository->orderByDest();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
            ]);

    }
    /**
     * @Route("/order_By_Nom", name="order_By_Nom" ,methods={"GET"})
     */
    public function order_By_Nom(Request $request,VoyageRepository $voyageRepository): Response
    {
//list of students order By Dest
        $VoyageByNom = $voyageRepository->order_By_Nom();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByNom,
        ]);

    }
    /**
     * @Route("/order_By_Date", name="order_By_Date" ,methods={"GET"})
     */
    public function order_By_Date(Request $request,VoyageRepository $voyageRepository): Response
    {
//list of students order By Dest
        $VoyageByDate = $voyageRepository->order_By_Date();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDate,
        ]);

    }
    /**
     * @Route("/order_By_Prix", name="order_By_Prix" ,methods={"GET"})
     */
    public function order_By_Prix(Request $request,VoyageRepository $voyageRepository): Response
    {
//list of students order By Dest
        $VoyageByPrix = $voyageRepository->order_By_Prix();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByPrix,
        ]);
    }

        /**
         * @Route("/Continent_Afrique", name="Continent_Afrique" ,methods={"GET"})
         */
        public function Continent_Afrique(Request $request,VoyageRepository $voyageRepository): Response
    {
        $VoyageByDest = $voyageRepository->searchContinent_Afrique();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
        ]);
    }

    /**
     * @Route("/Continent_Europe", name="Continent_Europe" ,methods={"GET"})
     */
    public function Continent_Europe(Request $request,VoyageRepository $voyageRepository): Response
    {
        $VoyageByDest = $voyageRepository->searchContinent_Europe();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
        ]);
    }

    /**
     * @Route("/Continent_Asie", name="Continent_Asie" ,methods={"GET"})
     */
    public function Continent_Asie(Request $request,VoyageRepository $voyageRepository): Response
    {
        $VoyageByDest = $voyageRepository->searchContinent_Asie();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
        ]);
    }

    /**
     * @Route("/Continent_Amerique", name="Continent_Amerique" ,methods={"GET"})
     */
    public function Continent_Amerique(Request $request,VoyageRepository $voyageRepository): Response
    {
        $VoyageByDest = $voyageRepository->searchContinent_Amerique();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
        ]);
    }

//    //All of Student
//$voyage= $voyageRepository->findAll();
//    //search
//$searchForm = $this->createForm(SearchVoyageType::class);
//$searchForm->add("Recherche",SubmitType::class);
//$searchForm->handleRequest($request);
//if ($searchForm->isSubmitted()) {
//$Destination = $searchForm['Destination']->getData();
//$resultOfSearch = $voyageRepository->searchDest($Destination);
//return $this->render('voyage/searchVoyage.html.twig', array(
//"resultOfSearch" => $resultOfSearch,
//"searchVoyage" => $searchForm->createView()));
//}
    /**
     * @Route("/new", name="voyage_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $voyage = new Voyage();
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($voyage);
            $entityManager->flush();
            $this->addFlash('message','le Voyage a bien ete ajouter ');
            return $this->redirectToRoute('voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('voyage/new.html.twig', [
            'voyage' => $voyage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="voyage_show", methods={"GET"})
     */
    public function show(Voyage $voyage): Response
    {
        return $this->render('voyage/show.html.twig', [
            'voyage' => $voyage,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="voyage_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Voyage $voyage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('voyage/edit.html.twig', [
            'voyage' => $voyage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="voyage_delete", methods={"POST"})
     */
    public function delete(Request $request, Voyage $voyage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$voyage->getId(), $request->request->get('_token'))) {
            $entityManager->remove($voyage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('voyage_index', [], Response::HTTP_SEE_OTHER);
    }



}
