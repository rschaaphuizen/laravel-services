<?php

namespace Rschaaphuizen\Services;

use Illuminate\Support\ServiceProvider;
use Rschaaphuizen\Services\Console\Commands\ServiceMakeCommand;

/**
 * Class ServicesServiceProvider
 *
 * @author Ruud Schaaphuizen (r.schaaphuizen@sqits.nl)
 *
 * @package Rschaaphuizen\Services
 */
class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ServiceMakeCommand::class
            ]);
        }
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
}
