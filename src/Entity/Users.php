<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 * @UniqueEntity(
 *     fields={"username"},
 *     message="This username already exists in the database"
 * )
 * @UniqueEntity(
 *     fields={"email"},
 *     message="This email already exists in the database"
 * )
 */
class Users implements UserInterface
{
    public const VALIDATED = 1;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank
     * @Assert\Type("string")
     * @Assert\Length(min="1", max="100")
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Email
     * @Assert\Length(min="1", max="255")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type("string")
     */
    private $confirm_key;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time_publication;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Type("int")
     * @Assert\Choice({0, 1})
     */
    private $validated;

    /**
     * @ORM\OneToMany(targetEntity=Posts::class, mappedBy="user")
     */
    private $posts;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string)$this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string)$this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getConfirmKey(): ?string
    {
        return $this->confirm_key;
    }

    public function setConfirmKey(string $confirm_key): self
    {
        $this->confirm_key = $confirm_key;

        return $this;
    }

    public function getTimePublication(): ?\DateTimeInterface
    {
        return $this->time_publication;
    }

    public function setTimePublication(\DateTimeInterface $time_publication): self
    {
        $this->time_publication = $time_publication;

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

    /**
     * @return Collection|Posts[]
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }
}
