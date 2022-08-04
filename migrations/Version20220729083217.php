<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220729083217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel ADD home_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE carousel ADD CONSTRAINT FK_1DD7470028CDC89C FOREIGN KEY (home_id) REFERENCES home (id)');
        $this->addSql('CREATE INDEX IDX_1DD7470028CDC89C ON carousel (home_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel DROP FOREIGN KEY FK_1DD7470028CDC89C');
        $this->addSql('DROP INDEX IDX_1DD7470028CDC89C ON carousel');
        $this->addSql('ALTER TABLE carousel DROP home_id');
    }
}
