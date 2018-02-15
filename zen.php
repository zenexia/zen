#!/usr/bin/env php
<?php
require __DIR__ . '/external-libraries/autoload.php';

echo PHP_EOL;

$command = $argv[1];

switch($command){
    case "build" : // alias = -b -u flag will run in update mode
        exec("composer install -d=./conf");
        echo shell_exec("npm --prefix ./conf run build");
        break;
    case "build-update" : // alias = -b
        exec("composer update -d=./conf");
        echo shell_exec("npm --prefix ./conf run build");
        break;
    case "unit-test" : // alias = -t -u, -t will run all tests, -t -u will run unit tests, -t -u -e will run unit and e2e tests
        exec("composer install -d=./conf");
        echo shell_exec("npm --prefix ./conf run build");
        break;
    case "g" : // generate c= controller, m: model, v: view, r:route, vo:value-object
        exec("composer install -d=./conf");
        echo shell_exec("npm --prefix ./conf run build");
        break;
    case "schema" : // g=generate, i=view info,
        exec("composer install -d=./conf");
        echo shell_exec("npm --prefix ./conf run build");
        break;
}

// -c -i = composer install, -c -u = composer update
// -n -i = npm install, -n -u = npm update
