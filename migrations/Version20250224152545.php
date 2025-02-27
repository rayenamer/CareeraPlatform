<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250224152545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message ADD messager2 VARCHAR(100) NOT NULL, ADD messager1 VARCHAR(100) NOT NULL, DROP sender, DROP receiver');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message ADD sender VARCHAR(100) NOT NULL, ADD receiver VARCHAR(100) NOT NULL, DROP messager2, DROP messager1');
    }
}
