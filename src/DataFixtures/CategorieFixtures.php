<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public const CAT_BRICOLAGE = 'bricolage';
    public const CAT_JARDINAGE = 'jardinage';
    public const CAT_TACHES_ADMINISTRATIVES = 'taches-administratives';
    public const CAT_DEMENAGEMENT = 'demenagement';
    public const CAT_NETTOYAGE = 'nettoyage';
    public const CAT_MECANIQUE_REPARATION = 'mecanique-reparation';
    public const CAT_LOCATION= 'location';
    public const CAT_INFORMATIQUE = 'informatique';
    public const CAT_COURS_COACHING = 'cours-coaching';
    public const CAT_ANIMAUX = 'animaux';
    public const CAT_EVENEMENTIEL = 'evenementiel';
    public const CAT_LIVRAISON = 'livraison';
    public const CAT_AUTRES = 'autres';

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
        $this->addReference(self::CAT_TACHES_ADMINISTRATIVES, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Déménagement');
        $categorie->setSlug('déménagement');
        $categorie->setImageName('demenagement.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_DEMENAGEMENT, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Livraison');
        $categorie->setSlug('livraison');
        $categorie->setImageName('livraison.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_LIVRAISON, $categorie);
        

        $categorie = new Categorie();
        $categorie->setNom('Nettoyage');
        $categorie->setSlug('nettoyage');
        $categorie->setImageName('nettoyage.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_NETTOYAGE, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Mécanique/Réparation');
        $categorie->setSlug('mécanique');
        $categorie->setImageName('mecanique.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_MECANIQUE_REPARATION, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Location');
        $categorie->setSlug('location');
        $categorie->setImageName('location.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_LOCATION, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Informatique');
        $categorie->setSlug('informatique');
        $categorie->setImageName('informatique.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_INFORMATIQUE, $categorie);
        
        $categorie = new Categorie();
        $categorie->setNom('Cours/coaching');
        $categorie->setSlug('cours-coaching');
        $categorie->setImageName('cours-coaching.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_COURS_COACHING, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Animaux');
        $categorie->setSlug('Animaux');
        $categorie->setImageName('Animaux.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_ANIMAUX, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Evenementiel');
        $categorie->setSlug('evenementiel');
        $categorie->setImageName('evenementiel.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_EVENEMENTIEL, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Autres');
        $categorie->setSlug('autres');
        $categorie->setImageName('autres.jpeg');
        $categorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($categorie);
        $this->addReference(self::CAT_AUTRES, $categorie);

        $manager->flush();
    }
}
