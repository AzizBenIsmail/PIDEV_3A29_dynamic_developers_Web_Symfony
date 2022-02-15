<?php

namespace App\Entity;

use App\Repository\ReservationVoyageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReservationVoyageRepository::class)
 */
class ReservationVoyage
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
     * @ORM\ManyToOne(targetEntity=Voyage::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $ID_Voyage;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_Reservation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice({"Economy class", "First class", "Business class"})
     */
    private $Travel_Class;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive
     * @Assert\NotBlank
     */
    private $Age;

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

    public function getIDVoyage(): ?Voyage
    {
        return $this->ID_Voyage;
    }

    public function setIDVoyage(?Voyage $ID_Voyage): self
    {
        $this->ID_Voyage = $ID_Voyage;

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

    public function getTravelClass(): ?string
    {
        return $this->Travel_Class;
    }

    public function setTravelClass(string $Travel_Class): self
    {
        $this->Travel_Class = $Travel_Class;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }
}
