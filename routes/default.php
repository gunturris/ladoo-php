<?php
/**
 * Please add file in /app/Router.php
 */

use App\Router;
Router::get('/test', 'DefaultController@check')->setName('landing');
