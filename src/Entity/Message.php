<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $messager2 = null;

    #[ORM\Column(length: 100)]
    private ?string $messager1 = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;
    #[ORM\Column(length: 100)]
    private ?string $UserNameSender = null;
    #[ORM\Column(length: 100)]
    private ?string $UserPhotoSender = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getmessager2(): ?string
    {
        return $this->messager2;
    }

    public function setmessager2(string $messager2): static
    {
        $this->messager2 = $messager2;

        return $this;
    }

    public function getmessager1(): ?string
    {
        return $this->messager1;
    }

    public function setmessager1(string $messager1): static
    {
        $this->messager1 = $messager1;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUserNameSender(): ?string
    {
        return $this->UserNameSender;
    }

    public function setUserNameSender(?string $UserNameSender): self
    {
        $this->UserNameSender = $UserNameSender;
        return $this;
    }
    public function getUserPhotoSender(): ?string
    {
        return $this->UserPhotoSender;
    }

    public function setUserPhotoSender(?string $UserPhotoSender): self
    {
        $this->UserPhotoSender = $UserPhotoSender;
        return $this;
    }

    

}
