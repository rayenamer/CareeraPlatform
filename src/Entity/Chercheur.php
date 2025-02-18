<?php

namespace App\Entity;

use App\Repository\ChercheurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "chercheur")] 
class Chercheur extends Utilisateur
{
    

    #[ORM\Column(length: 255)]
    private ?string $cv = null;


    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    
    
}
