<?php

namespace App\DataFixtures;

use App\Entity\Demande;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class DemandeFixtures extends Fixture implements DependentFixtureInterface 
{
    public function load(ObjectManager $manager): void
    {
        $demande = new Demande();
        $demande->setUser($this->getReference(UserFixtures::JEAN_LOUIS));
        $demande->setTitre('Bricolage');
        $demande->setDescription('Bricolage');
        $demande->setStartDate(new \DateTimeImmutable());
        $demande->setLocalisation('Paris');
        $demande->setImageName('bricolage.jpg');
        $demande->setVehicule(true);
        $demande->setBudget(100);
        $manager->persist($demande);

        $demande = new Demande();
        $demande->setUser($this->getReference(UserFixtures::JEAN_LOUIS));
        $demande->setTitre('Jardinage');
        $demande->setDescription('Jardinage');
        $demande->setStartDate(new \DateTimeImmutable());
        $demande->setLocalisation('Paris');
        $demande->setImageName('jardinage.jpg');
        $demande->setVehicule(true);
        $demande->setBudget(250);
        $manager->persist($demande);

        $demande = new Demande();
        $demande->setUser($this->getReference(UserFixtures::JEAN_LOUIS));
        $demande->setTitre('Tâches administratives');
        $demande->setDescription('Tâches administratives');
        $demande->setStartDate(new \DateTimeImmutable());
        $demande->setLocalisation('Paris');
        $demande->setImageName('taches-administratives.jpg');
        $demande->setVehicule(true);
        $demande->setBudget(150);
        $manager->persist($demande);


        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
