<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Estado extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'estados';

    protected $fillable = [
        'pais_id',
        'nome',
        'codigo_ibge',
        'sigla',
        'valor_maximo_venda',
        'ddd',
    ];

    public function pais() 
    {
        return $this->belongsTo(Pais::class, 'pais_id'); 
    }

    public function cidades()
    {
        return $this->hasMany(Cidade::class, 'estado_id');
    } 
}
