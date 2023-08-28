<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230820202950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('CREATE TABLE pricing_plan (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // $this->addSql('CREATE TABLE pricing_plan_pricing_plan_feature (pricing_plan_id INT NOT NULL, pricing_plan_feature_id INT NOT NULL, INDEX IDX_D19087D429628C71 (pricing_plan_id), INDEX IDX_D19087D46C9002D8 (pricing_plan_feature_id), PRIMARY KEY(pricing_plan_id, pricing_plan_feature_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // $this->addSql('CREATE TABLE pricing_plan_benefit (id INT AUTO_INCREMENT NOT NULL, pricing_plan_id INT NOT NULL, name VARCHAR(50) NOT NULL, INDEX IDX_E6A62C5F29628C71 (pricing_plan_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // $this->addSql('CREATE TABLE pricing_plan_feature (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // $this->addSql('ALTER TABLE pricing_plan_pricing_plan_feature ADD CONSTRAINT FK_D19087D429628C71 FOREIGN KEY (pricing_plan_id) REFERENCES pricing_plan (id) ON DELETE CASCADE');
        // $this->addSql('ALTER TABLE pricing_plan_pricing_plan_feature ADD CONSTRAINT FK_D19087D46C9002D8 FOREIGN KEY (pricing_plan_feature_id) REFERENCES pricing_plan_feature (id) ON DELETE CASCADE');
        // $this->addSql('ALTER TABLE pricing_plan_benefit ADD CONSTRAINT FK_E6A62C5F29628C71 FOREIGN KEY (pricing_plan_id) REFERENCES pricing_plan (id)');
        // $this->addSql('DROP TABLE user');


        // $this->addSql(sql: "INSERT INTO pricing_plan VALUES(nextval('pricing_plan_id_seq'), 'Free', 0)");
        // $this->addSql(sql: "INSERT INTO pricing_plan VALUES(nextval('pricing_plan_id_seq'), 'Pro', 15)");
        // $this->addSql(sql: "INSERT INTO pricing_plan VALUES(nextval('pricing_plan_id_seq'), 'Entreprise', 29)");
        
        // $this->addSql(sql: "INSERT INTO pricing_plan (name, price) VALUES('Free', 0)");
        // $this->addSql(sql: "INSERT INTO pricing_plan (name, price) VALUES('Pro', 15)");
        // $this->addSql(sql: "INSERT INTO pricing_plan (name, price) VALUES('Entreprise', 29)");
        
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit (pricing_plan_id, name) VALUES(1, '10 users included')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit (pricing_plan_id, name) VALUES (1, '2 GB of storage');");
        


        // // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 1, '10 users included')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 1, '2 GB of storage')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 1, 'Email support')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 1, 'Help center access')");

        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 2, '20 users included')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 2, '10 GB of storage')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 2, 'Priority email support')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 2, 'Help center access')");

        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 3, '30 users included')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 3, '15 GB of storage')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 3, 'Phone and email support')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_benefit VALUES(nextval('pricing_plan_benefit_id_seq'), 3, 'Help center access')");

        // $this->addSql(sql: "INSERT INTO pricing_plan_feature VALUES(nextval('pricing_plan_feature_id_seq'), 'Public')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_feature VALUES(nextval('pricing_plan_feature_id_seq'), 'Private')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_feature VALUES(nextval('pricing_plan_feature_id_seq'), 'Permissions')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_feature VALUES(nextval('pricing_plan_feature_id_seq'), 'Sharing')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_feature VALUES(nextval('pricing_plan_feature_id_seq'), 'Unlimited members')");
        // $this->addSql(sql: "INSERT INTO pricing_plan_feature VALUES(nextval('pricing_plan_feature_id_seq'), 'Extra security')");

        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(1, 1)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(1, 3)");

        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(2, 1)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(2, 2)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(2, 3)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(2, 4)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(2, 5)");

        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(3, 1)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(3, 2)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(3, 3)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(3, 4)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(3, 5)");
        // $this->addSql(sql: "INSERT INTO pricing_plan_pricing_plan_feature VALUES(3, 6)");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        // $this->addSql('CREATE TABLE user (1 INT NOT NULL, 2 INT NOT NULL, 3 INT NOT NULL, 4 INT NOT NULL) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pricing_plan_pricing_plan_feature DROP FOREIGN KEY FK_D19087D429628C71');
        $this->addSql('ALTER TABLE pricing_plan_pricing_plan_feature DROP FOREIGN KEY FK_D19087D46C9002D8');
        $this->addSql('ALTER TABLE pricing_plan_benefit DROP FOREIGN KEY FK_E6A62C5F29628C71');
        $this->addSql('DROP TABLE pricing_plan');
        $this->addSql('DROP TABLE pricing_plan_pricing_plan_feature');
        $this->addSql('DROP TABLE pricing_plan_benefit');
        $this->addSql('DROP TABLE pricing_plan_feature');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
