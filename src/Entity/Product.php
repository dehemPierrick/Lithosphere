<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="float")
     */
    private $transport_price;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $illustration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_vertu1;

    /**
     * @ORM\Column(type="text")
     */
    private $vertus1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_vertu2;

    /**
     * @ORM\Column(type="text")
     */
    private $vertus2;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="text")
     */
    private $mots_clef;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTransportPrice():  ?float
    {
        return $this->transport_price;
    }

    public function setTransportPrice(float $transport_price): self
    {
        $this->transport_price = $transport_price;

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

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): self
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getDescriptionVertu1(): ?string
    {
        return $this->description_vertu1;
    }

    public function setDescriptionVertu1(string $description_vertu1): self
    {
        $this->description_vertu1 = $description_vertu1;

        return $this;
    }

    public function getVertus1(): ?string
    {
        return $this->vertus1;
    }

    public function setVertus1(string $vertus1): self
    {
        $this->vertus1 = $vertus1;

        return $this;
    }

    public function getDescriptionVertu2(): ?string
    {
        return $this->description_vertu2;
    }

    public function setDescriptionVertu2(string $description_vertu2): self
    {
        $this->description_vertu2 = $description_vertu2;

        return $this;
    }

    public function getVertus2(): ?string
    {
        return $this->vertus2;
    }

    public function setVertus2(string $vertus2): self
    {
        $this->vertus2 = $vertus2;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getMotsClef(): ?string
    {
        return $this->mots_clef;
    }

    public function setMotsClef(string $mots_clef): self
    {
        $this->mots_clef = $mots_clef;

        return $this;
    }
}
