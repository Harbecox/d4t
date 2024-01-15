<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Broadcast::routes(['middleware' => ['auth:sanctum']]);

//        Broadcast::routes([config('basement.middleware')]);
        Broadcast::routes();
        //Broadcast::routes(['middleware' => ['web','auth','auth:organ']]);
        //Broadcast::routes(['middleware' => ['auth:web']]);
        
        //Broadcast::routes(['middleware' => ['web', 'admin']]);
        //Broadcast::routes(['middleware' => ['auth:sanctum']]);

        require base_path('routes/channels.php');
    }
}
