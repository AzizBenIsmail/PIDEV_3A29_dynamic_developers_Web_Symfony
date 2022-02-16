<?php

namespace App\Entity;

use App\Repository\ExcursionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\ManyToOne(targetEntity=Client::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $ID_Client;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Votre Nom_Excursion doit être au moins {{ limit }} characters long",
     *      maxMessage = "Le de Nom_Excursion ne peut pas etre plus {{ limit }} characters"
     * )
     */
    private $Nom_Excursion;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 10,
     *      minMessage = "l'objet doit être au moins {{ limit }} characters"
     * )
     */
    private $Description_Excursion;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 12,
     *      minMessage = "Votre Type_Excursion doit être au moins {{ limit }} characters long",
     *      maxMessage = "Le de Type_Excursion ne peut pas etre plus {{ limit }} characters"
     * )
     */
    private $Type_Excursion;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\Country
     */
    private $Lieu;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice({"Valide","Proposition"})
     */
    private $valabilite;

    public function __toString()
    {
        return (string) $this->Nom_Excursion;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDClient(): ?Client
    {
        return $this->ID_Client;
    }

    public function setIDClient(?Client $ID_Client): self
    {
        $this->ID_Client = $ID_Client;

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
}
