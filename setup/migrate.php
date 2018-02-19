<?php
require (__DIR__ . '/../../../vendor/autoload.php');
/**
 * Command line script to run Migrations
 * Inspired by phar-cli-stup.php
 */

use Symfony\Component\Console;
use Doctrine\DBAL\Migrations\MigrationsVersion;
use Doctrine\DBAL\Migrations\Tools\Console\Command as MigrationsCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Helper\QuestionHelper;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;



// set DBAL Connection
$config = new Configuration();
$params = include "db.php";
$conn = DriverManager::getConnection($params, $config);

// Set current directory to application root so we can find config files
chdir(__DIR__ . '/storage');

// Instantiate console application
$cli = new Application('Doctrine Migrations', MigrationsVersion::VERSION());
$cli->setCatchExceptions(true);

$helperSet = new HelperSet();
$helperSet->set(new QuestionHelper(), 'dialog');
$cli->setHelperSet($helperSet);

// Add Migrations commands
$commands = array();
$commands[] = new MigrationsCommand\ExecuteCommand();
$commands[] = new MigrationsCommand\GenerateCommand();
$commands[] = new MigrationsCommand\LatestCommand();
$commands[] = new MigrationsCommand\MigrateCommand();
$commands[] = new MigrationsCommand\StatusCommand();
$commands[] = new MigrationsCommand\VersionCommand();

// remove the "schema:" prefix on each command name
foreach ($commands as $command) {
    $command->setName(str_replace('schema:', '', $command->getName()));
}
$cli->addCommands($commands);

// Run!
$cli->run();