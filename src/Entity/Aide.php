<?php

namespace App\Entity;

use App\Repository\AideRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AideRepository::class)]
class Aide
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $sujet;

    #[ORM\Column(type: 'text')]
    private $message;

    #[ORM\Column(type: 'string', length: 255)]
    private $email_expediteur;

    #[ORM\Column(type: 'string', length: 255)]
    private $email_admin;

    #[ORM\Column(type: 'datetime')]
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getEmailExpediteur(): ?string
    {
        return $this->email_expediteur;
    }

    public function setEmailExpediteur(string $email_expediteur): self
    {
        $this->email_expediteur = $email_expediteur;

        return $this;
    }

    public function getEmailAdmin(): ?string
    {
        return $this->email_admin;
    }

    public function setEmailAdmin(string $email_admin): self
    {
        $this->email_admin = $email_admin;

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
}
