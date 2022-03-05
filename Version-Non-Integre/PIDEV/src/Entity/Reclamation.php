<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ID_Reclamation;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class,cascade={"all"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ID_Client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type_De_Reclamation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description_Reclamation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDReclamation(): ?string
    {
        return $this->ID_Reclamation;
    }

    public function setIDReclamation(string $ID_Reclamation): self
    {
        $this->ID_Reclamation = $ID_Reclamation;

        return $this;
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

    public function setDate(?\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
