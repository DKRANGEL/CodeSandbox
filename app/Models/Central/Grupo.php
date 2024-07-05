<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'grupos';

    protected $fillable = [
        'codigo',
        'descricao',
        'tipo_id',
        'desconto',
        'margem',
        'meta',
        'abastecer_preco',
        'curva_a',
        'curva_b',
        'rgb',
    ];

    public function tipo() 
    {
        return $this->belongsTo(Tipo::class, 'tipo_id'); 
    }
}
