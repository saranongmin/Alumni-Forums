<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['welcome','frontend.events','frontend.event-details',
            'frontend.reports','frontend.blogs','frontend.blog-single','frontend.jobs', 'frontend.job-details', 'frontend.jobapplies','frontend.customs.create','frontend.resumes.create','frontend.alumni','frontend.aprofiles.create',
            'frontend.alumni-details','frontend.contact','frontend.tests.index'], 'App\Http\View\Composers\FrontendComposer'
        );
    }
}
