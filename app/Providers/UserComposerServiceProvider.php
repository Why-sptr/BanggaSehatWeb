<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class UserComposerServiceProvider extends ServiceProvider
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
        // Share the $user variable with all views
        View::composer('*', function ($view) {
            $user = Auth::user(); // Retrieve the authenticated user
            $view->with('user', $user);
        });
    }
}
