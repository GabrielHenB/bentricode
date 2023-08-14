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

        //Autenticaçao
        //Isso testa se um usuario tera a abilidade admin caso passe pelo metodo callback
        \Illuminate\Support\Facades\Gate::define('admin', function (\App\Models\User $user) {
            //SE RETURN TRUE ENTAO EH ADMIN
            //middleware nativo 'Can:admin' do Laravel
            return $user->isAdmin; //Se is Admin permitir ele
        });
    }
}
