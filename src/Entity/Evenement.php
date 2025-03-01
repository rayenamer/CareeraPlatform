<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column]
    private ?bool $disponibilite = null;

    #[ORM\ManyToOne(inversedBy: 'evenements')]
    private ?TypeEvent $TypeEvent = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $imageUrl = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?int $user_id = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    public ?array $participantsIds = [];

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function isdisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setdisponibilite(bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getTypeEvent(): ?TypeEvent
    {
        return $this->TypeEvent;
    }

    public function setTypeEvent(?TypeEvent $TypeEvent): static
    {
        $this->TypeEvent = $TypeEvent;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(?int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }


    public function getParticipantsIds(): ?array
    {
        return $this->participantsIds;
    }

    public function setParticipantsIds(?array $participantsIds): self
    {
        $this->participantsIds = $participantsIds;
        return $this;
    }

    public function addParticipantId(int $userId): self
    {
        // Initialiser le tableau s'il est null
        if ($this->participantsIds === null) {
            $this->participantsIds = [];
        }

        // Ajouter l'ID de l'utilisateur s'il n'est pas déjà présent
        if (!in_array($userId, $this->participantsIds)) {
            $this->participantsIds[] = $userId;
        }

        return $this;
    }

    public function removeParticipantId(int $userId): self
    {
        // Supprimer l'ID de l'utilisateur s'il est présent
        if (($key = array_search($userId, $this->participantsIds ?? [])) !== false) {
            unset($this->participantsIds[$key]);
            $this->participantsIds = array_values($this->participantsIds); // Réindexer le tableau
        }

        return $this;
    }

}