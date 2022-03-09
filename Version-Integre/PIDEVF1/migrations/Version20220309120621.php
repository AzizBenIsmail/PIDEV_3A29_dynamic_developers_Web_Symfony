<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309120621 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_excursion DROP FOREIGN KEY FK_814F86B04AB4296F');
        $this->addSql('DROP INDEX IDX_814F86B04AB4296F ON reservation_excursion');
        $this->addSql('ALTER TABLE reservation_excursion ADD id_excursion_id INT DEFAULT NULL, ADD email VARCHAR(255) NOT NULL, ADD nb INT DEFAULT NULL, DROP excursion_id, CHANGE client_id client_id INT DEFAULT NULL, CHANGE date_reservation_excursion date_reservation_excursion DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_excursion ADD CONSTRAINT FK_814F86B069755C1D FOREIGN KEY (id_excursion_id) REFERENCES excursion (id)');
        $this->addSql('CREATE INDEX IDX_814F86B069755C1D ON reservation_excursion (id_excursion_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_excursion DROP FOREIGN KEY FK_814F86B069755C1D');
        $this->addSql('DROP INDEX IDX_814F86B069755C1D ON reservation_excursion');
        $this->addSql('ALTER TABLE reservation_excursion ADD excursion_id INT NOT NULL, DROP id_excursion_id, DROP email, DROP nb, CHANGE client_id client_id INT NOT NULL, CHANGE date_reservation_excursion date_reservation_excursion DATE NOT NULL');
        $this->addSql('ALTER TABLE reservation_excursion ADD CONSTRAINT FK_814F86B04AB4296F FOREIGN KEY (excursion_id) REFERENCES excursion (id)');
        $this->addSql('CREATE INDEX IDX_814F86B04AB4296F ON reservation_excursion (excursion_id)');
    }
}
