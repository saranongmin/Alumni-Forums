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
        // 'App\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Blog::class => BlogPolicy::class,
        Profile::class => ProfilePolicy::class,
        Job::class=>JobPolicy::class,
        Event::class=>EventPolicy::class,
        Report::class=>ReportPolicy::class,
        Garo::class=>GaroPolicy::class,


    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('users', 'App\Policies\UserPolicy');
        Gate::resource('blogs', 'App\Policies\BlogPolicy');
        Gate::resource('profiles', 'App\Policies\ProfilePolicy');
        Gate::resource('jobs', 'App\Policies\JobPolicy');
         Gate::resource('events', 'App\Policies\EventPolicy');
         Gate::resource('reports', 'App\Policies\ReportPolicy');
         Gate::resource('garos', 'App\Policies\GaroPolicy');


    }
}
