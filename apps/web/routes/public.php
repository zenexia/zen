<?php
use Hiro\Routing\RouteCollection;
use Hiro\Routing\RouteRedirect;
use Hiro\Routing\RouteAction;
use Hiro\Routing\RouteResource;

$rc =  new RouteCollection();

// Redirect to a lang specific page
$rc->add(new RouteRedirect('/', '/{lang}'));

// landing page
$rc->add(new RouteAction('/{lang}', 'Home\Index'));

// Timesheet page
$rc->add(new RouteAction('/{lang}/timesheets', 'TimeSheets\Index'));


//login form
$rc->add(new RouteAction('/{lang}/login', 'Authentication\Index', 'formLogin'));

// process login
$rc->add(new RouteAction(
    '/{lang}/auth/login', // uri
    'Auth\Authenticate', // controller
    'verifyCredentials', // method to be called
    ['POST'], // req method -> controller map, it also covers allowed methods
    'login' // route's friendly name
));


return $rc;