<?php

namespace Database\Seeders;

use App\Models\Central\Tela;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Tela::truncate();
        Schema::enableForeignKeyConstraints();

        $telas = [
            [
                'nome' => "MENU DE ACESSOS",
            ],
            [
                'nome' => "MENU DE AGENDAS",
            ],
            [
                'nome' => "MENU DE BRINDES",
            ],
            [
                'nome' => "MENU DE CIDADES",
            ],
            [
                'nome' => "MENU DE ESTADOS",
            ],
            [
                'nome' => "MENU DE LOJAS",
            ],
            [
                'nome' => "MENU DE MOTOQUEIROS",
            ],
            [
                'nome' => "MENU DE PAÍSES",
            ],
            [
                'nome' => "MENU DE PERMISSÕES",
            ],
            [
                'nome' => "MENU DE TELAS",
            ],
            [
                'nome' => "MENU DE TRANSPORTADORAS",
            ],
            [
                'nome' => "MENU DE USUÁRIOS",
            ],
        ];

        Tela::insert($telas);
    }
}
