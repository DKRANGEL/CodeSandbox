<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class AcessoUser extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'acesso_user';

    protected $fillable = [
        'user_id',
        'acesso_id',
    ];

    public function acesso()
    {
        return $this->belongsTo(Acesso::class);
    }

    public function acoesAcesso()
    {
        return $this->hasMany(AcaoAcessoUser::class, 'acesso_user_id');
    }
}
