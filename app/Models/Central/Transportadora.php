<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Transportadora extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'transportadoras';

    protected $fillable = [
        'cnpj',
        'nome',
        'endereco_id',
        'complemento',
        'end_num',
        'contato',
        'telefone',
        'celular',
        'email',
        'inscricao_estadual',
    ];

    public function endereco() 
    {
        return $this->belongsTo(Endereco::class, 'endereco_id'); 
    }
}
