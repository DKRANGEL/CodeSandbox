<?php

namespace Database\Seeders;

use App\Models\Central\CentralUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        CentralUser::truncate();
        Schema::enableForeignKeyConstraints();

        $usuario = CentralUser::create([
            'nome'                          => strtoupper(fake()->name()),
            'cpf'                           => "882.933.370-01",
            'rg'                            => "42.752.661-9",
            'status'                        => true,
            'genero'                        => "M",
            'email'                         => "admin@gmail.com",
            'telefone'                      => "(11) 4002-8922",
            'celular'                       => "(61) 99999-9999",
            'data_nasc'                     => "1998-01-01",
            'cargo'                         => "EMPRESÁRIO",
            'password'                      => Hash::make("123456789"),
            'admissao'                      => "2023-01-01",
            'demissao'                      => null,
            'desconto'                      => 10,
            'comissao'                      => "desconto",
            'meta'                          => 1000,
            'endereco_id'                   => 1,
            'end_num'                       => 03,
            'complemento'                   => "APT 03",
            'obs'                           => null,
            'farmacia_popular_id'           => 1,
        ]);

        $usuario->acessos()->sync([1]);
    }
}
