<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Pais extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'paises';

    protected $fillable = [
        'nome',
        'codigo_bacen',
        'sigla',
    ];

    public function estados()
    {
        return $this->hasMany(Estado::class, 'pais_id');
    } 
}
