<?php

namespace App\Entity;

use App\Repository\CommanditaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommanditaireRepository::class)]
class Commanditaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $image_name;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\Column(type: 'float')]
    private $prix;

    #[ORM\Column(type: 'date')]
    private $date_de_realisation;

    #[ORM\Column(type: 'date')]
    private $date_limite_de_realisation;

    #[ORM\Column(type: 'string', length: 255)]
    private $ville;

    #[ORM\Column(type: 'string', length: 255)]
    private $code_postal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->image_name;
    }

    public function setImageName(string $image_name): self
    {
        $this->image_name = $image_name;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateDeRealisation(): ?\DateTimeInterface
    {
        return $this->date_de_realisation;
    }

    public function setDateDeRealisation(\DateTimeInterface $date_de_realisation): self
    {
        $this->date_de_realisation = $date_de_realisation;

        return $this;
    }

    public function getDateLimiteDeRealisation(): ?\DateTimeInterface
    {
        return $this->date_limite_de_realisation;
    }

    public function setDateLimiteDeRealisation(\DateTimeInterface $date_limite_de_realisation): self
    {
        $this->date_limite_de_realisation = $date_limite_de_realisation;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }
}
