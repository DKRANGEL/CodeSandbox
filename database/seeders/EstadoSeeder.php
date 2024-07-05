<?php

namespace Database\Seeders;

use App\Models\Central\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Estado::truncate();
        Schema::enableForeignKeyConstraints();

        $estados = [
            [
                "pais_id" => 30,
                "nome" => 'RONDÔNIA',
                "sigla" => 'RO',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '11',
                "ddd" => '69',
            ],
            [
                "pais_id" => 30,
                "nome" => 'ACRE',
                "sigla" => 'AC',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '12',
                "ddd" => '68',
            ],
            [
                "pais_id" => 30,
                "nome" => 'AMAZONAS',
                "sigla" => 'AM',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '13',
                "ddd" => '92',
            ],
            [
                "pais_id" => 30,
                "nome" => 'RORAIMA',
                "sigla" => 'RR',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '14',
                "ddd" => '95',
            ],
            [
                "pais_id" => 30,
                "nome" => 'PARÁ',
                "sigla" => 'PA',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '15',
                "ddd" => '91',
            ],
            [
                "pais_id" => 30,
                "nome" => 'AMAPÁ',
                "sigla" => 'AP',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '16',
                "ddd" => '96',
            ],
            [
                "pais_id" => 30,
                "nome" => 'TOCANTINS',
                "sigla" => 'TO',
                "valor_maximo_venda" => 3000,
                "codigo_ibge" => '17',
                "ddd" => '63',
            ],
            [
                "pais_id" => 30,
                "nome" => 'MARANHÃO',
                "sigla" => 'MA',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '21',
                "ddd" => '98',
            ],
            [
                "pais_id" => 30,
                "nome" => 'PIAUÍ',
                "sigla" => 'PI',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '22',
                "ddd" => '86',
            ],
            [
                "pais_id" => 30,
                "nome" => 'CEARÁ',
                "sigla" => 'CE',
                "valor_maximo_venda" => 200,
                "codigo_ibge" => '23',
                "ddd" => '85',
            ],
            [
                "pais_id" => 30,
                "nome" => 'RIO GRANDE DO NORTE',
                "sigla" => 'RN',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '24',
                "ddd" => '84',
            ],
            [
                "pais_id" => 30,
                "nome" => 'PARAÍBA',
                "sigla" => 'PB',
                "valor_maximo_venda" => 500,
                "codigo_ibge" => '25',
                "ddd" => '83',
            ],
            [
                "pais_id" => 30,
                "nome" => 'PERNAMBUCO',
                "sigla" => 'PE',
                "valor_maximo_venda" => 1000,
                "codigo_ibge" => '26',
                "ddd" => '81',
            ],
            [
                "pais_id" => 30,
                "nome" => 'ALAGOAS',
                "sigla" => 'AL',
                "valor_maximo_venda" => 500,
                "codigo_ibge" => '27',
                "ddd" => '82',
            ],
            [
                "pais_id" => 30,
                "nome" => 'SERGIPE',
                "sigla" => 'SE',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '28',
                "ddd" => '79',
            ],
            [
                "pais_id" => 30,
                "nome" => 'BAHIA',
                "sigla" => 'BA',
                "valor_maximo_venda" => 400,
                "codigo_ibge" => '29',
                "ddd" => '71',
            ],
            [
                "pais_id" => 30,
                "nome" => 'MINAS GERAIS',
                "sigla" => 'MG',
                "valor_maximo_venda" => 3000,
                "codigo_ibge" => '31',
                "ddd" => '31',
            ],
            [
                "pais_id" => 30,
                "nome" => 'ESPÍRITO SANTO',
                "sigla" => 'ES',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '32',
                "ddd" => '27',
            ],
            [
                "pais_id" => 30,
                "nome" => 'RIO DE JANEIRO',
                "sigla" => 'RJ',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '33',
                "ddd" => '21',
            ],
            [
                "pais_id" => 30,
                "nome" => 'SÃO PAULO',
                "sigla" => 'SP',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '35',
                "ddd" => '11',
            ],
            [
                "pais_id" => 30,
                "nome" => 'PARANÁ',
                "sigla" => 'PR',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '41',
                "ddd" => '41',
            ],
            [
                "pais_id" => 30,
                "nome" => 'SANTA CATARINA',
                "sigla" => 'SC',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '42',
                "ddd" => '47',
            ],
            [
                "pais_id" => 30,
                "nome" => 'RIO GRANDE DO SUL',
                "sigla" => 'RS',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '43',
                "ddd" => '51',
            ],
            [
                "pais_id" => 30,
                "nome" => 'MATO GROSSO DO SUL',
                "sigla" => 'MS',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '50',
                "ddd" => '67',
            ],
            [
                "pais_id" => 30,
                "nome" => 'MATO GROSSO',
                "sigla" => 'MT',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '51',
                "ddd" => '65',
            ],
            [
                "pais_id" => 30,
                "nome" => 'GOIÁS',
                "sigla" => 'GO',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '52',
                "ddd" => '62',
            ],
            [
                "pais_id" => 30,
                "nome" => 'DISTRITO FEDERAL',
                "sigla" => 'DF',
                "valor_maximo_venda" => 5000,
                "codigo_ibge" => '53',
                "ddd" => '61',
            ],
        ];

        Estado::insert($estados);
    }
}
