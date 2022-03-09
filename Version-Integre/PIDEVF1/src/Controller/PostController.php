<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\PostLike;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Form\PostType;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/post")
 */

class PostController extends AbstractController
{
    /**
     * @Route("/", name="newsfeed")
     */
    public function newsfeed(PostRepository $postRepository){
        return $this->render('post/index.html.twig', [
            'newsfeedposts' => $postRepository->findAll(),

        ]);

    }
    /**
     * @Route("/newpost", name="post_new", methods={"GET", "POST"})
     */
    public function newpost(Request $request, EntityManagerInterface $entityManager,PostRepository $postRepository, UserRepository $userRepository , PaginatorInterface $paginator): Response
    {
        $Posts=$postRepository->orderByDate();
         $p = $paginator->paginate(
             $Posts,
             $request->query->getInt('page',1),
             4
         );
        $Post = new Post();
        $user=$this->getUser()->getUsername();
        $client=$userRepository->findOneBy(array('UserName' =>$user),null,1,0);
        $Post->setClient($client);
        $Post->setDateP(new \DateTime('now'));
        $form = $this->createForm(PostType::class, $Post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('ImageP')->getData();

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
                $Post->setImageP($newFilename);
                $entityManager->persist($Post);
                $entityManager->flush();
                $this->addFlash('message','le Posta bien ete ajouter ');
                return $this->redirectToRoute('post_new', [], Response::HTTP_SEE_OTHER);
            }else{
                $entityManager->persist($Post);
                $entityManager->flush();
                $this->addFlash('message','le Posta bien ete ajouter ');
                return $this->redirectToRoute('post_new', [], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->render('Post/index.html.twig', [
            'Post' => $Post,
            'formp' => $form->createView(),
            'newsfeedposts' =>$p,
            'user'=>$client
        ]);
    }

    /**
     * @Route("/{id}", name="userpost", methods={"GET","POST"})
     */
    public function show(Post $post,Request $request,UserRepository $userRepository): Response
    {   //partie commentaires
        $comment=new Commentaire();
        $comment->setObjet('');
        $user=$this->getUser()->getUsername();
        $client=$userRepository->findOneBy(array('UserName' =>$user),null,1,0);
        $comment->setClient($client);
        $form=$this->createForm(CommentaireType::class,$comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $comment->setPosts($post);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirectToRoute('userpost',['id'=> $post->getId()]);
        }
        return $this->render('post/commentform.html.twig', [
            'p' => $post,
            'formc'=> $form->createView(),
            'user'=>$client

        ]);
    }


    /**
     * @Route("/edit/{id}", name="post_edit")
     */

    public function edit(Request $request ,$id)
    {
        $post=$this->getDoctrine()->getRepository(Post::class)->find($id);
        $form = $this->createForm(PostType::class, $post);
        $form->add('Enregistrer',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('post_new');
        }
        return $this->render('post/edit.html.twig', ['formp' => $form->createView()]);
    }

    /**
     * @Route("/delete/{id}", name="post_delete")
     */
    public function Delete_Post($id, PostRepository $postRepository)
    {   $post=$postRepository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();
        return $this->redirectToRoute('post_new');
    }

    /**
     * @Route ("/{id}/like",name="post_like")
     * @param Post $post
     * @param EntityManagerInterface $manager
     * @param PostLikeRepository $likeRepository
     * @return Response
     */
   public function like(Post $post , EntityManagerInterface $manager, PostLikeRepository $likeRepository ):Response
   {
         $user=$this->getUser();
         if (!$user) return $this->json(['code'=>403,'message'=>"unauthorized"],403);

         if ($post->isLikeByUser($user)){
             $like=$likeRepository->findOneBy(['post'=>$post , 'Client'=>$user]);
             $manager->remove($like);
             $manager->flush();

             return $this->json([
                 'code'=>200,
                 'message'=>'Like bien supprimé',
                 'likes' => $likeRepository->count(['post'=>$post])
             ],200);
         }

         $like= new PostLike();
         $like->setPost($post)->setClient($user);
         $manager->persist($like);
         $manager->flush();

         return $this->json(['code'=> 200 ,
             'message'=> 'Like bien ajoutee',
             'likes'=>$likeRepository->count(['post'=>$post])
         ],200);

   }


    /**
     *  @Route ("/{id}/hashtag",name="post_hashtag")
     */
    public function hashtagpost(Post $po ,Request $request, EntityManagerInterface $entityManager,PostRepository $postRepository, UserRepository $userRepository , PaginatorInterface $paginator): Response
    {
        $Posts=$postRepository->searchPost($po->getHashtagP());
        $p = $paginator->paginate(
            $Posts,
            $request->query->getInt('page',1),
            4
        );
        $Post = new Post();
        $user=$this->getUser()->getUsername();
        $client=$userRepository->findOneBy(array('UserName' =>$user),null,1,0);
        $Post->setClient($client);
        $Post->setDateP(new \DateTime('now'));
        $form = $this->createForm(PostType::class, $Post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('ImageP')->getData();

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
                $Post->setImageP($newFilename);
                $entityManager->persist($Post);
                $entityManager->flush();
                $this->addFlash('message','le Posta bien ete ajouter ');
                return $this->redirectToRoute('post_new', [], Response::HTTP_SEE_OTHER);
            }else{
                $entityManager->persist($Post);
                $entityManager->flush();
                $this->addFlash('message','le Posta bien ete ajouter ');
                return $this->redirectToRoute('post_new', [], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->render('Post/index.html.twig', [
            'Post' => $Post,
            'formp' => $form->createView(),
            'newsfeedposts' =>$p,
            'user'=>$client
        ]);
    }




}
