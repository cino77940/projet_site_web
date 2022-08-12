<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220811080935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE home ADD home_faq_id INT NOT NULL');
        $this->addSql('ALTER TABLE home ADD CONSTRAINT FK_71D60CD071BAA17F FOREIGN KEY (home_faq_id) REFERENCES faq (id)');
        $this->addSql('CREATE INDEX IDX_71D60CD071BAA17F ON home (home_faq_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE home DROP FOREIGN KEY FK_71D60CD071BAA17F');
        $this->addSql('DROP INDEX IDX_71D60CD071BAA17F ON home');
        $this->addSql('ALTER TABLE home DROP home_faq_id');
    }
}
