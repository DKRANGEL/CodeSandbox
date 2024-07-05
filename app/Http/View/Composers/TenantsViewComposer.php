<?php

namespace App\Http\View\Composers;

use App\Models\Central\Tenant;
use Illuminate\View\View;

class TenantsViewComposer
{
    public function compose(View $view)
    {
        if (request()->getHost() == getCentralDomain()) {
            //Realizar ajuste quando a funcionalidade do vinculo de empresas estiver pronto.
            $tenants = Tenant::select('id', 'fantasia')->get();
            $view->with('tenants', $tenants);
        }
    }
}
