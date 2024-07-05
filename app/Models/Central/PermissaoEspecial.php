<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PermissaoEspecial extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'permissoes_especiais';

    protected $fillable = [
        'descricao',
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'permissao_user', 'permissao_especial_id', 'user_id');
    }
}
