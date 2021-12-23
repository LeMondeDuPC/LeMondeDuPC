<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartnerRepository")
 * @ORM\Table(name="partners")
 * @UniqueEntity(
 *     fields={"name"},
 *     message="This link already exists in the database"
 * )
 * @UniqueEntity(
 *     fields={"link"},
 *     message="This link already exists in the database"
 * )
 */
class Partner
{

    public const RSS_ITEM_PER_PARTNER = 3;

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
     * @Assert\Length(min="1", max="100")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank
     * @Assert\Url
     * @Assert\Length(min="1", max="200")
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Type("string")
     * @Assert\Length(min="20", max="255")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     * @Assert\Type("bool")
     */
    private $rss;

    /**
     * @ORM\Column(type="boolean")
     * @Assert\Type("bool")
     */
    private $visibled_in_list;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     * @return $this
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;

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

    public function getRss(): ?bool
    {
        return $this->rss;
    }

    public function setRss(bool $rss): self
    {
        $this->rss = $rss;

        return $this;
    }

    public function getVisibledInList(): ?bool
    {
        return $this->visibled_in_list;
    }

    public function setVisibledInList(bool $visibled_in_list): self
    {
        $this->visibled_in_list = $visibled_in_list;

        return $this;
    }
}
