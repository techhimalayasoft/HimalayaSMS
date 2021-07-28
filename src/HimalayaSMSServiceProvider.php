<?php

namespace techhimalayasoft\HimalayaSMS;

use Illuminate\Support\ServiceProvider;

class HimalayaSMSServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/himalayasms.php', 'himalayasms'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/himalayasms.php' => config_path('himalayasms.php'),
        ]);
    }
}
