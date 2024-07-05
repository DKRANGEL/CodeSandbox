<?php

namespace App\Models\Central;

use App\Models\Central\Agenda;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Endereco extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'enderecos';

    protected $fillable = [
        'cep',
        'logradouro',
        'bairro',
        'cidade_id',
    ];

    public function usuarios()
    {
        return $this->hasMany(CentralUser::class, 'endereco_id');
    }

    public function cidade() 
    {
        return $this->belongsTo(Cidade::class, 'cidade_id'); 
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'endereco_id');
    }

    public function transportadoras()
    {
        return $this->hasMany(Transportadora::class, 'endereco_id');
    }

    public function motoqueiros()
    {
        return $this->hasMany(Motoqueiro::class, 'endereco_id');
    }

    public function tenants()
    {
        return $this->hasMany(Tenant::class, 'endereco_id');
    }

    public function tenantRepresentantes()
    {
        return $this->hasMany(TenantRepresentante::class, 'endereco_id');
    }
}
