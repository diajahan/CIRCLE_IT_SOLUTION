<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ChacheController extends Controller
{
    public function Caches(){
        Artisan::call('config:cache');
        echo 'Config Chached<br>';
        Artisan::call('route:cache');
        echo 'Route Chached <br>';
        Artisan::call('optimize');
        echo 'Optimize <br>';
    }

    // public function CacheClear(){
    //     Artisan::call('config:clear');
    //     echo 'Config Cleared <br>';
    //     Artisan::call('route:clear');
    //     echo 'Route Cleared <br>';
    //     Artisan::call('cache:clear');
    //     echo 'Cache Cleared <br>';
    //     Artisan::call('view:clear');
    //     echo 'View Cleared <br>';
    // }

    public function Optimize(){

        Artisan::call('optimize');
        echo 'Optimized';
    }

    public function ConfigChached(){
        Artisan::call('config:cache');
        echo 'Config Chached';

    }

    public function RouteChached(){
        Artisan::call('route:cache');
        echo 'Route Chached';
    }


    public function ConfigClear(){
        Artisan::call('config:clear');
        echo 'Config Cleared';
    }

    public function RouteClear(){
        Artisan::call('route:clear');
        echo 'Route Cleared';
    }

    public function onlyCacheCleare(){
        Artisan::call('cache:clear');
        echo 'Cache Cleared';
    }


    public function viewCleare(){
        Artisan::call('view:clear');
        echo 'View Cleared';
    }
    
    
   public function viewCache(){
            
         Artisan::call('view:cache');
        echo 'View Cached <br>';

    }

    



//  end of controller classs .......
}
