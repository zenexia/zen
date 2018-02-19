<?php declare(strict_types=1);

namespace migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180208210153 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $table = $schema->createTable("languages");

        $table->addColumn("id", "bigint", ["length" => 20, 'unsigned' => true, 'autoincrement'=>true]);
        $table->addColumn("iso_name", "string", ["length" => 256]);
        $table->addColumn("native_name", "string", ["length" => 256]);

        $table->addColumn("code_2", "string", ["length" => 2]);
        $table->addColumn("code_3", "string", ["length" => 3]);
        $table->addColumn("code_3b", "string", ["length" => 3]);

        $table->addColumn("created", "datetime", ["default" => "CURRENT_TIMESTAMP"]);

        $table->setPrimaryKey(["id"]);

    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('languages');
    }
}
