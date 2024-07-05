<?php

namespace Database\Seeders;

use App\Models\Central\FarmaciaPopular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Schema;

class FarmaciaPopularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        FarmaciaPopular::truncate();
        Schema::enableForeignKeyConstraints();

        FarmaciaPopular::create([
            'usuario'   => fake()->name(), 
            'senha'     => Crypt::encryptString(fake()->password()),
            'producao'  => true,
        ]);
    }
}
