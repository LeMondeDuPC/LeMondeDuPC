<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ORM\Table(name="products")
 * @UniqueEntity(
 *     fields={"title"},
 *     message="This title already exists in the database"
 * )
 */
class Product
{

    /**
     *
     */
    public const VALIDATED = true;

    /**
     *
     */
    public const ITEM_ON_PAGE = 2;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Type("string")
     * @Assert\Length(min="10", max="150")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Type("string")
     * @Assert\Length(min="20", max="255")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Type("string")
     * @Assert\Length(min="10")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timePublication;


    /**
     * @ORM\Column(type="boolean")
     * @Assert\Type("bool")
     */
    private $validated;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=true)
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity=File::class, mappedBy="product", cascade={"persist", "remove"})
     */
    private $file;

    /**
     * @ORM\OneToMany(targetEntity=Vote::class, mappedBy="product", orphanRemoval=true)
     */
    private $votes;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $timeUpdate;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->votes = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getTimePublication(): ?DateTimeInterface
    {
        return $this->timePublication;
    }

    /**
     * @param DateTimeInterface $timePublication
     * @return $this
     */
    public function setTimePublication(DateTimeInterface $timePublication): self
    {
        $this->timePublication = $timePublication;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getValidated(): ?bool
    {
        return $this->validated;
    }

    /**
     * @param bool $validated
     * @return $this
     */
    public function setValidated(bool $validated): self
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * @return Category|null
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * @param Category|null $category
     * @return $this
     */
    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     * @return $this
     */
    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getFile(): ?File
    {
        return $this->file;
    }

    /**
     * @param File|null $file
     * @return $this
     */
    public function setFile(?File $file): self
    {
        $this->file = $file;

        // set (or unset) the owning side of the relation if necessary
        $newProduct = null === $file ? null : $this;
        if ($file->getProduct() !== $newProduct) {
            $file->setProduct($newProduct);
        }

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getHearts(): ArrayCollection
    {
        $hearts = [];
        foreach ($this->votes as $vote) {
            if ($vote->getType() === Vote::TYPE_HEART) {
                array_push($hearts, $vote);
            }
        }
        return new ArrayCollection($hearts);
    }

    /**
     * @return ArrayCollection
     */
    public function getComments(): ArrayCollection
    {
        $comments = [];
        foreach ($this->votes as $vote) {
            if ($vote->getType() === Vote::TYPE_COMMENT) {
                array_push($comments, $vote);
            }
        }
        return new ArrayCollection($comments);
    }

    /**
     * @param Vote $vote
     * @return $this
     */
    public function addVote(Vote $vote): self
    {
        if (!$this->votes->contains($vote)) {
            $this->votes[] = $vote;
            $vote->setProduct($this);
        }

        return $this;
    }

    /**
     * @param Vote $vote
     * @return $this
     */
    public function removeVote(Vote $vote): self
    {
        if ($this->votes->contains($vote)) {
            $this->votes->removeElement($vote);
            // set the owning side to null (unless already changed)
            if ($vote->getProduct() === $this) {
                $vote->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getTimeUpdate(): ?\DateTimeInterface
    {
        return $this->timeUpdate;
    }

    /**
     * @param DateTimeInterface|null $timeUpdate
     * @return $this
     */
    public function setTimeUpdate(?\DateTimeInterface $timeUpdate): self
    {
        $this->timeUpdate = $timeUpdate;

        return $this;
    }
}
