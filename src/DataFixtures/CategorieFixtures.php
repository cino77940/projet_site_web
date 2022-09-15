<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public const CAT_BRICOLAGE = 'bricolage';
    public const CAT_JARDINAGE = 'jardinage';
    //
    public function load(ObjectManager $manager): void
    {
        $categorie = new Categorie();
        $categorie->setNom('Bricolage');
        $categorie->setSlug('bricolage');
        $categorie->setImageName('bricolage.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_BRICOLAGE, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Jardinage');
        $categorie->setSlug('jardinage');
        $categorie->setImageName('jardinage.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_JARDINAGE, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Tâches administratives');
        $categorie->setSlug('tâches-administratives');
        $categorie->setImageName('taches-administratives.jpeg');
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
        $categorie->setNom('Mécanique/Réparation');
        $categorie->setSlug('mécanique');
        $categorie->setImageName('mecanique.jpeg');
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
        $categorie->setNom('Animaux');
        $categorie->setSlug('Animaux');
        $categorie->setImageName('Animaux.jpeg');
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
