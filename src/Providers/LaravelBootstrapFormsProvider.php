<?php

namespace Bastinald\LaravelBootstrapForms\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelBootstrapFormsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'forms');

        $this->publishes([
            __DIR__ . '/../../views' => resource_path('views/vendor/forms'),
        ]);
    }
}
