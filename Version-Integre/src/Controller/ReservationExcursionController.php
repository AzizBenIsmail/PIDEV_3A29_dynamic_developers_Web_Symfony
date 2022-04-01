<?php

namespace App\Controller;

use App\Entity\Excursion;
use App\Entity\ReservationExcursion;
use App\Form\ReservationExcursionType;
use App\Repository\ExcursionRepository;
use App\Repository\ReservationExcursionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
 * @Route("/reservation/excursion")
 */
class ReservationExcursionController extends AbstractController
{
    /**
     * @Route("/", name="reservation_excursion_index", methods={"GET"})
     */
    public function index(ReservationExcursionRepository $reservationExcursionRepository ,UserRepository $userRepository)
    {
        $user=$this->getUser()->getUsername();
        $client=$userRepository->findOneBy(array('UserName' =>$user),null,null,0);
        return $this->render('excursion/show.html.twig', [
            'reservations' => $reservationExcursionRepository->findby(array('Client' =>$client->getId()),null,null,0),
        ]);
    }

    /******************Ajouter ReservationExcursion*****************************************/
    /**
     * @Route("/addReservationExcursionJSON", name="add_ReservationExcursion")
     * @Method("POST")
     */

    public function ajouterReservationExcursionAction(Request $request)
    {
        $ReservationExcursion= new ReservationExcursion();
        $email=$request->query->get("email");
        $nb=$request->query->get("nb");
        $idex=$request->query->get("idex");
        $ex=$this->getDoctrine()->getManager()->getRepository(Excursion::class)->findOneBy(array("id"=>$idex),null,1,0,0);
        $date =new \DateTime('now');
        $em = $this->getDoctrine()->getManager();
        $ReservationExcursion->setIDExcursion($ex);
        $ReservationExcursion->setEmail($email);
        $ReservationExcursion->setNb((int)$nb);
        $ReservationExcursion->setDateReservationExcursion($date);
        $em->persist($ReservationExcursion);
        $em->flush();

        return $this->json($ReservationExcursion,200,[],['groups'=>'ReservationExcursion:read']);

    }

    /******************Supprimer ReservationExcursion*****************************************/

    /**
     * @Route("/deleteReservationExcursionJSON", name="delete_ReservationExcursion")
     * @Method("DELETE")
     */

    public function deleteReservationExcursionAction(Request $request) {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $ReservationExcursion= $em->getRepository(ReservationExcursion::class)->find($id);
        if($ReservationExcursion!=null ) {
            $em->remove($ReservationExcursion);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("ReservationExcursiona ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id ReservationExcursion invalide.");


    }

    /******************Modifier ReservationExcursion*****************************************/
    /**
     * @Route("/updateReservationExcursionJSON", name="update_ReservationExcursion")
     * @Method("PUT")
     */
    public function modifierReservationExcursionAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $ReservationExcursion= $this->getDoctrine()->getManager()
            ->getRepository(ReservationExcursion::class)
            ->find($request->get("id"));
        $ReservationExcursion->setEmail($request->get("email"));
        $ReservationExcursion->setNb($request->get("nb"));
        $em->persist($ReservationExcursion);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("ReservationExcursion a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }



    /******************affichage ReservationExcursion*****************************************/

    /**
     * @Route("/displayReservationExcursionsJSON", name="display_ReservationExcursion")
     */
    public function allReservationExcursionAction(NormalizerInterface $Normalizer)
    {

        $ReservationExcursion= $this->getDoctrine()->getManager()->getRepository(ReservationExcursion::class)->findAll();

        return $this->json($ReservationExcursion,200,[],['groups'=>'ReservationExcursion:read']);
    }


    /******************Detail ReservationExcursion*****************************************/

    /**
     * @Route("/detailReservationExcursionJSON", name="detail_ReservationExcursion")
     * @Method("GET")
     */

    //Detail Post
    public function detailReservationExcursionAction(Request $request)
    {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $ReservationExcursion= $this->getDoctrine()->getManager()->getRepository(ReservationExcursion::class)->find($id);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getDescription();
        });
        return $this->json($ReservationExcursion,200,[],['groups'=>'ReservationExcursion:read']);
    }

    /**
     * @Route("/new", name="reservation_excursion_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository
        ,ExcursionRepository $excursionRepository, PaginatorInterface $paginator): Response
    {
        $reservationExcursion = new ReservationExcursion();
        $form = $this->createForm(ReservationExcursionType::class, $reservationExcursion);
        $form->handleRequest($request);
        $user=$this->getUser()->getUsername();
        $client=$userRepository->findOneBy(array('UserName' =>$user),null,1,0);
        $reservationExcursion->setClient($client);
        $reservationExcursion->setDateReservationExcursion(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationExcursion);
            $entityManager->flush();

            return $this->redirectToRoute('reservation_excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_excursion/new.html.twig', [
            'reservation_excursion' => $reservationExcursion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_excursion_show", methods={"GET"})
     */
    public function show(ReservationExcursion $reservationExcursion): Response
    {

        return $this->render('reservation_excursion/showReservation.html.twig', [
            'reservation_excursion' => $reservationExcursion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservation_excursion_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReservationExcursion $reservationExcursion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationExcursionType::class, $reservationExcursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('reservation_excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_excursion/edit.html.twig', [
            'reservation_excursion' => $reservationExcursion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_excursion_delete", methods={"POST"})
     */
    public function delete($id,ReservationExcursionRepository $reservationExcursionRepository)
    {

        $r=$reservationExcursionRepository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($r);
        $em->flush();

        return $this->redirectToRoute('reservation_excursion_index');


    }
}
