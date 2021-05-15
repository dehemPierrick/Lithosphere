<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210514204525 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cgv (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, preambule LONGTEXT NOT NULL, article1 LONGTEXT NOT NULL, article2 LONGTEXT NOT NULL, article3 LONGTEXT NOT NULL, article4 LONGTEXT NOT NULL, article5 LONGTEXT NOT NULL, article6 LONGTEXT NOT NULL, article7 LONGTEXT NOT NULL, article8 LONGTEXT NOT NULL, article9 LONGTEXT NOT NULL, article10 LONGTEXT NOT NULL, article11 LONGTEXT NOT NULL, article12 LONGTEXT NOT NULL, article13 LONGTEXT NOT NULL, article14 LONGTEXT NOT NULL, article15 LONGTEXT NOT NULL, article16 LONGTEXT NOT NULL, article17 LONGTEXT NOT NULL, article18 LONGTEXT NOT NULL, article19 LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cgv');
    }
}
