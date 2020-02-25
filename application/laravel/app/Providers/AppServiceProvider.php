<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Core\Repository\{EmployeeRepositoryInterface, DepartmentRepositoryInterface};
use Core\Persistence\Laravel\{EmployeeRepository, DepartmentRepository};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            EmployeeRepositoryInterface::class,
            function ($app) {
                return new EmployeeRepository();
            }
        );
        $this->app->bind(
            DepartmentRepositoryInterface::class,
            function ($app) {
                return new DepartmentRepository();
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
