<?php

namespace App\Entity;

use App\Repository\ModerateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "moderateur")] 
class Moderateur extends Utilisateur
{
    

    #[ORM\Column(length: 255)]
    private ?string $societe = null;

    

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(string $societe): static
    {
        $this->societe = $societe;

        return $this;
    }
}
