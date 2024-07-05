<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Models\TenantPivot;
use OwenIt\Auditing\Contracts\Auditable;

class Tenant extends BaseTenant implements TenantWithDatabase, Auditable
{
    use HasDatabase, HasDomains, HasFactory;
    use \OwenIt\Auditing\Auditable;

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'tenant_representante_id',
            'razao_social',
            'fantasia',
            'proprietario',
            'gerente',
            'status',
            'integrada',
            'matriz',
            'telefone',
            'celular',
            'email',
            'endereco_id',
            'end_num',
            'complemento',
            'inscricao_estadual',
            'inscricao_municipal',
            'abastecer_preco',
            'farmacia_popular_id',
            'data',
        ];
    }

    public function users()
    {
        return $this->belongsToMany(CentralUser::class, 'tenant_users', 'tenant_id', 'global_user_id', 'id', 'global_id')->using(TenantPivot::class);
    }

    public function endereco() 
    {
        return $this->belongsTo(Endereco::class, 'endereco_id'); 
    }

    public function tenantRepresentante()
    {
        return $this->belongsTo(TenantRepresentante::class, 'tenant_representante_id');
    }

    public function farmaciaPopular() 
    {
        return $this->belongsTo(FarmaciaPopular::class, 'farmacia_popular_id'); 
    }
}
