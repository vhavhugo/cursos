<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        Validator::extend('dash2', function($attribute, $value, $parameters, $validator){
            return ! strpos($value, '-');
        });

        Validator::replacer('dash2', function($message, $attribute, $rule, $paremeters){
            return "O campo {$attribute} não pode ter = (traços)"; 
        });

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('App\Services\Treinaweb', function($app){
            // return new \App\Services\Treinaweb('99du8u8dh8edhe8dh8e');
        // });
    }
}
