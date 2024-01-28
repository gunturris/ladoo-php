<?php
/**
 * Please add file in /app/Router.php
 */

use App\Router;
//Dummy Tester
Router::get('/login', 'DefaultController@login_page')->setName('login-page');
Router::get('/full', 'TestController@body')->setName('fulltemplate');
Router::get('/test', 'TestController@index')->setName('testinf');
Router::get('/test/data', 'TestController@sample')->setName('sample-data');




Router::post('/test-success', 'TestController@alert_test')->setName('alert-test');

// API
Router::group([ 'prefix' => '/test'],   function () { 
    Router::get('/table', 'TestController@table_test')->setName('table-test-data');
    Router::get('/form', 'TestController@form_test')->setName('formulir-test-view');
    Router::post('/form', 'TestController@submit_test')->setName('formulir-test-view');
});
//End dummy tester