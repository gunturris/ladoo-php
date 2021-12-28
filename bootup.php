<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$Loader = (new josegonzalez\Dotenv\Loader(__DIR__ . '/.env'))
              ->parse()
              ->toEnv();

$capsule = new Capsule;
$capsule->addConnection([
   "driver" 	=>  $_ENV['DB_CONNECTION'],
   "host" 		=>  $_ENV['DB_HOST'],
   "database" 	=>  $_ENV['DB_DATABASE'],
   "username" 	=>  $_ENV['DB_USERNAME'],
   "password" 	=>  $_ENV['DB_PASSWORD'],
   "port" 	=>  $_ENV['DB_PORT']
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
 
