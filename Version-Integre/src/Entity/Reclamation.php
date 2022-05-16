<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("reclamation:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("reclamation:read")
     */
    private $Objet;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $Client;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("reclamation:read")
     */
    private $Type_De_Reclamation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("reclamation:read")
     */
    private $Description_Reclamation;

    /**
     * @ORM\Column(type="date")
     * @Groups("reclamation:read")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->Objet;
    }

    public function setObjet(string $Objet): self
    {
        $this->Objet = $Objet;

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

    public function getTypeDeReclamation(): ?string
    {
        return $this->Type_De_Reclamation;
    }

    public function setTypeDeReclamation(string $Type_De_Reclamation): self
    {
        $this->Type_De_Reclamation = $Type_De_Reclamation;

        return $this;
    }

    public function getDescriptionReclamation(): ?string
    {
        return $this->Description_Reclamation;
    }

    public function setDescriptionReclamation(string $Description_Reclamation): self
    {
        $this->Description_Reclamation = $Description_Reclamation;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
