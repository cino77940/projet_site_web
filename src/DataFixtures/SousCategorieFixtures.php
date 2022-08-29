<?php

namespace App\DataFixtures;

use App\Entity\SousCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

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

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategorieFixtures::class,
        ];
    }
}
