<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Moderateur extends User
{
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "La société est obligatoire.")]
    private string $societe;

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
