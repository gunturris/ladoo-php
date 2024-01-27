<?php
/**
 * Please add file in /app/Router.php
 */

use App\Router;
Router::get('/tests', 'DefaultController@check')->setName('landing');
Router::get('/full', 'TestController@body')->setName('fulltemplate');
Router::get('/test', 'TestController@index')->setName('testinf');
Router::get('/test/data', 'TestController@sample')->setName('sample-data');
