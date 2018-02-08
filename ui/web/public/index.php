<?php
require __DIR__ . '/../../../vendor/autoload.php';
use Hiro\Apps\WebApplication;

$app = new WebApplication(dirname(dirname(__FILE__)));

$app->addRoutes("../../../apps/Web/routes/public.php");

$app->run("/html/");