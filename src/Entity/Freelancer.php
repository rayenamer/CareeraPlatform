<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Freelancer extends User
{
    public function __construct()
    {
        parent::__construct();
        $this->setRoles(['ROLE_FREELANCER']);
    }
    
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "La photo est obligatoire.") ] 
    
    private string $photo;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Le CV est obligatoire.")]
    private string $cv; 
    
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $anneesExperience = null; 

    
    public function getAdresse(): string
    {
        return $this->adresse;
    }
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }



    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getCv(): string
    {
        return $this->cv;
    }

    public function setCv(string $cv): self
    {
        $this->cv = $cv;
        return $this;
    }
}
