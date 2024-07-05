<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class TenantRepresentante extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'tenant_representantes';

    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'profissao',
        'estado_civil',
        'data_nasc',
        'endereco_id',
        'end_num',
        'complemento',
        'valor_instalacao',
    ];

    public function tenants()
    {
        return $this->hasMany(Tenant::class, 'tenant_representante_id');
    }

    public function endereco() 
    {
        return $this->belongsTo(Endereco::class, 'endereco_id'); 
    }
}
