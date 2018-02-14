<?php declare(strict_types=1);

namespace migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180208210111 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $table = $schema->createTable("accounts");

        $table->addColumn("id", "bigint", ["length" => 20, 'unsigned' => true, 'autoincrement'=>true]);
        $table->addColumn("created", "datetime", ["default" => "CURRENT_TIMESTAMP"]);

        $table->setPrimaryKey(["id"]);

    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('accounts');

    }
}
