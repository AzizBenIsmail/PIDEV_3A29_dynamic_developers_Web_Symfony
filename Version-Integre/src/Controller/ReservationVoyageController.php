<?php

namespace App\Controller;

use App\Entity\ReservationVoyage;
use App\Entity\User;
use App\Entity\Voyage;
use App\Form\ReservationVoyageType;
use App\Repository\ReservationVoyageRepository;
use App\Repository\VoyageRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Margin\Margin;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mine\Email;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/reservation/voyage")
 */
class ReservationVoyageController extends AbstractController
{
    /**
     * @Route("/", name="reservation_voyage_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $donnees = $this->getDoctrine()->getRepository(ReservationVoyage::class)->findAll();
        $reservationVoyage = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyage,
        ]);
    }


    /**
     * @Route("/AllResrVoyageJSON", name="AllResrVoyageJSON")
     */
    public function AllResrVoyageJSON(NormalizerInterface $Normalizer)
    {
        $repository= $this->getDoctrine()->getRepository(ReservationVoyage::class);
        $ReservationVoyage = $repository->findAll();
        $jsonContent = $Normalizer->normalize($ReservationVoyage,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/Devenirpemium", name="Devenirpemium")
     */
    public function Devenirpemium(MailerInterface $mailer,Request $request,NormalizerInterface $Normalizer)
    {
        $path = $this->getParameter('kernel.project_dir').'/public';
        $em= $this->getDoctrine()->getManager();
        $ReservationVoyage = new ReservationVoyage();
        $cli=$em->getRepository(User::class)->findOneBy(["CIN"=>$request->get('CIN')]);

        $pathqr = $this->getParameter('kernel.project_dir').'/public/Front/images';


        $result=Builder::create()
            ->writer(new PngWriter())
            ->data(" | Bonjour MR :".$cli->getUserName()." | Votre MDP & Login : Premium|Premium")
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->labelText("")
            ->logoPath($pathqr."/img.png")
            ->labelAlignment(new LabelAlignmentCenter())
            ->labelMargin(new Margin(15, 5, 5, 5))
            ->logoResizeToWidth('100')
            ->logoResizeToHeight('100')
            ->build();


        $namePng =uniqid('',''). '.png';
        $result->saveToFile( $pathqr.'/qr-code/'.$namePng);

        //mailing
        //on cree le message

        $message = (new TemplatedEmail())
            //ili bech yeb3ath
            ->from('travel.me.pidev@gmail.com')
            //ili bech ijih l message
            ->to($cli->getEmail())
            ->subject("Confirmation de Reservation")
            ->html("<p>bonjour,". $cli->getUserName()."</p><p> Bonjour voicie Votra mdp : (Premuim) et login : (Premuim) pour devenir Premium </p><p> Merci pour votre Confiance </p>")
            ->embedFromPath($path.'/uploads/'.$cli->getImage())
            ->embedFromPath($pathqr.'/qr-code/'.$namePng);


        //on envoi l email
        $mailer->send($message);
        $jsonContent = $Normalizer->normalize($ReservationVoyage,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
         * @Route("/AddReserVoyageJSON", name="AddReserVoyageJSON")
     */
    public function AddReserVoyageJSON(MailerInterface $mailer,Request $request,NormalizerInterface $Normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $ReservationVoyage = new ReservationVoyage();
        $voy=$em->getRepository(Voyage::class)->find($request->get('Voyage'));
        $cli=$em->getRepository(User::class)->findOneBy(["CIN"=>$request->get('Client')]);
        $ReservationVoyage->setClient($em->getRepository(User::class)->findOneBy(["CIN"=>$request->get('Client')]));
        $ReservationVoyage->setVoyage($em->getRepository(Voyage::class)->find($request->get('Voyage')));
        $ReservationVoyage->setTravelClass($request->get('TravelClass'));
        $ReservationVoyage->setDateReservation(new \DateTime('@'.strtotime('Now')));
        $ReservationVoyage->setAge($request->get('Age'));
        $em->persist($ReservationVoyage);
        $em->flush();
        $path = $this->getParameter('kernel.project_dir').'/public';
        $pathqr = $this->getParameter('kernel.project_dir').'/public/Front/images';


        $result=Builder::create()
            ->writer(new PngWriter())
            ->data("Date Voyage :"." | Duree :".$voy->getDureeVoyage()."  | Prix : ".$voy->getPrix()."  |   ")
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->labelText("")
            ->logoPath($pathqr."/img.png")
            ->labelAlignment(new LabelAlignmentCenter())
            ->labelMargin(new Margin(15, 5, 5, 5))
            ->logoResizeToWidth('100')
            ->logoResizeToHeight('100')
            ->build();


        $namePng =uniqid('',''). '.png';
        $result->saveToFile( $pathqr.'/qr-code/'.$namePng);

        //mailing
        //on cree le message
        $message = (new TemplatedEmail())
            //ili bech yeb3ath
            ->from('travel.me.pidev@gmail.com')
            //ili bech ijih l message
            ->to($cli->getEmail())
            ->subject("Confirmation de Reservation")
            ->html("<p>bonjour,". $cli->getUserName()."</p><p> Ceci est une confirmation de votre reservation ". $voy->getNomVoyage()."</p><p> Merci pour votre Confiance </p>")
            ->embedFromPath($pathqr.'/qr-code/'.$namePng)
            ->embedFromPath($path.'/uploads/'.$voy->getImage());

        //on envoi l email
        $mailer->send($message);
        $jsonContent = $Normalizer->normalize($ReservationVoyage,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/deletedReservationVoyage/{id}", name="deletedReservationVoyage")
     */
    public function deletedReservationVoyage($id,Request $request,NormalizerInterface $Normalizer)
    {
        // $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $ReservationVoyage = $this->getDoctrine()->getRepository(ReservationVoyage::class)->find($id);
        if($ReservationVoyage!=null ) {
            $em->remove($ReservationVoyage);
            $em->flush();
            $jsonContent = $Normalizer->normalize($ReservationVoyage,'json',['groups'=>'post:read']);
            return new Response("Delete successfully".json_encode($jsonContent));
        }else{
            return new JsonResponse("id agence invalide.");}
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
      return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->order_By_Date_desc(),
        ]);
    }

    //Trie par date ordre ASC


    /**
     * @Route("/order_By_Date_ASC", name="order_By_Date_ASC" ,methods={"GET"})
     */
    public function order_By_Date_ASC(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->order_By_Date_ASC(),
        ]);
    }

    //selection reservation par categore de age Enfants


    /**
     * @Route("/Enfants", name="Enfants" ,methods={"GET"})
     */
    public function Enfants(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Enfants(),
        ]);
    }

    //selection reservation par categore de age Adolescents


    /**
     * @Route("/Adolescents", name="Adolescents" ,methods={"GET"})
     */
    public function Adolescents(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Adolescents(),
        ]);
    }

    //selection reservation par categore de age Adultes


    /**
     * @Route("/Adultes", name="Adultes" ,methods={"GET"})
     */
    public function Adultes(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Adultes(),
        ]);
    }

    //selection reservation par categore de age Aines


    /**
     * @Route("/Aines", name="Aines" ,methods={"GET"})
     */
    public function Aines(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Aines(),
        ]);
    }

    //selection reservation par categore Class Economy

    /**
     * @Route("/Economy", name="Economy" ,methods={"GET"})
     */
    public function Economy(ReservationVoyageRepository $reservationVoyageRepository): Response
    {

        return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Economy(),
        ]);
    }

    //selection reservation par categore Class Business

    /**
     * @Route("/Business", name="Business" ,methods={"GET"})
     */
    public function Business(ReservationVoyageRepository $reservationVoyageRepository): Response
    {

        return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->Business(),
        ]);
    }

    //selection reservation par categore Class First


    /**
     * @Route("/First", name="First" ,methods={"GET"})
     */
    public function First(ReservationVoyageRepository $reservationVoyageRepository): Response
    {

        return $this->render('reservation_voyage/TreResrvationVoyage.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->First(),
        ]);
    }

        //ajouter une nouvelle reservation

    /**
         * @Route("/new", name="reservation_voyage_new", methods={"GET","POST"})
     */
    public function new(Request $request,MailerInterface $mailer, TokenGeneratorInterface $tokenGenerator): Response
    {
        $reservationVoyage = new ReservationVoyage();
        $form = $this->createForm(ReservationVoyageType::class, $reservationVoyage);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationVoyage);
            $entityManager->flush();



            $path = $this->getParameter('kernel.project_dir').'/public';
            $pathqr = $this->getParameter('kernel.project_dir').'/public/Front/images';


            $result=Builder::create()
                ->writer(new PngWriter())
                ->data("Date Voyage :".$reservationVoyage->getVoyage()->getDate()->format("Y/m/d")." | Duree :".$reservationVoyage->getVoyage()->getDureeVoyage()."  | Prix : ".$reservationVoyage->getVoyage()->getPrix()."  |   ")
                ->encoding(new Encoding('UTF-8'))
                ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
                ->size(300)
                ->margin(10)
                ->labelText("")
                ->logoPath($pathqr."/img.png")
                ->labelAlignment(new LabelAlignmentCenter())
                ->labelMargin(new Margin(15, 5, 5, 5))
                ->logoResizeToWidth('100')
                ->logoResizeToHeight('100')
                ->build();


            $namePng =uniqid('',''). '.png';
            $result->saveToFile( $pathqr.'/qr-code/'.$namePng);

            //mailing
            //on cree le message
            $message = (new TemplatedEmail())
                //ili bech yeb3ath
                ->from('travel.me.pidev@gmail.com')
                //ili bech ijih l message
                ->to($reservationVoyage->getClient()->getEmail())
                ->subject("Confirmation de Reservation")
                ->html("<p>bonjour,". $reservationVoyage->getClient()->getUserName()."</p><p> Ceci est une confirmation de votre reservation ". $reservationVoyage->getVoyage()->getNomVoyage()."</p><p> Merci pour votre Confiance </p>")
                ->embedFromPath($pathqr.'/qr-code/'.$namePng)
                ->embedFromPath($path.'/uploads/'.$reservationVoyage->getVoyage()->getImage());

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
