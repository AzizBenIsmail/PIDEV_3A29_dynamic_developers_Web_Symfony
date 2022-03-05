<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

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
     */
    private $DescriptionP;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $HashtagP;

    /**
     * @ORM\Column(type="date")
     */
    private $DateP;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Client;

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

    public function getClient(): ?User
    {
        return $this->Client;
    }

    public function setClient(?User $Client): self
    {
        $this->Client = $Client;

        return $this;
    }
}
