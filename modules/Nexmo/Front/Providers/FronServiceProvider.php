<?php


namespace Nexmo\Front\Providers;

use Illuminate\Support\ServiceProvider;

class FronServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/Route.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','Front');
    }

}
