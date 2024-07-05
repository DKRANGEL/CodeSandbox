<?php

namespace App\Models\Central;

use App\Models\Central\Endereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    public $table = 'agendas';

    protected $fillable = [
        'nome',
        'endereco_id',
        'apelido',
        'data_nasc',
        'empresa',
        'complemento',
        'end_num',
        'telefone',
        'celular',
        'email',
        'obs',
    ];

    public function endereco() 
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }
}
