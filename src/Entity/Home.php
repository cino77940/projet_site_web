<?php

namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeRepository::class)]
class Home
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'boolean')]
    private $is_active;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre;

    #[ORM\Column(type: 'string', length: 255)]
    private $texte;

    #[ORM\Column(type: 'string', length: 255)]
    private $image_name;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $validite_debut;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $validite_fin;

    #[ORM\Column(type: 'string', length: 255)]
    private $logo;

    #[ORM\OneToMany(mappedBy: 'home', targetEntity: Carousel::class)]
    private $carousels;

    #[ORM\ManyToOne(targetEntity: Faq::class, inversedBy: 'homes')]
    #[ORM\JoinColumn(nullable: false)]
    private $homeFaq;

    public function __construct()
    {
        $this->carousels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): self
    {
        $this->is_active = $is_active;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

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

    public function getValiditeDebut(): ?\DateTimeInterface
    {
        return $this->validite_debut;
    }

    public function setValiditeDebut(?\DateTimeInterface $validite_debut): self
    {
        $this->validite_debut = $validite_debut;

        return $this;
    }

    public function getValiditeFin(): ?\DateTimeInterface
    {
        return $this->validite_fin;
    }

    public function setValiditeFin(?\DateTimeInterface $validite_fin): self
    {
        $this->validite_fin = $validite_fin;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return Collection<int, Carousel>
     */
    public function getCarousels(): Collection
    {
        return $this->carousels;
    }

    public function addCarousel(Carousel $carousel): self
    {
        if (!$this->carousels->contains($carousel)) {
            $this->carousels[] = $carousel;
            $carousel->setHome($this);
        }

        return $this;
    }

    public function removeCarousel(Carousel $carousel): self
    {
        if ($this->carousels->removeElement($carousel)) {
            // set the owning side to null (unless already changed)
            if ($carousel->getHome() === $this) {
                $carousel->setHome(null);
            }
        }

        return $this;
    }

    public function getHomeFaq(): ?Faq
    {
        return $this->homeFaq;
    }

    public function setHomeFaq(?Faq $homeFaq): self
    {
        $this->homeFaq = $homeFaq;

        return $this;
    }
}
