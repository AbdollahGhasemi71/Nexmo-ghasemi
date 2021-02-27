<?php


namespace Nexmo\About\Providers;

use Illuminate\Support\ServiceProvider;

class AboutServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/Route.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'About');
    }

}
