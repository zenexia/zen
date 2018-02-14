#!/usr/bin/env php
<?php
require __DIR__ . '/external-libraries/autoload.php';

echo PHP_EOL;

$command = $argv[1];

if ($command == "build")
{
    exec("composer install -d=./conf");
    echo shell_exec("npm --prefix ./conf run build");

}
