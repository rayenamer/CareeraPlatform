<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217113248 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type_event (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement ADD type_event_id INT DEFAULT NULL, CHANGE discponibilite disponibilite TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EBC08CF77 FOREIGN KEY (type_event_id) REFERENCES type_event (id)');
        $this->addSql('CREATE INDEX IDX_B26681EBC08CF77 ON evenement (type_event_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EBC08CF77');
        $this->addSql('DROP TABLE type_event');
        $this->addSql('DROP INDEX IDX_B26681EBC08CF77 ON evenement');
        $this->addSql('ALTER TABLE evenement DROP type_event_id, CHANGE disponibilite discponibilite TINYINT(1) NOT NULL');
    }
}
