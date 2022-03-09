<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Count;
use App\Entity\User;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     * @Assert\Length(
     *      min = 10,
     *      max = 255,
     *      minMessage = "Votre publication doit être au moins {{ limit }} characters long",
     *      maxMessage = "Votre publication ne peut pas dépasser {{ limit }} characters"
     * )
     */
    private $DescriptionP;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("post:read")
     * @Assert\Choice({"Voyage","Excursion", "Restaurant"})
     */
    private $HashtagP;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("post:read")
     */
    private $DateP;

    /**
     * @ORM\OneToMany(targetEntity=PostLike::class, mappedBy="post")
     * @Groups("post:read")
     */
    private $Likes;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="posts")
     * @Groups("post:read")
     */
    private $Client;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="posts")
     * @Groups("post:read")
     */
    private $commentaires;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups("post:read")
     * @Assert\Choice({"Public","Anonyme"})
     */
    private $visibilite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $ImageP;

    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->ImageP;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionP(): ?string
    {
        return $this->DescriptionP;
    }

    public function setDescriptionP(string $DescriptionP): self
    {
        $this->DescriptionP = $DescriptionP;

        return $this;
    }

    public function getHashtagP(): ?string
    {
        return $this->HashtagP;
    }

    public function setHashtagP(?string $HashtagP): self
    {
        $this->HashtagP = $HashtagP;

        return $this;
    }

    public function getDateP(): ?\DateTimeInterface
    {
        return $this->DateP;
    }

    public function setDateP(\DateTimeInterface $DateP): self
    {
        $this->DateP = $DateP;

        return $this;
    }
    public function getVisibilite(): ?string
    {
        return $this->visibilite;
    }

    public function setVisibilite(string $visibilite): self
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    public function getImageP(): ?string
    {
        return $this->ImageP;
    }

    public function setImageP(?string $ImageP): self
    {
        $this->ImageP = $ImageP;

        return $this;
    }

    public function __construct()
    {
        $this->Likes = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
    }

    /**
     * @return Collection<int, PostLike>
     */
    public function getLikes(): Collection
    {
        return $this->Likes;
    }

    public function addLike(PostLike $like): self
    {
        if (!$this->Likes->contains($like)) {
            $this->Likes[] = $like;
            $like->setPost($this);
        }

        return $this;
    }

    public function removeLike(PostLike $like): self
    {
        if ($this->Likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getPost() === $this) {
                $like->setPost(null);
            }
        }

        return $this;
    }

    public function nblike(){
        return $this->Likes->count();
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

    /**
     * @param \App\Entity\User $Client
     * @return bool
     */
    public function isLikeByUser(User $Client):bool{
        foreach ($this->Likes as $Like){
            if ($Like->getClient() === $Client)return true;
        }
        return false;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setPosts($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getPosts() === $this) {
                $commentaire->setPosts(null);
            }
        }

        return $this;
    }


}
