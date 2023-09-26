<?php

namespace Manager\Core\Providers;

use Illuminate\Support\ServiceProvider;

class CoreProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/constants.php', 'constants');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'lang');
    }
}