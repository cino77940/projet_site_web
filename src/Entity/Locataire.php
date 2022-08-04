<?php

namespace App\Entity;

use App\Repository\LocataireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocataireRepository::class)]
class Locataire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $produit;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'float')]
    private $prix_propose;

    #[ORM\Column(type: 'date')]
    private $disponibilite_souhaitee;

    #[ORM\Column(type: 'string', length: 255)]
    private $ville;

    #[ORM\Column(type: 'string', length: 255)]
    private $code_postal;

    #[ORM\Column(type: 'float')]
    private $latitude;

    #[ORM\Column(type: 'float')]
    private $longitude;

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

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

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

    public function getPrixPropose(): ?float
    {
        return $this->prix_propose;
    }

    public function setPrixPropose(float $prix_propose): self
    {
        $this->prix_propose = $prix_propose;

        return $this;
    }

    public function getDisponibiliteSouhaitee(): ?\DateTimeInterface
    {
        return $this->disponibilite_souhaitee;
    }

    public function setDisponibiliteSouhaitee(\DateTimeInterface $disponibilite_souhaitee): self
    {
        $this->disponibilite_souhaitee = $disponibilite_souhaitee;

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

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
