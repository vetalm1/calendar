<?php


namespace Lara\Calendar;


use Lara\Calendar\Services\Calendar\CalendarInterface;
use Lara\Calendar\Services\Calendar\Calendar;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind(CalendarInterface::class, Calendar::class);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'calendar');
    }
}
