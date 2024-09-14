<?php

namespace App\Providers;
use Illuminate\Support\Facades\Validator;//mimi
use Illuminate\Support\Facades\Schema; //mimi
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Validator::extend('password_complexity', function ($attribute,$value,$parameters,$validator)
        {
            return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/',$value);
        }
    );
    }
}
