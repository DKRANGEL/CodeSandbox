<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    use HasFactory;

    public $table = 'configuracoes';

    protected $fillable = [
        'tipo_sistema',
        'deconto_max',
        'senha_menu',
    ];
}
