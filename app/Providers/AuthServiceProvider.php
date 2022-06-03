<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        Gate::define('admin', function ($user) {
            return $user->role->name == 'admin';
        });

        Gate::define('test', function ($user, $item) {
            return  $item->role->name != 'admin' && $user->role->name == 'admin' ;
        });


        Gate::define('test2', function ($user, $item) {
            return  $item->role->name != 'admin' && $user->role->name == 'admin' ;
        });

        Gate::define('autre', function ($user, $item) {
            return  $item->role->name != 'admin' ||$item->role->name != 'webmaster' && $user->role->name != 'admin' ;
        });


    }
}
