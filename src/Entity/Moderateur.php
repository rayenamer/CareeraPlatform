<?php

namespace App\Entity;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM; 


#[ORM\Entity]
class Moderateur extends User
{
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $societe = null;

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(?string $societe): static
    {
        $this->societe = $societe;
        return $this;
    }
}
