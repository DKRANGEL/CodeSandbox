<?php

namespace Database\Seeders;

use App\Models\Central\Endereco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Endereco::truncate();
        Schema::enableForeignKeyConstraints();

        Endereco::create([
            'cep'           => "71987-180",
            'logradouro'    => "ADE CONJUNTO 5",
            'bairro'        => "ÁREA DE DESENVOLVIMENTO ECONÔMICO (ÁGUAS CLARAS)",
            'cidade_id'     => 5570,
        ]);
    }
}
