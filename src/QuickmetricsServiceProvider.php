<?php

namespace Aschmelyun\Quickmetrics;

use Illuminate\Support\ServiceProvider;

class QuickmetricsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/quickmetrics.php' => config_path('quickmetrics.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(Quickmetrics::class, function() {
            return new Quickmetrics(config('quickmetrics.key'));
        });
    }

}