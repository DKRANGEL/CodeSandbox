<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Tipo extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'tipos';

    protected $fillable = [
        'nome',
    ];

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'tipo_id');
    }
}
