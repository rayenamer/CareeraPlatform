<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210214433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offre (id INT AUTO_INCREMENT NOT NULL, typecontrat_id INT NOT NULL, typeoffre_id INT NOT NULL, nomposte VARCHAR(255) NOT NULL, entreprise VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, salaire DOUBLE PRECISION NOT NULL, disponibilite TINYINT(1) NOT NULL, INDEX IDX_AF86866FE179E612 (typecontrat_id), INDEX IDX_AF86866F10A1DED2 (typeoffre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_contrat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_offre (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866FE179E612 FOREIGN KEY (typecontrat_id) REFERENCES type_contrat (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F10A1DED2 FOREIGN KEY (typeoffre_id) REFERENCES type_offre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866FE179E612');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F10A1DED2');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE type_contrat');
        $this->addSql('DROP TABLE type_offre');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
