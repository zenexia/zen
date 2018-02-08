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
$rc->add(new RouteAction('/{lang}/time-sheets', 'TimeSheet'));


//login form
$rc->add(new RouteAction('/{lang}/login', 'Auth', 'formLogin'));

// process login
$rc->add(new RouteAction(
    '/{lang}/auth/login', // uri
    'Auth\Authenticate', // controller
    'verifyCredentials', // method to be called
    ['POST'], // req method -> controller map, it also covers allowed methods
    'login' // route's friendly name
));


return $rc;