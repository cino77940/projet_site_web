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
        $sousCategorie->setNom('Montages de meubles');
        $sousCategorie->setSlug('montages-de-meubles');
        $sousCategorie->setImageName('montages-de-meubles.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Pose de cuisine');
        $sousCategorie->setSlug('pose-de-cuisine');
        $sousCategorie->setImageName('pose-de-cuisine.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Rénovation de salle de bain');
        $sousCategorie->setSlug('renovation-de-salle-de-bain');
        $sousCategorie->setImageName('renovation-de-salle-de-bain.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Sanitaires');
        $sousCategorie->setSlug('sanitaires');
        $sousCategorie->setImageName('sanitaires.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Poses et fixations');
        $sousCategorie->setSlug('poses-et-fixations');
        $sousCategorie->setImageName('poses-et-fixations.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Revêtements de sols');
        $sousCategorie->setSlug('revetements-de-sols');
        $sousCategorie->setImageName('revetements-de-sols.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Peinture/Revêtement mural');
        $sousCategorie->setSlug('peinture-revetement-mural');
        $sousCategorie->setImageName('peinture-revetement-mural.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Murs/Cloisons');
        $sousCategorie->setSlug('murs-cloisons');
        $sousCategorie->setImageName('murs-cloisons.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Plomberie');
        $sousCategorie->setSlug('plomberie');
        $sousCategorie->setImageName('plomberie.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Electricité/Electronique');
        $sousCategorie->setSlug('electricite-electronique');
        $sousCategorie->setImageName('electricite-electronique.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Poêle/cheminée');
        $sousCategorie->setSlug('poele-cheminee');
        $sousCategorie->setImageName('poele-cheminee.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Serrurerie et securité');
        $sousCategorie->setSlug('serrurerie-et-securite');
        $sousCategorie->setImageName('serrurerie-et-securite.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Menuiserie/Ebenisterie');
        $sousCategorie->setSlug('menuiserie-ebenisterie');
        $sousCategorie->setImageName('menuiserie-ebenisterie.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Pose de terrasse');
        $sousCategorie->setSlug('pose-de-terrasse');
        $sousCategorie->setImageName('pose-de-terrasse.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Pose de stores');
        $sousCategorie->setSlug('pose-de-stores');
        $sousCategorie->setImageName('pose-de-stores.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Fenêtres/Portes');
        $sousCategorie->setSlug('fenetres-portes');
        $sousCategorie->setImageName('fenetres-portes.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Volets');
        $sousCategorie->setSlug('volets');
        $sousCategorie->setImageName('volets.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Portail');
        $sousCategorie->setSlug('portail');
        $sousCategorie->setImageName('portail.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Porte de garage');
        $sousCategorie->setSlug('porte-de-garage');
        $sousCategorie->setImageName('porte-de-garage.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Piscine');
        $sousCategorie->setSlug('piscine');
        $sousCategorie->setImageName('piscine.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Autres');
        $sousCategorie->setSlug('autres');
        $sousCategorie->setImageName('autres.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_BRICOLAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);


        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Tonte de pelouse');
        $sousCategorie->setSlug('tonte-de-pelouse');
        $sousCategorie->setImageName('tonte-de-pelouse.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_JARDINAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Taille de haie');
        $sousCategorie->setSlug('taille-de-haie');
        $sousCategorie->setImageName('taille-de-haie.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_JARDINAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom("Coupe d'arbres");
        $sousCategorie->setSlug('coupe-d-arbres');
        $sousCategorie->setImageName('coupe-d-arbres.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_JARDINAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Plantation');
        $sousCategorie->setSlug('plantation');
        $sousCategorie->setImageName('plantation.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_JARDINAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Entretien du jardin');
        $sousCategorie->setSlug('entretien-du-jardin');
        $sousCategorie->setImageName('entretien-du-jardin.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_JARDINAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Autres');
        $sousCategorie->setSlug('autres');
        $sousCategorie->setImageName('autres1.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_JARDINAGE));
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
