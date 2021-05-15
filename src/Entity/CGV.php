<?php

namespace App\Entity;

use App\Repository\CGVRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CGVRepository::class)
 */
class CGV
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
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $Preambule;

    /**
     * @ORM\Column(type="text")
     */
    private $Article1;

    /**
     * @ORM\Column(type="text")
     */
    private $Article2;

    /**
     * @ORM\Column(type="text")
     */
    private $Article3;

    /**
     * @ORM\Column(type="text")
     */
    private $Article4;

    /**
     * @ORM\Column(type="text")
     */
    private $Article5;

    /**
     * @ORM\Column(type="text")
     */
    private $Article6;

    /**
     * @ORM\Column(type="text")
     */
    private $Article7;

    /**
     * @ORM\Column(type="text")
     */
    private $Article8;

    /**
     * @ORM\Column(type="text")
     */
    private $Article9;

    /**
     * @ORM\Column(type="text")
     */
    private $Article10;

    /**
     * @ORM\Column(type="text")
     */
    private $Article11;

    /**
     * @ORM\Column(type="text")
     */
    private $Article12;

    /**
     * @ORM\Column(type="text")
     */
    private $Article13;

    /**
     * @ORM\Column(type="text")
     */
    private $Article14;

    /**
     * @ORM\Column(type="text")
     */
    private $Article15;

    /**
     * @ORM\Column(type="text")
     */
    private $Article16;

    /**
     * @ORM\Column(type="text")
     */
    private $Article17;

    /**
     * @ORM\Column(type="text")
     */
    private $Article18;

    /**
     * @ORM\Column(type="text")
     */
    private $Article19;

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

    public function getPreambule(): ?string
    {
        return $this->Preambule;
    }

    public function setPreambule(string $Preambule): self
    {
        $this->Preambule = $Preambule;

        return $this;
    }

    public function getArticle1(): ?string
    {
        return $this->Article1;
    }

    public function setArticle1(string $Article1): self
    {
        $this->Article1 = $Article1;

        return $this;
    }

    public function getArticle2(): ?string
    {
        return $this->Article2;
    }

    public function setArticle2(string $Article2): self
    {
        $this->Article2 = $Article2;

        return $this;
    }

    public function getArticle3(): ?string
    {
        return $this->Article3;
    }

    public function setArticle3(string $Article3): self
    {
        $this->Article3 = $Article3;

        return $this;
    }

    public function getArticle4(): ?string
    {
        return $this->Article4;
    }

    public function setArticle4(string $Article4): self
    {
        $this->Article4 = $Article4;

        return $this;
    }

    public function getArticle5(): ?string
    {
        return $this->Article5;
    }

    public function setArticle5(string $Article5): self
    {
        $this->Article5 = $Article5;

        return $this;
    }

    public function getArticle6(): ?string
    {
        return $this->Article6;
    }

    public function setArticle6(string $Article6): self
    {
        $this->Article6 = $Article6;

        return $this;
    }

    public function getArticle7(): ?string
    {
        return $this->Article7;
    }

    public function setArticle7(string $Article7): self
    {
        $this->Article7 = $Article7;

        return $this;
    }

    public function getArticle8(): ?string
    {
        return $this->Article8;
    }

    public function setArticle8(string $Article8): self
    {
        $this->Article8 = $Article8;

        return $this;
    }

    public function getArticle9(): ?string
    {
        return $this->Article9;
    }

    public function setArticle9(string $Article9): self
    {
        $this->Article9 = $Article9;

        return $this;
    }

    public function getArticle10(): ?string
    {
        return $this->Article10;
    }

    public function setArticle10(string $Article10): self
    {
        $this->Article10 = $Article10;

        return $this;
    }

    public function getArticle11(): ?string
    {
        return $this->Article11;
    }

    public function setArticle11(string $Article11): self
    {
        $this->Article11 = $Article11;

        return $this;
    }

    public function getArticle12(): ?string
    {
        return $this->Article12;
    }

    public function setArticle12(string $Article12): self
    {
        $this->Article12 = $Article12;

        return $this;
    }

    public function getArticle13(): ?string
    {
        return $this->Article13;
    }

    public function setArticle13(string $Article13): self
    {
        $this->Article13 = $Article13;

        return $this;
    }

    public function getArticle14(): ?string
    {
        return $this->Article14;
    }

    public function setArticle14(string $Article14): self
    {
        $this->Article14 = $Article14;

        return $this;
    }

    public function getArticle15(): ?string
    {
        return $this->Article15;
    }

    public function setArticle15(string $Article15): self
    {
        $this->Article15 = $Article15;

        return $this;
    }

    public function getArticle16(): ?string
    {
        return $this->Article16;
    }

    public function setArticle16(string $Article16): self
    {
        $this->Article16 = $Article16;

        return $this;
    }

    public function getArticle17(): ?string
    {
        return $this->Article17;
    }

    public function setArticle17(string $Article17): self
    {
        $this->Article17 = $Article17;

        return $this;
    }

    public function getArticle18(): ?string
    {
        return $this->Article18;
    }

    public function setArticle18(string $Article18): self
    {
        $this->Article18 = $Article18;

        return $this;
    }

    public function getArticle19(): ?string
    {
        return $this->Article19;
    }

    public function setArticle19(string $Article19): self
    {
        $this->Article19 = $Article19;

        return $this;
    }
}
