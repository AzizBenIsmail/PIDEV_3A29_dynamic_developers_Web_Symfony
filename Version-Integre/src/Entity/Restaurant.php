<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=RestaurantRepository::class)
 */
class Restaurant
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
     *      max = 20,
     *      maxMessage = "Le de Nom_Restaurant ne peut pas etre plus {{ limit }} characters"
     * )
     * @Groups("post:read")
     */
    private $Nom_Restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 10,
     *      minMessage = "Votre Adresse_Restaurant doit être au moins {{ limit }} characters long",
     *      maxMessage = "Votre Adresse_Restaurant ne peut pas dépasser {{ limit }} characters"
     * )
     * @Groups("post:read")
     */
    private $Adresse_Restaurant;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = " Numero doit être au moins {{ limit }} characters long",
     *      maxMessage = " Numero ne peut pas dépasser {{ limit }} characters"
     * )
     * @Groups("post:read")
     */
    private $Num_Tel_Restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 8,
     *      max = 80,
     *      minMessage = " Numero doit être au moins {{ limit }} characters long",
     *      maxMessage = " Numero ne peut pas dépasser {{ limit }} characters"
     * )
     * @Groups("post:read")
     */
    private $Description_Restaurant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $Image;

    public function __toString()
    {
        return (string) $this->Nom_Restaurant;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRestaurant(): ?string
    {
        return $this->Nom_Restaurant;
    }

    public function setNomRestaurant(string $Nom_Restaurant): self
    {
        $this->Nom_Restaurant = $Nom_Restaurant;

        return $this;
    }

    public function getAdresseRestaurant(): ?string
    {
        return $this->Adresse_Restaurant;
    }

    public function setAdresseRestaurant(string $Adresse_Restaurant): self
    {
        $this->Adresse_Restaurant = $Adresse_Restaurant;

        return $this;
    }

    public function getNumTelRestaurant(): ?int
    {
        return $this->Num_Tel_Restaurant;
    }

    public function setNumTelRestaurant(int $Num_Tel_Restaurant): self
    {
        $this->Num_Tel_Restaurant = $Num_Tel_Restaurant;

        return $this;
    }

    public function getDescriptionRestaurant(): ?string
    {
        return $this->Description_Restaurant;
    }

    public function setDescriptionRestaurant(string $Description_Restaurant): self
    {
        $this->Description_Restaurant = $Description_Restaurant;

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
