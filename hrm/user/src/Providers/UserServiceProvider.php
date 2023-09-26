<?php

namespace Hrm\User\Providers;

use Hrm\User\Repositories\Contracts\EmployeeRepository;
use Hrm\User\Repositories\Eloquent\EmployeeRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        }
    }

    public function register()
    {
        $this->app->bind(EmployeeRepository::class, EmployeeRepositoryEloquent::class);
    }
}