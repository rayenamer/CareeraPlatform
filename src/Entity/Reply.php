<?php

namespace App\Entity;

use App\Repository\ReplyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReplyRepository::class)]
class Reply
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CreatedAt = null;

    #[ORM\Column]
    private ?int $UserId = null;

    #[ORM\ManyToOne(inversedBy: 'replies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Discussion $Discussion = null;

    #[ORM\Column(type: "integer", options: ["default" => 0])]
    private int $likes = 0;

    #[ORM\Column(type: "integer", options: ["default" => 0])]
    private int $dislikes = 0;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeInterface $CreatedAt): static
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->UserId;
    }

    public function setUserId(int $UserId): static
    {
        $this->UserId = $UserId;

        return $this;
    }

    public function getDiscussion(): ?Discussion
    {
        return $this->Discussion;
    }

    public function setDiscussion(?Discussion $Discussion): static
    {
        $this->Discussion = $Discussion;

        return $this;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }

    // ✅ Setter for Likes
    public function setLikes(int $likes): self
    {
        $this->likes = $likes;
        return $this;
    }

    // ✅ Getter for Dislikes
    public function getDislikes(): int
    {
        return $this->dislikes;
    }

    // ✅ Setter for Dislikes
    public function setDislikes(int $dislikes): self
    {
        $this->dislikes = $dislikes;
        return $this;
    }
}
