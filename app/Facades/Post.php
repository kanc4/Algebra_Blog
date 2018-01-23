<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Post extends Facade
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function getFacadeAccessor()
    {
        return 'post';
    }
}