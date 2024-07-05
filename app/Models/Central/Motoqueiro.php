<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Motoqueiro extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'motoqueiros';

    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'empresa',
        'endereco_id',
        'end_num',
        'complemento',
        'email',
        'telefone',
        'celular',
        'data_nasc',
        'placa',
        'comissao',
        'salario',
        'taxa_entrega',
        'obs',
    ];

    public function endereco() 
    {
        return $this->belongsTo(Endereco::class, 'endereco_id'); 
    }
}
