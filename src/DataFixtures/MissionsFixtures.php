<?php

namespace App\DataFixtures;

use App\Entity\Mission;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MissionsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $mission = new Mission();
        $manager->persist($mission);
        $mission->setNom("Portail + portillon");
        $mission->setImageName("image1.jpg");
        $mission->setDescription("Portail + portillon en bois à installer.. fondaion et piliers déjà existants");
        $mission->setType("Installation");
        $mission->setProduit("Portail + portillon");
        $mission->setEtat("En cours");
        $mission->setUpdatedAt(new \DateTimeImmutable());
        $mission->setDate(new \DateTimeImmutable());
        $mission->setVehicule("Camionette");
        $mission->setBudget(350);
        $mission->setLatitude(48.856614);
        $mission->setLongitude(2.3522219);
        $manager->persist($mission);

        $mission = new Mission();
        $manager->persist($mission);
        $mission->setNom("Mission 2");
        $mission->setImageName("image2.jpg");
        $mission->setDescription("Description de la mission 2");
        $mission->setType("Type de la mission 2");
        $mission->setProduit("Produit de la mission 2");
        $mission->setEtat("En cours");
        $mission->setUpdatedAt(new \DateTimeImmutable());
        $mission->setDate(new \DateTimeImmutable());
        $mission->setVehicule("Véhicule de la mission 2");
        $mission->setBudget(200);
        $mission->setLatitude(48.856614);
        $mission->setLongitude(2.3522219);
        $manager->persist($mission);
        
        $mission = new Mission();
        $manager->persist($mission);
        $mission->setNom("Mission 3");
        $mission->setImageName("image3.jpg");
        $mission->setDescription("Description de la mission 3");
        $mission->setType("Type de la mission 3");
        $mission->setProduit("Produit de la mission 3");
        $mission->setEtat("En cours");
        $mission->setUpdatedAt(new \DateTimeImmutable());
        $mission->setDate(new \DateTimeImmutable());
        $mission->setVehicule("Véhicule de la mission 3");
        $mission->setBudget(300);
        $mission->setLatitude(48.856614);
        $mission->setLongitude(2.3522219);
        $manager->persist($mission);

        $mission = new Mission();
        $manager->persist($mission);
        $mission->setNom("Mission 4");
        $mission->setImageName("image4.jpg");
        $mission->setDescription("Description de la mission 4");
        $mission->setType("Type de la mission 4");
        $mission->setProduit("Produit de la mission 4");
        $mission->setEtat("En cours");
        $mission->setUpdatedAt(new \DateTimeImmutable());
        $mission->setDate(new \DateTimeImmutable());
        $mission->setVehicule("Véhicule de la mission 4");
        $mission->setBudget(400);
        $mission->setLatitude(48.856614);
        $mission->setLongitude(2.3522219);
        $manager->persist($mission);

        $mission = new Mission();
        $manager->persist($mission);
        $mission->setNom("Mission 5");
        $mission->setImageName("image5.jpg");
        $mission->setDescription("Description de la mission 5");
        $mission->setType("Type de la mission 5");
        $mission->setProduit("Produit de la mission 5");
        $mission->setEtat("En cours");
        $mission->setUpdatedAt(new \DateTimeImmutable());
        $mission->setDate(new \DateTimeImmutable());
        $mission->setVehicule("Véhicule de la mission 5");
        $mission->setBudget(500);
        $mission->setLatitude(48.856614);
        $mission->setLongitude(2.3522219);
        $manager->persist($mission);

        $mission = new Mission();
        $manager->persist($mission);
        $mission->setNom("Mission 6");
        $mission->setImageName("image6.jpg");
        $mission->setDescription("Description de la mission 6");
        $mission->setType("Type de la mission 6");
        $mission->setProduit("Produit de la mission 6");
        $mission->setEtat("En cours");
        $mission->setUpdatedAt(new \DateTimeImmutable());
        $mission->setDate(new \DateTimeImmutable());
        $mission->setVehicule("Véhicule de la mission 6");
        $mission->setBudget(600);
        $mission->setLatitude(48.856614);
        $mission->setLongitude(2.3522219);
        $manager->persist($mission);

        $mission = new Mission();
        $manager->persist($mission);
        $mission->setNom("Mission 7");
        $mission->setImageName("image7.jpg");
        $mission->setDescription("Description de la mission 7");
        $mission->setType("Type de la mission 7");
        $mission->setProduit("Produit de la mission 7");
        $mission->setEtat("En cours");
        $mission->setUpdatedAt(new \DateTimeImmutable());
        $mission->setDate(new \DateTimeImmutable());
        $mission->setVehicule("Véhicule de la mission 7");
        $mission->setBudget(700);
        $mission->setLatitude(48.856614);
        $mission->setLongitude(2.3522219);
        $manager->persist($mission);

        $mission = new Mission();
        $manager->persist($mission);
        $mission->setNom("Mission 8");
        $mission->setImageName("image8.jpg");
        $mission->setDescription("Description de la mission 8");
        $mission->setType("Type de la mission 8");
        $mission->setProduit("Produit de la mission 8");
        $mission->setEtat("En cours");
        $mission->setUpdatedAt(new \DateTimeImmutable());
        $mission->setDate(new \DateTimeImmutable());
        $mission->setVehicule("Véhicule de la mission 8");
        $mission->setBudget(800);
        $mission->setLatitude(48.856614);
        $mission->setLongitude(2.3522219);
        $manager->persist($mission);

        $manager->flush();
    }
}
