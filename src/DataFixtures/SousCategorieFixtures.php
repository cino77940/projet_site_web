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

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Déménagement complet');
        $sousCategorie->setSlug('demenagement complet');
        $sousCategorie->setImageName('demenagement-complet.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_DEMENAGEMENT));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Aide au déménagement');
        $sousCategorie->setSlug('aide-au-demenagement');
        $sousCategorie->setImageName('aide-au-demenagement.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_DEMENAGEMENT));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Aide au déchargement');
        $sousCategorie->setSlug('aide-au-dechargement');
        $sousCategorie->setImageName('aide-au-dechargement.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_DEMENAGEMENT));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Autres');
        $sousCategorie->setSlug('autres');
        $sousCategorie->setImageName('autres2.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_DEMENAGEMENT));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Meubles en kit');
        $sousCategorie->setSlug('meubles-en-kit');
        $sousCategorie->setImageName('meubles-en-kit.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_LIVRAISON));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Electroménager');
        $sousCategorie->setSlug('electromenager');
        $sousCategorie->setImageName('electromenager.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_LIVRAISON));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Plis et colis');
        $sousCategorie->setSlug('plis-et-colis');
        $sousCategorie->setImageName('plis-et-colis.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_LIVRAISON));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Courses');
        $sousCategorie->setSlug('courses');
        $sousCategorie->setImageName('courses.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_LIVRAISON));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Autres');
        $sousCategorie->setSlug('autres');
        $sousCategorie->setImageName('autres3.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_LIVRAISON));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Ménage');
        $sousCategorie->setSlug('menage');
        $sousCategorie->setImageName('menage.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_NETTOYAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Lavage de voiture');
        $sousCategorie->setSlug('lavage-de-voiture');
        $sousCategorie->setImageName('lavage-de-voiture.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_NETTOYAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Repassage');
        $sousCategorie->setSlug('repassage');
        $sousCategorie->setImageName('repassage.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_NETTOYAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Autres');
        $sousCategorie->setSlug('autres');
        $sousCategorie->setImageName('autres4.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_NETTOYAGE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Entretien');
        $sousCategorie->setSlug('entretien');
        $sousCategorie->setImageName('entretien.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_MECANIQUE_REPARATION));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Réparation');
        $sousCategorie->setSlug('reparation');
        $sousCategorie->setImageName('reparation.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_MECANIQUE_REPARATION));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Dépannage');
        $sousCategorie->setSlug('depannage');
        $sousCategorie->setImageName('depannage.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_MECANIQUE_REPARATION));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Autres');
        $sousCategorie->setSlug('autres');
        $sousCategorie->setImageName('autres5.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_MECANIQUE_REPARATION));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Maintenance et réparation');
        $sousCategorie->setSlug('maintenance-et-reparation');
        $sousCategorie->setImageName('maintenance-et-reparation.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_INFORMATIQUE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Installation');
        $sousCategorie->setSlug('installation');
        $sousCategorie->setImageName('installation.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_INFORMATIQUE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Web design');
        $sousCategorie->setSlug('web-design');
        $sousCategorie->setImageName('web-design.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_INFORMATIQUE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Developpement');
        $sousCategorie->setSlug('developpement');
        $sousCategorie->setImageName('developpement.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_INFORMATIQUE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Graphisme');
        $sousCategorie->setSlug('graphisme');
        $sousCategorie->setImageName('graphisme.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_INFORMATIQUE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Autres');
        $sousCategorie->setSlug('autres');
        $sousCategorie->setImageName('autres6.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_INFORMATIQUE));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Photographe');
        $sousCategorie->setSlug('photographe');
        $sousCategorie->setImageName('photographe.jpeg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Chef à domicile');
        $sousCategorie->setSlug('chef-a-domicile');
        $sousCategorie->setImageName('chef-a-domicile.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Barman');
        $sousCategorie->setSlug('barman');
        $sousCategorie->setImageName('barman.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);


        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Serveur');
        $sousCategorie->setSlug('serveur');
        $sousCategorie->setImageName('serveur.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('DJ');
        $sousCategorie->setSlug('dj');
        $sousCategorie->setImageName('dj.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Animateur');
        $sousCategorie->setSlug('animateur');
        $sousCategorie->setImageName('animateur.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Traiteur');
        $sousCategorie->setSlug('traiteur');
        $sousCategorie->setImageName('traiteur.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Hote/Hotesse d\'accueil');
        $sousCategorie->setSlug('hote-hotesse-d-accueil');
        $sousCategorie->setImageName('hote-hotesse-d-accueil.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Autres');
        $sousCategorie->setSlug('autres');
        $sousCategorie->setImageName('autres7.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_EVENEMENTIEL));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Lavage chien');
        $sousCategorie->setSlug('lavage-chien');
        $sousCategorie->setImageName('lavage-chien.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_ANIMAUX));
        $sousCategorie->setUpdatedAt(new \DateTimeImmutable());
        $manager->persist($sousCategorie);

        $sousCategorie = new SousCategorie();
        $sousCategorie->setNom('Promenade chien');
        $sousCategorie->setSlug('promenade-chien');
        $sousCategorie->setImageName('promenade-chien.jpg');
        $sousCategorie->setCategorie($this->getReference(CategorieFixtures::CAT_ANIMAUX));
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
