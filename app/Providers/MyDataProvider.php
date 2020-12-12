<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\MyDataInterface;
use App\Repositories\MyRepository;

class MyDataProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            MyDataInterface::class,
            MyRepository::class
        );
    }
}
