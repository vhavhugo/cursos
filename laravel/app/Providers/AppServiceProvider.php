<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Interfaces\TaskRepositoryInterface',
            'App\Repositories\Implementations\TaskRepository',
            'App\Repositories\Interfaces\ProjectRepositoryInterface',
            'App\Repositories\Implementations\EloquentProjectRepository'
        );
        
    }
}
