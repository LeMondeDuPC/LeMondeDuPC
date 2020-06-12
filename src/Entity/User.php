<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="users")
 * @UniqueEntity(
 *     fields={"username"},
 *     message="This username already exists in the database"
 * )
 * @UniqueEntity(
 *     fields={"email"},
 *     message="This email already exists in the database"
 * )
 */
class User implements UserInterface
{
    /**
     *
     */
    public const VALIDATED = true;

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
    private $confirmKey;

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
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="user")
     */
    private $products;

    /**
     * @ORM\OneToOne(targetEntity=File::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private $file;

    /**
     * @ORM\Column(type="boolean")
     */
    private $newsletter;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return int|null
     */
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

    /**
     * @param string $username
     * @return $this
     */
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

    /**
     * @param array $roles
     * @return $this
     */
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

    /**
     * @param string $password
     * @return $this
     */
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

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getConfirmKey(): ?string
    {
        return $this->confirmKey;
    }

    /**
     * @param string $confirmKey
     * @return $this
     */
    public function setConfirmKey(string $confirmKey): self
    {
        $this->confirmKey = $confirmKey;

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
     * @return Collection|Product[]
     */
    public function getProducts(): Collection
    {
        return $this->products->filter(function (Product $product) {
            return $product->getValidated() === Product::VALIDATED;
        });
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function addProductLink(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setUser($this);
        }

        return $this;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function removeProductLink(Product $product): self
    {
        if ($this->products->contains($product)) {
            $this->products->removeElement($product);
            if ($product->getUser() === $this) {
                $product->setUser(null);
            }
        }

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
        $newUser = null === $file ? null : $this;
        if ($file->getUser() !== $newUser) {
            $file->setUser($newUser);
        }

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    /**
     * @param bool $newsletter
     * @return $this
     */
    public function setNewsletter(bool $newsletter): self
    {
        $this->newsletter = $newsletter;

        return $this;
    }
}
