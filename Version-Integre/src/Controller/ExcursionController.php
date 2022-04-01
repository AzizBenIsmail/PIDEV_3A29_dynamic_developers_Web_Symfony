<?php

namespace App\Controller;

use App\Entity\Excursion;

use App\Entity\ReservationExcursion;
use App\Entity\Restaurant;
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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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

    /******************Ajouter Excursion*****************************************/
    /**
     * @Route("/addExcursionJSON", name="add_Excursion")
     * @Method("POST")
     */

    public function ajouterExcursionAction(Request $request)
    {
        $Excursion= new Excursion();
        $nom=$request->query->get("nom");
        $description=$request->query->get("description");
        $lieu=$request->query->get("lieu");
        $type=$request->query->get("type");
        $date=$request->query->get("date");
        $valabilite=$request->query->get("valabilite");
        $image=$request->query->get("image");
        $prix=$request->query->get("prix");
        $em = $this->getDoctrine()->getManager();
        $Excursion->setNomExcursion($nom);
        $Excursion->setDescriptionExcursion($description);
        $Excursion->setLieu($lieu);
        $Excursion->setTypeExcursion($type);
      //  $expire_date= new \DateTime($date);
        $Excursion->setDate(new \DateTime('@'.strtotime('28 September 2022')));
        $Excursion->setValabilite($valabilite);
        $Excursion->setImage($image);
        $Excursion->setPrix($prix);

        $em->persist($Excursion);
        $em->flush();

        return $this->json($Excursion,200,[],['groups'=>'excursion:read']);

    }

    /******************Supprimer Excursion*****************************************/

    /**
     * @Route("/deleteExcursionJSON", name="delete_Excursion")
     * @Method("DELETE")
     */

    public function deleteExcursionAction(Request $request) {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $Excursion= $em->getRepository(Excursion::class)->find($id);
        if($Excursion!=null ) {
            $em->remove($Excursion);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Excursiona ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Excursion invalide.");


    }

    /******************Modifier Excursion*****************************************/
    /**
     * @Route("/updateExcursionJSON", name="update_Excursion")
     * @Method("PUT")
     */
    public function modifierExcursionAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Excursion= $this->getDoctrine()->getManager()
            ->getRepository(Excursion::class)
            ->find($request->get("id"));
        $Excursion->setNomExcursion($request->get("nom"));
        $Excursion->setDescriptionExcursion($request->get("description"));
        $Excursion->setLieu($request->get("lieu"));
        $Excursion->setTypeExcursion($request->get("type"));
        $Excursion->setDate($request->get("date"));
        $Excursion->setValabilite($request->get("valabilite"));
        $Excursion->setImage($request->get("image"));
        $Excursion->setPrix($request->get("prix"));

        $em->persist($Excursion);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Excursion a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }



    /******************affichage Excursion*****************************************/

    /**
     * @Route("/displayExcursionsJSON", name="display_Excursion")
     */
    public function allExcursionAction(NormalizerInterface $Normalizer)
    {

        $Excursion= $this->getDoctrine()->getManager()->getRepository(Excursion::class)->findAll();

        return $this->json($Excursion,200,[],['groups'=>'excursion:read']);
    }

    /******************Detail Excursion*****************************************/

    /**
     * @Route("/detailExcursionJSON", name="detail_Excursion")
     * @Method("GET")
     */

    //Detail Post
    public function detailExcursionAction(Request $request)
    {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $Excursion= $this->getDoctrine()->getManager()->getRepository(Excursion::class)->find($id);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getDescription();
        });
        return $this->json($Excursion,200,[],['groups'=>'excursion:read']);
    }
    /**
     * @Route("/AllExcursionJSON", name="AllExcursionJSON")
     */
    public function AllExcursionJSON(NormalizerInterface $Normalizer)
    {
        $repository= $this->getDoctrine()->getRepository(Excursion::class);
        $Excursion = $repository->findAll();
        $jsonContent = $Normalizer->normalize($Excursion,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
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
