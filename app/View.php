<?php 
namespace App;

use Jenssegers\Blade\Blade;

class View extends Blade {

    public static function present($path , $datas ){
        
        $blade = new Blade( __DIR__ . '/../templates/', __DIR__ . '/../cache/views' , null); 
        return $blade->make($path, $datas)->render();
    }

}