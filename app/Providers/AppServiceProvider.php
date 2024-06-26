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
        'App\Services\Interfaces\EmployeeServiceInterface' => 'App\Services\EmployeeService',
        'App\Repositories\Interfaces\EmployeeRepositoriesInterface' => 'App\Repositories\EmployeeRepositories',
        'App\Repositories\Interfaces\ProvinceRepositoriesInterface' => 'App\Repositories\ProvinceRepositories',
        'App\Repositories\Interfaces\DistrictRepositoriesInterface' => 'App\Repositories\DistrictRepositories',
        'App\Repositories\Interfaces\BaseRepositoriesInterface' => 'App\Repositories\BaseRepositories',
    ];
    public function register(): void
    {
       foreach($this->bindings as $key =>$val){
        $this->app->bind($key,$val);
       }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
