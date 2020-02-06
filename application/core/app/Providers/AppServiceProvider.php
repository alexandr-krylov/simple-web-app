<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Core\Repository\EmployeeRepositoryInterface;

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
            return new CustomerRepository(
            $app['Doctrine\ORM\EntityManagerInterface']
            );
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
