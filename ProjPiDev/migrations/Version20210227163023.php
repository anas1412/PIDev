<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210227163023 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidat_employeur (candidat_id INT NOT NULL, employeur_id INT NOT NULL, INDEX IDX_7708F4858D0EB82 (candidat_id), INDEX IDX_7708F4855D7C53EC (employeur_id), PRIMARY KEY(candidat_id, employeur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidat_employeur ADD CONSTRAINT FK_7708F4858D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidat_employeur ADD CONSTRAINT FK_7708F4855D7C53EC FOREIGN KEY (employeur_id) REFERENCES employeur (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE candidat_employeur');
    }
}
