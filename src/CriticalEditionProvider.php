<?php

namespace AlessandroBertozzi\CriticalEdition;

use Illuminate\Support\ServiceProvider;

class CriticalEditionProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations')
        ], 'critical-edition-migrations');
        $this->publishes([
            __DIR__.'/../JsonApi/V1' => base_path('/app/JsonApi/V1')
        ], 'critical-edition-jsonapi');
//        $this->publishes([
//            __DIR__.'/../Models' => base_path('/app/Models')
//        ], 'critical-edition-models');
        $this->publishes([
            __DIR__.'/../Policies' => base_path('/app/Policies')
        ], 'critical-edition-policies');

    }
}
