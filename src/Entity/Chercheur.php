<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Chercheur extends User
{
    public function __construct()
    {
        parent::__construct();
        $this->setRoles(['ROLE_CHERCHEUR']); // Assign the role ROLE_CHERCHEUR
    }
    
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "La photo est obligatoire.")]
    private string $photo;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Le CV est obligatoire.")]
    private string $cv;

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;
        return $this;
    }

    public function getCv(): string
    {
        return $this->cv;
    }

    public function setCv(string $cv): static
    {
        $this->cv = $cv;
        return $this;
    }
}
