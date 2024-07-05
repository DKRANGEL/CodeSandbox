<?php

namespace Database\Seeders;

use App\Models\Central\Acao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class AcaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Acao::truncate();
        Schema::enableForeignKeyConstraints();

        $acoes = [
            [
                'nome' => "ACESSAR",
            ],
            [
                'nome' => "CADASTRAR",
            ],
            [
                'nome' => "ALTERAR",
            ],
            [
                'nome' => "DELETAR",
            ],
            [
                'nome' => "VISUALIZAR",
            ],
        ];

        Acao::insert($acoes);
    }
}
