<?php
require __DIR__ . '/../../external-libraries/autoload.php';

use zen\hiro\apps\web\App;
use zen\session\Session;

$s = new Session();

$app = new App(dirname(dirname(dirname(__FILE__))));

$app->addRoutes("/apps/web/routes/public.php");

$app->run("/apps/web/html-templates/");