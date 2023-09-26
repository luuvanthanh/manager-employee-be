<?php

namespace Botble\Demo\Providers;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        // trong method loadViewsFrom tham số đầu tiên là đường dẫn tới view, tham số thứ 2 là tên
        // chúng ta đặt cho view.   
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'Demo');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}