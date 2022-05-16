<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

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
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     * @Groups("post:read")
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
     * @Groups("post:read")
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
     * @Groups("post:read")
     */
    private $Numero;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.",  )
     * @Groups("post:read")
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $Adresse;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min = "8", minMessage="Votre mot de passe doit faire minimum 8 carractéres")
     * @Groups("post:read")
     */
    private $Password;

    /**
     *  @Assert\EqualTo(propertyPath="Password", message="Vous n'avez pas tapé le méme mot de passe")
     * @Groups("post:read")
     */
    public $confirm_password;

    /**
     * @ORM\Column(type="json", nullable=true)
     * @Groups("post:read")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("post:read")
     */
    private $activation_token;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("post:read")
     */
    private $reset_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $Image;

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

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function addRoles(string $roles): self
    {
        if (is_array($this->roles)) {
            if (!in_array($roles, $this->roles, true)) {
                $this->roles[] = $roles;
            }
        }

        return $this;
    }

    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    public function setResetToken(?string $reset_token): self
    {
        $this->reset_token = $reset_token;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }
}


