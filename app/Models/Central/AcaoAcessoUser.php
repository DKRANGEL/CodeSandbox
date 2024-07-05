<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class AcaoAcessoUser extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'acao_acesso_user';
    
    public $timestamps = false;

    protected $fillable = [
        'acesso_user_id',
        'tela_id',
        'acao_id',
    ];

    public function acessoUser()
    {
        return $this->belongsTo(AcessoUser::class, 'acesso_user_id');
    }

    public function tela()
    {
        return $this->belongsTo(Tela::class, 'tela_id');
    }

    public function acao()
    {
        return $this->belongsTo(Acao::class, 'acao_id');
    }
}
