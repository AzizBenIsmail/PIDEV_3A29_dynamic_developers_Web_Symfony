<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields = {"Email"},message ="L'email que vous avez indiqué est déja utilisé !")
 */
class User implements UserInterface
{
     /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     */
    private $CIN;


    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Length(
     *      min = 2,
     *      max = 10,
     *      minMessage = "Votre Nom doit être au moins {{ limit }} characters long",
     *      maxMessage = "Votre Nom ne peut pas dépasser {{ limit }} characters"
     * )
     */
    private $UserName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank
     * @Assert\Positive
     * @Assert\Length(
     *      min = 4,
     *      max = 8,
     *      minMessage = "Votre Numero doit être au moins {{ limit }} characters long",
     *      maxMessage = "Votre Numero ne peut pas dépasser {{ limit }} characters"
     * )
     */
    private $Numero;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.",  )
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min = "8", minMessage="Votre mot de passe doit faire minimum 8 carractéres")
     */
    private $Password;

    /**
     *  @Assert\EqualTo(propertyPath="Password", message="Vous n'avez pas tapé le méme mot de passe")
     */
    public $confirm_password;

    public function __toString()
    {
        return (string) $this->CIN;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCIN(): ?int
    {
        return $this->CIN;
    }

    public function setCIN(int $CIN): self
    {
        $this->CIN = $CIN;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }


    public function getNumero(): ?int
    {
        return $this->Numero;
    }

    public function setNumero(?int $Numero): self
    {
        $this->Numero = $Numero;

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

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(?string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    /**
     * Get the value of Password
     */ 
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set the value of Password
     *
     * @return  self
     */ 
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Get min = 2,
     */ 
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * Set min = 2,
     *
     * @return  self
     */ 
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;

        return $this;
    }

    public function eraseCredentials() {
        
    }
     public function getSalt() {
        
    }

    public function getRoles() {
        return['ROLE_USER'];
    }
}


