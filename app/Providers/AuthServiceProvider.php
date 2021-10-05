<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
         Gate::define('user_create', function($user){
           return $user->role->nom === "admin";
         });
         Gate::define('user_editeur', function($user){
           return $user->role->nom !== "editeur";
         });
         Gate::define('user_webmaster', function($user){
           return $user->role->nom === "webmaster" ;
         });

    }
}
