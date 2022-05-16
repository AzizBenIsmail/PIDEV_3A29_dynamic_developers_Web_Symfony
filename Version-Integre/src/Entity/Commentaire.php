<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=true)
     *
     */
    private $Client;

    /**
     * @ORM\ManyToOne(targetEntity=Post::class, inversedBy="commentaires")
     */
    private $posts;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Commentaire;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_c;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?User
    {
        return $this->Client;
    }

    public function setClient(?User $Client): self
    {
        $this->Client = $Client;

        return $this;
    }
    public function getPosts(): ?Post
    {
        return $this->posts;
    }

    public function setPosts(?Post $posts): self
    {
        $this->posts = $posts;

        return $this;
    }


    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }

    public function getDateC(): ?\DateTimeInterface
    {
        return $this->date_c;
    }

    public function setDateC(?\DateTimeInterface $date_c): self
    {
        $this->date_c = $date_c;

        return $this;
    }
}
