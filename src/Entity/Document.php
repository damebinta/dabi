<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Genre::class, inversedBy="documents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chemin;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Createdat;

    /**
     * @ORM\Column(type="integer")
     */
    private $actif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?Genre
    {
        return $this->type;
    }

    public function setType(?Genre $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getChemin(): ?string
    {
        return $this->chemin;
    }

    public function setChemin(string $chemin): self
    {
        $this->chemin = $chemin;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->Createdat;
    }

    public function setCreatedat(\DateTimeInterface $Createdat): self
    {
        $this->Createdat = $Createdat;

        return $this;
    }

    public function getActif(): ?int
    {
        return $this->actif;
    }

    public function setActif(int $actif): self
    {
        $this->actif = $actif;

        return $this;
    }
}
