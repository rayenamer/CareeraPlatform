<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250227123946 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidaturemission (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, mission_id INT DEFAULT NULL, demande_id INT DEFAULT NULL, etat VARCHAR(255) NOT NULL, score INT DEFAULT NULL, INDEX IDX_56CFA3BFB88E14F (utilisateur_id), INDEX IDX_56CFA3BBE6CAE90 (mission_id), UNIQUE INDEX UNIQ_56CFA3B80E95E18 (demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande_mission (id INT AUTO_INCREMENT NOT NULL, offremission_id INT DEFAULT NULL, evaluation_id INT DEFAULT NULL, utilisateur_id INT DEFAULT NULL, message LONGTEXT DEFAULT NULL, portfolio VARCHAR(255) DEFAULT NULL, status VARCHAR(20) NOT NULL, INDEX IDX_A0904993AF78A772 (offremission_id), INDEX IDX_A0904993456C5646 (evaluation_id), INDEX IDX_A0904993FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, note INT NOT NULL, commentaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE missionfreelencer (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, specialite VARCHAR(255) NOT NULL, date DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, mission_id INT DEFAULT NULL, message VARCHAR(255) NOT NULL, datepub DATETIME NOT NULL, date DATETIME DEFAULT NULL, INDEX IDX_BF5476CAFB88E14F (utilisateur_id), INDEX IDX_BF5476CABE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3BFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3BBE6CAE90 FOREIGN KEY (mission_id) REFERENCES missionfreelencer (id)');
        $this->addSql('ALTER TABLE candidaturemission ADD CONSTRAINT FK_56CFA3B80E95E18 FOREIGN KEY (demande_id) REFERENCES demande_mission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande_mission ADD CONSTRAINT FK_A0904993AF78A772 FOREIGN KEY (offremission_id) REFERENCES missionfreelencer (id)');
        $this->addSql('ALTER TABLE demande_mission ADD CONSTRAINT FK_A0904993456C5646 FOREIGN KEY (evaluation_id) REFERENCES evaluation (id)');
        $this->addSql('ALTER TABLE demande_mission ADD CONSTRAINT FK_A0904993FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CABE6CAE90 FOREIGN KEY (mission_id) REFERENCES missionfreelencer (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3BFB88E14F');
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3BBE6CAE90');
        $this->addSql('ALTER TABLE candidaturemission DROP FOREIGN KEY FK_56CFA3B80E95E18');
        $this->addSql('ALTER TABLE demande_mission DROP FOREIGN KEY FK_A0904993AF78A772');
        $this->addSql('ALTER TABLE demande_mission DROP FOREIGN KEY FK_A0904993456C5646');
        $this->addSql('ALTER TABLE demande_mission DROP FOREIGN KEY FK_A0904993FB88E14F');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAFB88E14F');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CABE6CAE90');
        $this->addSql('DROP TABLE candidaturemission');
        $this->addSql('DROP TABLE demande_mission');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE missionfreelencer');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
