<?php

namespace App\Entity;

use App\Repository\FreelancerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FreelancerRepository::class)]
#[ORM\Table(name: "freelancer")]
class Freelancer extends Utilisateur
{
    
    #[ORM\Column(length: 255)]
    private ?string $cv = null;

    #[ORM\Column]
    private ?int $review = null;

    #[ORM\Column]
    private ?int $experience = null;

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    public function getReview(): ?int
    {
        return $this->review;
    }

    public function setReview(int $review): static
    {
        $this->review = $review;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(int $experience): static
    {
        $this->experience = $experience;

        return $this;
    }
}
