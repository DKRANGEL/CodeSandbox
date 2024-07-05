<?php

namespace Database\Seeders;

use App\Models\Central\Tipo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Tipo::truncate();
        Schema::enableForeignKeyConstraints();

        $tipos = [
            [
                'nome' => "MEDICAMENTOS",
            ],  
            [
                'nome' => "PERFUMARIA",
            ],
            [
                'nome' => "CELULAR",
            ],
            [
                'nome' => "OUTROS",
            ]
        ];

        Tipo::insert($tipos);
    }
}
