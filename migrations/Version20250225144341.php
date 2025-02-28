<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250225144341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidaturemission (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, mission_id INT DEFAULT NULL, etat VARCHAR(255) NOT NULL, INDEX IDX_56CFA3BFB88E14F (utilisateur_id), INDEX IDX_56CFA3BBE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3BFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3BBE6CAE90 FOREIGN KEY (mission_id) REFERENCES offre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3BFB88E14F');
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3BBE6CAE90');
        $this->addSql('DROP TABLE candidaturemission');
        $this->addSql('DROP TABLE utilisateur');
    }
}
