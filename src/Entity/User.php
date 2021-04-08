<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Exception;
use Scheb\TwoFactorBundle\Model\BackupCodeInterface;
use Scheb\TwoFactorBundle\Model\Google\TwoFactorInterface;
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
class User implements UserInterface, TwoFactorInterface, BackupCodeInterface
{

    /**
     *
     */
    public const VALIDATED = true;
    private const _NUMBER_BACKUP_CODES = 5;

    /**
     *
     */
    public const SCORE = [
        'PRODUCT' => 5,
        'HEART' => 1,
        'COMMENT' => 2,
    ];

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
     * @ORM\OneToMany(targetEntity=Vote::class, mappedBy="user", orphanRemoval=true)
     */
    private $votes;

    /**
     * @ORM\Column(type="integer")
     */
    private $score;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(max="255")
     */
    private $description;

    /**
     * @ORM\Column(name="googleAuthenticatorSecret", type="string", nullable=true)
     */
    private $googleAuthenticatorSecret;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $backupCodes;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
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
    public function addProduct(Product $product): self
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
    public function removeProduct(Product $product): self
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
            $vote->setUser($this);
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
            if ($vote->getUser() === $this) {
                $vote->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return $this
     */
    public function setScore(int $score): self
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function decrementScore(int $value): self
    {
        if (($this->score - $value) >= 0) {
            $this->score -= $value;
        } else {
            $this->score = 0;
        }
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function incrementScore(int $value): self
    {
        $this->score += $value;
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
     * @param string|null $description
     * @return $this
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGoogleAuthenticatorEnabled(): bool
    {
        return $this->googleAuthenticatorSecret ? true : false;
    }

    /**
     * @return string
     */
    public function getGoogleAuthenticatorUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getGoogleAuthenticatorSecret(): ?string
    {
        return $this->googleAuthenticatorSecret;
    }

    /**
     * @param string|null $googleAuthenticatorSecret
     */
    public function setGoogleAuthenticatorSecret(?string $googleAuthenticatorSecret): void
    {
        $this->googleAuthenticatorSecret = $googleAuthenticatorSecret;
    }

    /**
     * @param array|null $codes
     * @return $this
     */
    public function setBackupCodes(?array $codes): self
    {
        $this->backupCodes = $codes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBackupCodes()
    {
        return $this->backupCodes;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function generateBackupCodes(): array
    {
        $codes = [];
        for ($i = 0; $i < User::_NUMBER_BACKUP_CODES; $i++) {
            $codes[$i] = bin2hex(random_bytes(4));
        }
        return $codes;
    }

    /**
     * @param string $code
     * @return bool
     */
    public function isBackupCode(string $code): bool
    {
        return in_array($code, $this->backupCodes);
    }

    /**
     * @param string $code
     */
    public function invalidateBackupCode(string $code): void
    {
        $key = array_search($code, $this->backupCodes);
        if ($key !== false) {
            unset($this->backupCodes[$key]);
        }
    }
}
