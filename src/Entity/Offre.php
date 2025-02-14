<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomposte = null;

    #[ORM\Column(length: 255)]
    private ?string $entreprise = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column]
    private ?float $salaire = null;

    #[ORM\ManyToOne(inversedBy: 'offres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeContrat $typecontrat = null;

    #[ORM\ManyToOne(inversedBy: 'offres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeOffre $typeoffre = null;

    #[ORM\Column]
    private ?bool $disponibilite = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomposte(): ?string
    {
        return $this->nomposte;
    }

    public function setNomposte(string $nomposte): static
    {
        $this->nomposte = $nomposte;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): static
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(float $salaire): static
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getTypecontrat(): ?TypeContrat
    {
        return $this->typecontrat;
    }

    public function setTypecontrat(?TypeContrat $typecontrat): static
    {
        $this->typecontrat = $typecontrat;

        return $this;
    }

    public function getTypeoffre(): ?TypeOffre
    {
        return $this->typeoffre;
    }

    public function setTypeoffre(?TypeOffre $typeoffre): static
    {
        $this->typeoffre = $typeoffre;

        return $this;
    }

    public function isDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
