<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240830143525 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sprint ADD projet_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sprint ADD CONSTRAINT FK_EF8055B7C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('CREATE INDEX IDX_EF8055B7C18272 ON sprint (projet_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sprint DROP FOREIGN KEY FK_EF8055B7C18272');
        $this->addSql('DROP INDEX IDX_EF8055B7C18272 ON sprint');
        $this->addSql('ALTER TABLE sprint DROP projet_id');
    }
}
