<?php

namespace App\Http\View\Composers;

use App\Models\Central\Estado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class EstadosViewComposer
{
    public function compose(View $view)
    {
        $estados = Estado::on('central')->select('nome', 'sigla')->get();
        $view->with('estados', $estados);
    }
}
