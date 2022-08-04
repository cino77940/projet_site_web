<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture Implements FixtureGroupInterface

    
{    private $encodeur;
        
    public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface )
    {
        $this->encodeur = $userPasswordHasherInterface ;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail("cuneyt.tai@gmail.com");
        $user->setNom("Sakoglu");
        $user->setPrenom("Cuneyt");
        $user->setPseudo("Cino");
        $user->setDescription("Je suis étudiant en developpement web");
        $user->setNumeroMobile("0750817918");
        $user->setDateDeNaissance(new \DateTime("1990-05-07"));
        $user->setGenre("Homme");
        $user->setAdresse("14 imp du 24 juillet 1944");
        $user->setVille("La Brosse Montceaux");
        $user->setPays("France");
        $user->setCodePostal(77940);
        $user->setRoles(["ROLE_USER", "ROLE_ADMIN"]);
        $user->setPassword($this->encodeur->hashPassword($user, "123456"));
        
        $manager->persist($user);
        $manager->flush();
    }
    public static function getGroups(): array
    {
        return ['group1'];
    }
}
