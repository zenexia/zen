<?php
require __DIR__ . '/../../../vendor/autoload.php';

use zen\hiro\apps\web\App;

$app = new App(dirname(dirname(__FILE__)));

$app->addRoutes("../../../apps/web/routes/public.php");

$app->run("/html/");