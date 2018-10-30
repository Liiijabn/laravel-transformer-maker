<?php

namespace Liiijabn\TransformerMaker;

use Illuminate\Support\ServiceProvider;

class TransformerMakeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('command.make:transformer', MakeTransformer::class);
        $this->commands([
            'command.make:transformer',
        ]);
    }
}
