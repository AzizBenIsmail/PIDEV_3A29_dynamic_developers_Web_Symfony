<?php

namespace App\Entity;

use App\Repository\ExcursionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ExcursionRepository::class)
 */
class Excursion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Votre Nom_Excursion doit être au moins {{ limit }} characters long",
     *      maxMessage = "Le de Nom_Excursion ne peut pas etre plus {{ limit }} characters"
     * )
     * @Groups("post:read")
     */
    private $Nom_Excursion;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 5,
     *      minMessage = "l'objet doit être au moins {{ limit }} characters"
     * )
     * @Groups("post:read")
     */
    private $Description_Excursion;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Type_Excursion;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Lieu;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice({"Valide","Proposition"})
     * @Groups("post:read")
     */
    private $valabilite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $Image;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $Client;

    /**
     * @ORM\Column(type="float")
     * @Groups("post:read")
     */
    private $prix;

    public function __construct()
    {
        $this->reservationExcursions = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->Nom_Excursion;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomExcursion(): ?string
    {
        return $this->Nom_Excursion;
    }

    public function setNomExcursion(string $Nom_Excursion): self
    {
        $this->Nom_Excursion = $Nom_Excursion;

        return $this;
    }

    public function getDescriptionExcursion(): ?string
    {
        return $this->Description_Excursion;
    }

    public function setDescriptionExcursion(string $Description_Excursion): self
    {
        $this->Description_Excursion = $Description_Excursion;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getTypeExcursion(): ?string
    {
        return $this->Type_Excursion;
    }

    public function setTypeExcursion(string $Type_Excursion): self
    {
        $this->Type_Excursion = $Type_Excursion;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->Lieu;
    }

    public function setLieu(string $Lieu): self
    {
        $this->Lieu = $Lieu;

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

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

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

    /**
     * @return Collection|ReservationExcursion[]
     */
    public function getReservationExcursions(): Collection
    {
        return $this->reservationExcursions;
    }

    public function addReservationExcursion(ReservationExcursion $reservationExcursion): self
    {
        if (!$this->reservationExcursions->contains($reservationExcursion)) {
            $this->reservationExcursions[] = $reservationExcursion;
            $reservationExcursion->setIDExcursion($this);
        }

        return $this;
    }

    public function removeReservationExcursion(ReservationExcursion $reservationExcursion): self
    {
        if ($this->reservationExcursions->removeElement($reservationExcursion)) {
            // set the owning side to null (unless already changed)
            if ($reservationExcursion->getIDExcursion() === $this) {
                $reservationExcursion->setIDExcursion(null);
            }
        }

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
