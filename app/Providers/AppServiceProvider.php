<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $bindings = [
        'App\Repositories\Interfaces\ProvinceRepositoriesInterface' => 'App\Repositories\ProvinceRepositories',
        'App\Repositories\Interfaces\DistrictRepositoriesInterface' => 'App\Repositories\DistrictRepositories',
        'App\Repositories\Interfaces\BaseRepositoriesInterface' => 'App\Repositories\BaseRepositories',
    ];
    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
