<?php

namespace App\Controller;

use App\Entity\Excursion;

use App\Entity\ReservationExcursion;
use App\Form\ExcursionType;
use App\Data\SearchData;
use App\Form\ReservationExcursionType;
use App\Form\SearchForm;
use App\Repository\ExcursionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/excursion")
 */

class ExcursionController extends AbstractController
{
    /**
     * @Route("/", name="excursion_index",methods={"GET", "POST"})
     */
    public function index(ExcursionRepository $excursionRepository, PaginatorInterface $paginator, Request $request, EntityManagerInterface $entityManager): Response
    {
        $exursions = $excursionRepository->orderByDate();
        $e = $paginator->paginate(
            $exursions,
            $request->query->getInt('page', 1),
            4
        );
        return $this->render('excursion/index.html.twig', [
            'excursions' => $e,

        ]);
    }

    /**
     * @Route("/Trie", name="excursion_indexTrie",methods={"GET", "POST"})
     */
    public function indexTrie(ExcursionRepository $excursionRepository, PaginatorInterface $paginator, Request $request, EntityManagerInterface $entityManager): Response
    {
        $exursions = $excursionRepository->orderByPrix();
        $e = $paginator->paginate(
            $exursions,
            $request->query->getInt('page', 1),
            4
        );
        return $this->render('excursion/index.html.twig', [
            'excursions' => $e,

        ]);
    }

    /**
     * @Route("/Culturelle", name="excursion_indexCulturelle",methods={"GET", "POST"})
     */
    public function indexCulturelle(ExcursionRepository $excursionRepository, PaginatorInterface $paginator, Request $request, EntityManagerInterface $entityManager): Response
    {
        $exursions = $excursionRepository->searchType('Culturelle');
        $e = $paginator->paginate(
            $exursions,
            $request->query->getInt('page', 1),
            4
        );
        return $this->render('excursion/index.html.twig', [
            'excursions' => $e,

        ]);
    }

    /**
     * @Route("/Historique", name="excursion_indexHistorique",methods={"GET", "POST"})
     */
    public function indexHistorique(ExcursionRepository $excursionRepository, PaginatorInterface $paginator, Request $request, EntityManagerInterface $entityManager): Response
    {
        $exursions = $excursionRepository->searchType('Historique');
        $e = $paginator->paginate(
            $exursions,
            $request->query->getInt('page', 1),
            4
        );
        return $this->render('excursion/index.html.twig', [
            'excursions' => $e,

        ]);
    }

    /**
     * @Route("/new", name="excursion_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $Excursion = new Excursion();
        $form = $this->createForm(ExcursionType::class, $Excursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $Excursion->setImage($newFilename);
                $entityManager->persist($Excursion);
                $entityManager->flush();
                $this->addFlash('message', 'le Excursion a bien ete ajouter ');
                return $this->redirectToRoute('excursion_index', [], Response::HTTP_SEE_OTHER);
            } else {
                $entityManager->persist($Excursion);
                $entityManager->flush();
                $this->addFlash('message', 'le Excursion a bien ete ajouter ');
                return $this->redirectToRoute('excursion_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('Excursion/new.html.twig', [
            'excursion' => $Excursion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="excursion_show")
     */
    public function show(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository
        , ExcursionRepository    $excursionRepository, PaginatorInterface $paginator, Excursion $excursion): Response
    {
        $reservationExcursion = new ReservationExcursion();
        $form = $this->createForm(ReservationExcursionType::class, $reservationExcursion);
        $form->handleRequest($request);
        $user = $this->getUser()->getUsername();
        $client = $userRepository->findOneBy(array('UserName' => $user), null, 1, 0);
        $reservationExcursion->setClient($client);
        $reservationExcursion->setDateReservationExcursion(new \DateTime('now'));
        $reservationExcursion->setIDExcursion($excursion);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationExcursion);
            $entityManager->flush();

            return $this->redirectToRoute('excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_excursion/new.html.twig', [
            'excursion' => $excursion,
            'reservation_excursion' => $reservationExcursion,
            'form' => $form->createView(),
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
        if ($this->isCsrfTokenValid('delete' . $excursion->getId(), $request->request->get('_token'))) {
            $entityManager->remove($excursion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('excursion_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/search", name="exsearch")
     */
    public function searchPlanajax(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Excursion::class);
        $requestString = $request->get('searchValue');
        $plan = $repository->findPlanBySujet($requestString);
        return $this->render('excursion/utilajax.html.twig', [
            'util' => $plan,
        ]);
    }
}
