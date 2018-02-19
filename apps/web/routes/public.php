<?php
use zen\routing\RouteCollection;
use zen\routing\RouteRedirect;
use zen\routing\RouteAction;
use zen\routing\RouteResource;

$rc =  new RouteCollection();

// Redirect to a lang specific page
$rc->add(new RouteRedirect('/', '/{lang}'));

// landing page
$rc->add(new RouteAction('/{lang}', 'Home'));

// Timesheet page
$rc->add(new RouteAction('/{lang}/dashboard', 'Dashboard'));

$rc->add(new RouteAction('/{lang}/metadata', 'MetaData'));

$rc->add(new RouteResource('/{lang}/projects', 'Project', ["index", "save"]));

$rc->add(new RouteResource('/{lang}/projects/{id}/data-sets', 'DataSet', ["index", "save", "show"]));

$rc->add(new RouteResource('/{lang}/projects/{id}', 'Project', ["show"]));

$rc->add(new RouteAction('/{lang}/logout', 'Logout'));

$rc->add(new RouteResource('/{lang}/tables/{id}', 'Table', ["show"]));
$rc->add(new RouteResource('/{lang}/column-settings/{id}', 'ColumnSetting', []));

$rc->add(new RouteResource('/{lang}/schema/{id}', 'Schema', ["show"]));

//login form
$rc->add(new RouteResource('/{lang}/login', 'Auth', ["index", "save"]));

// process login
$rc->add(new RouteAction(
    '/{lang}/auth/login', // uri
    'Auth\Authenticate', // controller
    'verifyCredentials', // method to be called
    ['POST'], // req method -> controller map, it also covers allowed methods
    'login' // route's friendly name
));


return $rc;