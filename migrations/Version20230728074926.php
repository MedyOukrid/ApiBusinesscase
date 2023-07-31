<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230728074926 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE nft ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE sous_categorie ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE transaction ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD slug VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE nft DROP slug');
        $this->addSql('ALTER TABLE user DROP slug');
        $this->addSql('ALTER TABLE categorie DROP slug');
        $this->addSql('ALTER TABLE transaction DROP slug');
        $this->addSql('ALTER TABLE sous_categorie DROP slug');
    }
}