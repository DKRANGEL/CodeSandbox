<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Tela extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'telas';

    protected $fillable = [
        'nome',
    ];

    public function acoesAcesso()
    {
        return $this->hasMany(AcaoAcessoUser::class, 'tela_id');
    }
}
