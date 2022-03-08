<?php

namespace App\Controller;

use App\Entity\ReservationVoyage;
use App\Form\ReservationVoyageType;
use App\Repository\ReservationVoyageRepository;
use App\Repository\VoyageRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mine\Email;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

/**
 * @Route("/reservation/voyage")
 */
class ReservationVoyageController extends AbstractController
{

    /**
     * @Route("/", name="reservation_voyage_index", methods={"GET"})
     */
    public function index(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->findAll(),
        ]);
    }

    //Exporter pdf

    /**
     * @Route("/PDF_Reserver", name="PDF_Reserver", methods={"GET"})
     */
    public function PDF_Reserver(ReservationVoyageRepository $reservationVoyageRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reservation_voyage/pdf.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("Liste_Des_Reservation_Voyages.pdf", [
            "reservation_voyages" => true
        ]);
    }

    //Trie par date ordre desc

    /**
     * @Route("/order_By_Date_desc", name="order_By_Date_desc" ,methods={"GET"})
     */
    public function order_By_Date_desc(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
      return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->order_By_Date_desc(),
        ]);
    }

    //Trie par date ordre ASC


    /**
     * @Route("/order_By_Date_ASC", name="order_By_Date_ASC" ,methods={"GET"})
     */
    public function order_By_Date_ASC(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->order_By_Date_ASC(),
        ]);
    }

    //selection reservation par categore de age Enfants


    /**
     * @Route("/Enfants", name="Enfants" ,methods={"GET"})
     */
    public function Enfants(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Enfants(),
        ]);
    }

    //selection reservation par categore de age Adolescents


    /**
     * @Route("/Adolescents", name="Adolescents" ,methods={"GET"})
     */
    public function Adolescents(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Adolescents(),
        ]);
    }

    //selection reservation par categore de age Adultes


    /**
     * @Route("/Adultes", name="Adultes" ,methods={"GET"})
     */
    public function Adultes(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Adultes(),
        ]);
    }

    //selection reservation par categore de age Aines


    /**
     * @Route("/Aines", name="Aines" ,methods={"GET"})
     */
    public function Aines(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Aines(),
        ]);
    }

    //selection reservation par categore Class Economy

    /**
     * @Route("/Economy", name="Economy" ,methods={"GET"})
     */
    public function Economy(ReservationVoyageRepository $reservationVoyageRepository): Response
    {

        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Economy(),
        ]);
    }

    //selection reservation par categore Class Business

    /**
     * @Route("/Business", name="Business" ,methods={"GET"})
     */
    public function Business(ReservationVoyageRepository $reservationVoyageRepository): Response
    {

        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Business(),
        ]);
    }

    //selection reservation par categore Class First


    /**
     * @Route("/First", name="First" ,methods={"GET"})
     */
    public function First(ReservationVoyageRepository $reservationVoyageRepository): Response
    {

        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->First(),
        ]);
    }

        //ajouter une nouvelle reservation

    /**
         * @Route("/new", name="reservation_voyage_new", methods={"GET","POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator): Response
    {
        $reservationVoyage = new ReservationVoyage();
        $form = $this->createForm(ReservationVoyageType::class, $reservationVoyage);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationVoyage);
            $entityManager->flush();


            //mailing
            //on cree le message
            $message = (new \Swift_Message('Activation de votre compte'))
                //ili bech yeb3ath
                ->setFrom('travel.me.pidev@gmail.com')
                //ili bech ijih l message
                ->setTo('mohamedamineaouididi08@gmail.com')
                ->setBody(
                    "<p>bonjour, </p><p> vous avez cree un compte sur notre site, veuillez cliquer sur le ci-dessous pour l'activer </p>",
                    'text/html'
                );
            //on envoi l email
            $mailer->send($message);

            return $this->redirectToRoute('reservation_voyage_index');
        }

        return $this->render('reservation_voyage/new.html.twig', [
            'reservation_voyage' => $reservationVoyage,
            'form' => $form->createView(),
        ]);
    }


    //Afficher une reservation


    /**
     * @Route("/{id}", name="reservation_voyage_show", methods={"GET"})
     */
    public function show(ReservationVoyage $reservationVoyage): Response
    {
        return $this->render('reservation_voyage/show.html.twig', [
            'reservation_voyage' => $reservationVoyage,
        ]);
    }

    //Modifier une reservation


    /**
     * @Route("/{id}/edit", name="reservation_voyage_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ReservationVoyage $reservationVoyage): Response
    {
        $form = $this->createForm(ReservationVoyageType::class, $reservationVoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_voyage_index');
        }

        return $this->render('reservation_voyage/edit.html.twig', [
            'reservation_voyage' => $reservationVoyage,
            'form' => $form->createView(),
        ]);
    }

    //Supprimer une reservation


    /**
     * @Route("/{id}", name="reservation_voyage_delete", methods={"POST"})
     */
    public function delete(Request $request, ReservationVoyage $reservationVoyage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationVoyage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationVoyage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_voyage_index');
    }


}
