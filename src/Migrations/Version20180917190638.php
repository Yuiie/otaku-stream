<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180917190638 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE groupe_user (groupe_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_257BA9FE7A45358C (groupe_id), INDEX IDX_257BA9FEA76ED395 (user_id), PRIMARY KEY(groupe_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE groupe_user ADD CONSTRAINT FK_257BA9FE7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_user ADD CONSTRAINT FK_257BA9FEA76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C217597D3FE');
        $this->addSql('DROP INDEX UNIQ_4B98C217597D3FE ON groupe');
        $this->addSql('ALTER TABLE groupe DROP member_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE groupe_user');
        $this->addSql('ALTER TABLE groupe ADD member_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C217597D3FE FOREIGN KEY (member_id) REFERENCES fos_user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4B98C217597D3FE ON groupe (member_id)');
    }
}
