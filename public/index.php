<?php

// load composer dependencies
require '../vendor/autoload.php';

//Load bootapp
require_once '../bootup.php';
// Start the routing
\App\Router::start();
