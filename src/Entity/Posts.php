<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostsRepository")
 * @UniqueEntity(
 *     fields={"title"},
 *     message="This title already exists in the database"
 * )
 */
class Posts
{

    public const VALIDATED = 1;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timePublication;

    /**
     * @ORM\Column(type="integer")
     */
    private $idLocation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $validated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTimePublication(): ?\DateTimeInterface
    {
        return $this->timePublication;
    }

    public function setTimePublication(\DateTimeInterface $timePublication): self
    {
        $this->timePublication = $timePublication;

        return $this;
    }

    public function getIdLocation(): ?int
    {
        return $this->idLocation;
    }

    public function setIdLocation(int $idLocation): self
    {
        $this->idLocation = $idLocation;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getValidated(): ?int
    {
        return $this->validated;
    }

    public function setValidated(int $validated): self
    {
        $this->validated = $validated;

        return $this;
    }

}
