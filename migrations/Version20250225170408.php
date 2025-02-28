<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250225170408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, demande_id INT DEFAULT NULL, INDEX IDX_E33BD3B880E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B880E95E18 FOREIGN KEY (demande_id) REFERENCES demande_mission (id)');
        $this->addSql('ALTER TABLE candidaturemission ADD demande_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3B80E95E18 FOREIGN KEY (demande_id) REFERENCES demande_mission (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_56CFA3B80E95E18 ON candidaturemission (demande_id)');
        $this->addSql('ALTER TABLE demande_mission ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_mission ADD CONSTRAINT FK_A0904993FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_A0904993FB88E14F ON demande_mission (utilisateur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B880E95E18');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3B80E95E18');
        $this->addSql('DROP INDEX UNIQ_56CFA3B80E95E18 ON candidaturemission');
        $this->addSql('ALTER TABLE candidaturemission DROP demande_id');
        $this->addSql('ALTER TABLE demande_mission DROP FOREIGN KEY FK_A0904993FB88E14F');
        $this->addSql('DROP INDEX IDX_A0904993FB88E14F ON demande_mission');
        $this->addSql('ALTER TABLE demande_mission DROP utilisateur_id');
    }
}
