<?php

namespace App\Providers;

use App\Impersonate;
use Illuminate\Http\Request;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    // protected $policies = [
    //     'App\Model' => 'App\Policies\ModelPolicy',
    // ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }

    public function register()
    {
    }
}
