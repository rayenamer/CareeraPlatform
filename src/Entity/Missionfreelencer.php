<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\MissionfreelencerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MissionfreelencerRepository::class)]
class Missionfreelencer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Le titre ne peut pas être vide.")]
    private ?string $titre = null;

    #[ORM\Column(nullable: true)]
    #[Assert\GreaterThan(value: 0, message: "Le prix doit être supérieur à zéro.")]
    private ?float $prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 500, maxMessage: "La description ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $description = null;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $datelimite = null;
    
    #[ORM\Column(length: 255)]
    private ?string $specialite = null;


    /**
     * @var Collection<int, DemandeMission>
     */
    #[ORM\OneToMany(targetEntity: DemandeMission::class, mappedBy: 'Offremission')]
    private Collection $demandeMissions;

    /**
     * @var Collection<int, Candidaturemission>
     */
    #[ORM\OneToMany(targetEntity: Candidaturemission::class, mappedBy: 'mission', cascade: ['remove'], orphanRemoval: true)]
    private Collection $candidaturemissions;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $userid = null;

    

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageUrl = null;

  

    public function __construct()
    {
        $this->demandeMissions = new ArrayCollection();
        $this->candidaturemissions = new ArrayCollection();
        $this->date = new \dateTimeImmutable(); // Définit la date actuelle par défaut

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

  
    public function getDatelimite(): ?string
    {
        return $this->datelimite;
    }
    
    public function setDatelimite(?string $datelimite): static
    {
        $this->datelimite = $datelimite;
        return $this;
    }
    
    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * @return Collection<int, DemandeMission>
     */
    public function getDemandeMissions(): Collection
    {
        return $this->demandeMissions;
    }

    public function addDemandeMission(DemandeMission $demandeMission): static
    {
        if (!$this->demandeMissions->contains($demandeMission)) {
            $this->demandeMissions->add($demandeMission);
            $demandeMission->setOffremission($this);
        }

        return $this;
    }

    public function removeDemandeMission(DemandeMission $demandeMission): static
    {
        if ($this->demandeMissions->removeElement($demandeMission)) {
            // set the owning side to null (unless already changed)
            if ($demandeMission->getOffremission() === $this) {
                $demandeMission->setOffremission(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Candidaturemission>
     */
    public function getCandidaturemissions(): Collection
    {
        return $this->candidaturemissions;
    }

    public function addCandidaturemission(Candidaturemission $candidaturemission): static
    {
        if (!$this->candidaturemissions->contains($candidaturemission)) {
            $this->candidaturemissions->add($candidaturemission);
            $candidaturemission->setMission($this);
        }

        return $this;
    }

    public function removeCandidaturemission(Candidaturemission $candidaturemission): static
    {
        if ($this->candidaturemissions->removeElement($candidaturemission)) {
            // set the owning side to null (unless already changed)
            if ($candidaturemission->getMission() === $this) {
                $candidaturemission->setMission(null);
            }
        }

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): static
    {
        $this->userid = $userid;

        return $this;
    }

   
    public function getImageUrl(): ?string
{
    return $this->imageUrl;
}

public function setImageUrl(?string $imageUrl): self
{
    $this->imageUrl = $imageUrl;

    return $this;
}
    
    
}
