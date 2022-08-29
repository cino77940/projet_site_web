<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220829135214 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande ADD categorie_id INT DEFAULT NULL, ADD sous_categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5365BF48 FOREIGN KEY (sous_categorie_id) REFERENCES sous_categorie (id)');
        $this->addSql('CREATE INDEX IDX_2694D7A5BCF5E72D ON demande (categorie_id)');
        $this->addSql('CREATE INDEX IDX_2694D7A5365BF48 ON demande (sous_categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5BCF5E72D');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5365BF48');
        $this->addSql('DROP INDEX IDX_2694D7A5BCF5E72D ON demande');
        $this->addSql('DROP INDEX IDX_2694D7A5365BF48 ON demande');
        $this->addSql('ALTER TABLE demande DROP categorie_id, DROP sous_categorie_id');
    }
}
