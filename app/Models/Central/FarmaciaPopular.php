<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Facades\Crypt;

class FarmaciaPopular extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'farmacia_popular';

    protected $fillable = [
        'usuario',
        'senha',
        'producao',
    ];

    public function getSenhaAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    public function usuarios()
    {
        return $this->hasMany(CentralUser::class, 'farmacia_popular_id');
    }

    public function tenants()
    {
        return $this->hasMany(Tenant::class, 'farmacia_popular_id');
    }
}
