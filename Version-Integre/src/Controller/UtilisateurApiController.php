<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class UtilisateurApiController extends AbstractController
{


    
    /**
     * @Route("user/signup", name="app_register")
     */
    public function signupAction(Request $request)
    {
        $CIN = $request->query->get("CIN");
        $UserName = $request->query->get("UserName");
        $Email = $request->query->get("Email");
        $Adresse = $request->query->get("Adresse");
        $Password = $request->query->get("Password");
      

        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
            return new Response("email invalid.");
        }
        $user = new User();
        $user->setCIN($CIN);
        $user->setUserName($UserName);
        $user->setEmail($Email);
        $user->setAdresse($Adresse);
        $user->setPassword($Password);
        //$user->setIsVerified(true);
        

        try {
            $em = $this->getDoctrine()->getManager();
            $em ->persist($user);
            $em -> flush();

            return new JsonResponse("Account is cretaed", 200);
        }catch(\Exception $ex) {
            return new Response("exception".$ex->getMessage());
        }
    }


    

    /**
     * @Route("user/signin", name="app_login")
     */
    public function siginAction(Request $request) 
    {
        $Email = $request->query->get("Email");
        $Password = $request->query->get("Password");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['Email'=>$Email]);

        if($user) {
            if($Password == $user->getPassword()) {
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted);
            }
            else {
                return new Response("password not found");
            }
        }
        else 
        {
            return new Response("user not found");
        }
    }

    /**
     * @Route("user/editUser", name="app_gestion_profile")
     */
    public function editUser(Request $request, UserPasswordEncoderInterface $PasswordEncoder)
    {
        $id = $request->query->get("id");
        $UserName = $request->query->get("UserName");
        //$Numero = $request->query->get("Numero");
        $Email = $request->query->get("Email");
        //$Adresse = $request->query->get("Adresse");
        $Password = $request->query->get("Password");
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);

       // if($request->files->get("photo") != null)
       // {
          //  $file = $request->files->get("photo");
           // $fileName = $file->getClientOriginalName();
           // $file->move(
             //   $fileName
          //  );
           // $user->setCIN($CIN);
            $user->setUserName($UserName);
            //$user->setNumero($Numero);
            $user->setEmail($Email);
           // $user->setAdresse($Adresse);
            $user->setPassword(
            $PasswordEncoder->encodePassword(
                $user,
                $Password
            ));

            try {
                $em = $this->getDoctrine()->getManager();
                $em -> persist($user);
                $em -> flush();
    
                return new JsonResponse("success", 200);
            }catch(\Exception $ex) {
                return new Response("failed".$ex->getMessage());
            }

        
    }

      /**
     * @Route("user/deleteUser", name="delete_User")
     * @Method("DELETE")
     */

    public function deletePostAction(Request $request) {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $Post = $em->getRepository(User::class)->find($id);
        if($Post!=null ) {
            $em->remove($Post);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("utilisateur a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Post invalide.");


    }

  

}
