<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Form\SearchVoyageType;
use App\Form\VoyageTypedate;
use App\Form\SearchVoyageprixType;
use App\Form\VoyageType;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Margin\Margin;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @Route("/voyage")
 */
class VoyageController extends AbstractController
{
    /**
     * @Route("/voyage_index", name="voyage_index", methods={"GET"})
     */
    public function index(Request $request, VoyageRepository $voyageRepository, PaginatorInterface $paginator): Response
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $donnees = $this->getDoctrine()->getRepository(Voyage::class)->findAll();
        $voyages = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );



        return $this->render('voyage/index.html.twig', [
            'voyages' => $voyages,
        ]);
    }

    //Exporter pdf (composer require dompdf/dompdf)
    /**
     * @Route("/pdf", name="PDF_Voyage", methods={"GET"})
     */
    public function pdf(VoyageRepository $voyageRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('voyage/pdf.html.twig', [
            'voyages' => $voyageRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("ListeDesVoyages.pdf", [
            "voyages" => true
        ]);
    }

    //recuperation Json

    /**
     * @Route("/AllVoyageJSON", name="AllVoyageJSON")
     */
    public function AllVoyageJSON(NormalizerInterface $Normalizer)
    {
        $repository= $this->getDoctrine()->getRepository(Voyage::class);
        $Voyage = $repository->findAll();
        $jsonContent = $Normalizer->normalize($Voyage,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    //Ajouter un voyage apartir du json

    /**
     * @Route("/AddVoyageJSON", name="AddVoyageJSON")
     */
    public function AddVoyageJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $Voyage = new Voyage();
        $Voyage->setDestination($request->get('Destination'));
        $Voyage->setNomVoyage($request->get('NomVoyage'));
        $Voyage->setDureeVoyage($request->get('DureeVoyage'));
        $Voyage->setPrix($request->get('PrixVoyage'));
        //$Voyage->setDate($request->get('Date'));
        $Voyage->setValabilite($request->get('Valabilite'));
        $Voyage->setImage($request->get('Image'));
        $em->persist($Voyage);
        $em->flush();
        $jsonContent = $Normalizer->normalize($Voyage,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    //miss ajour d'un voyage a partie du json

    /**
     * @Route("/UpdateVoyageJSON/{id}", name="UpdateVoyageJSON")
     */
    public function UpdateVoyageJSON($id,Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $Voyage = $this->getDoctrine()->getRepository(Voyage::class)->find($id);
        $Voyage->setDestination($request->get('Destination'));
        $Voyage->setNomVoyage($request->get('NomVoyage'));
        $Voyage->setDureeVoyage($request->get('DureeVoyage'));
        $Voyage->setPrix($request->get('PrixVoyage'));
        //$Voyage->setDate($request->get('Date'));
        $Voyage->setValabilite($request->get('Valabilite'));
        $Voyage->setImage($request->get('Image'));
        $em->flush();
        $jsonContent = $Normalizer->normalize($Voyage,'json',['groups'=>'post:read']);
        return new Response("Update successfully".json_encode($jsonContent));
    }

    //Supprimer d'un voyage a partie du json

    /**
     * @Route("/DeleteVoyageJSON/{id}", name="DeleteVoyageJSON")
     */
    public function DeleteVoyageJSON($id,Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $Voyage = $this->getDoctrine()->getRepository(Voyage::class)->find($id);
        $em->remove($Voyage);
        $em->flush();
        $jsonContent = $Normalizer->normalize($Voyage,'json',['groups'=>'post:read']);
        return new Response("Delete successfully".json_encode($jsonContent));
    }

    //trie selon date special

    /**
     * @Route("/DateNow", name="DateNow" ,methods={"GET"})
     */
    public function DateNow(Request $request,VoyageRepository $voyageRepository): Response
    {
//list of students order By Dest
        $VoyageByDest = $voyageRepository->searchdatenow();
        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
        ]);

    }

    //trie selon destination

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

        //trie selon Nom

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

        //trie selon Date normal

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

        //trie selon Prix

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

    //Selection selon Continent_Afrique


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

    //Selection selon Continent_Europe


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

    //Selection selon Continent_Asie


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

    //Selection selon Continent_Amerique


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

    //Selection selon la Disponible

    /**
     * @Route("/Disponible", name="Disponible" ,methods={"GET"})
     */
    public function Disponible(Request $request,VoyageRepository $voyageRepository): Response
    {
        $VoyageByDest = $voyageRepository->Disponible();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
        ]);
    }

    //Selection selon la Non_Disponible

    /**
     * @Route("/Non_Disponible", name="Non_Disponible" ,methods={"GET"})
     */
    public function Non_Disponible(Request $request,VoyageRepository $voyageRepository): Response
    {
        $VoyageByDest = $voyageRepository->Non_Disponible();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
        ]);
    }

    //Selection selon la Bientot_Disponible

    /**
     * @Route("/Bientot_Disponible", name="Bientot_Disponible" ,methods={"GET"})
     */
    public function Bientot_Disponible(Request $request,VoyageRepository $voyageRepository): Response
    {
        $VoyageByDest = $voyageRepository->Bientot_Disponible();

        return $this->render('voyage/index.html.twig', [
            'voyages' => $VoyageByDest,
        ]);
    }

    //recherch selon le nom

    /**
     * @Route("/listVoyageWithSearch", name="listVoyageWithSearch")
     */
    public function listVoyageWithSearch(Request $request, VoyageRepository $voyageRepository)
    {
        //All of Student
        $voyage= $voyageRepository->findAll();
        //search
        $searchForm = $this->createForm(SearchVoyageType::class);
        $searchForm->add("Recherche",SubmitType::class);
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted()) {
            $Nom_Voyage = $searchForm['Nom_Voyage']->getData();
            $resulta = $voyageRepository->searchNom($Nom_Voyage);
            return $this->render('voyage/searchVoyage.html.twig', array(
                "voyages" => $resulta,
                "searchVoyage" => $searchForm->createView()));
        }
        return $this->render('voyage/searchVoyage.html.twig', array(
            "voyages" => $voyage,
            "searchVoyage" => $searchForm->createView()));
    }

    //recherch selon le Prix


    /**
     * @Route("/listVoyageWithSearchPrix", name="listVoyageWithSearchPrix")
     */
    public function listVoyageWithSearchPrix(Request $request, VoyageRepository $voyageRepository)
    {
        //All of Student
        $voyage= $voyageRepository->findAll();
        //search
        $searchForm = $this->createForm(SearchVoyageprixType::class);
        $searchForm->add("Recherche",SubmitType::class);
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted()) {
            $Prix_Voyage = $searchForm['Prix']->getData();
            $resulta = $voyageRepository->searchprix($Prix_Voyage);
            return $this->render('voyage/searchVoyage.html.twig', array(
                "voyages" => $resulta,
                "searchVoyage" => $searchForm->createView()));
        }
        return $this->render('voyage/searchVoyage.html.twig', array(
            "voyages" => $voyage,
            "searchVoyage" => $searchForm->createView()));
    }

    //recherch selon le Date


    /**
     * @Route("/listVoyageWithSearchdate", name="listVoyageWithSearchdate")
     */
    public function listVoyageWithSearchdate(Request $request, VoyageRepository $voyageRepository)
    {
        //All of Student
        $voyage= $voyageRepository->findAll();
        //search
        $searchForm = $this->createForm(VoyageTypedate::class);
        $searchForm->add("Recherche",SubmitType::class);
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted()) {
            $date = $searchForm['date']->getData();
            $resulta = $voyageRepository->searchdate($date);
            return $this->render('voyage/searchVoyage.html.twig', array(
                "voyages" => $resulta,
                "searchVoyage" => $searchForm->createView()));
        }
        return $this->render('voyage/searchVoyage.html.twig', array(
            "voyages" => $voyage,
            "searchVoyage" => $searchForm->createView()));
    }

    //Ajouter un Voyage

    /**
     * @Route("/new", name="voyage_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $voyage = new Voyage();
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if($imageFile){
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $voyage->setImage($newFilename);
                $entityManager->persist($voyage);
                $entityManager->flush();
                $this->addFlash('message','le Voyage a bien ete ajouter ');
                return $this->redirectToRoute('voyage_index', [], Response::HTTP_SEE_OTHER);
            }else{
                $entityManager->persist($voyage);
                $entityManager->flush();
                $this->addFlash('message','le Voyage a bien ete ajouter ');
                return $this->redirectToRoute('voyage_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('voyage/new.html.twig', [
            'voyage' => $voyage,
            'form' => $form->createView(),
        ]);
    }

    //afficher un voyage par details

    /**
     * @Route("/{id}", name="voyage_show", methods={"GET"})
     */
    public function show(Voyage $voyage): Response
    {
        return $this->render('voyage/show.html.twig', [
            'voyage' => $voyage,
        ]);
    }

        //Modifier un voyage

    /**
     * @Route("/{id}/edit", name="voyage_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Voyage $voyage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if($imageFile){
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $voyage->setImage($newFilename);
                $entityManager->persist($voyage);
                $entityManager->flush();
                $this->addFlash('message','le Voyage a bien ete ajouter ');
                return $this->redirectToRoute('voyage_index', [], Response::HTTP_SEE_OTHER);
            }else{
                $entityManager->persist($voyage);
                $entityManager->flush();
                $this->addFlash('message','le Voyage a bien ete ajouter ');
                return $this->redirectToRoute('voyage_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('voyage/edit.html.twig', [
            'voyage' => $voyage,
            'form' => $form->createView(),
        ]);
    }

    //Supprimer un Voyage

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
