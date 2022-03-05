<?php

namespace App\Entity;

use App\Repository\ExcursionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExcursionRepository::class)
 */
class Excursion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $Client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_Excursion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description_Excursion;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type_Excursion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lieu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $valabilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Image;

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

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }
}
