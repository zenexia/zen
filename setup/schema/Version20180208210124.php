<?php declare(strict_types=1);

namespace migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180208210124 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $table = $schema->createTable("account_titles");

        $table->addColumn("id", "bigint", ["length" => 20, 'unsigned' => true, 'autoincrement'=>true]);
        $table->addColumn("id_account", "bigint", ["length" => 20, 'unsigned' => true]);
        $table->addColumn("name", "string", ["length" => 256]);
        $table->addColumn("created", "datetime", ["default" => "CURRENT_TIMESTAMP"]);

        $table->setPrimaryKey(["id"]);
        $table->addForeignKeyConstraint('accounts', ['id_account'], ["id"], ['onDelete'=>'CASCADE']);

    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('account_titles');

    }
}
