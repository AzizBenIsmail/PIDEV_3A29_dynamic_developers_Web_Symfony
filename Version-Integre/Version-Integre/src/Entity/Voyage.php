<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=VoyageRepository::class)
 */
class Voyage
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
     * @Assert\NotNull
     */
    private $Clien;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Country
     * @Groups("post:read")
     */
    private $Destination;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     * @Assert\Length(
     *      min = 5,
     *      max = 20,
     *      minMessage = "Votre Nom_Voyage doit être au moins {{ limit }} characters long",
     *      maxMessage = "Le de Nom_Voyage ne peut pas etre plus {{ limit }} characters"
     * )
     * @Groups("post:read")
     */
    private $Nom_Voyage;

    /**
     * @Assert\NotNull
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Duree_Voyage;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups("post:read")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice({"Oui","Non","Bientot disponible"})
     * @Groups("post:read")
     */
    private $valabilite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $Image;

    /**
     * @ORM\Column(type="float")
     * @Assert\Positive
     * @Assert\NotNull
     * @Groups("post:read")
     */
    private $Prix;

    public function __toString()
    {
        return (string) $this->Nom_Voyage;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClien(): ?User
    {
        return $this->Clien;
    }

    public function setClien(?User $Clien): self
    {
        $this->Clien = $Clien;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->Destination;
    }

    public function setDestination(string $Destination): self
    {
        $this->Destination = $Destination;

        return $this;
    }

    public function getNomVoyage(): ?string
    {
        return $this->Nom_Voyage;
    }

    public function setNomVoyage(string $Nom_Voyage): self
    {
        $this->Nom_Voyage = $Nom_Voyage;

        return $this;
    }

    public function getDureeVoyage(): ?string
    {
        return $this->Duree_Voyage;
    }

    public function setDureeVoyage(string $Duree_Voyage): self
    {
        $this->Duree_Voyage = $Duree_Voyage;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getValabilite(): ?string
    {
        return $this->valabilite;
    }

    public function setValabilite(string $valabilite): self
    {
        $this->valabilite = $valabilite;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }
}
