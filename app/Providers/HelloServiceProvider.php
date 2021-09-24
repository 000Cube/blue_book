<?php

namespace App\Providers;

use App\Http\Validators\HelloValidator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;



class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator,$data,$rules,$message){
            return new HelloValidator($translator,$data,$rules,$message);
        });
        /* View::composer('hello.index', 'App\Http\Composers\HelloComposer'); */
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
