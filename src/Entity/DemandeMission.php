<?php

namespace App\Entity;

use App\Repository\DemandeMissionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeMissionRepository::class)]
class DemandeMission
{
      
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'demandeMissions')]
    private ?Missionfreelencer $Offremission = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\NotBlank(message: "Le message ne peut pas être vide.")]
    #[Assert\Length(
        min: 100,
        minMessage: "Le message doit contenir au moins {{ limit }} caractères."
    )]
    private ?string $message = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Url(message: "Le portfolio doit être une URL valide.")]
    private ?string $portfolio = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(
        choices: ['en attente', 'validé', 'refusé'],
        message: "Le statut doit être 'en attente', 'validé' ou 'refusé'."
    )]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $userid = null;


 // #[ORM\ManyToOne(inversedBy: 'demandeMissions')]
    // private ?Utilisateur $utilisateur = null; // Supprimé car la table utilisateur n'existe plus

   

    public function __construct()
    {
        $this->candidatures = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOffremission(): ?Missionfreelencer
    {
        return $this->Offremission;
    }

    public function setOffremission(?Missionfreelencer $Offremission): static
    {
        $this->Offremission = $Offremission;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getPortfolio(): ?string
    {
        return $this->portfolio;
    }

    public function setPortfolio(?string $portfolio): static
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getEvaluation(): ?Evaluation
    {
        return $this->evaluation;
    }

    public function setEvaluation(?Evaluation $evaluation): static
    {
        $this->evaluation = $evaluation;

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

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): static
    {
        $this->userid = $userid;

        return $this;
    }

   
}
