<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305124611 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE excursion (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, nom_excursion VARCHAR(255) NOT NULL, description_excursion VARCHAR(255) NOT NULL, date DATE NOT NULL, type_excursion VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, valabilite VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_9B08E72F19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, objet VARCHAR(255) NOT NULL, type_de_reclamation VARCHAR(255) NOT NULL, description_reclamation VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX IDX_CE60640419EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, nom_restaurant VARCHAR(255) NOT NULL, adresse_restaurant VARCHAR(255) NOT NULL, num_tel_restaurant INT NOT NULL, description_restaurant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage (id INT AUTO_INCREMENT NOT NULL, clien_id INT DEFAULT NULL, destination VARCHAR(255) NOT NULL, nom_voyage VARCHAR(255) NOT NULL, duree_voyage VARCHAR(255) NOT NULL, date DATE NOT NULL, valabilite VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_3F9D89554B80641D (clien_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE excursion ADD CONSTRAINT FK_9B08E72F19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640419EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D89554B80641D FOREIGN KEY (clien_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE excursion');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE voyage');
    }
}
