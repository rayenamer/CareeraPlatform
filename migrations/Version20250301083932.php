<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250301083932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, type_event_id INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, date DATETIME NOT NULL, lieu VARCHAR(255) NOT NULL, disponibilite TINYINT(1) NOT NULL, image_url VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, user_id INT DEFAULT NULL, participants_ids JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', INDEX IDX_B26681EBC08CF77 (type_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_event (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EBC08CF77 FOREIGN KEY (type_event_id) REFERENCES type_event (id)');
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3B80E95E18');
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3BBE6CAE90');
        $this->addSql('ALTER TABLE demande_mission DROP FOREIGN KEY FK_A0904993AF78A772');
        $this->addSql('ALTER TABLE notificationfreelencer DROP FOREIGN KEY FK_52DB916ABE6CAE90');
        $this->addSql('DROP TABLE candidaturemission');
        $this->addSql('DROP TABLE demande_mission');
        $this->addSql('DROP TABLE missionfreelencer');
        $this->addSql('DROP TABLE notificationfreelencer');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidaturemission (id INT AUTO_INCREMENT NOT NULL, mission_id INT DEFAULT NULL, demande_id INT DEFAULT NULL, etat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, score INT DEFAULT NULL, userid VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_56CFA3B80E95E18 (demande_id), INDEX IDX_56CFA3BBE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE demande_mission (id INT AUTO_INCREMENT NOT NULL, offremission_id INT DEFAULT NULL, message LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, portfolio VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, status VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, userid VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_A0904993AF78A772 (offremission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE missionfreelencer (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, prix DOUBLE PRECISION DEFAULT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, datelimite VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, specialite VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE notificationfreelencer (id INT AUTO_INCREMENT NOT NULL, mission_id INT DEFAULT NULL, datepub DATETIME NOT NULL, date DATETIME DEFAULT NULL, userid VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_52DB916ABE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3B80E95E18 FOREIGN KEY (demande_id) REFERENCES demande_mission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3BBE6CAE90 FOREIGN KEY (mission_id) REFERENCES missionfreelencer (id)');
        $this->addSql('ALTER TABLE demande_mission ADD CONSTRAINT FK_A0904993AF78A772 FOREIGN KEY (offremission_id) REFERENCES missionfreelencer (id)');
        $this->addSql('ALTER TABLE notificationfreelencer ADD CONSTRAINT FK_52DB916ABE6CAE90 FOREIGN KEY (mission_id) REFERENCES missionfreelencer (id)');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EBC08CF77');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE type_event');
    }
}
