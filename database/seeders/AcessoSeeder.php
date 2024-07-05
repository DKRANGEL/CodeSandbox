<?php

namespace Database\Seeders;

use App\Models\Central\Acesso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class AcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Acesso::truncate();
        Schema::enableForeignKeyConstraints();

        $acessos = [
            [
                'nome' => "ADMINISTRADOR",
            ],
            [
                'nome' => "DONO",
            ],
            [
                'nome' => "GERENTE",
            ],
            [
                'nome' => "CAIXA",
            ],
            [
                'nome' => "ATENDENTE",
            ],
        ];

        Acesso::insert($acessos);
    }
}
