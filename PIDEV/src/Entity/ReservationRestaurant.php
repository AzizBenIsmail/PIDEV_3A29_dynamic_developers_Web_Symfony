<?php

namespace App\Entity;

use App\Repository\ReservationRestaurantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReservationRestaurantRepository::class)
 */
class ReservationRestaurant
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
     * @ORM\ManyToOne(targetEntity=Restaurant::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $ID_Restaurant;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_Reservation;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(
     *      min = 1,
     *      max = 1,
     *      minMessage = "le Nombre de personne doit être au moins entre 1-9",
     *      maxMessage = "le Nombre de personne doit être au moins entre 1-9"
     * )
     *
     */
    private $Nbr_Personne;

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

    public function getIDRestaurant(): ?Restaurant
    {
        return $this->ID_Restaurant;
    }

    public function setIDRestaurant(?Restaurant $ID_Restaurant): self
    {
        $this->ID_Restaurant = $ID_Restaurant;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->Date_Reservation;
    }

    public function setDateReservation(\DateTimeInterface $Date_Reservation): self
    {
        $this->Date_Reservation = $Date_Reservation;

        return $this;
    }

    public function getNbrPersonne(): ?int
    {
        return $this->Nbr_Personne;
    }

    public function setNbrPersonne(int $Nbr_Personne): self
    {
        $this->Nbr_Personne = $Nbr_Personne;

        return $this;
    }
}
