<?php

namespace Arvice\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Arvice\Model' => 'Arvice\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($user){
            return $user->type === 'Admin';
        });

        Gate::define('isAuthor', function($user){
            return $user->type === 'Author';
        });

        Gate::define('isUser', function($user){
            return $user->type === 'User';
        });
        
        Passport::routes();
        //
    }
}
