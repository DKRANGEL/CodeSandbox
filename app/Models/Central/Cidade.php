<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Cidade extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'central';
    public $table = 'cidades';

    protected $fillable = [
        'estado_id',
        'nome',
        'codigo_ibge',
        'codigo_tom',
    ];

    public function estado() 
    {
        return $this->belongsTo(Estado::class, 'estado_id'); 
    }

    public function enderecos()
    {
        return $this->hasMany(Endereco::class, 'cidade_id');
    }
}
