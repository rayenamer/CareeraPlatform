<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatureRepository::class)]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Offre::class, inversedBy: 'candidatures')]
    #[ORM\JoinColumn(nullable: false)] 
    private ?Offre $offre = null;
    

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $datesoumission = null;

    #[ORM\Column(length: 255)]
    private ?string $utilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $cv = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $lettremotivation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOffre(): ?Offre
    {
        return $this->offre;
    }

    public function setOffre(?Offre $offre): static
    {
        $this->offre = $offre;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDatesoumission(): ?\DateTimeImmutable
    {
        return $this->datesoumission;
    }

    public function setDatesoumission(?\DateTimeImmutable $datesoumission): self
    {
        $this->datesoumission = $datesoumission ?? new \DateTimeImmutable();
        return $this;
    }

    public function getUtilisateur(): ?string
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(string $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    public function getLettremotivation(): ?string
    {
        return $this->lettremotivation;
    }

    public function setLettremotivation(string $lettremotivation): static
    {
        $this->lettremotivation = $lettremotivation;

        return $this;
    }
}
