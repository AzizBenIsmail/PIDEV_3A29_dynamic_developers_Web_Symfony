<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Entity\Voyage;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/restaurant")
 */
class RestaurantController extends AbstractController
{
    /**
     * @Route("/", name="restaurant_index", methods={"GET"})
     */
    public function index(RestaurantRepository $restaurantRepository,Request $request,PaginatorInterface $paginator): Response
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $donnees = $this->getDoctrine()->getRepository(Restaurant::class)->findAll();
        $restaurants = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $restaurants,
        ]);
    }

    //Exporter pdf (composer require dompdf/dompdf)
    /**
     * @Route("/pdf", name="PDF_Restaurant", methods={"GET"})
     */
    public function pdf(RestaurantRepository $restaurantRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('restaurant/pdf.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A3', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("ListeDesRestaurant.pdf", [
            "restaurant" => true
        ]);
    }
    //recuperation Json

    /**
     * @Route("/AllrestaurantJSON", name="AllrestaurantJSON")
     */
    public function AllrestaurantJSON(NormalizerInterface $Normalizer)
    {
        $repository= $this->getDoctrine()->getRepository(Restaurant::class);
        $Restaurant = $repository->findAll();
        $jsonContent = $Normalizer->normalize($Restaurant,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    //Ajouter un voyage apartir du json

    /**
     * @Route("/AddrestaurantJSON", name="AddrestaurantJSON")
     */
    public function AddrestaurantJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $Restaurant = new Restaurant();
        $Restaurant->setDestination($request->get('Destination'));
        $Restaurant->setNomVoyage($request->get('NomVoyage'));
        $Restaurant->setDureeVoyage($request->get('DureeVoyage'));
        $Restaurant->setPrix($request->get('PrixVoyage'));
        //$Voyage->setDate($request->get('Date'));
        $Restaurant->setValabilite($request->get('Valabilite'));
        $Restaurant->setImage($request->get('Image'));
        $em->persist($Restaurant);
        $em->flush();
        $jsonContent = $Normalizer->normalize($Restaurant,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    //miss ajour d'un voyage a partie du json

    /**
     * @Route("/UpdateRestaurantJSON/{id}", name="UpdateRestaurantJSON")
     */
    public function UpdateRestaurantJSON($id,Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $Restaurant = $this->getDoctrine()->getRepository(Restaurant::class)->find($id);
        $Restaurant->setDestination($request->get('Destination'));
        $Restaurant->setNomVoyage($request->get('NomVoyage'));
        $Restaurant->setDureeVoyage($request->get('DureeVoyage'));
        $Restaurant->setPrix($request->get('PrixVoyage'));
        //$Voyage->setDate($request->get('Date'));
        $Restaurant->setValabilite($request->get('Valabilite'));
        $Restaurant->setImage($request->get('Image'));
        $em->flush();
        $jsonContent = $Normalizer->normalize($Restaurant,'json',['groups'=>'post:read']);
        return new Response("Update successfully".json_encode($jsonContent));
    }

    //Supprimer d'un voyage a partie du json

    /**
     * @Route("/DeleteRestaurantJSON/{id}", name="DeleteRestaurantJSON")
     */
    public function DeleteRestaurantJSON($id,Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $Restaurant = $this->getDoctrine()->getRepository(Restaurant::class)->find($id);
        $em->remove($Restaurant);
        $em->flush();
        $jsonContent = $Normalizer->normalize($Restaurant,'json',['groups'=>'post:read']);
        return new Response("Delete successfully".json_encode($jsonContent));
    }

    /**
     * @Route("/orderByNom", name="orderByNom" ,methods={"GET"})
     */
    public function orderByNom(Request $request,RestaurantRepository $restaurantRepository): Response
    {
//list of students order By Dest
        $restaurant = $restaurantRepository->orderByNom();

        return $this->render('restaurant/treRestaurant.html.twig', [
            'restaurants' => $restaurant,
        ]);

        //trie selon Date normal

    }
    /**
     * @Route("/orderByAdresse", name="orderByAdresse" ,methods={"GET"})
     */
    public function orderByAdresse(Request $request,RestaurantRepository $restaurantRepository): Response
    {
//list of students order By Dest
        $restaurant = $restaurantRepository->orderByAdresse();

        return $this->render('restaurant/treRestaurant.html.twig', [
            'restaurants' => $restaurant,
        ]);

        //trie selon Date normal

    }

    /**
     * @Route("/new", name="restaurant_new", methods={"GET","POST"})
     */
    public function new(Request $request,EntityManagerInterface $entityManager): Response
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
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
                $restaurant->setImage($newFilename);
                $entityManager->persist($restaurant);
                $entityManager->flush();
                $this->addFlash('message','le Restaurant a bien ete ajouter ');
                return $this->redirectToRoute('restaurant_index', [], Response::HTTP_SEE_OTHER);
            }else{
            $entityManager->persist($restaurant);
            $entityManager->flush();
                $this->addFlash('message','le Voyage a bien ete ajouter ');
                return $this->redirectToRoute('restaurant_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('restaurant/new.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="restaurant_show", methods={"GET"})
     */
    public function show(Restaurant $restaurant): Response
    {
        return $this->render('restaurant/show.html.twig', [
            'restaurant' => $restaurant,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="restaurant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Restaurant $restaurant ,EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
                    $restaurant->setImage($newFilename);
                    $entityManager->persist($restaurant);
                    $entityManager->flush();
                    $this->addFlash('message','le Voyage a bien ete ajouter ');
                    return $this->redirectToRoute('restaurant_index', [], Response::HTTP_SEE_OTHER);
                }else{
                    $entityManager->persist($restaurant);
                    $entityManager->flush();
                    $this->addFlash('message','le restaurant a bien ete ajouter ');
                    return $this->redirectToRoute('restaurant_index', [], Response::HTTP_SEE_OTHER);
                }
            }
        }

        return $this->render('restaurant/edit.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="restaurant_delete", methods={"POST"})
     */
    public function delete(Request $request, Restaurant $restaurant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$restaurant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($restaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('restaurant_index');
    }

}
