<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Stancl\Tenancy\Contracts\SyncMaster;
use Stancl\Tenancy\Database\Concerns\CentralConnection;
use Stancl\Tenancy\Database\Concerns\ResourceSyncing;
use Stancl\Tenancy\Database\Models\TenantPivot;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;

class CentralUser extends Authenticatable implements SyncMaster, Auditable
{
    use ResourceSyncing, CentralConnection;
    use \OwenIt\Auditing\Auditable;

    public $table = 'users';

    protected $fillable = [
        'global_id',
        'nome',
        'cpf',
        'rg',
        'status',
        'genero',
        'email',
        'telefone',
        'celular',
        'data_nasc',
        'cargo',
        'password',
        'admissao',
        'demissao',
        'desconto',
        'comissao',
        'meta',
        'endereco_id',
        'end_num',
        'complemento',
        'obs',
        'farmacia_popular_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function getTenantModelName(): string
    {
        return User::class;
    }

    public function getGlobalIdentifierKey()
    {
        return $this->getAttribute($this->getGlobalIdentifierKeyName());
    }

    public function getGlobalIdentifierKeyName(): string
    {
        return 'global_id';
    }

    public function getCentralModelName(): string
    {
        return static::class;
    }

    public function getSyncedAttributeNames(): array
    {
        return [
            'global_id',
            'nome',
            'cpf',
            'rg',
            'status',
            'genero',
            'email',
            'telefone',
            'celular',
            'data_nasc',
            'password',
            'admissao',
            'demissao',
            'desconto',
            'comissao',
            'meta',
            'endereco_id',
            'end_num',
            'complemento',
            'obs',
        ];
    }

    public function tenants(): BelongsToMany
    {
        return $this->belongsToMany(Tenant::class, 'tenant_users', 'global_user_id', 'tenant_id', 'global_id')
            ->using(TenantPivot::class);
    }

    public function endereco() 
    {
        return $this->belongsTo(Endereco::class, 'endereco_id'); 
    }

    public function farmaciaPopular() 
    {
        return $this->belongsTo(FarmaciaPopular::class, 'farmacia_popular_id'); 
    }

    public function permissoesEspeciais()
    {
        return $this->belongsToMany(PermissaoEspecial::class, 'permissao_user', 'user_id', 'permissao_especial_id');
    }

    public function acessos()
    {
        return $this->belongsToMany(Acesso::class, 'acesso_user', 'user_id', 'acesso_id')
            ->withPivot('id');
    }

    public function acoesAcesso()
    {
        return $this->hasManyThrough(
            AcaoAcessoUser::class, 
            AcessoUser::class, 
            'user_id', // Foreign key on AcessoUser table
            'acesso_user_id', // Foreign key on AcaoAcessoUser table
            'id', // Local key on User table
            'id' // Local key on AcessoUser table
        );
    }
}
