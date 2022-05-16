<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/commentaire")
 */
class CommentaireController extends AbstractController
{
    /**
     * @Route("/", name="commentaire_index", methods={"GET"})
     */
    public function index(CommentaireRepository $commentaireRepository): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaireRepository->findAll(),
        ]);
    }

    /******************Ajouter Commentaire*****************************************/
    /**
     * @Route("/addCommentaireJSON", name="add_Commentaire")
     * @Method("Commentaire")
     */

    public function ajouterCommentaireAction(Request $request)
    {
        $Commentaire = new Commentaire();
        $description = $request->query->get("description");
        $objet=$request->query->get("objet");
        $post=$request->query->get("postid");
        $em = $this->getDoctrine()->getManager();

        $Commentaire->setPosts($this->getDoctrine()->getManager()->getRepository(Post::class)->find($post));
        $Commentaire->setCommentaire($description);
        $Commentaire->setObjet($objet);

        $em->persist($Commentaire);
        $em->flush();

        return $this->json($Commentaire,200,[],['groups'=>'comment:read']);

    }

    /******************Supprimer Commentaire*****************************************/

    /**
     * @Route("/deleteCommentaireJSON", name="delete_Commentaire")
     * @Method("DELETE")
     */

    public function deleteCommentaireAction(Request $request) {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $Commentaire = $em->getRepository(Commentaire::class)->find($id);
        if($Commentaire!=null ) {
            $em->remove($Commentaire);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Commentaire a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Commentaire invalide.");


    }

    /******************Modifier Commentaire*****************************************/
    /**
     * @Route("/updateCommentaireJSON", name="update_Commentaire")
     * @Method("PUT")
     */
    public function modifierCommentaireAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Commentaire = $this->getDoctrine()->getManager()
            ->getRepository(Commentaire::class)
            ->find($request->get("id"));

        $Commentaire->setCommentaire($request->get("description"));
        $Commentaire->setObjet($request->get("objet"));;

        $em->persist($Commentaire);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Commentaire a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }



    /******************affichage Commentaire*****************************************/

    /**
     * @Route("/displayCommentairesJSON", name="display_Commentaire")
     */
    public function allCommentaireAction()
    {

        $Commentaire = $this->getDoctrine()->getManager()->getRepository(Commentaire::class)->findAll();

        return $this->json($Commentaire,200,[],['groups'=>'comment:read']);

    }

    /**
     * @Route("/displayCommentairesPJSON", name="display_Commentaire")
     */
    public function allCommentairepostAction(Request $request, PostRepository $postRepository)
    {
        $idp=$request->get("idp");
        $Commentaire = $this->getDoctrine()->getManager()->getRepository(Commentaire::class)->findBy(array('posts' =>$idp),null,null,0);

        return $this->json($Commentaire,200,[],['groups'=>'comment:read']);

    }

    /******************Detail Commentaire*****************************************/

    /**
     * @Route("/detailCommentaireJSON", name="detail_Commentaire")
     * @Method("GET")
     */

    //Detail Commentaire
    public function detailCommentaireAction(Request $request)
    {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $Commentaire = $this->getDoctrine()->getManager()->getRepository(Commentaire::class)->find($id);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getDescription();
        });
        return $this->json($Commentaire,200,[],['groups'=>'comment:read']);
    }
    /**
     * @Route("/new", name="commentaire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $commentaire->setObjet("Commentaire");
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('commentaire_index');
        }

        return $this->render('commentaire/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commentaire_show", methods={"GET"})
     */
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commentaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Commentaire $commentaire): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commentaire_index');
        }

        return $this->render('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commentaire_delete", methods={"POST"})
     */
    public function delete(Request $request, Commentaire $commentaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commentaire_index');
    }
}
