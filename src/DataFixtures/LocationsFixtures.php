<?php

namespace App\DataFixtures;

use App\Entity\Location;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class LocationsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $location = new Location();
        $manager->persist($location);
        $location->setNom("Tondeuse à gazon");
        $location->setImageName("image1.jpg");
        $location->setDescription("Tondeuse à gazon de marque Bosch avec moteur 4 temps"); 
        $location->setUpdatedAt(new \DateTimeImmutable());
        $location->setDate(new \DateTimeImmutable());
        $location->setPrix(30);
        $location->setLatitude(48.856614);
        $location->setLongitude(2.3522219);
        $manager->persist($location);

        $location = new Location();
        $manager->persist($location);
        $location->setNom("Ponceuse");
        $location->setImageName("image2.jpg");
        $location->setDescription("Ponceuse de marque Bosch avec moteur 4 temps");
        $location->setUpdatedAt(new \DateTimeImmutable());
        $location->setDate(new \DateTimeImmutable());
        $location->setPrix(20);
        $location->setLatitude(48.856614);
        $location->setLongitude(2.3522219);
        $manager->persist($location);

        $location = new Location();
        $manager->persist($location);
        $location->setNom("Scie à onglet");
        $location->setImageName("image3.jpg");
        $location->setDescription("Scie à onglet de marque Bosch avec moteur 4 temps");
        $location->setUpdatedAt(new \DateTimeImmutable());
        $location->setDate(new \DateTimeImmutable());
        $location->setPrix(40);
        $location->setLatitude(48.856614);
        $location->setLongitude(2.3522219);
        $manager->persist($location);

        $location = new Location();
        $manager->persist($location);
        $location->setNom("Scie circulaire");
        $location->setImageName("image4.jpg");
        $location->setDescription("Scie circulaire de marque Bosch avec moteur 4 temps");
        $location->setUpdatedAt(new \DateTimeImmutable());
        $location->setDate(new \DateTimeImmutable());
        $location->setPrix(50);
        $location->setLatitude(48.856614);
        $location->setLongitude(2.3522219);
        $manager->persist($location);

        $location = new Location();
        $manager->persist($location);
        $location->setNom("Scie sauteuse");
        $location->setImageName("image5.jpg");
        $location->setDescription("Scie sauteuse de marque Bosch avec moteur 4 temps");
        $location->setUpdatedAt(new \DateTimeImmutable());
        $location->setDate(new \DateTimeImmutable());
        $location->setPrix(60);
        $location->setLatitude(48.856614);
        $location->setLongitude(2.3522219);
        $manager->persist($location);
        
        $manager->flush();
    }
}
