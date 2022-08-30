<?php

namespace App\DataFixtures;

use App\Entity\Demande;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class DemandeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $demande = new Demande();
        $demande->setTitre('Bricolage');
        $demande->setDescription('Bricolage');
        $demande->setStartDate(new \DateTimeImmutable());
        $demande->setLocalisation('Paris');
        $demande->setImageName('bricolage.jpg');
        $demande->setVehicule(true);
        $demande->setBudget(100);
        $manager->persist($demande);

        $manager->flush();
    }
}
