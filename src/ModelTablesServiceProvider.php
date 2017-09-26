<?php

namespace Ajthinking\ModelTables;

use Illuminate\Support\ServiceProvider;

class ModelTablesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {        
        $this->loadViewsFrom(__DIR__.'/rescources/views', 'modeltables');
        require __DIR__ . '/routes/web.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
