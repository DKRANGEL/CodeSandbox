<?php

namespace App\Providers;

use App\Http\View\Composers\EstadosViewComposer;
use App\Http\View\Composers\TenantsViewComposer;
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
        // Lista de views que vão usar o TenantsViewComposer
        if (request()->getHost() == getCentralDomain()) {
            $tenantViews = [
                'components.filtro-lojas',
                'components.select-multi-lojas',
                'components.modal-delete'
            ];

            view()->composer($tenantViews, TenantsViewComposer::class);
        }
        
        view()->composer('components.endereco', EstadosViewComposer::class);
    }
}
