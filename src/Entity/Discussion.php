<?php

namespace App\Entity;

use App\Repository\DiscussionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiscussionRepository::class)]
class Discussion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CreatedAt = null;

    #[ORM\Column]
    private ?int $UserId = null;

    /**
     * @var Collection<int, Reply>
     */
    #[ORM\OneToMany(targetEntity: Reply::class, mappedBy: 'Discussion', orphanRemoval: true)]
    private Collection $replies;

    #[ORM\Column(type: "integer", options: ["default" => 0])]
    private int $likes = 0;

    #[ORM\Column(type: "integer", options: ["default" => 0])]
    private int $dislikes = 0;

    #[ORM\Column(length: 30)]
    private ?string $UserName = null;

    #[ORM\Column(length: 30, nullable: true)]
    public ?string $UserPhoto = null;
    public function __construct()
    {
        $this->replies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

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

    /**
     * @return Collection<int, Reply>
     */
    public function getReplies(): Collection
    {
        return $this->replies;
    }

    public function addReply(Reply $reply): static
    {
        if (!$this->replies->contains($reply)) {
            $this->replies->add($reply);
            $reply->setDiscussion($this);
        }

        return $this;
    }

    public function removeReply(Reply $reply): static
    {
        if ($this->replies->removeElement($reply)) {
            // set the owning side to null (unless already changed)
            if ($reply->getDiscussion() === $this) {
                $reply->setDiscussion(null);
            }
        }

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

    public function getUserName(): string
    {
        return $this->UserName;
    }

    // ✅ Setter for Dislikes
    public function setUserName(string $UserName): self
    {
        $this->UserName = $UserName;
        return $this;
    }

    public function getUserUserPhoto(): string
    {
        return $this->UserPhoto;
    }

    // ✅ Setter for Dislikes
    public function setUserPhoto(string $UserPhoto): self
    {
        $this->UserPhoto = $UserPhoto;
        return $this;
    }
    
}
