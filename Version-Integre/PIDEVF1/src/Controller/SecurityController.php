<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder) {
        
        $user = new User();
        $form = $this->createForm(registrationType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
         $hash = $encoder->encodePassword($user, $user->getPassword());
         $user->setPassword($hash);
         $manager->persist($user);
         $manager->flush();

         return $this->redirectToRoute('security_login');
        }

        
        return $this->render('security/registration.html.twig',
    [
        'form' => $form->createView()
    ]);
    }

    /**
     * @Route("/connexion", name="security_login")
     */
    public function login() {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout(){}

     /**
     * @Route("/", name="client_index", methods={"GET"})
     */
    public function index(UserRepository $clientRepository): Response
    {
        return $this->render('Back/Back.html.twig', [
            'clients' => $clientRepository->findAll(),
        ]);
    }

     /**
     * @Route("/{id}", name="client_show", methods={"GET"})
     */
    public function show(User $client): Response
    {
        return $this->render('security/show.html.twig', [
            'client' => $client,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="client_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $client, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(RegistrationType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $hash = $encoder->encodePassword($client, $client->getPassword());
            $client->setPassword($hash);
            $entityManager->flush();

            return $this->redirectToRoute('client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('security/edit.html.twig', [
            'client' => $client,
            'form' => $form->createView(),
        ]);
    }

     /**
     * @Route("/{id}", name="client_delete", methods={"POST"})
     */
    public function delete(Request $request, User $client, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$client->getId(), $request->request->get('_token'))) {
            $entityManager->remove($client);
            $entityManager->flush();
        }

        return $this->redirectToRoute('client_index', [], Response::HTTP_SEE_OTHER);
    }

}
