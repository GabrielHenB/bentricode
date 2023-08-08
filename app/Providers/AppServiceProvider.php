<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Indica que o paginador use o Bootstrap 5. No momento nao incorporado ao estilo que ja existia no projeto
        \Illuminate\Pagination\Paginator::useBootstrapFive();
    }
}
