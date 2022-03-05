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
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Client;

    /**
     * @ORM\ManyToOne(targetEntity=Excursion::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Excursion;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_Reservation_Excursion;

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

    public function getExcursion(): ?Excursion
    {
        return $this->Excursion;
    }

    public function setExcursion(?Excursion $Excursion): self
    {
        $this->Excursion = $Excursion;

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
