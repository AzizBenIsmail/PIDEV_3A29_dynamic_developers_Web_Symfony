<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RestaurantRepository::class)
 */
class Restaurant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Unique
     * @Assert\NotBlank
     * @Assert\Length(
     *      max = 20,
     *      maxMessage = "Le de Nom_Restaurant ne peut pas etre plus {{ limit }} characters"
     * )
     */
    private $Nom_Restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 10,
     *      minMessage = "Votre Adresse_Restaurant doit être au moins {{ limit }} characters long",
     *      maxMessage = "Votre Adresse_Restaurant ne peut pas dépasser {{ limit }} characters"
     * )
     */
    private $Adresse_Restaurant;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\Positive
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = " Numero doit être au moins {{ limit }} characters long",
     *      maxMessage = " Numero ne peut pas dépasser {{ limit }} characters"
     * )
     */
    private $Num_Tel_Restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $Description_Restaurant;

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
}
