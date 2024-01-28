<?php
/**
 * Please add file in /app/Router.php
 */

use App\Router;
//Dummy Tester
Router::get('/tests', 'DefaultController@check')->setName('landing');
Router::get('/full', 'TestController@body')->setName('fulltemplate');
Router::get('/test', 'TestController@index')->setName('testinf');
Router::get('/test/data', 'TestController@sample')->setName('sample-data');


Router::get('/test/table', 'TestController@table_test')->setName('table-test-data');
//End dummy tester