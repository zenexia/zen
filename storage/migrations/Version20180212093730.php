<?php declare(strict_types=1);

namespace migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180212093730 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $table = $schema->createTable("language_regions");

        $table->addColumn("id", "bigint", ["length" => 20, 'unsigned' => true, 'autoincrement'=>true]);
        $table->addColumn("name", "string", ["length" => 256]);
        $table->addColumn("code", "string", ["length" => 2]);
        $table->addColumn("created", "datetime", ["default" => "CURRENT_TIMESTAMP"]);

        $table->setPrimaryKey(["id"]);

    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('language_regions');
    }
}
