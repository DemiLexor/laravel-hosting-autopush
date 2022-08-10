<?php

namespace Jcgdev\AutoPush;

use Illuminate\Support\ServiceProvider;

class AutoPushServiceProvider extends ServiceProvider
{

    protected $name;

    public function boot()
    {
        $this->publishes([
            __DIR__. '/workflow/' => base_path('.github/workflows/')
        ], 'laravel-hosting-autopush');
    }

    public function register()
    {}
}
