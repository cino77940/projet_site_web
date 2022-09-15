<?php

namespace App\DataFixtures;

use App\Entity\SousCategorie;
use App\DataFixtures\CategorieFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SousCategorieFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Petit bricolage');
        $sousCategorie->setSlug('petit-bricolage');
        $sousCategorie->setImageName('petit-bricolage.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Gros oeuvre');
        $sousCategorie->setSlug('gros-oeuvre');
        $sousCategorie->setImageName('gros-oeuvre.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Peinture');
        $sousCategorie->setSlug('peinture');
        $sousCategorie->setImageName('peinture.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Plomberie');
        $sousCategorie->setSlug('plomberie');
        $sousCategorie->setImageName('plomberie.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Electricité');
        $sousCategorie->setSlug('electricite');
        $sousCategorie->setImageName('electricite.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Menuiserie');
        $sousCategorie->setSlug('menuiserie');
        $sousCategorie->setImageName('menuiserie.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Jardinage');
        $sousCategorie->setSlug('jardinage');
        $sousCategorie->setImageName('jardinage.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Décoration');
        $sousCategorie->setSlug('decoration');
        $sousCategorie->setImageName('decoration.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Mobilier');
        $sousCategorie->setSlug('mobilier');
        $sousCategorie->setImageName('mobilier.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Cuisine');
        $sousCategorie->setSlug('cuisine');
        $sousCategorie->setImageName('cuisine.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);
        
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategorieFixtures::class,
        ];
    }
}
