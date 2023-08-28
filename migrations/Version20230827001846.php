<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230827001846 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pricing_plan_benefit ADD pricing_plan2_id INT NOT NULL');
        $this->addSql('ALTER TABLE pricing_plan_benefit ADD CONSTRAINT FK_E6A62C5FE3F2A15B FOREIGN KEY (pricing_plan2_id) REFERENCES pricing_plan (id)');
        $this->addSql('CREATE INDEX IDX_E6A62C5FE3F2A15B ON pricing_plan_benefit (pricing_plan2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE pricing_plan_benefit DROP FOREIGN KEY FK_E6A62C5FE3F2A15B');
        $this->addSql('DROP INDEX IDX_E6A62C5FE3F2A15B ON pricing_plan_benefit');
        $this->addSql('ALTER TABLE pricing_plan_benefit DROP pricing_plan2_id');
    }
}
