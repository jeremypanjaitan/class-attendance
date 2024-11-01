<?php

namespace App\Providers;

use AbsensiService;
use App\Services\EmailVerification\EmailVerificationService;
use Illuminate\Support\ServiceProvider;

class AbsensiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AbsensiService::class, function ($app) {
            return new AbsensiService(resolve(EmailVerificationService::class));
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
