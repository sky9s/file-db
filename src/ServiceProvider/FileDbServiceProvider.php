<?php
/**
 * Created by PhpStorm.
 * User: sky9s
 * Date: 2020-11-09
 * Time: 오후 10:33
 */

namespace Sky9s\FileDb\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Sky9s\FileDb\Components\FileInput;

class FileDbServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // routes
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');

        // migrations
        $this->loadMigrationsFrom(__DIR__.'/../migrations');

        $this->loadViewComponentsAs('sky9s', [
            FileInput::class,
        ]);

        // language
        $this->loadTranslationsFrom(__DIR__.'/../translations', 'sky9s');
        $this->publishes([
            __DIR__.'/../translations' => resource_path('lang/vendor/sky9s'),
        ]);

        // views
        $this->loadViewsFrom(__DIR__.'/../views', 'sky9s');
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/sky9s'),
        ]);

        // config
        $this->publishes([
            __DIR__.'/../config/sky9s-filedb.php' => config_path('sky9s-filedb.php'),
        ]);

        // assets
        $this->publishes([
            __DIR__.'/../assets' => public_path('vendor/sky9s'),
        ], 'public');
    }

    public function register()
    {

    }
}