<?php

namespace Database\Seeders;

use App\Models\Central\TenantRepresentante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RepresentanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        TenantRepresentante::truncate();
        Schema::enableForeignKeyConstraints();

        TenantRepresentante::create([
            'cpf'               => "882.933.370-01",
            'nome'              => fake()->name(),
            'rg'                => "42.752.661-9",
            'profissao'         => "Empresário",
            'estado_civil'      => "Solteiro",
            'data_nasc'         => "1998-01-01",
            'endereco_id'       => 1,
            'end_num'           => 03,
            'complemento'       => "APT 03",
            'valor_instalacao'  => 200
        ]);
    }
}
