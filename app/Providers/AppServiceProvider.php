<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use TCG\Voyager\Facades\Voyager;
use App\KeyValueJson\KeyValueJsonFormField;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::addFormField(KeyValueJsonFormField::class);
        $this->app->bind(
            'TCG\Voyager\Http\Controllers\VoyagerBaseController',
            'App\KeyValueJson\KeyValueJsonController'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'keyvaluejson');
    }
}
