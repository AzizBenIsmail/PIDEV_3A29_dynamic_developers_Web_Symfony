<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResetPassType;
use App\Form\RegistrationType;
use App\Repository\CommentaireRepository;
use App\Repository\ExcursionRepository;
use App\Repository\ReservationVoyageRepository;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer) {
        
        $user = new User();
        $form = $this->createForm(registrationType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
         $hash = $encoder->encodePassword($user, $user->getPassword());
         $user->setPassword($hash);

         $user->setActivationToken(md5(uniqid()));

         $manager->persist($user);
         $manager->flush();

         $message= (new \Swift_Message('Activation de votre compte'))
           ->setFrom('travel.me.pridev@gmail.com')
           ->setTo($user->getEmail())
           ->setBody(
               $this->renderView('emails/activation.html.twig', ['token' => $user->getActivationToken()]),
               'text/html'
           );

           $mailer->send($message);

         return $this->redirectToRoute('security_login');
        }

        
        return $this->render('security/registration.html.twig',
    [
        'form' => $form->createView()
    ]);
    }

     /**
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token, UserRepository $usersRepo){
        // On vérifie si un utilisateur a ce token
        $user = $usersRepo->findOneBy(['activation_token' => $token]);

        // Si aucun utilisateur n'existe avec ce token
        if(!$user){
            // Erreur 404
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }

        // On supprime le token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // On envoie un message flash
        $this->addFlash('message', 'Vous avez bien activé votre compte');

        // On retoure à login
        return $this->redirectToRoute('security_login');
    }

    /**
     * @Route("/oubli_pass", name="forgotten_password")
     */
    public function forgottenPass(Request $request, UserRepository $usersRepo, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator){
        // On crée le formulaire
        $form = $this->createForm(ResetPassType::class);

        // On traite le formulaire
        $form->handleRequest($request);

        // Si le formulaire est valide
        if($form->isSubmitted() && $form->isValid()){
            // On récupère les données
            $donnees = $form->getData();

            // On cherche si un utilisateur a cet email
            $user = $usersRepo->findOneByEmail($donnees['email']);

            // Si l'utilisateur n'existe pas
            if(!$user){
                // On envoie un message flash
                $this->addFlash('danger', 'Cette adresse n\'existe pas');

                return $this->redirectToRoute('security_login');
            }

            // On génère un token
            $token = $tokenGenerator->generateToken();

            try{
                $user->setResetToken($token);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
            }catch(\Exception $e){
                $this->addFlash('warning', 'Une erreur est survenue : '. $e->getMessage());
                return $this->redirectToRoute('security_login');
            }

            // On génère l'URL de réinitialisation de mot de passe
            $url = $this->generateUrl('app_reset_password', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);

            // On envoie le message
            $message = (new \Swift_Message('Mot de passe oublié'))
            ->setFrom('travel.me.pridev@gmail.com')
            ->setTo($user->getEmail())
            ->setBody(
                "<p>Bonjour,</p><p>Une demande de réinitialisation de mot de passe a été effectuée pour le site Travel Me. Veuillez cliquer sur le lien suivant : " . $url .'</p>',
                'text/html'
                )
            ;

            // On envoie l'e-mail
            $mailer->send($message);

            // On crée le message flash
            $this->addFlash('message', 'Un e-mail de réinitialisation de mot de passe vous a été envoyé');

            return $this->redirectToRoute('security_login');
        }

        // On envoie vers la page de demande de l'e-mail
        return $this->render('security/forgotten_password.html.twig', ['emailForm' => $form->createView()]);
    }


     /**
     * @Route("/reset_pass/{token}", name="app_reset_password")
     */
    public function resetPassword($token, Request $request, UserPasswordEncoderInterface $encoder){
        // On cherche l'utilisateur avec le token fourni
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['reset_token' => $token]);

        if(!$user){
            $this->addFlash('danger', 'Token inconnu');
            return $this->redirectToRoute('security_login');
        }

        // Si le formulaire est envoyé en méthode POST
        if($request->isMethod('POST')){
            // On supprime le token
            $user->setResetToken(null);

            // On chiffre le mot de passe
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('message', 'Mot de passe modifié avec succès');

            return $this->redirectToRoute('security_login');
        }else{
            return $this->render('security/reset_password.html.twig', ['token' => $token]);
        }

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
    public function index(UserRepository $clientRepository ,VoyageRepository $voyageRepository,RestaurantRepository $restaurantRepository,
                          CommentaireRepository $commentaireRepository,ExcursionRepository $excursionRepository,ReservationVoyageRepository $reservationVoyageRepository): Response
       {
           return $this->render('Back/Back.html.twig', [
           'clients' => $clientRepository->findAll(),'voyages' => $voyageRepository->findAll(),'restaurants' => $restaurantRepository->findAll(),
           'commentaires' => $commentaireRepository->findAll(),'excursions' => $excursionRepository->findAll(),'reservation_voyages' => $reservationVoyageRepository->findAll(),
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
