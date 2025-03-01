<?php

namespace App\Entity;

use App\Repository\NotificationfreelencerRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: NotificationfreelencerRepository::class)]
class Notificationfreelencer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\ManyToOne(inversedBy: 'notifications')]
    private ?Missionfreelencer $mission = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datepub = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;
    #[ORM\Column(length: 255)]
    private ?string $userid = null;

    #[ORM\Column(length: 255)]
    private ?string $message = null;
    public function getId(): ?int
    {
        return $this->id;
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

    public function getUtilisateur(): ?Utilisateur
{
    return $this->utilisateur;
}

public function setUtilisateur(?Utilisateur $utilisateur): static
{
    $this->utilisateur = $utilisateur;

    return $this;
}

    public function getMission(): ?Missionfreelencer
    {
        return $this->mission;
    }

    public function setMission(?Missionfreelencer $mission): static
    {
        $this->mission = $mission;

        return $this;
    }

    public function getDatepub(): ?\DateTimeInterface
    {
        return $this->datepub;
    }

    public function setDatepub(\DateTimeInterface $datepub): static
    {
        $this->datepub = $datepub;

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

}
