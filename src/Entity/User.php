<?php

namespace App\Entity;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\ResetPasswordRequest;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV4;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap([
    "user" => User::class,
    "freelancer" => Freelancer::class,
    "chercheur" => Chercheur::class,
    "moderateur" => Moderateur::class
])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\NotBlank(message: "L'email est requis.")]
    #[Assert\Email(message: "Veuillez fournir une adresse email valide.")]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank(message: "Le mot de passe est requis.")]
    private ?string $password = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Le nom est requis.")]
    #[Assert\Length(min: 3, minMessage: "Le nom doit contenir au moins {{ limit }} caractères.")]
    #[Assert\Regex(pattern: "/^[a-zA-Z]+$/", message: "Le nom doit contenir uniquement des lettres.")]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Le prénom est requis.")]
    #[Assert\Length(min: 3, minMessage: "Le prénom doit contenir au moins {{ limit }} caractères.")]
    #[Assert\Regex(pattern: "/^[a-zA-Z]+$/", message: "Le prénom doit contenir uniquement des lettres.")]
    private ?string $prenom = null;

    // Ce champ n'est pas mappé en base de données, il est utilisé pour la confirmation du mot de passe
    #[Assert\NotBlank(message: "La confirmation du mot de passe est requise.")]
    #[Assert\EqualTo(propertyPath: "password", message: "Les mots de passe doivent correspondre.")]
    private ?string $confirmPassword = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $domaine = null;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    #[Assert\Choice(choices: ["homme", "femme"], message: "Veuillez choisir 'homme' ou 'femme'.")]
    private ?string $sexe = null;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est requis.")]
    #[Assert\Length(
        min: 8, 
        max: 15, 
        minMessage: "Le numéro de téléphone doit contenir au moins {{ limit }} chiffres.", 
        maxMessage: "Le numéro de téléphone ne peut pas contenir plus de {{ limit }} chiffres."
    )]
    #[Assert\Regex(pattern: "/^\d+$/", message: "Le numéro de téléphone doit contenir uniquement des chiffres.")]
    private ?string $tel = null;

    private Collection $resetPasswordRequests;

    public function __construct()
    {
        $this->resetPasswordRequests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getRoles(): array
    {
        return array_unique(array_merge($this->roles, ['ROLE_USER']));
    }

    public function setRoles(array $roles): static
    {
        $this->roles = array_unique($roles);
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(?string $confirmPassword): static
    {
        $this->confirmPassword = $confirmPassword;
        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(?string $domaine): static
    {
        $this->domaine = $domaine;
        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): static
    {
        $this->sexe = $sexe;
        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): static
    {
        $this->tel = $tel;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function eraseCredentials(): void
    {
        // Effacer toute donnée sensible temporaire si nécessaire
    }

    public function __toString(): string
    {
        return $this->nom . ' ' . $this->prenom;
    }
}
