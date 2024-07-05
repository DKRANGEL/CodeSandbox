<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Acesso extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'acessos';

    protected $fillable = [
        'nome',
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'acesso_user', 'acesso_id', 'user_id');
    }
}
