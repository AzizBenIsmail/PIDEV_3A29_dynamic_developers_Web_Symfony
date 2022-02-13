<?php

namespace App\Entity;

use App\Repository\ReservationVoyageRepository;
use Doctrine\ORM\Mapping as ORM;

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
}
