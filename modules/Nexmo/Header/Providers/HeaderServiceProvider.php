<?php


namespace Nexmo\Header\Providers;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/../Routes/Route.php');
       $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
       $this->loadViewsFrom(__DIR__.'/../resources/views','Header');
    }

}
