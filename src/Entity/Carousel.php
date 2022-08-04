<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CarouselRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: CarouselRepository::class)]
class Carousel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $image_name;
    

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $titre;

    #[ORM\Column(type: 'text', nullable: true)]
    private $texte;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $updated_at;

    #[ORM\ManyToOne(targetEntity: Home::class, inversedBy: 'carousels')]
    private $home;


      // ====================================================== //
    // ==================== CONSTRUCTEUR ==================== //
    // ====================================================== //
    public function __construct()
    {
    }

    // ====================================================== //
    // ==================== MAGIC METHOD ==================== //
    // ====================================================== //
    public function __toString()
{
    return $this->titre;
}

 // ====================================================== //
    // ==================== GETTERS/SETTERS ================= //
    // ====================================================== //
    public function getId(): ?int
    {
        return $this->id;
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

    // /**
    //  * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
    //  * of 'UploadedFile' is injected into this setter to trigger the update. If this
    //  * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
    //  * must be able to accept an instance of 'File' as the bundle will inject one here
    //  * during Doctrine hydration.
    //  *
    //  * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
    //  */
    // public function setImageFile(?File $imageFile = null): void
    // {
    //     $this->imageFile = $imageFile;

    //     if (null !== $imageFile) {
    //         // It is required that at least one field changes if you are using doctrine
    //         // otherwise the event listeners won't be called and the file is lost
    //         $this->updatedAt = new \DateTimeImmutable();
    //     }
    // }
    // public function getImageFile(): ?File
    // {
    //     return $this->imageFile;
    // }


    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(?string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getHome(): ?Home
    {
        return $this->home;
    }

    public function setHome(?Home $home): self
    {
        $this->home = $home;

        return $this;
    }
}
