<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $seeds = [
            AcessoSeeder::class,
            PaisSeeder::class,
            EstadoSeeder::class,
            CidadeSeeder::class,
            PermissaoEspecialSeeder::class,
            AcaoSeeder::class,
            TelaSeeder::class,
        ];
        
        // Colocar Seeds dentro do if apenas para uso local, para informações que sejam de uso em produção, adicionar no array acima.
        if (env('APP_ENV') === 'local') {
            $seeds = array_merge($seeds, [
                EnderecoSeeder::class,
                FarmaciaPopularSeeder::class,
                RepresentanteSeeder::class,
                LojaSeeder::class,
                UserSeeder::class,
                TipoSeeder::class,
                ConfiguracaoSeeder::class,
            ]);
        }

        $this->call($seeds);
    }
}
