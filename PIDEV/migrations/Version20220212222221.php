<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212222221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, objet VARCHAR(255) NOT NULL, commentaire VARCHAR(255) NOT NULL, INDEX IDX_67F068BC99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_restaurant (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, id_restaurant_id INT NOT NULL, date_reservation DATE NOT NULL, nbr_personne INT NOT NULL, INDEX IDX_8B3FDB8B99DED506 (id_client_id), INDEX IDX_8B3FDB8BFCFA10B (id_restaurant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, nom_restaurant VARCHAR(255) NOT NULL, adresse_restaurant VARCHAR(255) NOT NULL, num_tel_restaurant INT NOT NULL, description_restaurant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation_restaurant ADD CONSTRAINT FK_8B3FDB8B99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation_restaurant ADD CONSTRAINT FK_8B3FDB8BFCFA10B FOREIGN KEY (id_restaurant_id) REFERENCES restaurant (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_restaurant DROP FOREIGN KEY FK_8B3FDB8BFCFA10B');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE reservation_restaurant');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('ALTER TABLE client CHANGE nom nom VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE id_reclamation id_reclamation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_de_reclamation type_de_reclamation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_reclamation description_reclamation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
