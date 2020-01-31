<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $number = trim(env('PHONE_NUMBER_DIGITS_ONLY'));
        $formattedNumber =
        preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $number);

        // Share these variables with all views
        // https://laravel.com/docs/5.8/views#sharing-data-with-all-views
        View::share('envPhoneNumber', $number);
        View::share('envPhoneNumberFmt', $formattedNumber);
    }
}
