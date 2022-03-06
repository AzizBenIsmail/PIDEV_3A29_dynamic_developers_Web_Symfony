<?php

namespace App\Entity;

use App\Repository\ReservationVoyageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
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
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Client;

    /**
     * @ORM\ManyToOne(targetEntity=Voyage::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Voyage;

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
     * @Assert\Length(
     *      min = 1,
     *      max = 2,
     *      minMessage = "Votre Age doit être au moins 9 ans",
     *      maxMessage = "Votre Age ne peut pas etre plus 99 ans"
     * )
     */
    private $Age;

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

    public function getVoyage(): ?Voyage
    {
        return $this->Voyage;
    }

    public function setVoyage(?Voyage $Voyage): self
    {
        $this->Voyage = $Voyage;

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
