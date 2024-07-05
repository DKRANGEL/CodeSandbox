<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Acao extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'acoes';

    protected $fillable = [
        'nome',
    ];

    public function acoesAcesso()
    {
        return $this->hasMany(AcaoAcessoUser::class, 'acao_id');
    }
}
