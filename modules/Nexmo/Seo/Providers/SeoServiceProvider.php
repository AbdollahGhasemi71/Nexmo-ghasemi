<?php


namespace Nexmo\Seo\Providers;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    public function boot()
    {

       $this->loadRoutesFrom(__DIR__.'/../Routes/Route.php');
       $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
       $this->loadViewsFrom(__DIR__.'/../resources/views','Seo');
    }

}
