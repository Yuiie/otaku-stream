<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180917194535 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE groupe_member (id INT AUTO_INCREMENT NOT NULL, member_id INT DEFAULT NULL, groupe_id INT DEFAULT NULL, confirm INT NOT NULL, INDEX IDX_1BDA06427597D3FE (member_id), INDEX IDX_1BDA06427A45358C (groupe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE groupe_member ADD CONSTRAINT FK_1BDA06427597D3FE FOREIGN KEY (member_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE groupe_member ADD CONSTRAINT FK_1BDA06427A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE groupe_member');
    }
}
