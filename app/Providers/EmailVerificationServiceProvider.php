<?php

namespace App\Providers;

use App\Services\EmailVerification\EmailVerificationService;
use Illuminate\Support\ServiceProvider;

class EmailVerificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(EmailVerificationService::class, function ($app) {
            return new EmailVerificationService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
