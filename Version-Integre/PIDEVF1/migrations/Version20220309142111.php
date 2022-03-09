<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309142111 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post_like (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, client_id INT DEFAULT NULL, INDEX IDX_653627B84B89032C (post_id), INDEX IDX_653627B819EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT FK_653627B84B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT FK_653627B819EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD posts_id INT DEFAULT NULL, CHANGE objet objet VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCD5E258C5 FOREIGN KEY (posts_id) REFERENCES post (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCD5E258C5 ON commentaire (posts_id)');
        $this->addSql('ALTER TABLE post ADD visibilite VARCHAR(50) NOT NULL, ADD image_p VARCHAR(255) DEFAULT NULL, CHANGE client_id client_id INT DEFAULT NULL, CHANGE date_p date_p DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE post_like');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCD5E258C5');
        $this->addSql('DROP INDEX IDX_67F068BCD5E258C5 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP posts_id, CHANGE objet objet VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE post DROP visibilite, DROP image_p, CHANGE client_id client_id INT NOT NULL, CHANGE date_p date_p DATE NOT NULL');
    }
}
