<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/restaurant")
 */
class RestaurantController extends AbstractController
{
    /**
     * @Route("/", name="restaurant_index", methods={"GET"})
     */
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
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
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("ListeDesRestaurant.pdf", [
            "restaurant" => true
        ]);
    }

    /**
     * @Route("/orderByNom", name="orderByNom" ,methods={"GET"})
     */
    public function orderByNom(Request $request,RestaurantRepository $restaurantRepository): Response
    {
//list of students order By Dest
        $restaurant = $restaurantRepository->orderByNom();

        return $this->render('restaurant/index.html.twig', [
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

        return $this->render('restaurant/index.html.twig', [
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
                return $this->redirectToRoute('voyage_index', [], Response::HTTP_SEE_OTHER);
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
