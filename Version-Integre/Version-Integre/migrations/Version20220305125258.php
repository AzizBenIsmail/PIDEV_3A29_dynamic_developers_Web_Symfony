<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305125258 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_excursion (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, excursion_id INT NOT NULL, date_reservation_excursion DATE NOT NULL, INDEX IDX_814F86B019EB6921 (client_id), INDEX IDX_814F86B04AB4296F (excursion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_restaurant (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, restaurant_id INT NOT NULL, date_reservation DATE NOT NULL, nbr_personne INT NOT NULL, INDEX IDX_8B3FDB8B19EB6921 (client_id), INDEX IDX_8B3FDB8BB1E7706E (restaurant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_voyage (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, voyage_id INT NOT NULL, date_reservation DATE NOT NULL, travel_class VARCHAR(255) NOT NULL, age INT NOT NULL, INDEX IDX_776CC0CE19EB6921 (client_id), INDEX IDX_776CC0CE68C9E5AF (voyage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation_excursion ADD CONSTRAINT FK_814F86B019EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation_excursion ADD CONSTRAINT FK_814F86B04AB4296F FOREIGN KEY (excursion_id) REFERENCES excursion (id)');
        $this->addSql('ALTER TABLE reservation_restaurant ADD CONSTRAINT FK_8B3FDB8B19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation_restaurant ADD CONSTRAINT FK_8B3FDB8BB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_776CC0CE19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_776CC0CE68C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservation_excursion');
        $this->addSql('DROP TABLE reservation_restaurant');
        $this->addSql('DROP TABLE reservation_voyage');
    }
}
