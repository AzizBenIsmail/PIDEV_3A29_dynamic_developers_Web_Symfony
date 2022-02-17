<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220217084112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, cin INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(50) NOT NULL, image VARCHAR(255) DEFAULT NULL, numero INT DEFAULT NULL, email VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, objet VARCHAR(255) NOT NULL, commentaire VARCHAR(255) NOT NULL, INDEX IDX_67F068BC99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE excursion (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, nom_excursion VARCHAR(255) NOT NULL, description_excursion VARCHAR(255) NOT NULL, date DATE NOT NULL, type_excursion VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, valabilite VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_9B08E72F99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, id_reclamation VARCHAR(255) NOT NULL, type_de_reclamation VARCHAR(255) NOT NULL, description_reclamation VARCHAR(255) NOT NULL, date DATE DEFAULT NULL, INDEX IDX_CE60640499DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_excursion (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, id_excursion_id INT NOT NULL, date_reservation_excursion DATE NOT NULL, INDEX IDX_814F86B099DED506 (id_client_id), INDEX IDX_814F86B069755C1D (id_excursion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_restaurant (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, id_restaurant_id INT NOT NULL, date_reservation DATE NOT NULL, nbr_personne INT NOT NULL, INDEX IDX_8B3FDB8B99DED506 (id_client_id), INDEX IDX_8B3FDB8BFCFA10B (id_restaurant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_voyage (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, id_voyage_id INT NOT NULL, date_reservation DATE NOT NULL, travel_class VARCHAR(255) NOT NULL, age INT NOT NULL, INDEX IDX_776CC0CE99DED506 (id_client_id), INDEX IDX_776CC0CEE8FC5988 (id_voyage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, nom_restaurant VARCHAR(255) NOT NULL, adresse_restaurant VARCHAR(255) NOT NULL, num_tel_restaurant INT NOT NULL, description_restaurant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage (id INT AUTO_INCREMENT NOT NULL, id_client_id INT DEFAULT NULL, destination VARCHAR(255) NOT NULL, nom_voyage VARCHAR(255) NOT NULL, duree_voyage VARCHAR(255) NOT NULL, prix_voyage DOUBLE PRECISION NOT NULL, date DATE NOT NULL, valabilite VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_3F9D895599DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE excursion ADD CONSTRAINT FK_9B08E72F99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640499DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation_excursion ADD CONSTRAINT FK_814F86B099DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation_excursion ADD CONSTRAINT FK_814F86B069755C1D FOREIGN KEY (id_excursion_id) REFERENCES excursion (id)');
        $this->addSql('ALTER TABLE reservation_restaurant ADD CONSTRAINT FK_8B3FDB8B99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation_restaurant ADD CONSTRAINT FK_8B3FDB8BFCFA10B FOREIGN KEY (id_restaurant_id) REFERENCES restaurant (id)');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_776CC0CE99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_776CC0CEE8FC5988 FOREIGN KEY (id_voyage_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D895599DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC99DED506');
        $this->addSql('ALTER TABLE excursion DROP FOREIGN KEY FK_9B08E72F99DED506');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640499DED506');
        $this->addSql('ALTER TABLE reservation_excursion DROP FOREIGN KEY FK_814F86B099DED506');
        $this->addSql('ALTER TABLE reservation_restaurant DROP FOREIGN KEY FK_8B3FDB8B99DED506');
        $this->addSql('ALTER TABLE reservation_voyage DROP FOREIGN KEY FK_776CC0CE99DED506');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D895599DED506');
        $this->addSql('ALTER TABLE reservation_excursion DROP FOREIGN KEY FK_814F86B069755C1D');
        $this->addSql('ALTER TABLE reservation_restaurant DROP FOREIGN KEY FK_8B3FDB8BFCFA10B');
        $this->addSql('ALTER TABLE reservation_voyage DROP FOREIGN KEY FK_776CC0CEE8FC5988');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE excursion');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reservation_excursion');
        $this->addSql('DROP TABLE reservation_restaurant');
        $this->addSql('DROP TABLE reservation_voyage');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE voyage');
    }
}
