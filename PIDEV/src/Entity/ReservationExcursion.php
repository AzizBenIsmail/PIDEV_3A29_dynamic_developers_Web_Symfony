<?php

namespace App\Entity;

use App\Repository\ReservationExcursionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationExcursionRepository::class)
 */
class ReservationExcursion
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
     * @ORM\ManyToOne(targetEntity=Excursion::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $ID_Excursion;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_Reservation_Excursion;

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

    public function getIDExcursion(): ?Excursion
    {
        return $this->ID_Excursion;
    }

    public function setIDExcursion(?Excursion $ID_Excursion): self
    {
        $this->ID_Excursion = $ID_Excursion;

        return $this;
    }

    public function getDateReservationExcursion(): ?\DateTimeInterface
    {
        return $this->Date_Reservation_Excursion;
    }

    public function setDateReservationExcursion(\DateTimeInterface $Date_Reservation_Excursion): self
    {
        $this->Date_Reservation_Excursion = $Date_Reservation_Excursion;

        return $this;
    }
}
