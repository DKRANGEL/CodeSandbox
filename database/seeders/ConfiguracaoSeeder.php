<?php

namespace Database\Seeders;

use App\Models\Central\Configuracao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ConfiguracaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Configuracao::truncate();
        Schema::enableForeignKeyConstraints();

        $configuracoes = [
            [
                'tipo_sistema'  => "Farmacia",
                'deconto_max'   => "99",
                'senha_menu'    => "true",
            ]
        ];

        Configuracao::insert($configuracoes);
    }
}
