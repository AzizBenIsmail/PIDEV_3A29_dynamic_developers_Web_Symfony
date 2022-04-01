<?php

namespace App\Entity;

use App\Repository\ReservationExcursionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ReservationExcursionRepository::class)
 */
class ReservationExcursion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("ReservationExcursion:read")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups("ReservationExcursion:read")
     */
    private $Date_Reservation_Excursion;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservationExcursions")
     */
    private $Client;

    /**
     * @ORM\ManyToOne(targetEntity=Excursion::class, inversedBy="reservationExcursions" )
     * @Groups("ReservationExcursion:read")
     */
    private $ID_Excursion;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("ReservationExcursion:read")
     */
    private $Email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("ReservationExcursion:read")
     */
    private $nb;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getClient(): ?User
    {
        return $this->Client;
    }

    public function setClient(?User $Client): self
    {
        $this->Client = $Client;

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

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getNb(): ?int
    {
        return $this->nb;
    }

    public function setNb(?int $nb): self
    {
        $this->nb = $nb;

        return $this;
    }
}
