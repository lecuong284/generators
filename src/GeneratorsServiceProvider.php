<?php

namespace Lecuong\Generators;

use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
{
    protected $commands = [
        'Lecuong\Generators\Console\Commands\ModelLecuongCommand',
        'Lecuong\Generators\Console\Commands\RequestLecuongCommand',
        'Lecuong\Generators\Console\Commands\ViewLecuongCommand',
        'Lecuong\Generators\Console\Commands\ConfigLecuongCommand',
        // Lecuong\CRUD files:
        'Lecuong\Generators\Console\Commands\CrudModelLecuongCommand',
        'Lecuong\Generators\Console\Commands\CrudControllerLecuongCommand',
        'Lecuong\Generators\Console\Commands\CrudRequestLecuongCommand',
        'Lecuong\Generators\Console\Commands\CrudLecuongCommand',
    ];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
