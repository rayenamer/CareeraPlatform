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

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeImmutable $datedenaiss = null;

    

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    public function getDatedenaiss(): ?\DateTimeImmutable
    {
        return $this->datedenaiss;
    }

    public function setDatedenaiss(?\DateTimeImmutable $datedenaiss): self
    {
        $this->datedenaiss = $datedenaiss;
        return $this;
    }
    
    
}
