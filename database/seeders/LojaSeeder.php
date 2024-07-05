<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Central\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Stancl\Tenancy\Contracts\Domain;

class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenantDatabases = DB::select("SELECT datname FROM pg_database WHERE datname LIKE 'tenant\_%'");

        foreach ($tenantDatabases as $database) {
            $databaseName = $database->datname;

            DB::statement("DROP DATABASE IF EXISTS \"$databaseName\" (FORCE)");
        }

        Schema::disableForeignKeyConstraints();
        Tenant::truncate();
        Schema::enableForeignKeyConstraints();

        // Criação do registro específico
        $tenant = Tenant::create([
            'id'                        => "09027622000188",
            'tenant_representante_id'   => 1,
            'razao_social'              => "ALQUIMIA INFORMATICA LTDA",
            'fantasia'                  => "ALQUIMIA INFORMATICA",
            'proprietario'              => "SÉRGIO",
            'gerente'                   => "RODRIGO",
            'status'                    => true,
            'integrada'                 => true,
            'telefone'                  => "(61) 3386-5297",
            'celular'                   => "(61) 99999-9999",
            'email'                     => "suporte01@alquimiacompany.com.br",
            'endereco_id'               => 1,
            'end_num'                   => 105,
            'complemento'               => 105,
            'inscricao_estadual'        => null,
            'inscricao_municipal'       => null,
            'abastecer_preco'           => true,
            'farmacia_popular_id'       => 1,
        ]);

        // Criação do domínio para o registro específico
        $tenant->domains()->create(['domain' => $tenant->id . "." . getCentralDomain()]);

        // Criação dos registros aleatórios
        Tenant::factory(5)->create()->each(function ($tenant) {
            $tenant->domains()->create(['domain' => $tenant->id . "." . getCentralDomain()]);
        });
    }
}
