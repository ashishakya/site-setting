<?php

namespace Proshore\SiteSetting;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
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
                'Form'=>'\Collective\Html\FormFacade'
            ]
        );

        //Load Package routes, views, migrations
        $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'SiteSetting');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        //Publishing
        $this->publishes([
            __DIR__.'/config/sitesetting.php' => config_path('sitesetting.php'),
        ]);
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
