<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Stancl\Tenancy\Database\Models\TenantPivot;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use HasFactory, Notifiable;
    use \OwenIt\Auditing\Auditable;

    protected $dates = [
        'deleted_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
