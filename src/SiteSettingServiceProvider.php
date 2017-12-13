<?php

namespace Proshore\SiteSetting;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Collective\Html\HtmlServiceProvider;

class SiteSettingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Register Laravel Collective Html service provider to be used in package
        $this->app->register(HtmlServiceProvider::class);
        $loader = AliasLoader::getInstance(
            [
                'Form'=>'\Collective\Html\FormFacade',
            ]
        );

        //Load Package routes, views, migrations
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'site-setting');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        //Publishing
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/site-setting'),
        ], 'views');
        $this->publishes([
            __DIR__ . '/config/proshore.site-setting.php' => config_path('proshore.site-setting.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Register our controller
        $this->app->make(
            'Proshore\SiteSetting\Http\Controllers\SiteSettingController'
        );
    }
}
