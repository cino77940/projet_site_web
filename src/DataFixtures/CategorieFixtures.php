<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorie = new Categorie();
        $categorie->setNom('Bricolage');
        $categorie->setSlug('bricolage');
        $categorie->setImageName('bricolage.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Jardinage');
        $categorie->setSlug('jardinage');
        $categorie->setImageName('jardinage.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Montage de meubles');
        $categorie->setSlug('montage de meubles');
        $categorie->setImageName('montageDeMeuble.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Peinture');
        $categorie->setSlug('peinture');
        $categorie->setImageName('peinture.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Pose terrasse');
        $categorie->setSlug('pose terrasse');
        $categorie->setImageName('terrasse.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Déménagement');
        $categorie->setSlug('déménagement');
        $categorie->setImageName('demenagement.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Outils');
        $categorie->setSlug('outils');
        $categorie->setImageName('outils.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Nettoyage');
        $categorie->setSlug('nettoyage');
        $categorie->setImageName('nettoyage.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Mécanique');
        $categorie->setSlug('mécanique');
        $categorie->setImageName('mecanique.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Electricité');
        $categorie->setSlug('electricité');
        $categorie->setImageName('electricite.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Plomberie');
        $categorie->setSlug('plomberie');
        $categorie->setImageName('plomberie.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Location');
        $categorie->setSlug('location');
        $categorie->setImageName('location.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Informatique');
        $categorie->setSlug('informatique');
        $categorie->setImageName('informatique.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        
        $categorie = new Categorie();
        $categorie->setNom('Rénovation');
        $categorie->setSlug('renovation');
        $categorie->setImageName('renovation.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Menuiserie');
        $categorie->setSlug('menuiserie');
        $categorie->setImageName('menuiserie.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setNom('Autres');
        $categorie->setSlug('autres');
        $categorie->setImageName('autres.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);


        $manager->flush();
    }
}
