<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->mainHeaderComposer();

        $this->sidebarComposer();

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function mainHeaderComposer()
    {
        view()->composer('backend.partials.mainheader', function ($view) {


            $view->with('user', \Auth::getUser());

        });
    }

    private function sidebarComposer()
    {

        view()->composer('backend.partials.sidebar', function ($view) {


            $view->with('user', \Auth::getUser());

        });


    }
}
