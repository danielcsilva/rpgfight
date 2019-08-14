<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\TipoJogadorRepository::class, \App\Repositories\TipoJogadorRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\JogadorRepository::class, \App\Repositories\JogadorRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ArmaRepository::class, \App\Repositories\ArmaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\HabilidadeRepository::class, \App\Repositories\HabilidadeRepositoryEloquent::class);
        //:end-bindings:
    }
}
