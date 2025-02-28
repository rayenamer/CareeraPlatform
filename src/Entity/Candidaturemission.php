<?php

namespace App\Entity;
use App\Entity\Missionfreelencer;
use App\enum\EtatCandidature;
use App\Repository\CandidaturemissionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidaturemissionRepository::class)]
class Candidaturemission
{
     // Constantes pour l'état
     const ETAT_EN_ATTENTE = 'en_attente';
     const ETAT_ACCEPTED = 'accepté';
     const ETAT_REFUSED = 'refusé';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string')]
    private string $etat;

    // #[ORM\ManyToOne(inversedBy: 'candidaturemissions')]
    // private ?Utilisateur $utilisateur = null; // Supprimé car la table utilisateur n'existe plus

    #[ORM\ManyToOne(inversedBy: 'candidaturemissions')]
    private ?Missionfreelencer $mission = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'demande_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private ?DemandeMission $demande = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $score = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;
        return $this;
    }

    // public function getUtilisateur(): ?Utilisateur
    // {
    //     return $this->utilisateur; // Supprimé car la table utilisateur n'existe plus
    // }

    // public function setUtilisateur(?Utilisateur $utilisateur): static
    // {
    //     $this->utilisateur = $utilisateur;
    //     return $this;
    // }

    public function getMission(): ?Missionfreelencer
    {
        return $this->mission;
    }

    public function setMission(?Missionfreelencer $mission): static
    {
        $this->mission = $mission;
        return $this;
    }

    public function getDemande(): ?DemandeMission
    {
        return $this->demande;
    }

    public function setDemande(?DemandeMission $demande): static
    {
        $this->demande = $demande;
        return $this;
    }

    public function __construct()
    {
        $this->etat = self::ETAT_EN_ATTENTE;
    }

    public function accepter(): void
    {
        $this->etat = self::ETAT_ACCEPTED;
    }

    public function refuser(): void
    {
        $this->etat = self::ETAT_REFUSED;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): self
    {
        $this->score = $score;
        return $this;
    }
}
