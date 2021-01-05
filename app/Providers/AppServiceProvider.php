<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('path.public', function() {
        //     return base_path('../');
        // });

        // Share Data in Inertia APP
        // User Data
        Inertia::share("user", function () {
            return Auth::check() ? auth()->user() : null;
        });
        // Sessions Variables
        Inertia::share("success_message", function () {
            return session()->get("success_message") ? session()->get("success_message") : null;
        });
        Inertia::share("info_message", function () {
            return session()->get("info_message") ? session()->get("info_message") : null;
        });
        Inertia::share("warning_message", function () {
            return session()->get("warning_message") ? session()->get("warning_message") : null;
        });
        Inertia::share("danger_message", function () {
            return session()->get("danger_message") ? session()->get("danger_message") : null;
        });
        Inertia::share("primary_message", function () {
            return session()->get("primary_message") ? session()->get("primary_message") : null;
        });
        Inertia::share("dark_message", function () {
            return session()->get("dark_message") ? session()->get("dark_message") : null;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
