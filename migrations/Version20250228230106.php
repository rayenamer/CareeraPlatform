<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250228230106 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_mission DROP FOREIGN KEY FK_A0904993456C5646');
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3BFB88E14F');
        $this->addSql('ALTER TABLE demande_mission DROP FOREIGN KEY FK_A0904993FB88E14F');
        $this->addSql('CREATE TABLE notificationfreelencer (id INT AUTO_INCREMENT NOT NULL, mission_id INT DEFAULT NULL, datepub DATETIME NOT NULL, date DATETIME DEFAULT NULL, userid VARCHAR(255) NOT NULL, INDEX IDX_52DB916ABE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE notificationfreelencer ADD CONSTRAINT FK_52DB916ABE6CAE90 FOREIGN KEY (mission_id) REFERENCES missionfreelencer (id)');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CABE6CAE90');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAFB88E14F');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP INDEX IDX_56CFA3BFB88E14F ON candidaturemission');
        $this->addSql('ALTER TABLE candidaturemission ADD userid VARCHAR(255) NOT NULL, DROP utilisateur_id');
        $this->addSql('DROP INDEX IDX_A0904993FB88E14F ON demande_mission');
        $this->addSql('DROP INDEX IDX_A0904993456C5646 ON demande_mission');
        $this->addSql('ALTER TABLE demande_mission ADD userid VARCHAR(255) NOT NULL, DROP evaluation_id, DROP utilisateur_id');
        $this->addSql('ALTER TABLE missionfreelencer ADD userid VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, note INT NOT NULL, commentaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, mission_id INT DEFAULT NULL, message VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, datepub DATETIME NOT NULL, date DATETIME DEFAULT NULL, INDEX IDX_BF5476CAFB88E14F (utilisateur_id), INDEX IDX_BF5476CABE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE offre (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, prix DOUBLE PRECISION DEFAULT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, datelimite VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CABE6CAE90 FOREIGN KEY (mission_id) REFERENCES missionfreelencer (id)');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE notificationfreelencer DROP FOREIGN KEY FK_52DB916ABE6CAE90');
        $this->addSql('DROP TABLE notificationfreelencer');
        $this->addSql('ALTER TABLE candidaturemission ADD utilisateur_id INT DEFAULT NULL, DROP userid');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3BFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_56CFA3BFB88E14F ON candidaturemission (utilisateur_id)');
        $this->addSql('ALTER TABLE demande_mission ADD evaluation_id INT DEFAULT NULL, ADD utilisateur_id INT DEFAULT NULL, DROP userid');
        $this->addSql('ALTER TABLE demande_mission ADD CONSTRAINT FK_A0904993FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE demande_mission ADD CONSTRAINT FK_A0904993456C5646 FOREIGN KEY (evaluation_id) REFERENCES evaluation (id)');
        $this->addSql('CREATE INDEX IDX_A0904993FB88E14F ON demande_mission (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_A0904993456C5646 ON demande_mission (evaluation_id)');
        $this->addSql('ALTER TABLE missionfreelencer DROP userid');
    }
}
