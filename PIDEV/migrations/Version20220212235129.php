<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212235129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE excursion (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, nom_excursion VARCHAR(255) NOT NULL, description_excursion VARCHAR(255) NOT NULL, date DATE NOT NULL, type_excursion VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, valabilite VARCHAR(255) NOT NULL, INDEX IDX_9B08E72F99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_excursion (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, id_excursion_id INT NOT NULL, date_reservation_excursion DATE NOT NULL, INDEX IDX_814F86B099DED506 (id_client_id), INDEX IDX_814F86B069755C1D (id_excursion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE excursion ADD CONSTRAINT FK_9B08E72F99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation_excursion ADD CONSTRAINT FK_814F86B099DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation_excursion ADD CONSTRAINT FK_814F86B069755C1D FOREIGN KEY (id_excursion_id) REFERENCES excursion (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_excursion DROP FOREIGN KEY FK_814F86B069755C1D');
        $this->addSql('DROP TABLE excursion');
        $this->addSql('DROP TABLE reservation_excursion');
        $this->addSql('ALTER TABLE client CHANGE nom nom VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE commentaire CHANGE objet objet VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE commentaire commentaire VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE id_reclamation id_reclamation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_de_reclamation type_de_reclamation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_reclamation description_reclamation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE restaurant CHANGE nom_restaurant nom_restaurant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse_restaurant adresse_restaurant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_restaurant description_restaurant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE voyage CHANGE destination destination VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom_voyage nom_voyage VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE duree_voyage duree_voyage VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE valabilite valabilite VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
