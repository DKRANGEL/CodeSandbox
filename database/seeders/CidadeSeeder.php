<?php

namespace Database\Seeders;

use App\Models\Central\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Cidade::truncate();
        Schema::enableForeignKeyConstraints();

        $cidades = [
            [
                "codigo_ibge" => 1100015,
                "estado_id" => 1,
                "nome" => 'ALTA FLORESTA D`OESTE',
            ],
            [
                "codigo_ibge" => 1100023,
                "nome" => 'ARIQUEMES',
                "estado_id" => 1,
            ],
            [
                "codigo_ibge" => 1100031,
                "estado_id" => 1,
                "nome" => 'CABIXI',
            ],
            [
                "codigo_ibge" => 1100049,
                "estado_id" => 1,
                "nome" => 'CACOAL',
            ],
            [
                "codigo_ibge" => 1100056,
                "estado_id" => 1,
                "nome" => 'CEREJEIRAS',
            ],
            [
                "codigo_ibge" => 1100064,
                "estado_id" => 1,
                "nome" => 'COLORADO DO OESTE',
            ],
            [
                "codigo_ibge" => 1100072,
                "estado_id" => 1,
                "nome" => 'CORUMBIARA',
            ],
            [
                "codigo_ibge" => 1100080,
                "estado_id" => 1,
                "nome" => 'COSTA MARQUES',
            ],
            [
                "codigo_ibge" => 1100098,
                "estado_id" => 1,
                "nome" => 'ESPIGÃO D`OESTE',
            ],
            [
                "codigo_ibge" => 1100106,
                "estado_id" => 1,
                "nome" => 'GUAJARÁ-MIRIM',
            ],
            [
                "codigo_ibge" => 1100114,
                "estado_id" => 1,
                "nome" => 'JARU',
            ],
            [
                "codigo_ibge" => 1100122,
                "estado_id" => 1,
                "nome" => 'JI-PARANÁ',
            ],
            [
                "codigo_ibge" => 1100130,
                "estado_id" => 1,
                "nome" => 'MACHADINHO D`OESTE',
            ],
            [
                "codigo_ibge" => 1100148,
                "estado_id" => 1,
                "nome" => 'NOVA BRASILÂNDIA D`OESTE',
            ],
            [
                "codigo_ibge" => 1100155,
                "estado_id" => 1,
                "nome" => 'OURO PRETO DO OESTE',
            ],
            [
                "codigo_ibge" => 1100189,
                "estado_id" => 1,
                "nome" => 'PIMENTA BUENO',
            ],
            [
                "codigo_ibge" => 1100205,
                "estado_id" => 1,
                "nome" => 'PORTO VELHO',
            ],
            [
                "codigo_ibge" => 1100254,
                "estado_id" => 1,
                "nome" => 'PRESIDENTE MÉDICI',
            ],
            [
                "codigo_ibge" => 1100262,
                "estado_id" => 1,
                "nome" => 'RIO CRESPO',
            ],
            [
                "codigo_ibge" => 1100288,
                "estado_id" => 1,
                "nome" => 'ROLIM DE MOURA',
            ],
            [
                "codigo_ibge" => 1100296,
                "estado_id" => 1,
                "nome" => 'SANTA LUZIA D`OESTE',
            ],
            [
                "codigo_ibge" => 1100304,
                "estado_id" => 1,
                "nome" => 'VILHENA',
            ],
            [
                "codigo_ibge" => 1100320,
                "estado_id" => 1,
                "nome" => 'SÃO MIGUEL DO GUAPORÉ',
            ],
            [
                "codigo_ibge" => 1100338,
                "estado_id" => 1,
                "nome" => 'NOVA MAMORÉ',
            ],
            [
                "codigo_ibge" => 1100346,
                "estado_id" => 1,
                "nome" => 'ALVORADA D`OESTE',
            ],
            [
                "codigo_ibge" => 1100379,
                "estado_id" => 1,
                "nome" => 'ALTO ALEGRE DOS PARECIS',
            ],
            [
                "codigo_ibge" => 1100403,
                "estado_id" => 1,
                "nome" => 'ALTO PARAÍSO',
            ],
            [
                "codigo_ibge" => 1100452,
                "estado_id" => 1,
                "nome" => 'BURITIS',
            ],
            [
                "codigo_ibge" => 1100502,
                "estado_id" => 1,
                "nome" => 'NOVO HORIZONTE DO OESTE',
            ],
            [
                "codigo_ibge" => 1100601,
                "estado_id" => 1,
                "nome" => 'CACAULÂNDIA',
            ],
            [
                "codigo_ibge" => 1100700,
                "estado_id" => 1,
                "nome" => 'CAMPO NOVO DE RONDÔNIA',
            ],
            [
                "codigo_ibge" => 1100809,
                "estado_id" => 1,
                "nome" => 'CANDEIAS DO JAMARI',
            ],
            [
                "codigo_ibge" => 1100908,
                "estado_id" => 1,
                "nome" => 'CASTANHEIRAS',
            ],
            [
                "codigo_ibge" => 1100924,
                "estado_id" => 1,
                "nome" => 'CHUPINGUAIA',
            ],
            [
                "codigo_ibge" => 1100940,
                "estado_id" => 1,
                "nome" => 'CUJUBIM',
            ],
            [
                "codigo_ibge" => 1101005,
                "estado_id" => 1,
                "nome" => 'GOVERNADOR JORGE TEIXEIRA',
            ],
            [
                "codigo_ibge" => 1101104,
                "estado_id" => 1,
                "nome" => 'ITAPUÃ DO OESTE',
            ],
            [
                "codigo_ibge" => 1101203,
                "estado_id" => 1,
                "nome" => 'MINISTRO ANDREAZZA',
            ],
            [
                "codigo_ibge" => 1101302,
                "estado_id" => 1,
                "nome" => 'MIRANTE DA SERRA',
            ],
            [
                "codigo_ibge" => 1101401,
                "estado_id" => 1,
                "nome" => 'MONTE NEGRO',
            ],
            [
                "codigo_ibge" => 1101435,
                "estado_id" => 1,
                "nome" => 'NOVA UNIÃO',
            ],
            [
                "codigo_ibge" => 1101450,
                "estado_id" => 1,
                "nome" => 'PARECIS',
            ],
            [
                "codigo_ibge" => 1101468,
                "estado_id" => 1,
                "nome" => 'PIMENTEIRAS DO OESTE',
            ],
            [
                "codigo_ibge" => 1101476,
                "estado_id" => 1,
                "nome" => 'PRIMAVERA DE RONDÔNIA',
            ],
            [
                "codigo_ibge" => 1101484,
                "estado_id" => 1,
                "nome" => 'SÃO FELIPE D`OESTE',
            ],
            [
                "codigo_ibge" => 1101492,
                "estado_id" => 1,
                "nome" => 'SÃO FRANCISCO DO GUAPORÉ',
            ],
            [
                "codigo_ibge" => 1101500,
                "estado_id" => 1,
                "nome" => 'SERINGUEIRAS',
            ],
            [
                "codigo_ibge" => 1101559,
                "estado_id" => 1,
                "nome" => 'TEIXEIRÓPOLIS',
            ],
            [
                "codigo_ibge" => 1101609,
                "estado_id" => 1,
                "nome" => 'THEOBROMA',
            ],
            [
                "codigo_ibge" => 1101708,
                "estado_id" => 1,
                "nome" => 'URUPÁ',
            ],
            [
                "codigo_ibge" => 1101757,
                "estado_id" => 1,
                "nome" => 'VALE DO ANARI',
            ],
            [
                "codigo_ibge" => 1101807,
                "estado_id" => 1,
                "nome" => 'VALE DO PARAÍSO',
            ],
            [
                "codigo_ibge" => 1200013,
                "estado_id" => 2,
                "nome" => 'ACRELÂNDIA',
            ],
            [
                "codigo_ibge" => 1200054,
                "estado_id" => 2,
                "nome" => 'ASSIS BRASIL',
            ],
            [
                "codigo_ibge" => 1200104,
                "estado_id" => 2,
                "nome" => 'BRASILÉIA',
            ],
            [
                "codigo_ibge" => 1200138,
                "estado_id" => 2,
                "nome" => 'BUJARI',
            ],
            [
                "codigo_ibge" => 1200179,
                "estado_id" => 2,
                "nome" => 'CAPIXABA',
            ],
            [
                "codigo_ibge" => 1200203,
                "estado_id" => 2,
                "nome" => 'CRUZEIRO DO SUL',
            ],
            [
                "codigo_ibge" => 1200252,
                "estado_id" => 2,
                "nome" => 'EPITACIOLÂNDIA',
            ],
            [
                "codigo_ibge" => 1200302,
                "estado_id" => 2,
                "nome" => 'FEIJÓ',
            ],
            [
                "codigo_ibge" => 1200328,
                "estado_id" => 2,
                "nome" => 'JORDÃO',
            ],
            [
                "codigo_ibge" => 1200336,
                "estado_id" => 2,
                "nome" => 'MÂNCIO LIMA',
            ],
            [
                "codigo_ibge" => 1200344,
                "estado_id" => 2,
                "nome" => 'MANOEL URBANO',
            ],
            [
                "codigo_ibge" => 1200351,
                "estado_id" => 2,
                "nome" => 'MARECHAL THAUMATURGO',
            ],
            [
                "codigo_ibge" => 1200385,
                "estado_id" => 2,
                "nome" => 'PLÁCIDO DE CASTRO',
            ],
            [
                "codigo_ibge" => 1200393,
                "estado_id" => 2,
                "nome" => 'PORTO WALTER',
            ],
            [
                "codigo_ibge" => 1200401,
                "estado_id" => 2,
                "nome" => 'RIO BRANCO',
            ],
            [
                "codigo_ibge" => 1200427,
                "estado_id" => 2,
                "nome" => 'RODRIGUES ALVES',
            ],
            [
                "codigo_ibge" => 1200435,
                "estado_id" => 2,
                "nome" => 'SANTA ROSA DO PURUS',
            ],
            [
                "codigo_ibge" => 1200450,
                "estado_id" => 2,
                "nome" => 'SENADOR GUIOMARD',
            ],
            [
                "codigo_ibge" => 1200500,
                "estado_id" => 2,
                "nome" => 'SENA MADUREIRA',
            ],
            [
                "codigo_ibge" => 1200609,
                "estado_id" => 2,
                "nome" => 'TARAUACÁ',
            ],
            [
                "codigo_ibge" => 1200708,
                "estado_id" => 2,
                "nome" => 'XAPURI',
            ],
            [
                "codigo_ibge" => 1200807,
                "estado_id" => 2,
                "nome" => 'PORTO ACRE',
            ],
            [
                "codigo_ibge" => 1300029,
                "estado_id" => 3,
                "nome" => 'ALVARÃES',
            ],
            [
                "codigo_ibge" => 1300060,
                "estado_id" => 3,
                "nome" => 'AMATURÁ',
            ],
            [
                "codigo_ibge" => 1300086,
                "estado_id" => 3,
                "nome" => 'ANAMÃ',
            ],
            [
                "codigo_ibge" => 1300102,
                "estado_id" => 3,
                "nome" => 'ANORI',
            ],
            [
                "codigo_ibge" => 1300144,
                "estado_id" => 3,
                "nome" => 'APUÍ',
            ],
            [
                "codigo_ibge" => 1300201,
                "estado_id" => 3,
                "nome" => 'ATALAIA DO NORTE',
            ],
            [
                "codigo_ibge" => 1300300,
                "estado_id" => 3,
                "nome" => 'AUTAZES',
            ],
            [
                "codigo_ibge" => 1300409,
                "estado_id" => 3,
                "nome" => 'BARCELOS',
            ],
            [
                "codigo_ibge" => 1300508,
                "estado_id" => 3,
                "nome" => 'BARREIRINHA',
            ],
            [
                "codigo_ibge" => 1300607,
                "estado_id" => 3,
                "nome" => 'BENJAMIN CONSTANT',
            ],
            [
                "codigo_ibge" => 1300631,
                "estado_id" => 3,
                "nome" => 'BERURI',
            ],
            [
                "codigo_ibge" => 1300680,
                "estado_id" => 3,
                "nome" => 'BOA VISTA DO RAMOS',
            ],
            [
                "codigo_ibge" => 1300706,
                "estado_id" => 3,
                "nome" => 'BOCA DO ACRE',
            ],
            [
                "codigo_ibge" => 1300805,
                "estado_id" => 3,
                "nome" => 'BORBA',
            ],
            [
                "codigo_ibge" => 1300839,
                "estado_id" => 3,
                "nome" => 'CAAPIRANGA',
            ],
            [
                "codigo_ibge" => 1300904,
                "estado_id" => 3,
                "nome" => 'CANUTAMA',
            ],
            [
                "codigo_ibge" => 1301001,
                "estado_id" => 3,
                "nome" => 'CARAUARI',
            ],
            [
                "codigo_ibge" => 1301100,
                "estado_id" => 3,
                "nome" => 'CAREIRO',
            ],
            [
                "codigo_ibge" => 1301159,
                "estado_id" => 3,
                "nome" => 'CAREIRO DA VÁRZEA',
            ],
            [
                "codigo_ibge" => 1301209,
                "estado_id" => 3,
                "nome" => 'COARI',
            ],
            [
                "codigo_ibge" => 1301308,
                "estado_id" => 3,
                "nome" => 'CODAJÁS',
            ],
            [
                "codigo_ibge" => 1301407,
                "estado_id" => 3,
                "nome" => 'EIRUNEPÉ',
            ],
            [
                "codigo_ibge" => 1301506,
                "estado_id" => 3,
                "nome" => 'ENVIRA',
            ],
            [
                "codigo_ibge" => 1301605,
                "estado_id" => 3,
                "nome" => 'FONTE BOA',
            ],
            [
                "codigo_ibge" => 1301654,
                "estado_id" => 3,
                "nome" => 'GUAJARÁ',
            ],
            [
                "codigo_ibge" => 1301704,
                "estado_id" => 3,
                "nome" => 'HUMAITÁ',
            ],
            [
                "codigo_ibge" => 1301803,
                "estado_id" => 3,
                "nome" => 'IPIXUNA',
            ],
            [
                "codigo_ibge" => 1301852,
                "estado_id" => 3,
                "nome" => 'IRANDUBA',
            ],
            [
                "codigo_ibge" => 1301902,
                "estado_id" => 3,
                "nome" => 'ITACOATIARA',
            ],
            [
                "codigo_ibge" => 1301951,
                "estado_id" => 3,
                "nome" => 'ITAMARATI',
            ],
            [
                "codigo_ibge" => 1302009,
                "estado_id" => 3,
                "nome" => 'ITAPIRANGA',
            ],
            [
                "codigo_ibge" => 1302108,
                "estado_id" => 3,
                "nome" => 'JAPURÁ',
            ],
            [
                "codigo_ibge" => 1302207,
                "estado_id" => 3,
                "nome" => 'JURUÁ',
            ],
            [
                "codigo_ibge" => 1302306,
                "estado_id" => 3,
                "nome" => 'JUTAÍ',
            ],
            [
                "codigo_ibge" => 1302405,
                "estado_id" => 3,
                "nome" => 'LÁBREA',
            ],
            [
                "codigo_ibge" => 1302504,
                "estado_id" => 3,
                "nome" => 'MANACAPURU',
            ],
            [
                "codigo_ibge" => 1302553,
                "estado_id" => 3,
                "nome" => 'MANAQUIRI',
            ],
            [
                "codigo_ibge" => 1302603,
                "estado_id" => 3,
                "nome" => 'MANAUS',
            ],
            [
                "codigo_ibge" => 1302702,
                "estado_id" => 3,
                "nome" => 'MANICORÉ',
            ],
            [
                "codigo_ibge" => 1302801,
                "estado_id" => 3,
                "nome" => 'MARAÃ',
            ],
            [
                "codigo_ibge" => 1302900,
                "estado_id" => 3,
                "nome" => 'MAUÉS',
            ],
            [
                "codigo_ibge" => 1303007,
                "estado_id" => 3,
                "nome" => 'NHAMUNDÁ',
            ],
            [
                "codigo_ibge" => 1303106,
                "estado_id" => 3,
                "nome" => 'NOVA OLINDA DO NORTE',
            ],
            [
                "codigo_ibge" => 1303205,
                "estado_id" => 3,
                "nome" => 'NOVO AIRÃO',
            ],
            [
                "codigo_ibge" => 1303304,
                "estado_id" => 3,
                "nome" => 'NOVO ARIPUANÃ',
            ],
            [
                "codigo_ibge" => 1303403,
                "estado_id" => 3,
                "nome" => 'PARINTINS',
            ],
            [
                "codigo_ibge" => 1303502,
                "estado_id" => 3,
                "nome" => 'PAUINI',
            ],
            [
                "codigo_ibge" => 1303536,
                "estado_id" => 3,
                "nome" => 'PRESIDENTE FIGUEIREDO',
            ],
            [
                "codigo_ibge" => 1303569,
                "estado_id" => 3,
                "nome" => 'RIO PRETO DA EVA',
            ],
            [
                "codigo_ibge" => 1303601,
                "estado_id" => 3,
                "nome" => 'SANTA ISABEL DO RIO NEGRO',
            ],
            [
                "codigo_ibge" => 1303700,
                "estado_id" => 3,
                "nome" => 'SANTO ANTÔNIO DO IÇÁ',
            ],
            [
                "codigo_ibge" => 1303809,
                "estado_id" => 3,
                "nome" => 'SÃO GABRIEL DA CACHOEIRA',
            ],
            [
                "codigo_ibge" => 1303908,
                "estado_id" => 3,
                "nome" => 'SÃO PAULO DE OLIVENÇA',
            ],
            [
                "codigo_ibge" => 1303957,
                "estado_id" => 3,
                "nome" => 'SÃO SEBASTIÃO DO UATUMÃ',
            ],
            [
                "codigo_ibge" => 1304005,
                "estado_id" => 3,
                "nome" => 'SILVES',
            ],
            [
                "codigo_ibge" => 1304062,
                "estado_id" => 3,
                "nome" => 'TABATINGA',
            ],
            [
                "codigo_ibge" => 1304104,
                "estado_id" => 3,
                "nome" => 'TAPAUÁ',
            ],
            [
                "codigo_ibge" => 1304203,
                "estado_id" => 3,
                "nome" => 'TEFÉ',
            ],
            [
                "codigo_ibge" => 1304237,
                "estado_id" => 3,
                "nome" => 'TONANTINS',
            ],
            [
                "codigo_ibge" => 1304260,
                "estado_id" => 3,
                "nome" => 'UARINI',
            ],
            [
                "codigo_ibge" => 1304302,
                "estado_id" => 3,
                "nome" => 'URUCARÁ',
            ],
            [
                "codigo_ibge" => 1304401,
                "estado_id" => 3,
                "nome" => 'URUCURITUBA',
            ],
            [
                "codigo_ibge" => 1400027,
                "estado_id" => 4,
                "nome" => 'AMAJARI',
            ],
            [
                "codigo_ibge" => 1400050,
                "estado_id" => 4,
                "nome" => 'ALTO ALEGRE',
            ],
            [
                "codigo_ibge" => 1400100,
                "estado_id" => 4,
                "nome" => 'BOA VISTA',
            ],
            [
                "codigo_ibge" => 1400159,
                "estado_id" => 4,
                "nome" => 'BONFIM',
            ],
            [
                "codigo_ibge" => 1400175,
                "estado_id" => 4,
                "nome" => 'CANTÁ',
            ],
            [
                "codigo_ibge" => 1400209,
                "estado_id" => 4,
                "nome" => 'CARACARAÍ',
            ],
            [
                "codigo_ibge" => 1400233,
                "estado_id" => 4,
                "nome" => 'CAROEBE',
            ],
            [
                "codigo_ibge" => 1400282,
                "estado_id" => 4,
                "nome" => 'IRACEMA',
            ],
            [
                "codigo_ibge" => 1400308,
                "estado_id" => 4,
                "nome" => 'MUCAJAÍ',
            ],
            [
                "codigo_ibge" => 1400407,
                "estado_id" => 4,
                "nome" => 'NORMANDIA',
            ],
            [
                "codigo_ibge" => 1400456,
                "estado_id" => 4,
                "nome" => 'PACARAIMA',
            ],
            [
                "codigo_ibge" => 1400472,
                "estado_id" => 4,
                "nome" => 'RORAINÓPOLIS',
            ],
            [
                "codigo_ibge" => 1400506,
                "estado_id" => 4,
                "nome" => 'SÃO JOÃO DA BALIZA',
            ],
            [
                "codigo_ibge" => 1400605,
                "estado_id" => 4,
                "nome" => 'SÃO LUIZ',
            ],
            [
                "codigo_ibge" => 1400704,
                "estado_id" => 4,
                "nome" => 'UIRAMUTÃ',
            ],
            [
                "codigo_ibge" => 1500107,
                "estado_id" => 5,
                "nome" => 'ABAETETUBA',
            ],
            [
                "codigo_ibge" => 1500131,
                "estado_id" => 5,
                "nome" => 'ABEL FIGUEIREDO',
            ],
            [
                "codigo_ibge" => 1500206,
                "estado_id" => 5,
                "nome" => 'ACARÁ',
            ],
            [
                "codigo_ibge" => 1500305,
                "estado_id" => 5,
                "nome" => 'AFUÁ',
            ],
            [
                "codigo_ibge" => 1500347,
                "estado_id" => 5,
                "nome" => 'ÁGUA AZUL DO NORTE',
            ],
            [
                "codigo_ibge" => 1500404,
                "estado_id" => 5,
                "nome" => 'ALENQUER',
            ],
            [
                "codigo_ibge" => 1500503,
                "estado_id" => 5,
                "nome" => 'ALMEIRIM',
            ],
            [
                "codigo_ibge" => 1500602,
                "estado_id" => 5,
                "nome" => 'ALTAMIRA',
            ],
            [
                "codigo_ibge" => 1500701,
                "estado_id" => 5,
                "nome" => 'ANAJÁS',
            ],
            [
                "codigo_ibge" => 1500800,
                "estado_id" => 5,
                "nome" => 'ANANINDEUA',
            ],
            [
                "codigo_ibge" => 1500859,
                "estado_id" => 5,
                "nome" => 'ANAPU',
            ],
            [
                "codigo_ibge" => 1500909,
                "estado_id" => 5,
                "nome" => 'AUGUSTO CORRÊA',
            ],
            [
                "codigo_ibge" => 1500958,
                "estado_id" => 5,
                "nome" => 'AURORA DO PARÁ',
            ],
            [
                "codigo_ibge" => 1501006,
                "estado_id" => 5,
                "nome" => 'AVEIRO',
            ],
            [
                "codigo_ibge" => 1501105,
                "estado_id" => 5,
                "nome" => 'BAGRE',
            ],
            [
                "codigo_ibge" => 1501204,
                "estado_id" => 5,
                "nome" => 'BAIÃO',
            ],
            [
                "codigo_ibge" => 1501253,
                "estado_id" => 5,
                "nome" => 'BANNACH',
            ],
            [
                "codigo_ibge" => 1501303,
                "estado_id" => 5,
                "nome" => 'BARCARENA',
            ],
            [
                "codigo_ibge" => 1501402,
                "estado_id" => 5,
                "nome" => 'BELÉM',
            ],
            [
                "codigo_ibge" => 1501451,
                "estado_id" => 5,
                "nome" => 'BELTERRA',
            ],
            [
                "codigo_ibge" => 1501501,
                "estado_id" => 5,
                "nome" => 'BENEVIDES',
            ],
            [
                "codigo_ibge" => 1501576,
                "estado_id" => 5,
                "nome" => 'BOM JESUS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1501600,
                "estado_id" => 5,
                "nome" => 'BONITO',
            ],
            [
                "codigo_ibge" => 1501709,
                "estado_id" => 5,
                "nome" => 'BRAGANÇA',
            ],
            [
                "codigo_ibge" => 1501725,
                "estado_id" => 5,
                "nome" => 'BRASIL NOVO',
            ],
            [
                "codigo_ibge" => 1501758,
                "estado_id" => 5,
                "nome" => 'BREJO GRANDE DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1501782,
                "estado_id" => 5,
                "nome" => 'BREU BRANCO',
            ],
            [
                "codigo_ibge" => 1501808,
                "estado_id" => 5,
                "nome" => 'BREVES',
            ],
            [
                "codigo_ibge" => 1501907,
                "estado_id" => 5,
                "nome" => 'BUJARU',
            ],
            [
                "codigo_ibge" => 1501956,
                "estado_id" => 5,
                "nome" => 'CACHOEIRA DO PIRIÁ',
            ],
            [
                "codigo_ibge" => 1502004,
                "estado_id" => 5,
                "nome" => 'CACHOEIRA DO ARARI',
            ],
            [
                "codigo_ibge" => 1502103,
                "estado_id" => 5,
                "nome" => 'CAMETÁ',
            ],
            [
                "codigo_ibge" => 1502152,
                "estado_id" => 5,
                "nome" => 'CANAÃ DOS CARAJÁS',
            ],
            [
                "codigo_ibge" => 1502202,
                "estado_id" => 5,
                "nome" => 'CAPANEMA',
            ],
            [
                "codigo_ibge" => 1502301,
                "estado_id" => 5,
                "nome" => 'CAPITÃO POÇO',
            ],
            [
                "codigo_ibge" => 1502400,
                "estado_id" => 5,
                "nome" => 'CASTANHAL',
            ],
            [
                "codigo_ibge" => 1502509,
                "estado_id" => 5,
                "nome" => 'CHAVES',
            ],
            [
                "codigo_ibge" => 1502608,
                "estado_id" => 5,
                "nome" => 'COLARES',
            ],
            [
                "codigo_ibge" => 1502707,
                "estado_id" => 5,
                "nome" => 'CONCEIÇÃO DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1502756,
                "estado_id" => 5,
                "nome" => 'CONCÓRDIA DO PARÁ',
            ],
            [
                "codigo_ibge" => 1502764,
                "estado_id" => 5,
                "nome" => 'CUMARU DO NORTE',
            ],
            [
                "codigo_ibge" => 1502772,
                "estado_id" => 5,
                "nome" => 'CURIONÓPOLIS',
            ],
            [
                "codigo_ibge" => 1502806,
                "estado_id" => 5,
                "nome" => 'CURRALINHO',
            ],
            [
                "codigo_ibge" => 1502855,
                "estado_id" => 5,
                "nome" => 'CURUÁ',
            ],
            [
                "codigo_ibge" => 1502905,
                "estado_id" => 5,
                "nome" => 'CURUÇÁ',
            ],
            [
                "codigo_ibge" => 1502939,
                "estado_id" => 5,
                "nome" => 'DOM ELISEU',
            ],
            [
                "codigo_ibge" => 1502954,
                "estado_id" => 5,
                "nome" => 'ELDORADO DOS CARAJÁS',
            ],
            [
                "codigo_ibge" => 1503002,
                "estado_id" => 5,
                "nome" => 'FARO',
            ],
            [
                "codigo_ibge" => 1503044,
                "estado_id" => 5,
                "nome" => 'FLORESTA DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1503077,
                "estado_id" => 5,
                "nome" => 'GARRAFÃO DO NORTE',
            ],
            [
                "codigo_ibge" => 1503093,
                "estado_id" => 5,
                "nome" => 'GOIANÉSIA DO PARÁ',
            ],
            [
                "codigo_ibge" => 1503101,
                "estado_id" => 5,
                "nome" => 'GURUPÁ',
            ],
            [
                "codigo_ibge" => 1503200,
                "estado_id" => 5,
                "nome" => 'IGARAPÉ-AÇU',
            ],
            [
                "codigo_ibge" => 1503309,
                "estado_id" => 5,
                "nome" => 'IGARAPÉ-MIRI',
            ],
            [
                "codigo_ibge" => 1503408,
                "estado_id" => 5,
                "nome" => 'INHANGAPI',
            ],
            [
                "codigo_ibge" => 1503457,
                "estado_id" => 5,
                "nome" => 'IPIXUNA DO PARÁ',
            ],
            [
                "codigo_ibge" => 1503507,
                "estado_id" => 5,
                "nome" => 'IRITUIA',
            ],
            [
                "codigo_ibge" => 1503606,
                "estado_id" => 5,
                "nome" => 'ITAITUBA',
            ],
            [
                "codigo_ibge" => 1503705,
                "estado_id" => 5,
                "nome" => 'ITUPIRANGA',
            ],
            [
                "codigo_ibge" => 1503754,
                "estado_id" => 5,
                "nome" => 'JACAREACANGA',
            ],
            [
                "codigo_ibge" => 1503804,
                "estado_id" => 5,
                "nome" => 'JACUNDÁ',
            ],
            [
                "codigo_ibge" => 1503903,
                "estado_id" => 5,
                "nome" => 'JURUTI',
            ],
            [
                "codigo_ibge" => 1504000,
                "estado_id" => 5,
                "nome" => 'LIMOEIRO DO AJURU',
            ],
            [
                "codigo_ibge" => 1504059,
                "estado_id" => 5,
                "nome" => 'MÃE DO RIO',
            ],
            [
                "codigo_ibge" => 1504109,
                "estado_id" => 5,
                "nome" => 'MAGALHÃES BARATA',
            ],
            [
                "codigo_ibge" => 1504208,
                "estado_id" => 5,
                "nome" => 'MARABÁ',
            ],
            [
                "codigo_ibge" => 1504307,
                "estado_id" => 5,
                "nome" => 'MARACANÃ',
            ],
            [
                "codigo_ibge" => 1504406,
                "estado_id" => 5,
                "nome" => 'MARAPANIM',
            ],
            [
                "codigo_ibge" => 1504422,
                "estado_id" => 5,
                "nome" => 'MARITUBA',
            ],
            [
                "codigo_ibge" => 1504455,
                "estado_id" => 5,
                "nome" => 'MEDICILÂNDIA',
            ],
            [
                "codigo_ibge" => 1504505,
                "estado_id" => 5,
                "nome" => 'MELGAÇO',
            ],
            [
                "codigo_ibge" => 1504604,
                "estado_id" => 5,
                "nome" => 'MOCAJUBA',
            ],
            [
                "codigo_ibge" => 1504703,
                "estado_id" => 5,
                "nome" => 'MOJU',
            ],
            [
                "codigo_ibge" => 1504752,
                "estado_id" => 5,
                "nome" => 'MOJUÍ DOS CAMPOS',
            ],
            [
                "codigo_ibge" => 1504802,
                "estado_id" => 5,
                "nome" => 'MONTE ALEGRE',
            ],
            [
                "codigo_ibge" => 1504901,
                "estado_id" => 5,
                "nome" => 'MUANÁ',
            ],
            [
                "codigo_ibge" => 1504950,
                "estado_id" => 5,
                "nome" => 'NOVA ESPERANÇA DO PIRIÁ',
            ],
            [
                "codigo_ibge" => 1504976,
                "estado_id" => 5,
                "nome" => 'NOVA IPIXUNA',
            ],
            [
                "codigo_ibge" => 1505007,
                "estado_id" => 5,
                "nome" => 'NOVA TIMBOTEUA',
            ],
            [
                "codigo_ibge" => 1505031,
                "estado_id" => 5,
                "nome" => 'NOVO PROGRESSO',
            ],
            [
                "codigo_ibge" => 1505064,
                "estado_id" => 5,
                "nome" => 'NOVO REPARTIMENTO',
            ],
            [
                "codigo_ibge" => 1505106,
                "estado_id" => 5,
                "nome" => 'ÓBIDOS',
            ],
            [
                "codigo_ibge" => 1505205,
                "estado_id" => 5,
                "nome" => 'OEIRAS DO PARÁ',
            ],
            [
                "codigo_ibge" => 1505304,
                "estado_id" => 5,
                "nome" => 'ORIXIMINÁ',
            ],
            [
                "codigo_ibge" => 1505403,
                "estado_id" => 5,
                "nome" => 'OURÉM',
            ],
            [
                "codigo_ibge" => 1505437,
                "estado_id" => 5,
                "nome" => 'OURILÂNDIA DO NORTE',
            ],
            [
                "codigo_ibge" => 1505486,
                "estado_id" => 5,
                "nome" => 'PACAJÁ',
            ],
            [
                "codigo_ibge" => 1505494,
                "estado_id" => 5,
                "nome" => 'PALESTINA DO PARÁ',
            ],
            [
                "codigo_ibge" => 1505502,
                "estado_id" => 5,
                "nome" => 'PARAGOMINAS',
            ],
            [
                "codigo_ibge" => 1505536,
                "estado_id" => 5,
                "nome" => 'PARAUAPEBAS',
            ],
            [
                "codigo_ibge" => 1505551,
                "estado_id" => 5,
                "nome" => 'PAU D`ARCO',
            ],
            [
                "codigo_ibge" => 1505601,
                "estado_id" => 5,
                "nome" => 'PEIXE-BOI',
            ],
            [
                "codigo_ibge" => 1505635,
                "estado_id" => 5,
                "nome" => 'PIÇARRA',
            ],
            [
                "codigo_ibge" => 1505650,
                "estado_id" => 5,
                "nome" => 'PLACAS',
            ],
            [
                "codigo_ibge" => 1505700,
                "estado_id" => 5,
                "nome" => 'PONTA DE PEDRAS',
            ],
            [
                "codigo_ibge" => 1505809,
                "estado_id" => 5,
                "nome" => 'PORTEL',
            ],
            [
                "codigo_ibge" => 1505908,
                "estado_id" => 5,
                "nome" => 'PORTO DE MOZ',
            ],
            [
                "codigo_ibge" => 1506005,
                "estado_id" => 5,
                "nome" => 'PRAINHA',
            ],
            [
                "codigo_ibge" => 1506104,
                "estado_id" => 5,
                "nome" => 'PRIMAVERA',
            ],
            [
                "codigo_ibge" => 1506112,
                "estado_id" => 5,
                "nome" => 'QUATIPURU',
            ],
            [
                "codigo_ibge" => 1506138,
                "estado_id" => 5,
                "nome" => 'REDENÇÃO',
            ],
            [
                "codigo_ibge" => 1506161,
                "estado_id" => 5,
                "nome" => 'RIO MARIA',
            ],
            [
                "codigo_ibge" => 1506187,
                "estado_id" => 5,
                "nome" => 'RONDON DO PARÁ',
            ],
            [
                "codigo_ibge" => 1506195,
                "estado_id" => 5,
                "nome" => 'RURÓPOLIS',
            ],
            [
                "codigo_ibge" => 1506203,
                "estado_id" => 5,
                "nome" => 'SALINÓPOLIS',
            ],
            [
                "codigo_ibge" => 1506302,
                "estado_id" => 5,
                "nome" => 'SALVATERRA',
            ],
            [
                "codigo_ibge" => 1506351,
                "estado_id" => 5,
                "nome" => 'SANTA BÁRBARA DO PARÁ',
            ],
            [
                "codigo_ibge" => 1506401,
                "estado_id" => 5,
                "nome" => 'SANTA CRUZ DO ARARI',
            ],
            [
                "codigo_ibge" => 1506500,
                "estado_id" => 5,
                "nome" => 'SANTA ISABEL DO PARÁ',
            ],
            [
                "codigo_ibge" => 1506559,
                "estado_id" => 5,
                "nome" => 'SANTA LUZIA DO PARÁ',
            ],
            [
                "codigo_ibge" => 1506583,
                "estado_id" => 5,
                "nome" => 'SANTA MARIA DAS BARREIRAS',
            ],
            [
                "codigo_ibge" => 1506609,
                "estado_id" => 5,
                "nome" => 'SANTA MARIA DO PARÁ',
            ],
            [
                "codigo_ibge" => 1506708,
                "estado_id" => 5,
                "nome" => 'SANTANA DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1506807,
                "estado_id" => 5,
                "nome" => 'SANTARÉM',
            ],
            [
                "codigo_ibge" => 1506906,
                "estado_id" => 5,
                "nome" => 'SANTARÉM NOVO',
            ],
            [
                "codigo_ibge" => 1507003,
                "estado_id" => 5,
                "nome" => 'SANTO ANTÔNIO DO TAUÁ',
            ],
            [
                "codigo_ibge" => 1507102,
                "estado_id" => 5,
                "nome" => 'SÃO CAETANO DE ODIVELAS',
            ],
            [
                "codigo_ibge" => 1507151,
                "estado_id" => 5,
                "nome" => 'SÃO DOMINGOS DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1507201,
                "estado_id" => 5,
                "nome" => 'SÃO DOMINGOS DO CAPIM',
            ],
            [
                "codigo_ibge" => 1507300,
                "estado_id" => 5,
                "nome" => 'SÃO FÉLIX DO XINGU',
            ],
            [
                "codigo_ibge" => 1507409,
                "estado_id" => 5,
                "nome" => 'SÃO FRANCISCO DO PARÁ',
            ],
            [
                "codigo_ibge" => 1507458,
                "estado_id" => 5,
                "nome" => 'SÃO GERALDO DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1507466,
                "estado_id" => 5,
                "nome" => 'SÃO JOÃO DA PONTA',
            ],
            [
                "codigo_ibge" => 1507474,
                "estado_id" => 5,
                "nome" => 'SÃO JOÃO DE PIRABAS',
            ],
            [
                "codigo_ibge" => 1507508,
                "estado_id" => 5,
                "nome" => 'SÃO JOÃO DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1507607,
                "estado_id" => 5,
                "nome" => 'SÃO MIGUEL DO GUAMÁ',
            ],
            [
                "codigo_ibge" => 1507706,
                "estado_id" => 5,
                "nome" => 'SÃO SEBASTIÃO DA BOA VISTA',
            ],
            [
                "codigo_ibge" => 1507755,
                "estado_id" => 5,
                "nome" => 'SAPUCAIA',
            ],
            [
                "codigo_ibge" => 1507805,
                "estado_id" => 5,
                "nome" => 'SENADOR JOSÉ PORFÍRIO',
            ],
            [
                "codigo_ibge" => 1507904,
                "estado_id" => 5,
                "nome" => 'SOURE',
            ],
            [
                "codigo_ibge" => 1507953,
                "estado_id" => 5,
                "nome" => 'TAILÂNDIA',
            ],
            [
                "codigo_ibge" => 1507961,
                "estado_id" => 5,
                "nome" => 'TERRA ALTA',
            ],
            [
                "codigo_ibge" => 1507979,
                "estado_id" => 5,
                "nome" => 'TERRA SANTA',
            ],
            [
                "codigo_ibge" => 1508001,
                "estado_id" => 5,
                "nome" => 'TOMÉ-AÇU',
            ],
            [
                "codigo_ibge" => 1508035,
                "estado_id" => 5,
                "nome" => 'TRACUATEUA',
            ],
            [
                "codigo_ibge" => 1508050,
                "estado_id" => 5,
                "nome" => 'TRAIRÃO',
            ],
            [
                "codigo_ibge" => 1508084,
                "estado_id" => 5,
                "nome" => 'TUCUMÃ',
            ],
            [
                "codigo_ibge" => 1508100,
                "estado_id" => 5,
                "nome" => 'TUCURUÍ',
            ],
            [
                "codigo_ibge" => 1508126,
                "estado_id" => 5,
                "nome" => 'ULIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 1508159,
                "estado_id" => 5,
                "nome" => 'URUARÁ',
            ],
            [
                "codigo_ibge" => 1508209,
                "estado_id" => 5,
                "nome" => 'VIGIA',
            ],
            [
                "codigo_ibge" => 1508308,
                "estado_id" => 5,
                "nome" => 'VISEU',
            ],
            [
                "codigo_ibge" => 1508357,
                "estado_id" => 5,
                "nome" => 'VITÓRIA DO XINGU',
            ],
            [
                "codigo_ibge" => 1508407,
                "estado_id" => 5,
                "nome" => 'XINGUARA',
            ],
            [
                "codigo_ibge" => 1600055,
                "estado_id" => 6,
                "nome" => 'SERRA DO NAVIO',
            ],
            [
                "codigo_ibge" => 1600105,
                "estado_id" => 6,
                "nome" => 'AMAPÁ',
            ],
            [
                "codigo_ibge" => 1600154,
                "estado_id" => 6,
                "nome" => 'PEDRA BRANCA DO AMAPARÍ',
            ],
            [
                "codigo_ibge" => 1600204,
                "estado_id" => 6,
                "nome" => 'CALÇOENE',
            ],
            [
                "codigo_ibge" => 1600212,
                "estado_id" => 6,
                "nome" => 'CUTIAS',
            ],
            [
                "codigo_ibge" => 1600238,
                "estado_id" => 6,
                "nome" => 'FERREIRA GOMES',
            ],
            [
                "codigo_ibge" => 1600253,
                "estado_id" => 6,
                "nome" => 'ITAUBAL',
            ],
            [
                "codigo_ibge" => 1600279,
                "estado_id" => 6,
                "nome" => 'LARANJAL DO JARI',
            ],
            [
                "codigo_ibge" => 1600303,
                "estado_id" => 6,
                "nome" => 'MACAPÁ',
            ],
            [
                "codigo_ibge" => 1600402,
                "estado_id" => 6,
                "nome" => 'MAZAGÃO',
            ],
            [
                "codigo_ibge" => 1600501,
                "estado_id" => 6,
                "nome" => 'OIAPOQUE',
            ],
            [
                "codigo_ibge" => 1600535,
                "estado_id" => 6,
                "nome" => 'PORTO GRANDE',
            ],
            [
                "codigo_ibge" => 1600550,
                "estado_id" => 6,
                "nome" => 'PRACUÚBA',
            ],
            [
                "codigo_ibge" => 1600600,
                "estado_id" => 6,
                "nome" => 'SANTANA',
            ],
            [
                "codigo_ibge" => 1600709,
                "estado_id" => 6,
                "nome" => 'TARTARUGALZINHO',
            ],
            [
                "codigo_ibge" => 1600808,
                "estado_id" => 6,
                "nome" => 'VITÓRIA DO JARI',
            ],
            [
                "codigo_ibge" => 1700251,
                "estado_id" => 7,
                "nome" => 'ABREULÂNDIA',
            ],
            [
                "codigo_ibge" => 1700301,
                "estado_id" => 7,
                "nome" => 'AGUIARNÓPOLIS',
            ],
            [
                "codigo_ibge" => 1700350,
                "estado_id" => 7,
                "nome" => 'ALIANÇA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1700400,
                "estado_id" => 7,
                "nome" => 'ALMAS',
            ],
            [
                "codigo_ibge" => 1700707,
                "estado_id" => 7,
                "nome" => 'ALVORADA',
            ],
            [
                "codigo_ibge" => 1701002,
                "estado_id" => 7,
                "nome" => 'ANANÁS',
            ],
            [
                "codigo_ibge" => 1701051,
                "estado_id" => 7,
                "nome" => 'ANGICO',
            ],
            [
                "codigo_ibge" => 1701101,
                "estado_id" => 7,
                "nome" => 'APARECIDA DO RIO NEGRO',
            ],
            [
                "codigo_ibge" => 1701309,
                "estado_id" => 7,
                "nome" => 'ARAGOMINAS',
            ],
            [
                "codigo_ibge" => 1701903,
                "estado_id" => 7,
                "nome" => 'ARAGUACEMA',
            ],
            [
                "codigo_ibge" => 1702000,
                "estado_id" => 7,
                "nome" => 'ARAGUAÇU',
            ],
            [
                "codigo_ibge" => 1702109,
                "estado_id" => 7,
                "nome" => 'ARAGUAÍNA',
            ],
            [
                "codigo_ibge" => 1702158,
                "estado_id" => 7,
                "nome" => 'ARAGUANÃ',
            ],
            [
                "codigo_ibge" => 1702208,
                "estado_id" => 7,
                "nome" => 'ARAGUATINS',
            ],
            [
                "codigo_ibge" => 1702307,
                "estado_id" => 7,
                "nome" => 'ARAPOEMA',
            ],
            [
                "codigo_ibge" => 1702406,
                "estado_id" => 7,
                "nome" => 'ARRAIAS',
            ],
            [
                "codigo_ibge" => 1702554,
                "estado_id" => 7,
                "nome" => 'AUGUSTINÓPOLIS',
            ],
            [
                "codigo_ibge" => 1702703,
                "estado_id" => 7,
                "nome" => 'AURORA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1702901,
                "estado_id" => 7,
                "nome" => 'AXIXÁ DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1703008,
                "estado_id" => 7,
                "nome" => 'BABAÇULÂNDIA',
            ],
            [
                "codigo_ibge" => 1703057,
                "estado_id" => 7,
                "nome" => 'BANDEIRANTES DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1703073,
                "estado_id" => 7,
                "nome" => 'BARRA DO OURO',
            ],
            [
                "codigo_ibge" => 1703107,
                "estado_id" => 7,
                "nome" => 'BARROLÂNDIA',
            ],
            [
                "codigo_ibge" => 1703206,
                "estado_id" => 7,
                "nome" => 'BERNARDO SAYÃO',
            ],
            [
                "codigo_ibge" => 1703305,
                "estado_id" => 7,
                "nome" => 'BOM JESUS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1703602,
                "estado_id" => 7,
                "nome" => 'BRASILÂNDIA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1703701,
                "estado_id" => 7,
                "nome" => 'BREJINHO DE NAZARÉ',
            ],
            [
                "codigo_ibge" => 1703800,
                "estado_id" => 7,
                "nome" => 'BURITI DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1703826,
                "estado_id" => 7,
                "nome" => 'CACHOEIRINHA',
            ],
            [
                "codigo_ibge" => 1703842,
                "estado_id" => 7,
                "nome" => 'CAMPOS LINDOS',
            ],
            [
                "codigo_ibge" => 1703867,
                "estado_id" => 7,
                "nome" => 'CARIRI DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1703883,
                "estado_id" => 7,
                "nome" => 'CARMOLÂNDIA',
            ],
            [
                "codigo_ibge" => 1703891,
                "estado_id" => 7,
                "nome" => 'CARRASCO BONITO',
            ],
            [
                "codigo_ibge" => 1703909,
                "estado_id" => 7,
                "nome" => 'CASEARA',
            ],
            [
                "codigo_ibge" => 1704105,
                "estado_id" => 7,
                "nome" => 'CENTENÁRIO',
            ],
            [
                "codigo_ibge" => 1704600,
                "estado_id" => 7,
                "nome" => 'CHAPADA DE AREIA',
            ],
            [
                "codigo_ibge" => 1705102,
                "estado_id" => 7,
                "nome" => 'CHAPADA DA NATIVIDADE',
            ],
            [
                "codigo_ibge" => 1705508,
                "estado_id" => 7,
                "nome" => 'COLINAS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1705557,
                "estado_id" => 7,
                "nome" => 'COMBINADO',
            ],
            [
                "codigo_ibge" => 1705607,
                "estado_id" => 7,
                "nome" => 'CONCEIÇÃO DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1706001,
                "estado_id" => 7,
                "nome" => 'COUTO MAGALHÃES',
            ],
            [
                "codigo_ibge" => 1706100,
                "estado_id" => 7,
                "nome" => 'CRISTALÂNDIA',
            ],
            [
                "codigo_ibge" => 1706258,
                "estado_id" => 7,
                "nome" => 'CRIXÁS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1706506,
                "estado_id" => 7,
                "nome" => 'DARCINÓPOLIS',
            ],
            [
                "codigo_ibge" => 1707009,
                "estado_id" => 7,
                "nome" => 'DIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 1707108,
                "estado_id" => 7,
                "nome" => 'DIVINÓPOLIS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1707207,
                "estado_id" => 7,
                "nome" => 'DOIS IRMÃOS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1707306,
                "estado_id" => 7,
                "nome" => 'DUERÉ',
            ],
            [
                "codigo_ibge" => 1707405,
                "estado_id" => 7,
                "nome" => 'ESPERANTINA',
            ],
            [
                "codigo_ibge" => 1707553,
                "estado_id" => 7,
                "nome" => 'FÁTIMA',
            ],
            [
                "codigo_ibge" => 1707652,
                "estado_id" => 7,
                "nome" => 'FIGUEIRÓPOLIS',
            ],
            [
                "codigo_ibge" => 1707702,
                "estado_id" => 7,
                "nome" => 'FILADÉLFIA',
            ],
            [
                "codigo_ibge" => 1708205,
                "estado_id" => 7,
                "nome" => 'FORMOSO DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1708254,
                "estado_id" => 7,
                "nome" => 'FORTALEZA DO TABOCÃO',
            ],
            [
                "codigo_ibge" => 1708304,
                "estado_id" => 7,
                "nome" => 'GOIANORTE',
            ],
            [
                "codigo_ibge" => 1709005,
                "estado_id" => 7,
                "nome" => 'GOIATINS',
            ],
            [
                "codigo_ibge" => 1709302,
                "estado_id" => 7,
                "nome" => 'GUARAÍ',
            ],
            [
                "codigo_ibge" => 1709500,
                "estado_id" => 7,
                "nome" => 'GURUPI',
            ],
            [
                "codigo_ibge" => 1709807,
                "estado_id" => 7,
                "nome" => 'IPUEIRAS',
            ],
            [
                "codigo_ibge" => 1710508,
                "estado_id" => 7,
                "nome" => 'ITACAJÁ',
            ],
            [
                "codigo_ibge" => 1710706,
                "estado_id" => 7,
                "nome" => 'ITAGUATINS',
            ],
            [
                "codigo_ibge" => 1710904,
                "estado_id" => 7,
                "nome" => 'ITAPIRATINS',
            ],
            [
                "codigo_ibge" => 1711100,
                "estado_id" => 7,
                "nome" => 'ITAPORÃ DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1711506,
                "estado_id" => 7,
                "nome" => 'JAÚ DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1711803,
                "estado_id" => 7,
                "nome" => 'JUARINA',
            ],
            [
                "codigo_ibge" => 1711902,
                "estado_id" => 7,
                "nome" => 'LAGOA DA CONFUSÃO',
            ],
            [
                "codigo_ibge" => 1711951,
                "estado_id" => 7,
                "nome" => 'LAGOA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1712009,
                "estado_id" => 7,
                "nome" => 'LAJEADO',
            ],
            [
                "codigo_ibge" => 1712157,
                "estado_id" => 7,
                "nome" => 'LAVANDEIRA',
            ],
            [
                "codigo_ibge" => 1712405,
                "estado_id" => 7,
                "nome" => 'LIZARDA',
            ],
            [
                "codigo_ibge" => 1712454,
                "estado_id" => 7,
                "nome" => 'LUZINÓPOLIS',
            ],
            [
                "codigo_ibge" => 1712504,
                "estado_id" => 7,
                "nome" => 'MARIANÓPOLIS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1712702,
                "estado_id" => 7,
                "nome" => 'MATEIROS',
            ],
            [
                "codigo_ibge" => 1712801,
                "estado_id" => 7,
                "nome" => 'MAURILÂNDIA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1713205,
                "estado_id" => 7,
                "nome" => 'MIRACEMA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1713304,
                "estado_id" => 7,
                "nome" => 'MIRANORTE',
            ],
            [
                "codigo_ibge" => 1713601,
                "estado_id" => 7,
                "nome" => 'MONTE DO CARMO',
            ],
            [
                "codigo_ibge" => 1713700,
                "estado_id" => 7,
                "nome" => 'MONTE SANTO DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1713809,
                "estado_id" => 7,
                "nome" => 'PALMEIRAS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1713957,
                "estado_id" => 7,
                "nome" => 'MURICILÂNDIA',
            ],
            [
                "codigo_ibge" => 1714203,
                "estado_id" => 7,
                "nome" => 'NATIVIDADE',
            ],
            [
                "codigo_ibge" => 1714302,
                "estado_id" => 7,
                "nome" => 'NAZARÉ',
            ],
            [
                "codigo_ibge" => 1714880,
                "estado_id" => 7,
                "nome" => 'NOVA OLINDA',
            ],
            [
                "codigo_ibge" => 1715002,
                "estado_id" => 7,
                "nome" => 'NOVA ROSALÂNDIA',
            ],
            [
                "codigo_ibge" => 1715101,
                "estado_id" => 7,
                "nome" => 'NOVO ACORDO',
            ],
            [
                "codigo_ibge" => 1715150,
                "estado_id" => 7,
                "nome" => 'NOVO ALEGRE',
            ],
            [
                "codigo_ibge" => 1715259,
                "estado_id" => 7,
                "nome" => 'NOVO JARDIM',
            ],
            [
                "codigo_ibge" => 1715507,
                "estado_id" => 7,
                "nome" => 'OLIVEIRA DE FÁTIMA',
            ],
            [
                "codigo_ibge" => 1715705,
                "estado_id" => 7,
                "nome" => 'PALMEIRANTE',
            ],
            [
                "codigo_ibge" => 1715754,
                "estado_id" => 7,
                "nome" => 'PALMEIRÓPOLIS',
            ],
            [
                "codigo_ibge" => 1716109,
                "estado_id" => 7,
                "nome" => 'PARAÍSO DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1716208,
                "estado_id" => 7,
                "nome" => 'PARANÃ',
            ],
            [
                "codigo_ibge" => 1716307,
                "estado_id" => 7,
                "nome" => 'PAU D`ARCO',
            ],
            [
                "codigo_ibge" => 1716505,
                "estado_id" => 7,
                "nome" => 'PEDRO AFONSO',
            ],
            [
                "codigo_ibge" => 1716604,
                "estado_id" => 7,
                "nome" => 'PEIXE',
            ],
            [
                "codigo_ibge" => 1716653,
                "estado_id" => 7,
                "nome" => 'PEQUIZEIRO',
            ],
            [
                "codigo_ibge" => 1716703,
                "estado_id" => 7,
                "nome" => 'COLMÉIA',
            ],
            [
                "codigo_ibge" => 1717008,
                "estado_id" => 7,
                "nome" => 'PINDORAMA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1717206,
                "estado_id" => 7,
                "nome" => 'PIRAQUÊ',
            ],
            [
                "codigo_ibge" => 1717503,
                "estado_id" => 7,
                "nome" => 'PIUM',
            ],
            [
                "codigo_ibge" => 1717800,
                "estado_id" => 7,
                "nome" => 'PONTE ALTA DO BOM JESUS',
            ],
            [
                "codigo_ibge" => 1717909,
                "estado_id" => 7,
                "nome" => 'PONTE ALTA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1718006,
                "estado_id" => 7,
                "nome" => 'PORTO ALEGRE DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1718204,
                "estado_id" => 7,
                "nome" => 'PORTO NACIONAL',
            ],
            [
                "codigo_ibge" => 1718303,
                "estado_id" => 7,
                "nome" => 'PRAIA NORTE',
            ],
            [
                "codigo_ibge" => 1718402,
                "estado_id" => 7,
                "nome" => 'PRESIDENTE KENNEDY',
            ],
            [
                "codigo_ibge" => 1718451,
                "estado_id" => 7,
                "nome" => 'PUGMIL',
            ],
            [
                "codigo_ibge" => 1718501,
                "estado_id" => 7,
                "nome" => 'RECURSOLÂNDIA',
            ],
            [
                "codigo_ibge" => 1718550,
                "estado_id" => 7,
                "nome" => 'RIACHINHO',
            ],
            [
                "codigo_ibge" => 1718659,
                "estado_id" => 7,
                "nome" => 'RIO DA CONCEIÇÃO',
            ],
            [
                "codigo_ibge" => 1718709,
                "estado_id" => 7,
                "nome" => 'RIO DOS BOIS',
            ],
            [
                "codigo_ibge" => 1718758,
                "estado_id" => 7,
                "nome" => 'RIO SONO',
            ],
            [
                "codigo_ibge" => 1718808,
                "estado_id" => 7,
                "nome" => 'SAMPAIO',
            ],
            [
                "codigo_ibge" => 1718840,
                "estado_id" => 7,
                "nome" => 'SANDOLÂNDIA',
            ],
            [
                "codigo_ibge" => 1718865,
                "estado_id" => 7,
                "nome" => 'SANTA FÉ DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 1718881,
                "estado_id" => 7,
                "nome" => 'SANTA MARIA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1718899,
                "estado_id" => 7,
                "nome" => 'SANTA RITA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1718907,
                "estado_id" => 7,
                "nome" => 'SANTA ROSA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1719004,
                "estado_id" => 7,
                "nome" => 'SANTA TEREZA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720002,
                "estado_id" => 7,
                "nome" => 'SANTA TEREZINHA DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720101,
                "estado_id" => 7,
                "nome" => 'SÃO BENTO DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720150,
                "estado_id" => 7,
                "nome" => 'SÃO FÉLIX DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720200,
                "estado_id" => 7,
                "nome" => 'SÃO MIGUEL DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720259,
                "estado_id" => 7,
                "nome" => 'SÃO SALVADOR DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720309,
                "estado_id" => 7,
                "nome" => 'SÃO SEBASTIÃO DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720499,
                "estado_id" => 7,
                "nome" => 'SÃO VALÉRIO',
            ],
            [
                "codigo_ibge" => 1720655,
                "estado_id" => 7,
                "nome" => 'SILVANÓPOLIS',
            ],
            [
                "codigo_ibge" => 1720804,
                "estado_id" => 7,
                "nome" => 'SÍTIO NOVO DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720853,
                "estado_id" => 7,
                "nome" => 'SUCUPIRA',
            ],
            [
                "codigo_ibge" => 1720903,
                "estado_id" => 7,
                "nome" => 'TAGUATINGA',
            ],
            [
                "codigo_ibge" => 1720937,
                "estado_id" => 7,
                "nome" => 'TAIPAS DO TOCANTINS',
            ],
            [
                "codigo_ibge" => 1720978,
                "estado_id" => 7,
                "nome" => 'TALISMÃ',
            ],
            [
                "codigo_ibge" => 1721000,
                "estado_id" => 7,
                "nome" => 'PALMAS',
            ],
            [
                "codigo_ibge" => 1721109,
                "estado_id" => 7,
                "nome" => 'TOCANTÍNIA',
            ],
            [
                "codigo_ibge" => 1721208,
                "estado_id" => 7,
                "nome" => 'TOCANTINÓPOLIS',
            ],
            [
                "codigo_ibge" => 1721257,
                "estado_id" => 7,
                "nome" => 'TUPIRAMA',
            ],
            [
                "codigo_ibge" => 1721307,
                "estado_id" => 7,
                "nome" => 'TUPIRATINS',
            ],
            [
                "codigo_ibge" => 1722081,
                "estado_id" => 7,
                "nome" => 'WANDERLÂNDIA',
            ],
            [
                "codigo_ibge" => 1722107,
                "estado_id" => 7,
                "nome" => 'XAMBIOÁ',
            ],
            [
                "codigo_ibge" => 2100055,
                "estado_id" => 8,
                "nome" => 'AÇAILÂNDIA',
            ],
            [
                "codigo_ibge" => 2100105,
                "estado_id" => 8,
                "nome" => 'AFONSO CUNHA',
            ],
            [
                "codigo_ibge" => 2100154,
                "estado_id" => 8,
                "nome" => 'ÁGUA DOCE DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2100204,
                "estado_id" => 8,
                "nome" => 'ALCÂNTARA',
            ],
            [
                "codigo_ibge" => 2100303,
                "estado_id" => 8,
                "nome" => 'ALDEIAS ALTAS',
            ],
            [
                "codigo_ibge" => 2100402,
                "estado_id" => 8,
                "nome" => 'ALTAMIRA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2100436,
                "estado_id" => 8,
                "nome" => 'ALTO ALEGRE DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2100477,
                "estado_id" => 8,
                "nome" => 'ALTO ALEGRE DO PINDARÉ',
            ],
            [
                "codigo_ibge" => 2100501,
                "estado_id" => 8,
                "nome" => 'ALTO PARNAÍBA',
            ],
            [
                "codigo_ibge" => 2100550,
                "estado_id" => 8,
                "nome" => 'AMAPÁ DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2100600,
                "estado_id" => 8,
                "nome" => 'AMARANTE DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2100709,
                "estado_id" => 8,
                "nome" => 'ANAJATUBA',
            ],
            [
                "codigo_ibge" => 2100808,
                "estado_id" => 8,
                "nome" => 'ANAPURUS',
            ],
            [
                "codigo_ibge" => 2100832,
                "estado_id" => 8,
                "nome" => 'APICUM-AÇU',
            ],
            [
                "codigo_ibge" => 2100873,
                "estado_id" => 8,
                "nome" => 'ARAGUANÃ',
            ],
            [
                "codigo_ibge" => 2100907,
                "estado_id" => 8,
                "nome" => 'ARAIOSES',
            ],
            [
                "codigo_ibge" => 2100956,
                "estado_id" => 8,
                "nome" => 'ARAME',
            ],
            [
                "codigo_ibge" => 2101004,
                "estado_id" => 8,
                "nome" => 'ARARI',
            ],
            [
                "codigo_ibge" => 2101103,
                "estado_id" => 8,
                "nome" => 'AXIXÁ',
            ],
            [
                "codigo_ibge" => 2101202,
                "estado_id" => 8,
                "nome" => 'BACABAL',
            ],
            [
                "codigo_ibge" => 2101251,
                "estado_id" => 8,
                "nome" => 'BACABEIRA',
            ],
            [
                "codigo_ibge" => 2101301,
                "estado_id" => 8,
                "nome" => 'BACURI',
            ],
            [
                "codigo_ibge" => 2101350,
                "estado_id" => 8,
                "nome" => 'BACURITUBA',
            ],
            [
                "codigo_ibge" => 2101400,
                "estado_id" => 8,
                "nome" => 'BALSAS',
            ],
            [
                "codigo_ibge" => 2101509,
                "estado_id" => 8,
                "nome" => 'BARÃO DE GRAJAÚ',
            ],
            [
                "codigo_ibge" => 2101608,
                "estado_id" => 8,
                "nome" => 'BARRA DO CORDA',
            ],
            [
                "codigo_ibge" => 2101707,
                "estado_id" => 8,
                "nome" => 'BARREIRINHAS',
            ],
            [
                "codigo_ibge" => 2101731,
                "estado_id" => 8,
                "nome" => 'BELÁGUA',
            ],
            [
                "codigo_ibge" => 2101772,
                "estado_id" => 8,
                "nome" => 'BELA VISTA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2101806,
                "estado_id" => 8,
                "nome" => 'BENEDITO LEITE',
            ],
            [
                "codigo_ibge" => 2101905,
                "estado_id" => 8,
                "nome" => 'BEQUIMÃO',
            ],
            [
                "codigo_ibge" => 2101939,
                "estado_id" => 8,
                "nome" => 'BERNARDO DO MEARIM',
            ],
            [
                "codigo_ibge" => 2101970,
                "estado_id" => 8,
                "nome" => 'BOA VISTA DO GURUPI',
            ],
            [
                "codigo_ibge" => 2102002,
                "estado_id" => 8,
                "nome" => 'BOM JARDIM',
            ],
            [
                "codigo_ibge" => 2102036,
                "estado_id" => 8,
                "nome" => 'BOM JESUS DAS SELVAS',
            ],
            [
                "codigo_ibge" => 2102077,
                "estado_id" => 8,
                "nome" => 'BOM LUGAR',
            ],
            [
                "codigo_ibge" => 2102101,
                "estado_id" => 8,
                "nome" => 'BREJO',
            ],
            [
                "codigo_ibge" => 2102150,
                "estado_id" => 8,
                "nome" => 'BREJO DE AREIA',
            ],
            [
                "codigo_ibge" => 2102200,
                "estado_id" => 8,
                "nome" => 'BURITI',
            ],
            [
                "codigo_ibge" => 2102309,
                "estado_id" => 8,
                "nome" => 'BURITI BRAVO',
            ],
            [
                "codigo_ibge" => 2102325,
                "estado_id" => 8,
                "nome" => 'BURITICUPU',
            ],
            [
                "codigo_ibge" => 2102358,
                "estado_id" => 8,
                "nome" => 'BURITIRANA',
            ],
            [
                "codigo_ibge" => 2102374,
                "estado_id" => 8,
                "nome" => 'CACHOEIRA GRANDE',
            ],
            [
                "codigo_ibge" => 2102408,
                "estado_id" => 8,
                "nome" => 'CAJAPIÓ',
            ],
            [
                "codigo_ibge" => 2102507,
                "estado_id" => 8,
                "nome" => 'CAJARI',
            ],
            [
                "codigo_ibge" => 2102556,
                "estado_id" => 8,
                "nome" => 'CAMPESTRE DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2102606,
                "estado_id" => 8,
                "nome" => 'CÂNDIDO MENDES',
            ],
            [
                "codigo_ibge" => 2102705,
                "estado_id" => 8,
                "nome" => 'CANTANHEDE',
            ],
            [
                "codigo_ibge" => 2102754,
                "estado_id" => 8,
                "nome" => 'CAPINZAL DO NORTE',
            ],
            [
                "codigo_ibge" => 2102804,
                "estado_id" => 8,
                "nome" => 'CAROLINA',
            ],
            [
                "codigo_ibge" => 2102903,
                "estado_id" => 8,
                "nome" => 'CARUTAPERA',
            ],
            [
                "codigo_ibge" => 2103000,
                "estado_id" => 8,
                "nome" => 'CAXIAS',
            ],
            [
                "codigo_ibge" => 2103109,
                "estado_id" => 8,
                "nome" => 'CEDRAL',
            ],
            [
                "codigo_ibge" => 2103125,
                "estado_id" => 8,
                "nome" => 'CENTRAL DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2103158,
                "estado_id" => 8,
                "nome" => 'CENTRO DO GUILHERME',
            ],
            [
                "codigo_ibge" => 2103174,
                "estado_id" => 8,
                "nome" => 'CENTRO NOVO DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2103208,
                "estado_id" => 8,
                "nome" => 'CHAPADINHA',
            ],
            [
                "codigo_ibge" => 2103257,
                "estado_id" => 8,
                "nome" => 'CIDELÂNDIA',
            ],
            [
                "codigo_ibge" => 2103307,
                "estado_id" => 8,
                "nome" => 'CODÓ',
            ],
            [
                "codigo_ibge" => 2103406,
                "estado_id" => 8,
                "nome" => 'COELHO NETO',
            ],
            [
                "codigo_ibge" => 2103505,
                "estado_id" => 8,
                "nome" => 'COLINAS',
            ],
            [
                "codigo_ibge" => 2103554,
                "estado_id" => 8,
                "nome" => 'CONCEIÇÃO DO LAGO-AÇU',
            ],
            [
                "codigo_ibge" => 2103604,
                "estado_id" => 8,
                "nome" => 'COROATÁ',
            ],
            [
                "codigo_ibge" => 2103703,
                "estado_id" => 8,
                "nome" => 'CURURUPU',
            ],
            [
                "codigo_ibge" => 2103752,
                "estado_id" => 8,
                "nome" => 'DAVINÓPOLIS',
            ],
            [
                "codigo_ibge" => 2103802,
                "estado_id" => 8,
                "nome" => 'DOM PEDRO',
            ],
            [
                "codigo_ibge" => 2103901,
                "estado_id" => 8,
                "nome" => 'DUQUE BACELAR',
            ],
            [
                "codigo_ibge" => 2104008,
                "estado_id" => 8,
                "nome" => 'ESPERANTINÓPOLIS',
            ],
            [
                "codigo_ibge" => 2104057,
                "estado_id" => 8,
                "nome" => 'ESTREITO',
            ],
            [
                "codigo_ibge" => 2104073,
                "estado_id" => 8,
                "nome" => 'FEIRA NOVA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2104081,
                "estado_id" => 8,
                "nome" => 'FERNANDO FALCÃO',
            ],
            [
                "codigo_ibge" => 2104099,
                "estado_id" => 8,
                "nome" => 'FORMOSA DA SERRA NEGRA',
            ],
            [
                "codigo_ibge" => 2104107,
                "estado_id" => 8,
                "nome" => 'FORTALEZA DOS NOGUEIRAS',
            ],
            [
                "codigo_ibge" => 2104206,
                "estado_id" => 8,
                "nome" => 'FORTUNA',
            ],
            [
                "codigo_ibge" => 2104305,
                "estado_id" => 8,
                "nome" => 'GODOFREDO VIANA',
            ],
            [
                "codigo_ibge" => 2104404,
                "estado_id" => 8,
                "nome" => 'GONÇALVES DIAS',
            ],
            [
                "codigo_ibge" => 2104503,
                "estado_id" => 8,
                "nome" => 'GOVERNADOR ARCHER',
            ],
            [
                "codigo_ibge" => 2104552,
                "estado_id" => 8,
                "nome" => 'GOVERNADOR EDISON LOBÃO',
            ],
            [
                "codigo_ibge" => 2104602,
                "estado_id" => 8,
                "nome" => 'GOVERNADOR EUGÊNIO BARROS',
            ],
            [
                "codigo_ibge" => 2104628,
                "estado_id" => 8,
                "nome" => 'GOVERNADOR LUIZ ROCHA',
            ],
            [
                "codigo_ibge" => 2104651,
                "estado_id" => 8,
                "nome" => 'GOVERNADOR NEWTON BELLO',
            ],
            [
                "codigo_ibge" => 2104677,
                "estado_id" => 8,
                "nome" => 'GOVERNADOR NUNES FREIRE',
            ],
            [
                "codigo_ibge" => 2104701,
                "estado_id" => 8,
                "nome" => 'GRAÇA ARANHA',
            ],
            [
                "codigo_ibge" => 2104800,
                "estado_id" => 8,
                "nome" => 'GRAJAÚ',
            ],
            [
                "codigo_ibge" => 2104909,
                "estado_id" => 8,
                "nome" => 'GUIMARÃES',
            ],
            [
                "codigo_ibge" => 2105005,
                "estado_id" => 8,
                "nome" => 'HUMBERTO DE CAMPOS',
            ],
            [
                "codigo_ibge" => 2105104,
                "estado_id" => 8,
                "nome" => 'ICATU',
            ],
            [
                "codigo_ibge" => 2105153,
                "estado_id" => 8,
                "nome" => 'IGARAPÉ DO MEIO',
            ],
            [
                "codigo_ibge" => 2105203,
                "estado_id" => 8,
                "nome" => 'IGARAPÉ GRANDE',
            ],
            [
                "codigo_ibge" => 2105302,
                "estado_id" => 8,
                "nome" => 'IMPERATRIZ',
            ],
            [
                "codigo_ibge" => 2105351,
                "estado_id" => 8,
                "nome" => 'ITAIPAVA DO GRAJAÚ',
            ],
            [
                "codigo_ibge" => 2105401,
                "estado_id" => 8,
                "nome" => 'ITAPECURU MIRIM',
            ],
            [
                "codigo_ibge" => 2105427,
                "estado_id" => 8,
                "nome" => 'ITINGA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2105450,
                "estado_id" => 8,
                "nome" => 'JATOBÁ',
            ],
            [
                "codigo_ibge" => 2105476,
                "estado_id" => 8,
                "nome" => 'JENIPAPO DOS VIEIRAS',
            ],
            [
                "codigo_ibge" => 2105500,
                "estado_id" => 8,
                "nome" => 'JOÃO LISBOA',
            ],
            [
                "codigo_ibge" => 2105609,
                "estado_id" => 8,
                "nome" => 'JOSELÂNDIA',
            ],
            [
                "codigo_ibge" => 2105658,
                "estado_id" => 8,
                "nome" => 'JUNCO DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2105708,
                "estado_id" => 8,
                "nome" => 'LAGO DA PEDRA',
            ],
            [
                "codigo_ibge" => 2105807,
                "estado_id" => 8,
                "nome" => 'LAGO DO JUNCO',
            ],
            [
                "codigo_ibge" => 2105906,
                "estado_id" => 8,
                "nome" => 'LAGO VERDE',
            ],
            [
                "codigo_ibge" => 2105922,
                "estado_id" => 8,
                "nome" => 'LAGOA DO MATO',
            ],
            [
                "codigo_ibge" => 2105948,
                "estado_id" => 8,
                "nome" => 'LAGO DOS RODRIGUES',
            ],
            [
                "codigo_ibge" => 2105963,
                "estado_id" => 8,
                "nome" => 'LAGOA GRANDE DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2105989,
                "estado_id" => 8,
                "nome" => 'LAJEADO NOVO',
            ],
            [
                "codigo_ibge" => 2106003,
                "estado_id" => 8,
                "nome" => 'LIMA CAMPOS',
            ],
            [
                "codigo_ibge" => 2106102,
                "estado_id" => 8,
                "nome" => 'LORETO',
            ],
            [
                "codigo_ibge" => 2106201,
                "estado_id" => 8,
                "nome" => 'LUÍS DOMINGUES',
            ],
            [
                "codigo_ibge" => 2106300,
                "estado_id" => 8,
                "nome" => 'MAGALHÃES DE ALMEIDA',
            ],
            [
                "codigo_ibge" => 2106326,
                "estado_id" => 8,
                "nome" => 'MARACAÇUMÉ',
            ],
            [
                "codigo_ibge" => 2106359,
                "estado_id" => 8,
                "nome" => 'MARAJÁ DO SENA',
            ],
            [
                "codigo_ibge" => 2106375,
                "estado_id" => 8,
                "nome" => 'MARANHÃOZINHO',
            ],
            [
                "codigo_ibge" => 2106409,
                "estado_id" => 8,
                "nome" => 'MATA ROMA',
            ],
            [
                "codigo_ibge" => 2106508,
                "estado_id" => 8,
                "nome" => 'MATINHA',
            ],
            [
                "codigo_ibge" => 2106607,
                "estado_id" => 8,
                "nome" => 'MATÕES',
            ],
            [
                "codigo_ibge" => 2106631,
                "estado_id" => 8,
                "nome" => 'MATÕES DO NORTE',
            ],
            [
                "codigo_ibge" => 2106672,
                "estado_id" => 8,
                "nome" => 'MILAGRES DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2106706,
                "estado_id" => 8,
                "nome" => 'MIRADOR',
            ],
            [
                "codigo_ibge" => 2106755,
                "estado_id" => 8,
                "nome" => 'MIRANDA DO NORTE',
            ],
            [
                "codigo_ibge" => 2106805,
                "estado_id" => 8,
                "nome" => 'MIRINZAL',
            ],
            [
                "codigo_ibge" => 2106904,
                "estado_id" => 8,
                "nome" => 'MONÇÃO',
            ],
            [
                "codigo_ibge" => 2107001,
                "estado_id" => 8,
                "nome" => 'MONTES ALTOS',
            ],
            [
                "codigo_ibge" => 2107100,
                "estado_id" => 8,
                "nome" => 'MORROS',
            ],
            [
                "codigo_ibge" => 2107209,
                "estado_id" => 8,
                "nome" => 'NINA RODRIGUES',
            ],
            [
                "codigo_ibge" => 2107258,
                "estado_id" => 8,
                "nome" => 'NOVA COLINAS',
            ],
            [
                "codigo_ibge" => 2107308,
                "estado_id" => 8,
                "nome" => 'NOVA IORQUE',
            ],
            [
                "codigo_ibge" => 2107357,
                "estado_id" => 8,
                "nome" => 'NOVA OLINDA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2107407,
                "estado_id" => 8,
                "nome" => 'OLHO D`ÁGUA DAS CUNHÃS',
            ],
            [
                "codigo_ibge" => 2107456,
                "estado_id" => 8,
                "nome" => 'OLINDA NOVA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2107506,
                "estado_id" => 8,
                "nome" => 'PAÇO DO LUMIAR',
            ],
            [
                "codigo_ibge" => 2107605,
                "estado_id" => 8,
                "nome" => 'PALMEIRÂNDIA',
            ],
            [
                "codigo_ibge" => 2107704,
                "estado_id" => 8,
                "nome" => 'PARAIBANO',
            ],
            [
                "codigo_ibge" => 2107803,
                "estado_id" => 8,
                "nome" => 'PARNARAMA',
            ],
            [
                "codigo_ibge" => 2107902,
                "estado_id" => 8,
                "nome" => 'PASSAGEM FRANCA',
            ],
            [
                "codigo_ibge" => 2108009,
                "estado_id" => 8,
                "nome" => 'PASTOS BONS',
            ],
            [
                "codigo_ibge" => 2108058,
                "estado_id" => 8,
                "nome" => 'PAULINO NEVES',
            ],
            [
                "codigo_ibge" => 2108108,
                "estado_id" => 8,
                "nome" => 'PAULO RAMOS',
            ],
            [
                "codigo_ibge" => 2108207,
                "estado_id" => 8,
                "nome" => 'PEDREIRAS',
            ],
            [
                "codigo_ibge" => 2108256,
                "estado_id" => 8,
                "nome" => 'PEDRO DO ROSÁRIO',
            ],
            [
                "codigo_ibge" => 2108306,
                "estado_id" => 8,
                "nome" => 'PENALVA',
            ],
            [
                "codigo_ibge" => 2108405,
                "estado_id" => 8,
                "nome" => 'PERI MIRIM',
            ],
            [
                "codigo_ibge" => 2108454,
                "estado_id" => 8,
                "nome" => 'PERITORÓ',
            ],
            [
                "codigo_ibge" => 2108504,
                "estado_id" => 8,
                "nome" => 'PINDARÉ-MIRIM',
            ],
            [
                "codigo_ibge" => 2108603,
                "estado_id" => 8,
                "nome" => 'PINHEIRO',
            ],
            [
                "codigo_ibge" => 2108702,
                "estado_id" => 8,
                "nome" => 'PIO XII',
            ],
            [
                "codigo_ibge" => 2108801,
                "estado_id" => 8,
                "nome" => 'PIRAPEMAS',
            ],
            [
                "codigo_ibge" => 2108900,
                "estado_id" => 8,
                "nome" => 'POÇÃO DE PEDRAS',
            ],
            [
                "codigo_ibge" => 2109007,
                "estado_id" => 8,
                "nome" => 'PORTO FRANCO',
            ],
            [
                "codigo_ibge" => 2109056,
                "estado_id" => 8,
                "nome" => 'PORTO RICO DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2109106,
                "estado_id" => 8,
                "nome" => 'PRESIDENTE DUTRA',
            ],
            [
                "codigo_ibge" => 2109205,
                "estado_id" => 8,
                "nome" => 'PRESIDENTE JUSCELINO',
            ],
            [
                "codigo_ibge" => 2109239,
                "estado_id" => 8,
                "nome" => 'PRESIDENTE MÉDICI',
            ],
            [
                "codigo_ibge" => 2109270,
                "estado_id" => 8,
                "nome" => 'PRESIDENTE SARNEY',
            ],
            [
                "codigo_ibge" => 2109304,
                "estado_id" => 8,
                "nome" => 'PRESIDENTE VARGAS',
            ],
            [
                "codigo_ibge" => 2109403,
                "estado_id" => 8,
                "nome" => 'PRIMEIRA CRUZ',
            ],
            [
                "codigo_ibge" => 2109452,
                "estado_id" => 8,
                "nome" => 'RAPOSA',
            ],
            [
                "codigo_ibge" => 2109502,
                "estado_id" => 8,
                "nome" => 'RIACHÃO',
            ],
            [
                "codigo_ibge" => 2109551,
                "estado_id" => 8,
                "nome" => 'RIBAMAR FIQUENE',
            ],
            [
                "codigo_ibge" => 2109601,
                "estado_id" => 8,
                "nome" => 'ROSÁRIO',
            ],
            [
                "codigo_ibge" => 2109700,
                "estado_id" => 8,
                "nome" => 'SAMBAÍBA',
            ],
            [
                "codigo_ibge" => 2109759,
                "estado_id" => 8,
                "nome" => 'SANTA FILOMENA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2109809,
                "estado_id" => 8,
                "nome" => 'SANTA HELENA',
            ],
            [
                "codigo_ibge" => 2109908,
                "estado_id" => 8,
                "nome" => 'SANTA INÊS',
            ],
            [
                "codigo_ibge" => 2110005,
                "estado_id" => 8,
                "nome" => 'SANTA LUZIA',
            ],
            [
                "codigo_ibge" => 2110039,
                "estado_id" => 8,
                "nome" => 'SANTA LUZIA DO PARUÁ',
            ],
            [
                "codigo_ibge" => 2110104,
                "estado_id" => 8,
                "nome" => 'SANTA QUITÉRIA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2110203,
                "estado_id" => 8,
                "nome" => 'SANTA RITA',
            ],
            [
                "codigo_ibge" => 2110237,
                "estado_id" => 8,
                "nome" => 'SANTANA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2110278,
                "estado_id" => 8,
                "nome" => 'SANTO AMARO DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2110302,
                "estado_id" => 8,
                "nome" => 'SANTO ANTÔNIO DOS LOPES',
            ],
            [
                "codigo_ibge" => 2110401,
                "estado_id" => 8,
                "nome" => 'SÃO BENEDITO DO RIO PRETO',
            ],
            [
                "codigo_ibge" => 2110500,
                "estado_id" => 8,
                "nome" => 'SÃO BENTO',
            ],
            [
                "codigo_ibge" => 2110609,
                "estado_id" => 8,
                "nome" => 'SÃO BERNARDO',
            ],
            [
                "codigo_ibge" => 2110658,
                "estado_id" => 8,
                "nome" => 'SÃO DOMINGOS DO AZEITÃO',
            ],
            [
                "codigo_ibge" => 2110708,
                "estado_id" => 8,
                "nome" => 'SÃO DOMINGOS DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2110807,
                "estado_id" => 8,
                "nome" => 'SÃO FÉLIX DE BALSAS',
            ],
            [
                "codigo_ibge" => 2110856,
                "estado_id" => 8,
                "nome" => 'SÃO FRANCISCO DO BREJÃO',
            ],
            [
                "codigo_ibge" => 2110906,
                "estado_id" => 8,
                "nome" => 'SÃO FRANCISCO DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2111003,
                "estado_id" => 8,
                "nome" => 'SÃO JOÃO BATISTA',
            ],
            [
                "codigo_ibge" => 2111029,
                "estado_id" => 8,
                "nome" => 'SÃO JOÃO DO CARÚ',
            ],
            [
                "codigo_ibge" => 2111052,
                "estado_id" => 8,
                "nome" => 'SÃO JOÃO DO PARAÍSO',
            ],
            [
                "codigo_ibge" => 2111078,
                "estado_id" => 8,
                "nome" => 'SÃO JOÃO DO SOTER',
            ],
            [
                "codigo_ibge" => 2111102,
                "estado_id" => 8,
                "nome" => 'SÃO JOÃO DOS PATOS',
            ],
            [
                "codigo_ibge" => 2111201,
                "estado_id" => 8,
                "nome" => 'SÃO JOSÉ DE RIBAMAR',
            ],
            [
                "codigo_ibge" => 2111250,
                "estado_id" => 8,
                "nome" => 'SÃO JOSÉ DOS BASÍLIOS',
            ],
            [
                "codigo_ibge" => 2111300,
                "estado_id" => 8,
                "nome" => 'SÃO LUÍS',
            ],
            [
                "codigo_ibge" => 2111409,
                "estado_id" => 8,
                "nome" => 'SÃO LUÍS GONZAGA DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2111508,
                "estado_id" => 8,
                "nome" => 'SÃO MATEUS DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2111532,
                "estado_id" => 8,
                "nome" => 'SÃO PEDRO DA ÁGUA BRANCA',
            ],
            [
                "codigo_ibge" => 2111573,
                "estado_id" => 8,
                "nome" => 'SÃO PEDRO DOS CRENTES',
            ],
            [
                "codigo_ibge" => 2111607,
                "estado_id" => 8,
                "nome" => 'SÃO RAIMUNDO DAS MANGABEIRAS',
            ],
            [
                "codigo_ibge" => 2111631,
                "estado_id" => 8,
                "nome" => 'SÃO RAIMUNDO DO DOCA BEZERRA',
            ],
            [
                "codigo_ibge" => 2111672,
                "estado_id" => 8,
                "nome" => 'SÃO ROBERTO',
            ],
            [
                "codigo_ibge" => 2111706,
                "estado_id" => 8,
                "nome" => 'SÃO VICENTE FERRER',
            ],
            [
                "codigo_ibge" => 2111722,
                "estado_id" => 8,
                "nome" => 'SATUBINHA',
            ],
            [
                "codigo_ibge" => 2111748,
                "estado_id" => 8,
                "nome" => 'SENADOR ALEXANDRE COSTA',
            ],
            [
                "codigo_ibge" => 2111763,
                "estado_id" => 8,
                "nome" => 'SENADOR LA ROCQUE',
            ],
            [
                "codigo_ibge" => 2111789,
                "estado_id" => 8,
                "nome" => 'SERRANO DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 2111805,
                "estado_id" => 8,
                "nome" => 'SÍTIO NOVO',
            ],
            [
                "codigo_ibge" => 2111904,
                "estado_id" => 8,
                "nome" => 'SUCUPIRA DO NORTE',
            ],
            [
                "codigo_ibge" => 2111953,
                "estado_id" => 8,
                "nome" => 'SUCUPIRA DO RIACHÃO',
            ],
            [
                "codigo_ibge" => 2112001,
                "estado_id" => 8,
                "nome" => 'TASSO FRAGOSO',
            ],
            [
                "codigo_ibge" => 2112100,
                "estado_id" => 8,
                "nome" => 'TIMBIRAS',
            ],
            [
                "codigo_ibge" => 2112209,
                "estado_id" => 8,
                "nome" => 'TIMON',
            ],
            [
                "codigo_ibge" => 2112233,
                "estado_id" => 8,
                "nome" => 'TRIZIDELA DO VALE',
            ],
            [
                "codigo_ibge" => 2112274,
                "estado_id" => 8,
                "nome" => 'TUFILÂNDIA',
            ],
            [
                "codigo_ibge" => 2112308,
                "estado_id" => 8,
                "nome" => 'TUNTUM',
            ],
            [
                "codigo_ibge" => 2112407,
                "estado_id" => 8,
                "nome" => 'TURIAÇU',
            ],
            [
                "codigo_ibge" => 2112456,
                "estado_id" => 8,
                "nome" => 'TURILÂNDIA',
            ],
            [
                "codigo_ibge" => 2112506,
                "estado_id" => 8,
                "nome" => 'TUTÓIA',
            ],
            [
                "codigo_ibge" => 2112605,
                "estado_id" => 8,
                "nome" => 'URBANO SANTOS',
            ],
            [
                "codigo_ibge" => 2112704,
                "estado_id" => 8,
                "nome" => 'VARGEM GRANDE',
            ],
            [
                "codigo_ibge" => 2112803,
                "estado_id" => 8,
                "nome" => 'VIANA',
            ],
            [
                "codigo_ibge" => 2112852,
                "estado_id" => 8,
                "nome" => 'VILA NOVA DOS MARTÍRIOS',
            ],
            [
                "codigo_ibge" => 2112902,
                "estado_id" => 8,
                "nome" => 'VITÓRIA DO MEARIM',
            ],
            [
                "codigo_ibge" => 2113009,
                "estado_id" => 8,
                "nome" => 'VITORINO FREIRE',
            ],
            [
                "codigo_ibge" => 2114007,
                "estado_id" => 8,
                "nome" => 'ZÉ DOCA',
            ],
            [
                "codigo_ibge" => 2200053,
                "estado_id" => 9,
                "nome" => 'ACAUÃ',
            ],
            [
                "codigo_ibge" => 2200103,
                "estado_id" => 9,
                "nome" => 'AGRICOLÂNDIA',
            ],
            [
                "codigo_ibge" => 2200202,
                "estado_id" => 9,
                "nome" => 'ÁGUA BRANCA',
            ],
            [
                "codigo_ibge" => 2200251,
                "estado_id" => 9,
                "nome" => 'ALAGOINHA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2200277,
                "estado_id" => 9,
                "nome" => 'ALEGRETE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2200301,
                "estado_id" => 9,
                "nome" => 'ALTO LONGÁ',
            ],
            [
                "codigo_ibge" => 2200400,
                "estado_id" => 9,
                "nome" => 'ALTOS',
            ],
            [
                "codigo_ibge" => 2200459,
                "estado_id" => 9,
                "nome" => 'ALVORADA DO GURGUÉIA',
            ],
            [
                "codigo_ibge" => 2200509,
                "estado_id" => 9,
                "nome" => 'AMARANTE',
            ],
            [
                "codigo_ibge" => 2200608,
                "estado_id" => 9,
                "nome" => 'ANGICAL DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2200707,
                "estado_id" => 9,
                "nome" => 'ANÍSIO DE ABREU',
            ],
            [
                "codigo_ibge" => 2200806,
                "estado_id" => 9,
                "nome" => 'ANTÔNIO ALMEIDA',
            ],
            [
                "codigo_ibge" => 2200905,
                "estado_id" => 9,
                "nome" => 'AROAZES',
            ],
            [
                "codigo_ibge" => 2200954,
                "estado_id" => 9,
                "nome" => 'AROEIRAS DO ITAIM',
            ],
            [
                "codigo_ibge" => 2201002,
                "estado_id" => 9,
                "nome" => 'ARRAIAL',
            ],
            [
                "codigo_ibge" => 2201051,
                "estado_id" => 9,
                "nome" => 'ASSUNÇÃO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2201101,
                "estado_id" => 9,
                "nome" => 'AVELINO LOPES',
            ],
            [
                "codigo_ibge" => 2201150,
                "estado_id" => 9,
                "nome" => 'BAIXA GRANDE DO RIBEIRO',
            ],
            [
                "codigo_ibge" => 2201176,
                "estado_id" => 9,
                "nome" => 'BARRA D`ALCÂNTARA',
            ],
            [
                "codigo_ibge" => 2201200,
                "estado_id" => 9,
                "nome" => 'BARRAS',
            ],
            [
                "codigo_ibge" => 2201309,
                "estado_id" => 9,
                "nome" => 'BARREIRAS DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2201408,
                "estado_id" => 9,
                "nome" => 'BARRO DURO',
            ],
            [
                "codigo_ibge" => 2201507,
                "estado_id" => 9,
                "nome" => 'BATALHA',
            ],
            [
                "codigo_ibge" => 2201556,
                "estado_id" => 9,
                "nome" => 'BELA VISTA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2201572,
                "estado_id" => 9,
                "nome" => 'BELÉM DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2201606,
                "estado_id" => 9,
                "nome" => 'BENEDITINOS',
            ],
            [
                "codigo_ibge" => 2201705,
                "estado_id" => 9,
                "nome" => 'BERTOLÍNIA',
            ],
            [
                "codigo_ibge" => 2201739,
                "estado_id" => 9,
                "nome" => 'BETÂNIA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2201770,
                "estado_id" => 9,
                "nome" => 'BOA HORA',
            ],
            [
                "codigo_ibge" => 2201804,
                "estado_id" => 9,
                "nome" => 'BOCAINA',
            ],
            [
                "codigo_ibge" => 2201903,
                "estado_id" => 9,
                "nome" => 'BOM JESUS',
            ],
            [
                "codigo_ibge" => 2201919,
                "estado_id" => 9,
                "nome" => 'BOM PRINCÍPIO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2201929,
                "estado_id" => 9,
                "nome" => 'BONFIM DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2201945,
                "estado_id" => 9,
                "nome" => 'BOQUEIRÃO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2201960,
                "estado_id" => 9,
                "nome" => 'BRASILEIRA',
            ],
            [
                "codigo_ibge" => 2201988,
                "estado_id" => 9,
                "nome" => 'BREJO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202000,
                "estado_id" => 9,
                "nome" => 'BURITI DOS LOPES',
            ],
            [
                "codigo_ibge" => 2202026,
                "estado_id" => 9,
                "nome" => 'BURITI DOS MONTES',
            ],
            [
                "codigo_ibge" => 2202059,
                "estado_id" => 9,
                "nome" => 'CABECEIRAS DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202075,
                "estado_id" => 9,
                "nome" => 'CAJAZEIRAS DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202083,
                "estado_id" => 9,
                "nome" => 'CAJUEIRO DA PRAIA',
            ],
            [
                "codigo_ibge" => 2202091,
                "estado_id" => 9,
                "nome" => 'CALDEIRÃO GRANDE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202109,
                "estado_id" => 9,
                "nome" => 'CAMPINAS DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202117,
                "estado_id" => 9,
                "nome" => 'CAMPO ALEGRE DO FIDALGO',
            ],
            [
                "codigo_ibge" => 2202133,
                "estado_id" => 9,
                "nome" => 'CAMPO GRANDE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202174,
                "estado_id" => 9,
                "nome" => 'CAMPO LARGO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202208,
                "estado_id" => 9,
                "nome" => 'CAMPO MAIOR',
            ],
            [
                "codigo_ibge" => 2202251,
                "estado_id" => 9,
                "nome" => 'CANAVIEIRA',
            ],
            [
                "codigo_ibge" => 2202307,
                "estado_id" => 9,
                "nome" => 'CANTO DO BURITI',
            ],
            [
                "codigo_ibge" => 2202406,
                "estado_id" => 9,
                "nome" => 'CAPITÃO DE CAMPOS',
            ],
            [
                "codigo_ibge" => 2202455,
                "estado_id" => 9,
                "nome" => 'CAPITÃO GERVÁSIO OLIVEIRA',
            ],
            [
                "codigo_ibge" => 2202505,
                "estado_id" => 9,
                "nome" => 'CARACOL',
            ],
            [
                "codigo_ibge" => 2202539,
                "estado_id" => 9,
                "nome" => 'CARAÚBAS DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202554,
                "estado_id" => 9,
                "nome" => 'CARIDADE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202604,
                "estado_id" => 9,
                "nome" => 'CASTELO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202653,
                "estado_id" => 9,
                "nome" => 'CAXINGÓ',
            ],
            [
                "codigo_ibge" => 2202703,
                "estado_id" => 9,
                "nome" => 'COCAL',
            ],
            [
                "codigo_ibge" => 2202711,
                "estado_id" => 9,
                "nome" => 'COCAL DE TELHA',
            ],
            [
                "codigo_ibge" => 2202729,
                "estado_id" => 9,
                "nome" => 'COCAL DOS ALVES',
            ],
            [
                "codigo_ibge" => 2202737,
                "estado_id" => 9,
                "nome" => 'COIVARAS',
            ],
            [
                "codigo_ibge" => 2202752,
                "estado_id" => 9,
                "nome" => 'COLÔNIA DO GURGUÉIA',
            ],
            [
                "codigo_ibge" => 2202778,
                "estado_id" => 9,
                "nome" => 'COLÔNIA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2202802,
                "estado_id" => 9,
                "nome" => 'CONCEIÇÃO DO CANINDÉ',
            ],
            [
                "codigo_ibge" => 2202851,
                "estado_id" => 9,
                "nome" => 'CORONEL JOSÉ DIAS',
            ],
            [
                "codigo_ibge" => 2202901,
                "estado_id" => 9,
                "nome" => 'CORRENTE',
            ],
            [
                "codigo_ibge" => 2203008,
                "estado_id" => 9,
                "nome" => 'CRISTALÂNDIA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2203107,
                "estado_id" => 9,
                "nome" => 'CRISTINO CASTRO',
            ],
            [
                "codigo_ibge" => 2203206,
                "estado_id" => 9,
                "nome" => 'CURIMATÁ',
            ],
            [
                "codigo_ibge" => 2203230,
                "estado_id" => 9,
                "nome" => 'CURRAIS',
            ],
            [
                "codigo_ibge" => 2203255,
                "estado_id" => 9,
                "nome" => 'CURRALINHOS',
            ],
            [
                "codigo_ibge" => 2203271,
                "estado_id" => 9,
                "nome" => 'CURRAL NOVO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2203305,
                "estado_id" => 9,
                "nome" => 'DEMERVAL LOBÃO',
            ],
            [
                "codigo_ibge" => 2203354,
                "estado_id" => 9,
                "nome" => 'DIRCEU ARCOVERDE',
            ],
            [
                "codigo_ibge" => 2203404,
                "estado_id" => 9,
                "nome" => 'DOM EXPEDITO LOPES',
            ],
            [
                "codigo_ibge" => 2203420,
                "estado_id" => 9,
                "nome" => 'DOMINGOS MOURÃO',
            ],
            [
                "codigo_ibge" => 2203453,
                "estado_id" => 9,
                "nome" => 'DOM INOCÊNCIO',
            ],
            [
                "codigo_ibge" => 2203503,
                "estado_id" => 9,
                "nome" => 'ELESBÃO VELOSO',
            ],
            [
                "codigo_ibge" => 2203602,
                "estado_id" => 9,
                "nome" => 'ELISEU MARTINS',
            ],
            [
                "codigo_ibge" => 2203701,
                "estado_id" => 9,
                "nome" => 'ESPERANTINA',
            ],
            [
                "codigo_ibge" => 2203750,
                "estado_id" => 9,
                "nome" => 'FARTURA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2203800,
                "estado_id" => 9,
                "nome" => 'FLORES DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2203859,
                "estado_id" => 9,
                "nome" => 'FLORESTA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2203909,
                "estado_id" => 9,
                "nome" => 'FLORIANO',
            ],
            [
                "codigo_ibge" => 2204006,
                "estado_id" => 9,
                "nome" => 'FRANCINÓPOLIS',
            ],
            [
                "codigo_ibge" => 2204105,
                "estado_id" => 9,
                "nome" => 'FRANCISCO AYRES',
            ],
            [
                "codigo_ibge" => 2204154,
                "estado_id" => 9,
                "nome" => 'FRANCISCO MACEDO',
            ],
            [
                "codigo_ibge" => 2204204,
                "estado_id" => 9,
                "nome" => 'FRANCISCO SANTOS',
            ],
            [
                "codigo_ibge" => 2204303,
                "estado_id" => 9,
                "nome" => 'FRONTEIRAS',
            ],
            [
                "codigo_ibge" => 2204352,
                "estado_id" => 9,
                "nome" => 'GEMINIANO',
            ],
            [
                "codigo_ibge" => 2204402,
                "estado_id" => 9,
                "nome" => 'GILBUÉS',
            ],
            [
                "codigo_ibge" => 2204501,
                "estado_id" => 9,
                "nome" => 'GUADALUPE',
            ],
            [
                "codigo_ibge" => 2204550,
                "estado_id" => 9,
                "nome" => 'GUARIBAS',
            ],
            [
                "codigo_ibge" => 2204600,
                "estado_id" => 9,
                "nome" => 'HUGO NAPOLEÃO',
            ],
            [
                "codigo_ibge" => 2204659,
                "estado_id" => 9,
                "nome" => 'ILHA GRANDE',
            ],
            [
                "codigo_ibge" => 2204709,
                "estado_id" => 9,
                "nome" => 'INHUMA',
            ],
            [
                "codigo_ibge" => 2204808,
                "estado_id" => 9,
                "nome" => 'IPIRANGA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2204907,
                "estado_id" => 9,
                "nome" => 'ISAÍAS COELHO',
            ],
            [
                "codigo_ibge" => 2205003,
                "estado_id" => 9,
                "nome" => 'ITAINÓPOLIS',
            ],
            [
                "codigo_ibge" => 2205102,
                "estado_id" => 9,
                "nome" => 'ITAUEIRA',
            ],
            [
                "codigo_ibge" => 2205151,
                "estado_id" => 9,
                "nome" => 'JACOBINA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2205201,
                "estado_id" => 9,
                "nome" => 'JAICÓS',
            ],
            [
                "codigo_ibge" => 2205250,
                "estado_id" => 9,
                "nome" => 'JARDIM DO MULATO',
            ],
            [
                "codigo_ibge" => 2205276,
                "estado_id" => 9,
                "nome" => 'JATOBÁ DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2205300,
                "estado_id" => 9,
                "nome" => 'JERUMENHA',
            ],
            [
                "codigo_ibge" => 2205359,
                "estado_id" => 9,
                "nome" => 'JOÃO COSTA',
            ],
            [
                "codigo_ibge" => 2205409,
                "estado_id" => 9,
                "nome" => 'JOAQUIM PIRES',
            ],
            [
                "codigo_ibge" => 2205458,
                "estado_id" => 9,
                "nome" => 'JOCA MARQUES',
            ],
            [
                "codigo_ibge" => 2205508,
                "estado_id" => 9,
                "nome" => 'JOSÉ DE FREITAS',
            ],
            [
                "codigo_ibge" => 2205516,
                "estado_id" => 9,
                "nome" => 'JUAZEIRO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2205524,
                "estado_id" => 9,
                "nome" => 'JÚLIO BORGES',
            ],
            [
                "codigo_ibge" => 2205532,
                "estado_id" => 9,
                "nome" => 'JUREMA',
            ],
            [
                "codigo_ibge" => 2205540,
                "estado_id" => 9,
                "nome" => 'LAGOINHA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2205557,
                "estado_id" => 9,
                "nome" => 'LAGOA ALEGRE',
            ],
            [
                "codigo_ibge" => 2205565,
                "estado_id" => 9,
                "nome" => 'LAGOA DO BARRO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2205573,
                "estado_id" => 9,
                "nome" => 'LAGOA DE SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 2205581,
                "estado_id" => 9,
                "nome" => 'LAGOA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2205599,
                "estado_id" => 9,
                "nome" => 'LAGOA DO SÍTIO',
            ],
            [
                "codigo_ibge" => 2205607,
                "estado_id" => 9,
                "nome" => 'LANDRI SALES',
            ],
            [
                "codigo_ibge" => 2205706,
                "estado_id" => 9,
                "nome" => 'LUÍS CORREIA',
            ],
            [
                "codigo_ibge" => 2205805,
                "estado_id" => 9,
                "nome" => 'LUZILÂNDIA',
            ],
            [
                "codigo_ibge" => 2205854,
                "estado_id" => 9,
                "nome" => 'MADEIRO',
            ],
            [
                "codigo_ibge" => 2205904,
                "estado_id" => 9,
                "nome" => 'MANOEL EMÍDIO',
            ],
            [
                "codigo_ibge" => 2205953,
                "estado_id" => 9,
                "nome" => 'MARCOLÂNDIA',
            ],
            [
                "codigo_ibge" => 2206001,
                "estado_id" => 9,
                "nome" => 'MARCOS PARENTE',
            ],
            [
                "codigo_ibge" => 2206050,
                "estado_id" => 9,
                "nome" => 'MASSAPÊ DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2206100,
                "estado_id" => 9,
                "nome" => 'MATIAS OLÍMPIO',
            ],
            [
                "codigo_ibge" => 2206209,
                "estado_id" => 9,
                "nome" => 'MIGUEL ALVES',
            ],
            [
                "codigo_ibge" => 2206308,
                "estado_id" => 9,
                "nome" => 'MIGUEL LEÃO',
            ],
            [
                "codigo_ibge" => 2206357,
                "estado_id" => 9,
                "nome" => 'MILTON BRANDÃO',
            ],
            [
                "codigo_ibge" => 2206407,
                "estado_id" => 9,
                "nome" => 'MONSENHOR GIL',
            ],
            [
                "codigo_ibge" => 2206506,
                "estado_id" => 9,
                "nome" => 'MONSENHOR HIPÓLITO',
            ],
            [
                "codigo_ibge" => 2206605,
                "estado_id" => 9,
                "nome" => 'MONTE ALEGRE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2206654,
                "estado_id" => 9,
                "nome" => 'MORRO CABEÇA NO TEMPO',
            ],
            [
                "codigo_ibge" => 2206670,
                "estado_id" => 9,
                "nome" => 'MORRO DO CHAPÉU DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2206696,
                "estado_id" => 9,
                "nome" => 'MURICI DOS PORTELAS',
            ],
            [
                "codigo_ibge" => 2206704,
                "estado_id" => 9,
                "nome" => 'NAZARÉ DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2206720,
                "estado_id" => 9,
                "nome" => 'NAZÁRIA',
            ],
            [
                "codigo_ibge" => 2206753,
                "estado_id" => 9,
                "nome" => 'NOSSA SENHORA DE NAZARÉ',
            ],
            [
                "codigo_ibge" => 2206803,
                "estado_id" => 9,
                "nome" => 'NOSSA SENHORA DOS REMÉDIOS',
            ],
            [
                "codigo_ibge" => 2206902,
                "estado_id" => 9,
                "nome" => 'NOVO ORIENTE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2206951,
                "estado_id" => 9,
                "nome" => 'NOVO SANTO ANTÔNIO',
            ],
            [
                "codigo_ibge" => 2207009,
                "estado_id" => 9,
                "nome" => 'OEIRAS',
            ],
            [
                "codigo_ibge" => 2207108,
                "estado_id" => 9,
                "nome" => 'OLHO D`ÁGUA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2207207,
                "estado_id" => 9,
                "nome" => 'PADRE MARCOS',
            ],
            [
                "codigo_ibge" => 2207306,
                "estado_id" => 9,
                "nome" => 'PAES LANDIM',
            ],
            [
                "codigo_ibge" => 2207355,
                "estado_id" => 9,
                "nome" => 'PAJEÚ DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2207405,
                "estado_id" => 9,
                "nome" => 'PALMEIRA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2207504,
                "estado_id" => 9,
                "nome" => 'PALMEIRAIS',
            ],
            [
                "codigo_ibge" => 2207553,
                "estado_id" => 9,
                "nome" => 'PAQUETÁ',
            ],
            [
                "codigo_ibge" => 2207603,
                "estado_id" => 9,
                "nome" => 'PARNAGUÁ',
            ],
            [
                "codigo_ibge" => 2207702,
                "estado_id" => 9,
                "nome" => 'PARNAÍBA',
            ],
            [
                "codigo_ibge" => 2207751,
                "estado_id" => 9,
                "nome" => 'PASSAGEM FRANCA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2207777,
                "estado_id" => 9,
                "nome" => 'PATOS DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2207793,
                "estado_id" => 9,
                "nome" => 'PAU D`ARCO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2207801,
                "estado_id" => 9,
                "nome" => 'PAULISTANA',
            ],
            [
                "codigo_ibge" => 2207850,
                "estado_id" => 9,
                "nome" => 'PAVUSSU',
            ],
            [
                "codigo_ibge" => 2207900,
                "estado_id" => 9,
                "nome" => 'PEDRO II',
            ],
            [
                "codigo_ibge" => 2207934,
                "estado_id" => 9,
                "nome" => 'PEDRO LAURENTINO',
            ],
            [
                "codigo_ibge" => 2207959,
                "estado_id" => 9,
                "nome" => 'NOVA SANTA RITA',
            ],
            [
                "codigo_ibge" => 2208007,
                "estado_id" => 9,
                "nome" => 'PICOS',
            ],
            [
                "codigo_ibge" => 2208106,
                "estado_id" => 9,
                "nome" => 'PIMENTEIRAS',
            ],
            [
                "codigo_ibge" => 2208205,
                "estado_id" => 9,
                "nome" => 'PIO IX',
            ],
            [
                "codigo_ibge" => 2208304,
                "estado_id" => 9,
                "nome" => 'PIRACURUCA',
            ],
            [
                "codigo_ibge" => 2208403,
                "estado_id" => 9,
                "nome" => 'PIRIPIRI',
            ],
            [
                "codigo_ibge" => 2208502,
                "estado_id" => 9,
                "nome" => 'PORTO',
            ],
            [
                "codigo_ibge" => 2208551,
                "estado_id" => 9,
                "nome" => 'PORTO ALEGRE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2208601,
                "estado_id" => 9,
                "nome" => 'PRATA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2208650,
                "estado_id" => 9,
                "nome" => 'QUEIMADA NOVA',
            ],
            [
                "codigo_ibge" => 2208700,
                "estado_id" => 9,
                "nome" => 'REDENÇÃO DO GURGUÉIA',
            ],
            [
                "codigo_ibge" => 2208809,
                "estado_id" => 9,
                "nome" => 'REGENERAÇÃO',
            ],
            [
                "codigo_ibge" => 2208858,
                "estado_id" => 9,
                "nome" => 'RIACHO FRIO',
            ],
            [
                "codigo_ibge" => 2208874,
                "estado_id" => 9,
                "nome" => 'RIBEIRA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2208908,
                "estado_id" => 9,
                "nome" => 'RIBEIRO GONÇALVES',
            ],
            [
                "codigo_ibge" => 2209005,
                "estado_id" => 9,
                "nome" => 'RIO GRANDE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209104,
                "estado_id" => 9,
                "nome" => 'SANTA CRUZ DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209153,
                "estado_id" => 9,
                "nome" => 'SANTA CRUZ DOS MILAGRES',
            ],
            [
                "codigo_ibge" => 2209203,
                "estado_id" => 9,
                "nome" => 'SANTA FILOMENA',
            ],
            [
                "codigo_ibge" => 2209302,
                "estado_id" => 9,
                "nome" => 'SANTA LUZ',
            ],
            [
                "codigo_ibge" => 2209351,
                "estado_id" => 9,
                "nome" => 'SANTANA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209377,
                "estado_id" => 9,
                "nome" => 'SANTA ROSA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209401,
                "estado_id" => 9,
                "nome" => 'SANTO ANTÔNIO DE LISBOA',
            ],
            [
                "codigo_ibge" => 2209450,
                "estado_id" => 9,
                "nome" => 'SANTO ANTÔNIO DOS MILAGRES',
            ],
            [
                "codigo_ibge" => 2209500,
                "estado_id" => 9,
                "nome" => 'SANTO INÁCIO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209559,
                "estado_id" => 9,
                "nome" => 'SÃO BRAZ DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209609,
                "estado_id" => 9,
                "nome" => 'SÃO FÉLIX DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209658,
                "estado_id" => 9,
                "nome" => 'SÃO FRANCISCO DE ASSIS DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209708,
                "estado_id" => 9,
                "nome" => 'SÃO FRANCISCO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209757,
                "estado_id" => 9,
                "nome" => 'SÃO GONÇALO DO GURGUÉIA',
            ],
            [
                "codigo_ibge" => 2209807,
                "estado_id" => 9,
                "nome" => 'SÃO GONÇALO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2209856,
                "estado_id" => 9,
                "nome" => 'SÃO JOÃO DA CANABRAVA',
            ],
            [
                "codigo_ibge" => 2209872,
                "estado_id" => 9,
                "nome" => 'SÃO JOÃO DA FRONTEIRA',
            ],
            [
                "codigo_ibge" => 2209906,
                "estado_id" => 9,
                "nome" => 'SÃO JOÃO DA SERRA',
            ],
            [
                "codigo_ibge" => 2209955,
                "estado_id" => 9,
                "nome" => 'SÃO JOÃO DA VARJOTA',
            ],
            [
                "codigo_ibge" => 2209971,
                "estado_id" => 9,
                "nome" => 'SÃO JOÃO DO ARRAIAL',
            ],
            [
                "codigo_ibge" => 2210003,
                "estado_id" => 9,
                "nome" => 'SÃO JOÃO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2210052,
                "estado_id" => 9,
                "nome" => 'SÃO JOSÉ DO DIVINO',
            ],
            [
                "codigo_ibge" => 2210102,
                "estado_id" => 9,
                "nome" => 'SÃO JOSÉ DO PEIXE',
            ],
            [
                "codigo_ibge" => 2210201,
                "estado_id" => 9,
                "nome" => 'SÃO JOSÉ DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2210300,
                "estado_id" => 9,
                "nome" => 'SÃO JULIÃO',
            ],
            [
                "codigo_ibge" => 2210359,
                "estado_id" => 9,
                "nome" => 'SÃO LOURENÇO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2210375,
                "estado_id" => 9,
                "nome" => 'SÃO LUIS DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2210383,
                "estado_id" => 9,
                "nome" => 'SÃO MIGUEL DA BAIXA GRANDE',
            ],
            [
                "codigo_ibge" => 2210391,
                "estado_id" => 9,
                "nome" => 'SÃO MIGUEL DO FIDALGO',
            ],
            [
                "codigo_ibge" => 2210409,
                "estado_id" => 9,
                "nome" => 'SÃO MIGUEL DO TAPUIO',
            ],
            [
                "codigo_ibge" => 2210508,
                "estado_id" => 9,
                "nome" => 'SÃO PEDRO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2210607,
                "estado_id" => 9,
                "nome" => 'SÃO RAIMUNDO NONATO',
            ],
            [
                "codigo_ibge" => 2210623,
                "estado_id" => 9,
                "nome" => 'SEBASTIÃO BARROS',
            ],
            [
                "codigo_ibge" => 2210631,
                "estado_id" => 9,
                "nome" => 'SEBASTIÃO LEAL',
            ],
            [
                "codigo_ibge" => 2210656,
                "estado_id" => 9,
                "nome" => 'SIGEFREDO PACHECO',
            ],
            [
                "codigo_ibge" => 2210706,
                "estado_id" => 9,
                "nome" => 'SIMÕES',
            ],
            [
                "codigo_ibge" => 2210805,
                "estado_id" => 9,
                "nome" => 'SIMPLÍCIO MENDES',
            ],
            [
                "codigo_ibge" => 2210904,
                "estado_id" => 9,
                "nome" => 'SOCORRO DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2210938,
                "estado_id" => 9,
                "nome" => 'SUSSUAPARA',
            ],
            [
                "codigo_ibge" => 2210953,
                "estado_id" => 9,
                "nome" => 'TAMBORIL DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2210979,
                "estado_id" => 9,
                "nome" => 'TANQUE DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2211001,
                "estado_id" => 9,
                "nome" => 'TERESINA',
            ],
            [
                "codigo_ibge" => 2211100,
                "estado_id" => 9,
                "nome" => 'UNIÃO',
            ],
            [
                "codigo_ibge" => 2211209,
                "estado_id" => 9,
                "nome" => 'URUÇUÍ',
            ],
            [
                "codigo_ibge" => 2211308,
                "estado_id" => 9,
                "nome" => 'VALENÇA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2211357,
                "estado_id" => 9,
                "nome" => 'VÁRZEA BRANCA',
            ],
            [
                "codigo_ibge" => 2211407,
                "estado_id" => 9,
                "nome" => 'VÁRZEA GRANDE',
            ],
            [
                "codigo_ibge" => 2211506,
                "estado_id" => 9,
                "nome" => 'VERA MENDES',
            ],
            [
                "codigo_ibge" => 2211605,
                "estado_id" => 9,
                "nome" => 'VILA NOVA DO PIAUÍ',
            ],
            [
                "codigo_ibge" => 2211704,
                "estado_id" => 9,
                "nome" => 'WALL FERRAZ',
            ],
            [
                "codigo_ibge" => 2300101,
                "estado_id" => 10,
                "nome" => 'ABAIARA',
            ],
            [
                "codigo_ibge" => 2300150,
                "estado_id" => 10,
                "nome" => 'ACARAPE',
            ],
            [
                "codigo_ibge" => 2300200,
                "estado_id" => 10,
                "nome" => 'ACARAÚ',
            ],
            [
                "codigo_ibge" => 2300309,
                "estado_id" => 10,
                "nome" => 'ACOPIARA',
            ],
            [
                "codigo_ibge" => 2300408,
                "estado_id" => 10,
                "nome" => 'AIUABA',
            ],
            [
                "codigo_ibge" => 2300507,
                "estado_id" => 10,
                "nome" => 'ALCÂNTARAS',
            ],
            [
                "codigo_ibge" => 2300606,
                "estado_id" => 10,
                "nome" => 'ALTANEIRA',
            ],
            [
                "codigo_ibge" => 2300705,
                "estado_id" => 10,
                "nome" => 'ALTO SANTO',
            ],
            [
                "codigo_ibge" => 2300754,
                "estado_id" => 10,
                "nome" => 'AMONTADA',
            ],
            [
                "codigo_ibge" => 2300804,
                "estado_id" => 10,
                "nome" => 'ANTONINA DO NORTE',
            ],
            [
                "codigo_ibge" => 2300903,
                "estado_id" => 10,
                "nome" => 'APUIARÉS',
            ],
            [
                "codigo_ibge" => 2301000,
                "estado_id" => 10,
                "nome" => 'AQUIRAZ',
            ],
            [
                "codigo_ibge" => 2301109,
                "estado_id" => 10,
                "nome" => 'ARACATI',
            ],
            [
                "codigo_ibge" => 2301208,
                "estado_id" => 10,
                "nome" => 'ARACOIABA',
            ],
            [
                "codigo_ibge" => 2301257,
                "estado_id" => 10,
                "nome" => 'ARARENDÁ',
            ],
            [
                "codigo_ibge" => 2301307,
                "estado_id" => 10,
                "nome" => 'ARARIPE',
            ],
            [
                "codigo_ibge" => 2301406,
                "estado_id" => 10,
                "nome" => 'ARATUBA',
            ],
            [
                "codigo_ibge" => 2301505,
                "estado_id" => 10,
                "nome" => 'ARNEIROZ',
            ],
            [
                "codigo_ibge" => 2301604,
                "estado_id" => 10,
                "nome" => 'ASSARÉ',
            ],
            [
                "codigo_ibge" => 2301703,
                "estado_id" => 10,
                "nome" => 'AURORA',
            ],
            [
                "codigo_ibge" => 2301802,
                "estado_id" => 10,
                "nome" => 'BAIXIO',
            ],
            [
                "codigo_ibge" => 2301851,
                "estado_id" => 10,
                "nome" => 'BANABUIÚ',
            ],
            [
                "codigo_ibge" => 2301901,
                "estado_id" => 10,
                "nome" => 'BARBALHA',
            ],
            [
                "codigo_ibge" => 2301950,
                "estado_id" => 10,
                "nome" => 'BARREIRA',
            ],
            [
                "codigo_ibge" => 2302008,
                "estado_id" => 10,
                "nome" => 'BARRO',
            ],
            [
                "codigo_ibge" => 2302057,
                "estado_id" => 10,
                "nome" => 'BARROQUINHA',
            ],
            [
                "codigo_ibge" => 2302107,
                "estado_id" => 10,
                "nome" => 'BATURITÉ',
            ],
            [
                "codigo_ibge" => 2302206,
                "estado_id" => 10,
                "nome" => 'BEBERIBE',
            ],
            [
                "codigo_ibge" => 2302305,
                "estado_id" => 10,
                "nome" => 'BELA CRUZ',
            ],
            [
                "codigo_ibge" => 2302404,
                "estado_id" => 10,
                "nome" => 'BOA VIAGEM',
            ],
            [
                "codigo_ibge" => 2302503,
                "estado_id" => 10,
                "nome" => 'BREJO SANTO',
            ],
            [
                "codigo_ibge" => 2302602,
                "estado_id" => 10,
                "nome" => 'CAMOCIM',
            ],
            [
                "codigo_ibge" => 2302701,
                "estado_id" => 10,
                "nome" => 'CAMPOS SALES',
            ],
            [
                "codigo_ibge" => 2302800,
                "estado_id" => 10,
                "nome" => 'CANINDÉ',
            ],
            [
                "codigo_ibge" => 2302909,
                "estado_id" => 10,
                "nome" => 'CAPISTRANO',
            ],
            [
                "codigo_ibge" => 2303006,
                "estado_id" => 10,
                "nome" => 'CARIDADE',
            ],
            [
                "codigo_ibge" => 2303105,
                "estado_id" => 10,
                "nome" => 'CARIRÉ',
            ],
            [
                "codigo_ibge" => 2303204,
                "estado_id" => 10,
                "nome" => 'CARIRIAÇU',
            ],
            [
                "codigo_ibge" => 2303303,
                "estado_id" => 10,
                "nome" => 'CARIÚS',
            ],
            [
                "codigo_ibge" => 2303402,
                "estado_id" => 10,
                "nome" => 'CARNAUBAL',
            ],
            [
                "codigo_ibge" => 2303501,
                "estado_id" => 10,
                "nome" => 'CASCAVEL',
            ],
            [
                "codigo_ibge" => 2303600,
                "estado_id" => 10,
                "nome" => 'CATARINA',
            ],
            [
                "codigo_ibge" => 2303659,
                "estado_id" => 10,
                "nome" => 'CATUNDA',
            ],
            [
                "codigo_ibge" => 2303709,
                "estado_id" => 10,
                "nome" => 'CAUCAIA',
            ],
            [
                "codigo_ibge" => 2303808,
                "estado_id" => 10,
                "nome" => 'CEDRO',
            ],
            [
                "codigo_ibge" => 2303907,
                "estado_id" => 10,
                "nome" => 'CHAVAL',
            ],
            [
                "codigo_ibge" => 2303931,
                "estado_id" => 10,
                "nome" => 'CHORÓ',
            ],
            [
                "codigo_ibge" => 2303956,
                "estado_id" => 10,
                "nome" => 'CHOROZINHO',
            ],
            [
                "codigo_ibge" => 2304004,
                "estado_id" => 10,
                "nome" => 'COREAÚ',
            ],
            [
                "codigo_ibge" => 2304103,
                "estado_id" => 10,
                "nome" => 'CRATEÚS',
            ],
            [
                "codigo_ibge" => 2304202,
                "estado_id" => 10,
                "nome" => 'CRATO',
            ],
            [
                "codigo_ibge" => 2304236,
                "estado_id" => 10,
                "nome" => 'CROATÁ',
            ],
            [
                "codigo_ibge" => 2304251,
                "estado_id" => 10,
                "nome" => 'CRUZ',
            ],
            [
                "codigo_ibge" => 2304269,
                "estado_id" => 10,
                "nome" => 'DEPUTADO IRAPUAN PINHEIRO',
            ],
            [
                "codigo_ibge" => 2304277,
                "estado_id" => 10,
                "nome" => 'ERERÊ',
            ],
            [
                "codigo_ibge" => 2304285,
                "estado_id" => 10,
                "nome" => 'EUSÉBIO',
            ],
            [
                "codigo_ibge" => 2304301,
                "estado_id" => 10,
                "nome" => 'FARIAS BRITO',
            ],
            [
                "codigo_ibge" => 2304350,
                "estado_id" => 10,
                "nome" => 'FORQUILHA',
            ],
            [
                "codigo_ibge" => 2304400,
                "estado_id" => 10,
                "nome" => 'FORTALEZA',
            ],
            [
                "codigo_ibge" => 2304459,
                "estado_id" => 10,
                "nome" => 'FORTIM',
            ],
            [
                "codigo_ibge" => 2304509,
                "estado_id" => 10,
                "nome" => 'FRECHEIRINHA',
            ],
            [
                "codigo_ibge" => 2304608,
                "estado_id" => 10,
                "nome" => 'GENERAL SAMPAIO',
            ],
            [
                "codigo_ibge" => 2304657,
                "estado_id" => 10,
                "nome" => 'GRAÇA',
            ],
            [
                "codigo_ibge" => 2304707,
                "estado_id" => 10,
                "nome" => 'GRANJA',
            ],
            [
                "codigo_ibge" => 2304806,
                "estado_id" => 10,
                "nome" => 'GRANJEIRO',
            ],
            [
                "codigo_ibge" => 2304905,
                "estado_id" => 10,
                "nome" => 'GROAÍRAS',
            ],
            [
                "codigo_ibge" => 2304954,
                "estado_id" => 10,
                "nome" => 'GUAIÚBA',
            ],
            [
                "codigo_ibge" => 2305001,
                "estado_id" => 10,
                "nome" => 'GUARACIABA DO NORTE',
            ],
            [
                "codigo_ibge" => 2305100,
                "estado_id" => 10,
                "nome" => 'GUARAMIRANGA',
            ],
            [
                "codigo_ibge" => 2305209,
                "estado_id" => 10,
                "nome" => 'HIDROLÂNDIA',
            ],
            [
                "codigo_ibge" => 2305233,
                "estado_id" => 10,
                "nome" => 'HORIZONTE',
            ],
            [
                "codigo_ibge" => 2305266,
                "estado_id" => 10,
                "nome" => 'IBARETAMA',
            ],
            [
                "codigo_ibge" => 2305308,
                "estado_id" => 10,
                "nome" => 'IBIAPINA',
            ],
            [
                "codigo_ibge" => 2305332,
                "estado_id" => 10,
                "nome" => 'IBICUITINGA',
            ],
            [
                "codigo_ibge" => 2305357,
                "estado_id" => 10,
                "nome" => 'ICAPUÍ',
            ],
            [
                "codigo_ibge" => 2305407,
                "estado_id" => 10,
                "nome" => 'ICÓ',
            ],
            [
                "codigo_ibge" => 2305506,
                "estado_id" => 10,
                "nome" => 'IGUATU',
            ],
            [
                "codigo_ibge" => 2305605,
                "estado_id" => 10,
                "nome" => 'INDEPENDÊNCIA',
            ],
            [
                "codigo_ibge" => 2305654,
                "estado_id" => 10,
                "nome" => 'IPAPORANGA',
            ],
            [
                "codigo_ibge" => 2305704,
                "estado_id" => 10,
                "nome" => 'IPAUMIRIM',
            ],
            [
                "codigo_ibge" => 2305803,
                "estado_id" => 10,
                "nome" => 'IPU',
            ],
            [
                "codigo_ibge" => 2305902,
                "estado_id" => 10,
                "nome" => 'IPUEIRAS',
            ],
            [
                "codigo_ibge" => 2306009,
                "estado_id" => 10,
                "nome" => 'IRACEMA',
            ],
            [
                "codigo_ibge" => 2306108,
                "estado_id" => 10,
                "nome" => 'IRAUÇUBA',
            ],
            [
                "codigo_ibge" => 2306207,
                "estado_id" => 10,
                "nome" => 'ITAIÇABA',
            ],
            [
                "codigo_ibge" => 2306256,
                "estado_id" => 10,
                "nome" => 'ITAITINGA',
            ],
            [
                "codigo_ibge" => 2306306,
                "estado_id" => 10,
                "nome" => 'ITAPAGÉ',
            ],
            [
                "codigo_ibge" => 2306405,
                "estado_id" => 10,
                "nome" => 'ITAPIPOCA',
            ],
            [
                "codigo_ibge" => 2306504,
                "estado_id" => 10,
                "nome" => 'ITAPIÚNA',
            ],
            [
                "codigo_ibge" => 2306553,
                "estado_id" => 10,
                "nome" => 'ITAREMA',
            ],
            [
                "codigo_ibge" => 2306603,
                "estado_id" => 10,
                "nome" => 'ITATIRA',
            ],
            [
                "codigo_ibge" => 2306702,
                "estado_id" => 10,
                "nome" => 'JAGUARETAMA',
            ],
            [
                "codigo_ibge" => 2306801,
                "estado_id" => 10,
                "nome" => 'JAGUARIBARA',
            ],
            [
                "codigo_ibge" => 2306900,
                "estado_id" => 10,
                "nome" => 'JAGUARIBE',
            ],
            [
                "codigo_ibge" => 2307007,
                "estado_id" => 10,
                "nome" => 'JAGUARUANA',
            ],
            [
                "codigo_ibge" => 2307106,
                "estado_id" => 10,
                "nome" => 'JARDIM',
            ],
            [
                "codigo_ibge" => 2307205,
                "estado_id" => 10,
                "nome" => 'JATI',
            ],
            [
                "codigo_ibge" => 2307254,
                "estado_id" => 10,
                "nome" => 'JIJOCA DE JERICOACOARA',
            ],
            [
                "codigo_ibge" => 2307304,
                "estado_id" => 10,
                "nome" => 'JUAZEIRO DO NORTE',
            ],
            [
                "codigo_ibge" => 2307403,
                "estado_id" => 10,
                "nome" => 'JUCÁS',
            ],
            [
                "codigo_ibge" => 2307502,
                "estado_id" => 10,
                "nome" => 'LAVRAS DA MANGABEIRA',
            ],
            [
                "codigo_ibge" => 2307601,
                "estado_id" => 10,
                "nome" => 'LIMOEIRO DO NORTE',
            ],
            [
                "codigo_ibge" => 2307635,
                "estado_id" => 10,
                "nome" => 'MADALENA',
            ],
            [
                "codigo_ibge" => 2307650,
                "estado_id" => 10,
                "nome" => 'MARACANAÚ',
            ],
            [
                "codigo_ibge" => 2307700,
                "estado_id" => 10,
                "nome" => 'MARANGUAPE',
            ],
            [
                "codigo_ibge" => 2307809,
                "estado_id" => 10,
                "nome" => 'MARCO',
            ],
            [
                "codigo_ibge" => 2307908,
                "estado_id" => 10,
                "nome" => 'MARTINÓPOLE',
            ],
            [
                "codigo_ibge" => 2308005,
                "estado_id" => 10,
                "nome" => 'MASSAPÊ',
            ],
            [
                "codigo_ibge" => 2308104,
                "estado_id" => 10,
                "nome" => 'MAURITI',
            ],
            [
                "codigo_ibge" => 2308203,
                "estado_id" => 10,
                "nome" => 'MERUOCA',
            ],
            [
                "codigo_ibge" => 2308302,
                "estado_id" => 10,
                "nome" => 'MILAGRES',
            ],
            [
                "codigo_ibge" => 2308351,
                "estado_id" => 10,
                "nome" => 'MILHÃ',
            ],
            [
                "codigo_ibge" => 2308377,
                "estado_id" => 10,
                "nome" => 'MIRAÍMA',
            ],
            [
                "codigo_ibge" => 2308401,
                "estado_id" => 10,
                "nome" => 'MISSÃO VELHA',
            ],
            [
                "codigo_ibge" => 2308500,
                "estado_id" => 10,
                "nome" => 'MOMBAÇA',
            ],
            [
                "codigo_ibge" => 2308609,
                "estado_id" => 10,
                "nome" => 'MONSENHOR TABOSA',
            ],
            [
                "codigo_ibge" => 2308708,
                "estado_id" => 10,
                "nome" => 'MORADA NOVA',
            ],
            [
                "codigo_ibge" => 2308807,
                "estado_id" => 10,
                "nome" => 'MORAÚJO',
            ],
            [
                "codigo_ibge" => 2308906,
                "estado_id" => 10,
                "nome" => 'MORRINHOS',
            ],
            [
                "codigo_ibge" => 2309003,
                "estado_id" => 10,
                "nome" => 'MUCAMBO',
            ],
            [
                "codigo_ibge" => 2309102,
                "estado_id" => 10,
                "nome" => 'MULUNGU',
            ],
            [
                "codigo_ibge" => 2309201,
                "estado_id" => 10,
                "nome" => 'NOVA OLINDA',
            ],
            [
                "codigo_ibge" => 2309300,
                "estado_id" => 10,
                "nome" => 'NOVA RUSSAS',
            ],
            [
                "codigo_ibge" => 2309409,
                "estado_id" => 10,
                "nome" => 'NOVO ORIENTE',
            ],
            [
                "codigo_ibge" => 2309458,
                "estado_id" => 10,
                "nome" => 'OCARA',
            ],
            [
                "codigo_ibge" => 2309508,
                "estado_id" => 10,
                "nome" => 'ORÓS',
            ],
            [
                "codigo_ibge" => 2309607,
                "estado_id" => 10,
                "nome" => 'PACAJUS',
            ],
            [
                "codigo_ibge" => 2309706,
                "estado_id" => 10,
                "nome" => 'PACATUBA',
            ],
            [
                "codigo_ibge" => 2309805,
                "estado_id" => 10,
                "nome" => 'PACOTI',
            ],
            [
                "codigo_ibge" => 2309904,
                "estado_id" => 10,
                "nome" => 'PACUJÁ',
            ],
            [
                "codigo_ibge" => 2310001,
                "estado_id" => 10,
                "nome" => 'PALHANO',
            ],
            [
                "codigo_ibge" => 2310100,
                "estado_id" => 10,
                "nome" => 'PALMÁCIA',
            ],
            [
                "codigo_ibge" => 2310209,
                "estado_id" => 10,
                "nome" => 'PARACURU',
            ],
            [
                "codigo_ibge" => 2310258,
                "estado_id" => 10,
                "nome" => 'PARAIPABA',
            ],
            [
                "codigo_ibge" => 2310308,
                "estado_id" => 10,
                "nome" => 'PARAMBU',
            ],
            [
                "codigo_ibge" => 2310407,
                "estado_id" => 10,
                "nome" => 'PARAMOTI',
            ],
            [
                "codigo_ibge" => 2310506,
                "estado_id" => 10,
                "nome" => 'PEDRA BRANCA',
            ],
            [
                "codigo_ibge" => 2310605,
                "estado_id" => 10,
                "nome" => 'PENAFORTE',
            ],
            [
                "codigo_ibge" => 2310704,
                "estado_id" => 10,
                "nome" => 'PENTECOSTE',
            ],
            [
                "codigo_ibge" => 2310803,
                "estado_id" => 10,
                "nome" => 'PEREIRO',
            ],
            [
                "codigo_ibge" => 2310852,
                "estado_id" => 10,
                "nome" => 'PINDORETAMA',
            ],
            [
                "codigo_ibge" => 2310902,
                "estado_id" => 10,
                "nome" => 'PIQUET CARNEIRO',
            ],
            [
                "codigo_ibge" => 2310951,
                "estado_id" => 10,
                "nome" => 'PIRES FERREIRA',
            ],
            [
                "codigo_ibge" => 2311009,
                "estado_id" => 10,
                "nome" => 'PORANGA',
            ],
            [
                "codigo_ibge" => 2311108,
                "estado_id" => 10,
                "nome" => 'PORTEIRAS',
            ],
            [
                "codigo_ibge" => 2311207,
                "estado_id" => 10,
                "nome" => 'POTENGI',
            ],
            [
                "codigo_ibge" => 2311231,
                "estado_id" => 10,
                "nome" => 'POTIRETAMA',
            ],
            [
                "codigo_ibge" => 2311264,
                "estado_id" => 10,
                "nome" => 'QUITERIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 2311306,
                "estado_id" => 10,
                "nome" => 'QUIXADÁ',
            ],
            [
                "codigo_ibge" => 2311355,
                "estado_id" => 10,
                "nome" => 'QUIXELÔ',
            ],
            [
                "codigo_ibge" => 2311405,
                "estado_id" => 10,
                "nome" => 'QUIXERAMOBIM',
            ],
            [
                "codigo_ibge" => 2311504,
                "estado_id" => 10,
                "nome" => 'QUIXERÉ',
            ],
            [
                "codigo_ibge" => 2311603,
                "estado_id" => 10,
                "nome" => 'REDENÇÃO',
            ],
            [
                "codigo_ibge" => 2311702,
                "estado_id" => 10,
                "nome" => 'RERIUTABA',
            ],
            [
                "codigo_ibge" => 2311801,
                "estado_id" => 10,
                "nome" => 'RUSSAS',
            ],
            [
                "codigo_ibge" => 2311900,
                "estado_id" => 10,
                "nome" => 'SABOEIRO',
            ],
            [
                "codigo_ibge" => 2311959,
                "estado_id" => 10,
                "nome" => 'SALITRE',
            ],
            [
                "codigo_ibge" => 2312007,
                "estado_id" => 10,
                "nome" => 'SANTANA DO ACARAÚ',
            ],
            [
                "codigo_ibge" => 2312106,
                "estado_id" => 10,
                "nome" => 'SANTANA DO CARIRI',
            ],
            [
                "codigo_ibge" => 2312205,
                "estado_id" => 10,
                "nome" => 'SANTA QUITÉRIA',
            ],
            [
                "codigo_ibge" => 2312304,
                "estado_id" => 10,
                "nome" => 'SÃO BENEDITO',
            ],
            [
                "codigo_ibge" => 2312403,
                "estado_id" => 10,
                "nome" => 'SÃO GONÇALO DO AMARANTE',
            ],
            [
                "codigo_ibge" => 2312502,
                "estado_id" => 10,
                "nome" => 'SÃO JOÃO DO JAGUARIBE',
            ],
            [
                "codigo_ibge" => 2312601,
                "estado_id" => 10,
                "nome" => 'SÃO LUÍS DO CURU',
            ],
            [
                "codigo_ibge" => 2312700,
                "estado_id" => 10,
                "nome" => 'SENADOR POMPEU',
            ],
            [
                "codigo_ibge" => 2312809,
                "estado_id" => 10,
                "nome" => 'SENADOR SÁ',
            ],
            [
                "codigo_ibge" => 2312908,
                "estado_id" => 10,
                "nome" => 'SOBRAL',
            ],
            [
                "codigo_ibge" => 2313005,
                "estado_id" => 10,
                "nome" => 'SOLONÓPOLE',
            ],
            [
                "codigo_ibge" => 2313104,
                "estado_id" => 10,
                "nome" => 'TABULEIRO DO NORTE',
            ],
            [
                "codigo_ibge" => 2313203,
                "estado_id" => 10,
                "nome" => 'TAMBORIL',
            ],
            [
                "codigo_ibge" => 2313252,
                "estado_id" => 10,
                "nome" => 'TARRAFAS',
            ],
            [
                "codigo_ibge" => 2313302,
                "estado_id" => 10,
                "nome" => 'TAUÁ',
            ],
            [
                "codigo_ibge" => 2313351,
                "estado_id" => 10,
                "nome" => 'TEJUÇUOCA',
            ],
            [
                "codigo_ibge" => 2313401,
                "estado_id" => 10,
                "nome" => 'TIANGUÁ',
            ],
            [
                "codigo_ibge" => 2313500,
                "estado_id" => 10,
                "nome" => 'TRAIRI',
            ],
            [
                "codigo_ibge" => 2313559,
                "estado_id" => 10,
                "nome" => 'TURURU',
            ],
            [
                "codigo_ibge" => 2313609,
                "estado_id" => 10,
                "nome" => 'UBAJARA',
            ],
            [
                "codigo_ibge" => 2313708,
                "estado_id" => 10,
                "nome" => 'UMARI',
            ],
            [
                "codigo_ibge" => 2313757,
                "estado_id" => 10,
                "nome" => 'UMIRIM',
            ],
            [
                "codigo_ibge" => 2313807,
                "estado_id" => 10,
                "nome" => 'URUBURETAMA',
            ],
            [
                "codigo_ibge" => 2313906,
                "estado_id" => 10,
                "nome" => 'URUOCA',
            ],
            [
                "codigo_ibge" => 2313955,
                "estado_id" => 10,
                "nome" => 'VARJOTA',
            ],
            [
                "codigo_ibge" => 2314003,
                "estado_id" => 10,
                "nome" => 'VÁRZEA ALEGRE',
            ],
            [
                "codigo_ibge" => 2314102,
                "estado_id" => 10,
                "nome" => 'VIÇOSA DO CEARÁ',
            ],
            [
                "codigo_ibge" => 2400109,
                "estado_id" => 11,
                "nome" => 'ACARI',
            ],
            [
                "codigo_ibge" => 2400208,
                "estado_id" => 11,
                "nome" => 'AÇU',
            ],
            [
                "codigo_ibge" => 2400307,
                "estado_id" => 11,
                "nome" => 'AFONSO BEZERRA',
            ],
            [
                "codigo_ibge" => 2400406,
                "estado_id" => 11,
                "nome" => 'ÁGUA NOVA',
            ],
            [
                "codigo_ibge" => 2400505,
                "estado_id" => 11,
                "nome" => 'ALEXANDRIA',
            ],
            [
                "codigo_ibge" => 2400604,
                "estado_id" => 11,
                "nome" => 'ALMINO AFONSO',
            ],
            [
                "codigo_ibge" => 2400703,
                "estado_id" => 11,
                "nome" => 'ALTO DO RODRIGUES',
            ],
            [
                "codigo_ibge" => 2400802,
                "estado_id" => 11,
                "nome" => 'ANGICOS',
            ],
            [
                "codigo_ibge" => 2400901,
                "estado_id" => 11,
                "nome" => 'ANTÔNIO MARTINS',
            ],
            [
                "codigo_ibge" => 2401008,
                "estado_id" => 11,
                "nome" => 'APODI',
            ],
            [
                "codigo_ibge" => 2401107,
                "estado_id" => 11,
                "nome" => 'AREIA BRANCA',
            ],
            [
                "codigo_ibge" => 2401206,
                "estado_id" => 11,
                "nome" => 'ARÊS',
            ],
            [
                "codigo_ibge" => 2401305,
                "estado_id" => 11,
                "nome" => 'AUGUSTO SEVERO',
            ],
            [
                "codigo_ibge" => 2401404,
                "estado_id" => 11,
                "nome" => 'BAÍA FORMOSA',
            ],
            [
                "codigo_ibge" => 2401453,
                "estado_id" => 11,
                "nome" => 'BARAÚNA',
            ],
            [
                "codigo_ibge" => 2401503,
                "estado_id" => 11,
                "nome" => 'BARCELONA',
            ],
            [
                "codigo_ibge" => 2401602,
                "estado_id" => 11,
                "nome" => 'BENTO FERNANDES',
            ],
            [
                "codigo_ibge" => 2401651,
                "estado_id" => 11,
                "nome" => 'BODÓ',
            ],
            [
                "codigo_ibge" => 2401701,
                "estado_id" => 11,
                "nome" => 'BOM JESUS',
            ],
            [
                "codigo_ibge" => 2401800,
                "estado_id" => 11,
                "nome" => 'BREJINHO',
            ],
            [
                "codigo_ibge" => 2401859,
                "estado_id" => 11,
                "nome" => 'CAIÇARA DO NORTE',
            ],
            [
                "codigo_ibge" => 2401909,
                "estado_id" => 11,
                "nome" => 'CAIÇARA DO RIO DO VENTO',
            ],
            [
                "codigo_ibge" => 2402006,
                "estado_id" => 11,
                "nome" => 'CAICÓ',
            ],
            [
                "codigo_ibge" => 2402105,
                "estado_id" => 11,
                "nome" => 'CAMPO REDONDO',
            ],
            [
                "codigo_ibge" => 2402204,
                "estado_id" => 11,
                "nome" => 'CANGUARETAMA',
            ],
            [
                "codigo_ibge" => 2402303,
                "estado_id" => 11,
                "nome" => 'CARAÚBAS',
            ],
            [
                "codigo_ibge" => 2402402,
                "estado_id" => 11,
                "nome" => 'CARNAÚBA DOS DANTAS',
            ],
            [
                "codigo_ibge" => 2402501,
                "estado_id" => 11,
                "nome" => 'CARNAUBAIS',
            ],
            [
                "codigo_ibge" => 2402600,
                "estado_id" => 11,
                "nome" => 'CEARÁ-MIRIM',
            ],
            [
                "codigo_ibge" => 2402709,
                "estado_id" => 11,
                "nome" => 'CERRO CORÁ',
            ],
            [
                "codigo_ibge" => 2402808,
                "estado_id" => 11,
                "nome" => 'CORONEL EZEQUIEL',
            ],
            [
                "codigo_ibge" => 2402907,
                "estado_id" => 11,
                "nome" => 'CORONEL JOÃO PESSOA',
            ],
            [
                "codigo_ibge" => 2403004,
                "estado_id" => 11,
                "nome" => 'CRUZETA',
            ],
            [
                "codigo_ibge" => 2403103,
                "estado_id" => 11,
                "nome" => 'CURRAIS NOVOS',
            ],
            [
                "codigo_ibge" => 2403202,
                "estado_id" => 11,
                "nome" => 'DOUTOR SEVERIANO',
            ],
            [
                "codigo_ibge" => 2403251,
                "estado_id" => 11,
                "nome" => 'PARNAMIRIM',
            ],
            [
                "codigo_ibge" => 2403301,
                "estado_id" => 11,
                "nome" => 'ENCANTO',
            ],
            [
                "codigo_ibge" => 2403400,
                "estado_id" => 11,
                "nome" => 'EQUADOR',
            ],
            [
                "codigo_ibge" => 2403509,
                "estado_id" => 11,
                "nome" => 'ESPÍRITO SANTO',
            ],
            [
                "codigo_ibge" => 2403608,
                "estado_id" => 11,
                "nome" => 'EXTREMOZ',
            ],
            [
                "codigo_ibge" => 2403707,
                "estado_id" => 11,
                "nome" => 'FELIPE GUERRA',
            ],
            [
                "codigo_ibge" => 2403756,
                "estado_id" => 11,
                "nome" => 'FERNANDO PEDROZA',
            ],
            [
                "codigo_ibge" => 2403806,
                "estado_id" => 11,
                "nome" => 'FLORÂNIA',
            ],
            [
                "codigo_ibge" => 2403905,
                "estado_id" => 11,
                "nome" => 'FRANCISCO DANTAS',
            ],
            [
                "codigo_ibge" => 2404002,
                "estado_id" => 11,
                "nome" => 'FRUTUOSO GOMES',
            ],
            [
                "codigo_ibge" => 2404101,
                "estado_id" => 11,
                "nome" => 'GALINHOS',
            ],
            [
                "codigo_ibge" => 2404200,
                "estado_id" => 11,
                "nome" => 'GOIANINHA',
            ],
            [
                "codigo_ibge" => 2404309,
                "estado_id" => 11,
                "nome" => 'GOVERNADOR DIX-SEPT ROSADO',
            ],
            [
                "codigo_ibge" => 2404408,
                "estado_id" => 11,
                "nome" => 'GROSSOS',
            ],
            [
                "codigo_ibge" => 2404507,
                "estado_id" => 11,
                "nome" => 'GUAMARÉ',
            ],
            [
                "codigo_ibge" => 2404606,
                "estado_id" => 11,
                "nome" => 'IELMO MARINHO',
            ],
            [
                "codigo_ibge" => 2404705,
                "estado_id" => 11,
                "nome" => 'IPANGUAÇU',
            ],
            [
                "codigo_ibge" => 2404804,
                "estado_id" => 11,
                "nome" => 'IPUEIRA',
            ],
            [
                "codigo_ibge" => 2404853,
                "estado_id" => 11,
                "nome" => 'ITAJÁ',
            ],
            [
                "codigo_ibge" => 2404903,
                "estado_id" => 11,
                "nome" => 'ITAÚ',
            ],
            [
                "codigo_ibge" => 2405009,
                "estado_id" => 11,
                "nome" => 'JAÇANÃ',
            ],
            [
                "codigo_ibge" => 2405108,
                "estado_id" => 11,
                "nome" => 'JANDAÍRA',
            ],
            [
                "codigo_ibge" => 2405207,
                "estado_id" => 11,
                "nome" => 'JANDUÍS',
            ],
            [
                "codigo_ibge" => 2405306,
                "estado_id" => 11,
                "nome" => 'JANUÁRIO CICCO',
            ],
            [
                "codigo_ibge" => 2405405,
                "estado_id" => 11,
                "nome" => 'JAPI',
            ],
            [
                "codigo_ibge" => 2405504,
                "estado_id" => 11,
                "nome" => 'JARDIM DE ANGICOS',
            ],
            [
                "codigo_ibge" => 2405603,
                "estado_id" => 11,
                "nome" => 'JARDIM DE PIRANHAS',
            ],
            [
                "codigo_ibge" => 2405702,
                "estado_id" => 11,
                "nome" => 'JARDIM DO SERIDÓ',
            ],
            [
                "codigo_ibge" => 2405801,
                "estado_id" => 11,
                "nome" => 'JOÃO CÂMARA',
            ],
            [
                "codigo_ibge" => 2405900,
                "estado_id" => 11,
                "nome" => 'JOÃO DIAS',
            ],
            [
                "codigo_ibge" => 2406007,
                "estado_id" => 11,
                "nome" => 'JOSÉ DA PENHA',
            ],
            [
                "codigo_ibge" => 2406106,
                "estado_id" => 11,
                "nome" => 'JUCURUTU',
            ],
            [
                "codigo_ibge" => 2406155,
                "estado_id" => 11,
                "nome" => 'JUNDIÁ',
            ],
            [
                "codigo_ibge" => 2406205,
                "estado_id" => 11,
                "nome" => 'LAGOA D`ANTA',
            ],
            [
                "codigo_ibge" => 2406304,
                "estado_id" => 11,
                "nome" => 'LAGOA DE PEDRAS',
            ],
            [
                "codigo_ibge" => 2406403,
                "estado_id" => 11,
                "nome" => 'LAGOA DE VELHOS',
            ],
            [
                "codigo_ibge" => 2406502,
                "estado_id" => 11,
                "nome" => 'LAGOA NOVA',
            ],
            [
                "codigo_ibge" => 2406601,
                "estado_id" => 11,
                "nome" => 'LAGOA SALGADA',
            ],
            [
                "codigo_ibge" => 2406700,
                "estado_id" => 11,
                "nome" => 'LAJES',
            ],
            [
                "codigo_ibge" => 2406809,
                "estado_id" => 11,
                "nome" => 'LAJES PINTADAS',
            ],
            [
                "codigo_ibge" => 2406908,
                "estado_id" => 11,
                "nome" => 'LUCRÉCIA',
            ],
            [
                "codigo_ibge" => 2407005,
                "estado_id" => 11,
                "nome" => 'LUÍS GOMES',
            ],
            [
                "codigo_ibge" => 2407104,
                "estado_id" => 11,
                "nome" => 'MACAÍBA',
            ],
            [
                "codigo_ibge" => 2407203,
                "estado_id" => 11,
                "nome" => 'MACAU',
            ],
            [
                "codigo_ibge" => 2407252,
                "estado_id" => 11,
                "nome" => 'MAJOR SALES',
            ],
            [
                "codigo_ibge" => 2407302,
                "estado_id" => 11,
                "nome" => 'MARCELINO VIEIRA',
            ],
            [
                "codigo_ibge" => 2407401,
                "estado_id" => 11,
                "nome" => 'MARTINS',
            ],
            [
                "codigo_ibge" => 2407500,
                "estado_id" => 11,
                "nome" => 'MAXARANGUAPE',
            ],
            [
                "codigo_ibge" => 2407609,
                "estado_id" => 11,
                "nome" => 'MESSIAS TARGINO',
            ],
            [
                "codigo_ibge" => 2407708,
                "estado_id" => 11,
                "nome" => 'MONTANHAS',
            ],
            [
                "codigo_ibge" => 2407807,
                "estado_id" => 11,
                "nome" => 'MONTE ALEGRE',
            ],
            [
                "codigo_ibge" => 2407906,
                "estado_id" => 11,
                "nome" => 'MONTE DAS GAMELEIRAS',
            ],
            [
                "codigo_ibge" => 2408003,
                "estado_id" => 11,
                "nome" => 'MOSSORÓ',
            ],
            [
                "codigo_ibge" => 2408102,
                "estado_id" => 11,
                "nome" => 'NATAL',
            ],
            [
                "codigo_ibge" => 2408201,
                "estado_id" => 11,
                "nome" => 'NÍSIA FLORESTA',
            ],
            [
                "codigo_ibge" => 2408300,
                "estado_id" => 11,
                "nome" => 'NOVA CRUZ',
            ],
            [
                "codigo_ibge" => 2408409,
                "estado_id" => 11,
                "nome" => 'OLHO-D`ÁGUA DO BORGES',
            ],
            [
                "codigo_ibge" => 2408508,
                "estado_id" => 11,
                "nome" => 'OURO BRANCO',
            ],
            [
                "codigo_ibge" => 2408607,
                "estado_id" => 11,
                "nome" => 'PARANÁ',
            ],
            [
                "codigo_ibge" => 2408706,
                "estado_id" => 11,
                "nome" => 'PARAÚ',
            ],
            [
                "codigo_ibge" => 2408805,
                "estado_id" => 11,
                "nome" => 'PARAZINHO',
            ],
            [
                "codigo_ibge" => 2408904,
                "estado_id" => 11,
                "nome" => 'PARELHAS',
            ],
            [
                "codigo_ibge" => 2408953,
                "estado_id" => 11,
                "nome" => 'RIO DO FOGO',
            ],
            [
                "codigo_ibge" => 2409100,
                "estado_id" => 11,
                "nome" => 'PASSA E FICA',
            ],
            [
                "codigo_ibge" => 2409209,
                "estado_id" => 11,
                "nome" => 'PASSAGEM',
            ],
            [
                "codigo_ibge" => 2409308,
                "estado_id" => 11,
                "nome" => 'PATU',
            ],
            [
                "codigo_ibge" => 2409332,
                "estado_id" => 11,
                "nome" => 'SANTA MARIA',
            ],
            [
                "codigo_ibge" => 2409407,
                "estado_id" => 11,
                "nome" => 'PAU DOS FERROS',
            ],
            [
                "codigo_ibge" => 2409506,
                "estado_id" => 11,
                "nome" => 'PEDRA GRANDE',
            ],
            [
                "codigo_ibge" => 2409605,
                "estado_id" => 11,
                "nome" => 'PEDRA PRETA',
            ],
            [
                "codigo_ibge" => 2409704,
                "estado_id" => 11,
                "nome" => 'PEDRO AVELINO',
            ],
            [
                "codigo_ibge" => 2409803,
                "estado_id" => 11,
                "nome" => 'PEDRO VELHO',
            ],
            [
                "codigo_ibge" => 2409902,
                "estado_id" => 11,
                "nome" => 'PENDÊNCIAS',
            ],
            [
                "codigo_ibge" => 2410009,
                "estado_id" => 11,
                "nome" => 'PILÕES',
            ],
            [
                "codigo_ibge" => 2410108,
                "estado_id" => 11,
                "nome" => 'POÇO BRANCO',
            ],
            [
                "codigo_ibge" => 2410207,
                "estado_id" => 11,
                "nome" => 'PORTALEGRE',
            ],
            [
                "codigo_ibge" => 2410256,
                "estado_id" => 11,
                "nome" => 'PORTO DO MANGUE',
            ],
            [
                "codigo_ibge" => 2410306,
                "estado_id" => 11,
                "nome" => 'SERRA CAIADA',
            ],
            [
                "codigo_ibge" => 2410405,
                "estado_id" => 11,
                "nome" => 'PUREZA',
            ],
            [
                "codigo_ibge" => 2410504,
                "estado_id" => 11,
                "nome" => 'RAFAEL FERNANDES',
            ],
            [
                "codigo_ibge" => 2410603,
                "estado_id" => 11,
                "nome" => 'RAFAEL GODEIRO',
            ],
            [
                "codigo_ibge" => 2410702,
                "estado_id" => 11,
                "nome" => 'RIACHO DA CRUZ',
            ],
            [
                "codigo_ibge" => 2410801,
                "estado_id" => 11,
                "nome" => 'RIACHO DE SANTANA',
            ],
            [
                "codigo_ibge" => 2410900,
                "estado_id" => 11,
                "nome" => 'RIACHUELO',
            ],
            [
                "codigo_ibge" => 2411007,
                "estado_id" => 11,
                "nome" => 'RODOLFO FERNANDES',
            ],
            [
                "codigo_ibge" => 2411056,
                "estado_id" => 11,
                "nome" => 'TIBAU',
            ],
            [
                "codigo_ibge" => 2411106,
                "estado_id" => 11,
                "nome" => 'RUY BARBOSA',
            ],
            [
                "codigo_ibge" => 2411205,
                "estado_id" => 11,
                "nome" => 'SANTA CRUZ',
            ],
            [
                "codigo_ibge" => 2411403,
                "estado_id" => 11,
                "nome" => 'SANTANA DO MATOS',
            ],
            [
                "codigo_ibge" => 2411429,
                "estado_id" => 11,
                "nome" => 'SANTANA DO SERIDÓ',
            ],
            [
                "codigo_ibge" => 2411502,
                "estado_id" => 11,
                "nome" => 'SANTO ANTÔNIO',
            ],
            [
                "codigo_ibge" => 2411601,
                "estado_id" => 11,
                "nome" => 'SÃO BENTO DO NORTE',
            ],
            [
                "codigo_ibge" => 2411700,
                "estado_id" => 11,
                "nome" => 'SÃO BENTO DO TRAIRÍ',
            ],
            [
                "codigo_ibge" => 2411809,
                "estado_id" => 11,
                "nome" => 'SÃO FERNANDO',
            ],
            [
                "codigo_ibge" => 2411908,
                "estado_id" => 11,
                "nome" => 'SÃO FRANCISCO DO OESTE',
            ],
            [
                "codigo_ibge" => 2412005,
                "estado_id" => 11,
                "nome" => 'SÃO GONÇALO DO AMARANTE',
            ],
            [
                "codigo_ibge" => 2412104,
                "estado_id" => 11,
                "nome" => 'SÃO JOÃO DO SABUGI',
            ],
            [
                "codigo_ibge" => 2412203,
                "estado_id" => 11,
                "nome" => 'SÃO JOSÉ DE MIPIBU',
            ],
            [
                "codigo_ibge" => 2412302,
                "estado_id" => 11,
                "nome" => 'SÃO JOSÉ DO CAMPESTRE',
            ],
            [
                "codigo_ibge" => 2412401,
                "estado_id" => 11,
                "nome" => 'SÃO JOSÉ DO SERIDÓ',
            ],
            [
                "codigo_ibge" => 2412500,
                "estado_id" => 11,
                "nome" => 'SÃO MIGUEL',
            ],
            [
                "codigo_ibge" => 2412559,
                "estado_id" => 11,
                "nome" => 'SÃO MIGUEL DO GOSTOSO',
            ],
            [
                "codigo_ibge" => 2412609,
                "estado_id" => 11,
                "nome" => 'SÃO PAULO DO POTENGI',
            ],
            [
                "codigo_ibge" => 2412708,
                "estado_id" => 11,
                "nome" => 'SÃO PEDRO',
            ],
            [
                "codigo_ibge" => 2412807,
                "estado_id" => 11,
                "nome" => 'SÃO RAFAEL',
            ],
            [
                "codigo_ibge" => 2412906,
                "estado_id" => 11,
                "nome" => 'SÃO TOMÉ',
            ],
            [
                "codigo_ibge" => 2413003,
                "estado_id" => 11,
                "nome" => 'SÃO VICENTE',
            ],
            [
                "codigo_ibge" => 2413102,
                "estado_id" => 11,
                "nome" => 'SENADOR ELÓI DE SOUZA',
            ],
            [
                "codigo_ibge" => 2413201,
                "estado_id" => 11,
                "nome" => 'SENADOR GEORGINO AVELINO',
            ],
            [
                "codigo_ibge" => 2413300,
                "estado_id" => 11,
                "nome" => 'SERRA DE SÃO BENTO',
            ],
            [
                "codigo_ibge" => 2413359,
                "estado_id" => 11,
                "nome" => 'SERRA DO MEL',
            ],
            [
                "codigo_ibge" => 2413409,
                "estado_id" => 11,
                "nome" => 'SERRA NEGRA DO NORTE',
            ],
            [
                "codigo_ibge" => 2413508,
                "estado_id" => 11,
                "nome" => 'SERRINHA',
            ],
            [
                "codigo_ibge" => 2413557,
                "estado_id" => 11,
                "nome" => 'SERRINHA DOS PINTOS',
            ],
            [
                "codigo_ibge" => 2413607,
                "estado_id" => 11,
                "nome" => 'SEVERIANO MELO',
            ],
            [
                "codigo_ibge" => 2413706,
                "estado_id" => 11,
                "nome" => 'SÍTIO NOVO',
            ],
            [
                "codigo_ibge" => 2413805,
                "estado_id" => 11,
                "nome" => 'TABOLEIRO GRANDE',
            ],
            [
                "codigo_ibge" => 2413904,
                "estado_id" => 11,
                "nome" => 'TAIPU',
            ],
            [
                "codigo_ibge" => 2414001,
                "estado_id" => 11,
                "nome" => 'TANGARÁ',
            ],
            [
                "codigo_ibge" => 2414100,
                "estado_id" => 11,
                "nome" => 'TENENTE ANANIAS',
            ],
            [
                "codigo_ibge" => 2414159,
                "estado_id" => 11,
                "nome" => 'TENENTE LAURENTINO CRUZ',
            ],
            [
                "codigo_ibge" => 2414209,
                "estado_id" => 11,
                "nome" => 'TIBAU DO SUL',
            ],
            [
                "codigo_ibge" => 2414308,
                "estado_id" => 11,
                "nome" => 'TIMBAÚBA DOS BATISTAS',
            ],
            [
                "codigo_ibge" => 2414407,
                "estado_id" => 11,
                "nome" => 'TOUROS',
            ],
            [
                "codigo_ibge" => 2414456,
                "estado_id" => 11,
                "nome" => 'TRIUNFO POTIGUAR',
            ],
            [
                "codigo_ibge" => 2414506,
                "estado_id" => 11,
                "nome" => 'UMARIZAL',
            ],
            [
                "codigo_ibge" => 2414605,
                "estado_id" => 11,
                "nome" => 'UPANEMA',
            ],
            [
                "codigo_ibge" => 2414704,
                "estado_id" => 11,
                "nome" => 'VÁRZEA',
            ],
            [
                "codigo_ibge" => 2414753,
                "estado_id" => 11,
                "nome" => 'VENHA-VER',
            ],
            [
                "codigo_ibge" => 2414803,
                "estado_id" => 11,
                "nome" => 'VERA CRUZ',
            ],
            [
                "codigo_ibge" => 2414902,
                "estado_id" => 11,
                "nome" => 'VIÇOSA',
            ],
            [
                "codigo_ibge" => 2415008,
                "estado_id" => 11,
                "nome" => 'VILA FLOR',
            ],
            [
                "codigo_ibge" => 2500106,
                "estado_id" => 12,
                "nome" => 'ÁGUA BRANCA',
            ],
            [
                "codigo_ibge" => 2500205,
                "estado_id" => 12,
                "nome" => 'AGUIAR',
            ],
            [
                "codigo_ibge" => 2500304,
                "estado_id" => 12,
                "nome" => 'ALAGOA GRANDE',
            ],
            [
                "codigo_ibge" => 2500403,
                "estado_id" => 12,
                "nome" => 'ALAGOA NOVA',
            ],
            [
                "codigo_ibge" => 2500502,
                "estado_id" => 12,
                "nome" => 'ALAGOINHA',
            ],
            [
                "codigo_ibge" => 2500536,
                "estado_id" => 12,
                "nome" => 'ALCANTIL',
            ],
            [
                "codigo_ibge" => 2500577,
                "estado_id" => 12,
                "nome" => 'ALGODÃO DE JANDAÍRA',
            ],
            [
                "codigo_ibge" => 2500601,
                "estado_id" => 12,
                "nome" => 'ALHANDRA',
            ],
            [
                "codigo_ibge" => 2500700,
                "estado_id" => 12,
                "nome" => 'SÃO JOÃO DO RIO DO PEIXE',
            ],
            [
                "codigo_ibge" => 2500734,
                "estado_id" => 12,
                "nome" => 'AMPARO',
            ],
            [
                "codigo_ibge" => 2500775,
                "estado_id" => 12,
                "nome" => 'APARECIDA',
            ],
            [
                "codigo_ibge" => 2500809,
                "estado_id" => 12,
                "nome" => 'ARAÇAGI',
            ],
            [
                "codigo_ibge" => 2500908,
                "estado_id" => 12,
                "nome" => 'ARARA',
            ],
            [
                "codigo_ibge" => 2501005,
                "estado_id" => 12,
                "nome" => 'ARARUNA',
            ],
            [
                "codigo_ibge" => 2501104,
                "estado_id" => 12,
                "nome" => 'AREIA',
            ],
            [
                "codigo_ibge" => 2501153,
                "estado_id" => 12,
                "nome" => 'AREIA DE BARAÚNAS',
            ],
            [
                "codigo_ibge" => 2501203,
                "estado_id" => 12,
                "nome" => 'AREIAL',
            ],
            [
                "codigo_ibge" => 2501302,
                "estado_id" => 12,
                "nome" => 'AROEIRAS',
            ],
            [
                "codigo_ibge" => 2501351,
                "estado_id" => 12,
                "nome" => 'ASSUNÇÃO',
            ],
            [
                "codigo_ibge" => 2501401,
                "estado_id" => 12,
                "nome" => 'BAÍA DA TRAIÇÃO',
            ],
            [
                "codigo_ibge" => 2501500,
                "estado_id" => 12,
                "nome" => 'BANANEIRAS',
            ],
            [
                "codigo_ibge" => 2501534,
                "estado_id" => 12,
                "nome" => 'BARAÚNA',
            ],
            [
                "codigo_ibge" => 2501575,
                "estado_id" => 12,
                "nome" => 'BARRA DE SANTANA',
            ],
            [
                "codigo_ibge" => 2501609,
                "estado_id" => 12,
                "nome" => 'BARRA DE SANTA ROSA',
            ],
            [
                "codigo_ibge" => 2501708,
                "estado_id" => 12,
                "nome" => 'BARRA DE SÃO MIGUEL',
            ],
            [
                "codigo_ibge" => 2501807,
                "estado_id" => 12,
                "nome" => 'BAYEUX',
            ],
            [
                "codigo_ibge" => 2501906,
                "estado_id" => 12,
                "nome" => 'BELÉM',
            ],
            [
                "codigo_ibge" => 2502003,
                "estado_id" => 12,
                "nome" => 'BELÉM DO BREJO DO CRUZ',
            ],
            [
                "codigo_ibge" => 2502052,
                "estado_id" => 12,
                "nome" => 'BERNARDINO BATISTA',
            ],
            [
                "codigo_ibge" => 2502102,
                "estado_id" => 12,
                "nome" => 'BOA VENTURA',
            ],
            [
                "codigo_ibge" => 2502151,
                "estado_id" => 12,
                "nome" => 'BOA VISTA',
            ],
            [
                "codigo_ibge" => 2502201,
                "estado_id" => 12,
                "nome" => 'BOM JESUS',
            ],
            [
                "codigo_ibge" => 2502300,
                "estado_id" => 12,
                "nome" => 'BOM SUCESSO',
            ],
            [
                "codigo_ibge" => 2502409,
                "estado_id" => 12,
                "nome" => 'BONITO DE SANTA FÉ',
            ],
            [
                "codigo_ibge" => 2502508,
                "estado_id" => 12,
                "nome" => 'BOQUEIRÃO',
            ],
            [
                "codigo_ibge" => 2502607,
                "estado_id" => 12,
                "nome" => 'IGARACY',
            ],
            [
                "codigo_ibge" => 2502706,
                "estado_id" => 12,
                "nome" => 'BORBOREMA',
            ],
            [
                "codigo_ibge" => 2502805,
                "estado_id" => 12,
                "nome" => 'BREJO DO CRUZ',
            ],
            [
                "codigo_ibge" => 2502904,
                "estado_id" => 12,
                "nome" => 'BREJO DOS SANTOS',
            ],
            [
                "codigo_ibge" => 2503001,
                "estado_id" => 12,
                "nome" => 'CAAPORÃ',
            ],
            [
                "codigo_ibge" => 2503100,
                "estado_id" => 12,
                "nome" => 'CABACEIRAS',
            ],
            [
                "codigo_ibge" => 2503209,
                "estado_id" => 12,
                "nome" => 'CABEDELO',
            ],
            [
                "codigo_ibge" => 2503308,
                "estado_id" => 12,
                "nome" => 'CACHOEIRA DOS ÍNDIOS',
            ],
            [
                "codigo_ibge" => 2503407,
                "estado_id" => 12,
                "nome" => 'CACIMBA DE AREIA',
            ],
            [
                "codigo_ibge" => 2503506,
                "estado_id" => 12,
                "nome" => 'CACIMBA DE DENTRO',
            ],
            [
                "codigo_ibge" => 2503555,
                "estado_id" => 12,
                "nome" => 'CACIMBAS',
            ],
            [
                "codigo_ibge" => 2503605,
                "estado_id" => 12,
                "nome" => 'CAIÇARA',
            ],
            [
                "codigo_ibge" => 2503704,
                "estado_id" => 12,
                "nome" => 'CAJAZEIRAS',
            ],
            [
                "codigo_ibge" => 2503753,
                "estado_id" => 12,
                "nome" => 'CAJAZEIRINHAS',
            ],
            [
                "codigo_ibge" => 2503803,
                "estado_id" => 12,
                "nome" => 'CALDAS BRANDÃO',
            ],
            [
                "codigo_ibge" => 2503902,
                "estado_id" => 12,
                "nome" => 'CAMALAÚ',
            ],
            [
                "codigo_ibge" => 2504009,
                "estado_id" => 12,
                "nome" => 'CAMPINA GRANDE',
            ],
            [
                "codigo_ibge" => 2504033,
                "estado_id" => 12,
                "nome" => 'CAPIM',
            ],
            [
                "codigo_ibge" => 2504074,
                "estado_id" => 12,
                "nome" => 'CARAÚBAS',
            ],
            [
                "codigo_ibge" => 2504108,
                "estado_id" => 12,
                "nome" => 'CARRAPATEIRA',
            ],
            [
                "codigo_ibge" => 2504157,
                "estado_id" => 12,
                "nome" => 'CASSERENGUE',
            ],
            [
                "codigo_ibge" => 2504207,
                "estado_id" => 12,
                "nome" => 'CATINGUEIRA',
            ],
            [
                "codigo_ibge" => 2504306,
                "estado_id" => 12,
                "nome" => 'CATOLÉ DO ROCHA',
            ],
            [
                "codigo_ibge" => 2504355,
                "estado_id" => 12,
                "nome" => 'CATURITÉ',
            ],
            [
                "codigo_ibge" => 2504405,
                "estado_id" => 12,
                "nome" => 'CONCEIÇÃO',
            ],
            [
                "codigo_ibge" => 2504504,
                "estado_id" => 12,
                "nome" => 'CONDADO',
            ],
            [
                "codigo_ibge" => 2504603,
                "estado_id" => 12,
                "nome" => 'CONDE',
            ],
            [
                "codigo_ibge" => 2504702,
                "estado_id" => 12,
                "nome" => 'CONGO',
            ],
            [
                "codigo_ibge" => 2504801,
                "estado_id" => 12,
                "nome" => 'COREMAS',
            ],
            [
                "codigo_ibge" => 2504850,
                "estado_id" => 12,
                "nome" => 'COXIXOLA',
            ],
            [
                "codigo_ibge" => 2504900,
                "estado_id" => 12,
                "nome" => 'CRUZ DO ESPÍRITO SANTO',
            ],
            [
                "codigo_ibge" => 2505006,
                "estado_id" => 12,
                "nome" => 'CUBATI',
            ],
            [
                "codigo_ibge" => 2505105,
                "estado_id" => 12,
                "nome" => 'CUITÉ',
            ],
            [
                "codigo_ibge" => 2505204,
                "estado_id" => 12,
                "nome" => 'CUITEGI',
            ],
            [
                "codigo_ibge" => 2505238,
                "estado_id" => 12,
                "nome" => 'CUITÉ DE MAMANGUAPE',
            ],
            [
                "codigo_ibge" => 2505279,
                "estado_id" => 12,
                "nome" => 'CURRAL DE CIMA',
            ],
            [
                "codigo_ibge" => 2505303,
                "estado_id" => 12,
                "nome" => 'CURRAL VELHO',
            ],
            [
                "codigo_ibge" => 2505352,
                "estado_id" => 12,
                "nome" => 'DAMIÃO',
            ],
            [
                "codigo_ibge" => 2505402,
                "estado_id" => 12,
                "nome" => 'DESTERRO',
            ],
            [
                "codigo_ibge" => 2505501,
                "estado_id" => 12,
                "nome" => 'VISTA SERRANA',
            ],
            [
                "codigo_ibge" => 2505600,
                "estado_id" => 12,
                "nome" => 'DIAMANTE',
            ],
            [
                "codigo_ibge" => 2505709,
                "estado_id" => 12,
                "nome" => 'DONA INÊS',
            ],
            [
                "codigo_ibge" => 2505808,
                "estado_id" => 12,
                "nome" => 'DUAS ESTRADAS',
            ],
            [
                "codigo_ibge" => 2505907,
                "estado_id" => 12,
                "nome" => 'EMAS',
            ],
            [
                "codigo_ibge" => 2506004,
                "estado_id" => 12,
                "nome" => 'ESPERANÇA',
            ],
            [
                "codigo_ibge" => 2506103,
                "estado_id" => 12,
                "nome" => 'FAGUNDES',
            ],
            [
                "codigo_ibge" => 2506202,
                "estado_id" => 12,
                "nome" => 'FREI MARTINHO',
            ],
            [
                "codigo_ibge" => 2506251,
                "estado_id" => 12,
                "nome" => 'GADO BRAVO',
            ],
            [
                "codigo_ibge" => 2506301,
                "estado_id" => 12,
                "nome" => 'GUARABIRA',
            ],
            [
                "codigo_ibge" => 2506400,
                "estado_id" => 12,
                "nome" => 'GURINHÉM',
            ],
            [
                "codigo_ibge" => 2506509,
                "estado_id" => 12,
                "nome" => 'GURJÃO',
            ],
            [
                "codigo_ibge" => 2506608,
                "estado_id" => 12,
                "nome" => 'IBIARA',
            ],
            [
                "codigo_ibge" => 2506707,
                "estado_id" => 12,
                "nome" => 'IMACULADA',
            ],
            [
                "codigo_ibge" => 2506806,
                "estado_id" => 12,
                "nome" => 'INGÁ',
            ],
            [
                "codigo_ibge" => 2506905,
                "estado_id" => 12,
                "nome" => 'ITABAIANA',
            ],
            [
                "codigo_ibge" => 2507002,
                "estado_id" => 12,
                "nome" => 'ITAPORANGA',
            ],
            [
                "codigo_ibge" => 2507101,
                "estado_id" => 12,
                "nome" => 'ITAPOROROCA',
            ],
            [
                "codigo_ibge" => 2507200,
                "estado_id" => 12,
                "nome" => 'ITATUBA',
            ],
            [
                "codigo_ibge" => 2507309,
                "estado_id" => 12,
                "nome" => 'JACARAÚ',
            ],
            [
                "codigo_ibge" => 2507408,
                "estado_id" => 12,
                "nome" => 'JERICÓ',
            ],
            [
                "codigo_ibge" => 2507507,
                "estado_id" => 12,
                "nome" => 'JOÃO PESSOA',
            ],
            [
                "codigo_ibge" => 2507606,
                "estado_id" => 12,
                "nome" => 'JUAREZ TÁVORA',
            ],
            [
                "codigo_ibge" => 2507705,
                "estado_id" => 12,
                "nome" => 'JUAZEIRINHO',
            ],
            [
                "codigo_ibge" => 2507804,
                "estado_id" => 12,
                "nome" => 'JUNCO DO SERIDÓ',
            ],
            [
                "codigo_ibge" => 2507903,
                "estado_id" => 12,
                "nome" => 'JURIPIRANGA',
            ],
            [
                "codigo_ibge" => 2508000,
                "estado_id" => 12,
                "nome" => 'JURU',
            ],
            [
                "codigo_ibge" => 2508109,
                "estado_id" => 12,
                "nome" => 'LAGOA',
            ],
            [
                "codigo_ibge" => 2508208,
                "estado_id" => 12,
                "nome" => 'LAGOA DE DENTRO',
            ],
            [
                "codigo_ibge" => 2508307,
                "estado_id" => 12,
                "nome" => 'LAGOA SECA',
            ],
            [
                "codigo_ibge" => 2508406,
                "estado_id" => 12,
                "nome" => 'LASTRO',
            ],
            [
                "codigo_ibge" => 2508505,
                "estado_id" => 12,
                "nome" => 'LIVRAMENTO',
            ],
            [
                "codigo_ibge" => 2508554,
                "estado_id" => 12,
                "nome" => 'LOGRADOURO',
            ],
            [
                "codigo_ibge" => 2508604,
                "estado_id" => 12,
                "nome" => 'LUCENA',
            ],
            [
                "codigo_ibge" => 2508703,
                "estado_id" => 12,
                "nome" => 'MÃE D`ÁGUA',
            ],
            [
                "codigo_ibge" => 2508802,
                "estado_id" => 12,
                "nome" => 'MALTA',
            ],
            [
                "codigo_ibge" => 2508901,
                "estado_id" => 12,
                "nome" => 'MAMANGUAPE',
            ],
            [
                "codigo_ibge" => 2509008,
                "estado_id" => 12,
                "nome" => 'MANAÍRA',
            ],
            [
                "codigo_ibge" => 2509057,
                "estado_id" => 12,
                "nome" => 'MARCAÇÃO',
            ],
            [
                "codigo_ibge" => 2509107,
                "estado_id" => 12,
                "nome" => 'MARI',
            ],
            [
                "codigo_ibge" => 2509156,
                "estado_id" => 12,
                "nome" => 'MARIZÓPOLIS',
            ],
            [
                "codigo_ibge" => 2509206,
                "estado_id" => 12,
                "nome" => 'MASSARANDUBA',
            ],
            [
                "codigo_ibge" => 2509305,
                "estado_id" => 12,
                "nome" => 'MATARACA',
            ],
            [
                "codigo_ibge" => 2509339,
                "estado_id" => 12,
                "nome" => 'MATINHAS',
            ],
            [
                "codigo_ibge" => 2509370,
                "estado_id" => 12,
                "nome" => 'MATO GROSSO',
            ],
            [
                "codigo_ibge" => 2509396,
                "estado_id" => 12,
                "nome" => 'MATURÉIA',
            ],
            [
                "codigo_ibge" => 2509404,
                "estado_id" => 12,
                "nome" => 'MOGEIRO',
            ],
            [
                "codigo_ibge" => 2509503,
                "estado_id" => 12,
                "nome" => 'MONTADAS',
            ],
            [
                "codigo_ibge" => 2509602,
                "estado_id" => 12,
                "nome" => 'MONTE HOREBE',
            ],
            [
                "codigo_ibge" => 2509701,
                "estado_id" => 12,
                "nome" => 'MONTEIRO',
            ],
            [
                "codigo_ibge" => 2509800,
                "estado_id" => 12,
                "nome" => 'MULUNGU',
            ],
            [
                "codigo_ibge" => 2509909,
                "estado_id" => 12,
                "nome" => 'NATUBA',
            ],
            [
                "codigo_ibge" => 2510006,
                "estado_id" => 12,
                "nome" => 'NAZAREZINHO',
            ],
            [
                "codigo_ibge" => 2510105,
                "estado_id" => 12,
                "nome" => 'NOVA FLORESTA',
            ],
            [
                "codigo_ibge" => 2510204,
                "estado_id" => 12,
                "nome" => 'NOVA OLINDA',
            ],
            [
                "codigo_ibge" => 2510303,
                "estado_id" => 12,
                "nome" => 'NOVA PALMEIRA',
            ],
            [
                "codigo_ibge" => 2510402,
                "estado_id" => 12,
                "nome" => 'OLHO D`ÁGUA',
            ],
            [
                "codigo_ibge" => 2510501,
                "estado_id" => 12,
                "nome" => 'OLIVEDOS',
            ],
            [
                "codigo_ibge" => 2510600,
                "estado_id" => 12,
                "nome" => 'OURO VELHO',
            ],
            [
                "codigo_ibge" => 2510659,
                "estado_id" => 12,
                "nome" => 'PARARI',
            ],
            [
                "codigo_ibge" => 2510709,
                "estado_id" => 12,
                "nome" => 'PASSAGEM',
            ],
            [
                "codigo_ibge" => 2510808,
                "estado_id" => 12,
                "nome" => 'PATOS',
            ],
            [
                "codigo_ibge" => 2510907,
                "estado_id" => 12,
                "nome" => 'PAULISTA',
            ],
            [
                "codigo_ibge" => 2511004,
                "estado_id" => 12,
                "nome" => 'PEDRA BRANCA',
            ],
            [
                "codigo_ibge" => 2511103,
                "estado_id" => 12,
                "nome" => 'PEDRA LAVRADA',
            ],
            [
                "codigo_ibge" => 2511202,
                "estado_id" => 12,
                "nome" => 'PEDRAS DE FOGO',
            ],
            [
                "codigo_ibge" => 2511301,
                "estado_id" => 12,
                "nome" => 'PIANCÓ',
            ],
            [
                "codigo_ibge" => 2511400,
                "estado_id" => 12,
                "nome" => 'PICUÍ',
            ],
            [
                "codigo_ibge" => 2511509,
                "estado_id" => 12,
                "nome" => 'PILAR',
            ],
            [
                "codigo_ibge" => 2511608,
                "estado_id" => 12,
                "nome" => 'PILÕES',
            ],
            [
                "codigo_ibge" => 2511707,
                "estado_id" => 12,
                "nome" => 'PILÕEZINHOS',
            ],
            [
                "codigo_ibge" => 2511806,
                "estado_id" => 12,
                "nome" => 'PIRPIRITUBA',
            ],
            [
                "codigo_ibge" => 2511905,
                "estado_id" => 12,
                "nome" => 'PITIMBU',
            ],
            [
                "codigo_ibge" => 2512002,
                "estado_id" => 12,
                "nome" => 'POCINHOS',
            ],
            [
                "codigo_ibge" => 2512036,
                "estado_id" => 12,
                "nome" => 'POÇO DANTAS',
            ],
            [
                "codigo_ibge" => 2512077,
                "estado_id" => 12,
                "nome" => 'POÇO DE JOSÉ DE MOURA',
            ],
            [
                "codigo_ibge" => 2512101,
                "estado_id" => 12,
                "nome" => 'POMBAL',
            ],
            [
                "codigo_ibge" => 2512200,
                "estado_id" => 12,
                "nome" => 'PRATA',
            ],
            [
                "codigo_ibge" => 2512309,
                "estado_id" => 12,
                "nome" => 'PRINCESA ISABEL',
            ],
            [
                "codigo_ibge" => 2512408,
                "estado_id" => 12,
                "nome" => 'PUXINANÃ',
            ],
            [
                "codigo_ibge" => 2512507,
                "estado_id" => 12,
                "nome" => 'QUEIMADAS',
            ],
            [
                "codigo_ibge" => 2512606,
                "estado_id" => 12,
                "nome" => 'QUIXABÁ',
            ],
            [
                "codigo_ibge" => 2512705,
                "estado_id" => 12,
                "nome" => 'REMÍGIO',
            ],
            [
                "codigo_ibge" => 2512721,
                "estado_id" => 12,
                "nome" => 'PEDRO RÉGIS',
            ],
            [
                "codigo_ibge" => 2512747,
                "estado_id" => 12,
                "nome" => 'RIACHÃO',
            ],
            [
                "codigo_ibge" => 2512754,
                "estado_id" => 12,
                "nome" => 'RIACHÃO DO BACAMARTE',
            ],
            [
                "codigo_ibge" => 2512762,
                "estado_id" => 12,
                "nome" => 'RIACHÃO DO POÇO',
            ],
            [
                "codigo_ibge" => 2512788,
                "estado_id" => 12,
                "nome" => 'RIACHO DE SANTO ANTÔNIO',
            ],
            [
                "codigo_ibge" => 2512804,
                "estado_id" => 12,
                "nome" => 'RIACHO DOS CAVALOS',
            ],
            [
                "codigo_ibge" => 2512903,
                "estado_id" => 12,
                "nome" => 'RIO TINTO',
            ],
            [
                "codigo_ibge" => 2513000,
                "estado_id" => 12,
                "nome" => 'SALGADINHO',
            ],
            [
                "codigo_ibge" => 2513109,
                "estado_id" => 12,
                "nome" => 'SALGADO DE SÃO FÉLIX',
            ],
            [
                "codigo_ibge" => 2513158,
                "estado_id" => 12,
                "nome" => 'SANTA CECÍLIA',
            ],
            [
                "codigo_ibge" => 2513208,
                "estado_id" => 12,
                "nome" => 'SANTA CRUZ',
            ],
            [
                "codigo_ibge" => 2513307,
                "estado_id" => 12,
                "nome" => 'SANTA HELENA',
            ],
            [
                "codigo_ibge" => 2513356,
                "estado_id" => 12,
                "nome" => 'SANTA INÊS',
            ],
            [
                "codigo_ibge" => 2513406,
                "estado_id" => 12,
                "nome" => 'SANTA LUZIA',
            ],
            [
                "codigo_ibge" => 2513505,
                "estado_id" => 12,
                "nome" => 'SANTANA DE MANGUEIRA',
            ],
            [
                "codigo_ibge" => 2513604,
                "estado_id" => 12,
                "nome" => 'SANTANA DOS GARROTES',
            ],
            [
                "codigo_ibge" => 2513653,
                "estado_id" => 12,
                "nome" => 'JOCA CLAUDINO',
            ],
            [
                "codigo_ibge" => 2513703,
                "estado_id" => 12,
                "nome" => 'SANTA RITA',
            ],
            [
                "codigo_ibge" => 2513802,
                "estado_id" => 12,
                "nome" => 'SANTA TERESINHA',
            ],
            [
                "codigo_ibge" => 2513851,
                "estado_id" => 12,
                "nome" => 'SANTO ANDRÉ',
            ],
            [
                "codigo_ibge" => 2513901,
                "estado_id" => 12,
                "nome" => 'SÃO BENTO',
            ],
            [
                "codigo_ibge" => 2513927,
                "estado_id" => 12,
                "nome" => 'SÃO BENTINHO',
            ],
            [
                "codigo_ibge" => 2513943,
                "estado_id" => 12,
                "nome" => 'SÃO DOMINGOS DO CARIRI',
            ],
            [
                "codigo_ibge" => 2513968,
                "estado_id" => 12,
                "nome" => 'SÃO DOMINGOS',
            ],
            [
                "codigo_ibge" => 2513984,
                "estado_id" => 12,
                "nome" => 'SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 2514008,
                "estado_id" => 12,
                "nome" => 'SÃO JOÃO DO CARIRI',
            ],
            [
                "codigo_ibge" => 2514107,
                "estado_id" => 12,
                "nome" => 'SÃO JOÃO DO TIGRE',
            ],
            [
                "codigo_ibge" => 2514206,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DA LAGOA TAPADA',
            ],
            [
                "codigo_ibge" => 2514305,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DE CAIANA',
            ],
            [
                "codigo_ibge" => 2514404,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DE ESPINHARAS',
            ],
            [
                "codigo_ibge" => 2514453,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DOS RAMOS',
            ],
            [
                "codigo_ibge" => 2514503,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DE PIRANHAS',
            ],
            [
                "codigo_ibge" => 2514552,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DE PRINCESA',
            ],
            [
                "codigo_ibge" => 2514602,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DO BONFIM',
            ],
            [
                "codigo_ibge" => 2514651,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DO BREJO DO CRUZ',
            ],
            [
                "codigo_ibge" => 2514701,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DO SABUGI',
            ],
            [
                "codigo_ibge" => 2514800,
                "estado_id" => 12,
                "nome" => 'SÃO JOSÉ DOS CORDEIROS',
            ],
            [
                "codigo_ibge" => 2514909,
                "estado_id" => 12,
                "nome" => 'SÃO MAMEDE',
            ],
            [
                "codigo_ibge" => 2515005,
                "estado_id" => 12,
                "nome" => 'SÃO MIGUEL DE TAIPU',
            ],
            [
                "codigo_ibge" => 2515104,
                "estado_id" => 12,
                "nome" => 'SÃO SEBASTIÃO DE LAGOA DE ROÇA',
            ],
            [
                "codigo_ibge" => 2515203,
                "estado_id" => 12,
                "nome" => 'SÃO SEBASTIÃO DO UMBUZEIRO',
            ],
            [
                "codigo_ibge" => 2515302,
                "estado_id" => 12,
                "nome" => 'SAPÉ',
            ],
            [
                "codigo_ibge" => 2515401,
                "estado_id" => 12,
                "nome" => 'SÃO VICENTE DO SERIDÓ',
            ],
            [
                "codigo_ibge" => 2515500,
                "estado_id" => 12,
                "nome" => 'SERRA BRANCA',
            ],
            [
                "codigo_ibge" => 2515609,
                "estado_id" => 12,
                "nome" => 'SERRA DA RAIZ',
            ],
            [
                "codigo_ibge" => 2515708,
                "estado_id" => 12,
                "nome" => 'SERRA GRANDE',
            ],
            [
                "codigo_ibge" => 2515807,
                "estado_id" => 12,
                "nome" => 'SERRA REDONDA',
            ],
            [
                "codigo_ibge" => 2515906,
                "estado_id" => 12,
                "nome" => 'SERRARIA',
            ],
            [
                "codigo_ibge" => 2515930,
                "estado_id" => 12,
                "nome" => 'SERTÃOZINHO',
            ],
            [
                "codigo_ibge" => 2515971,
                "estado_id" => 12,
                "nome" => 'SOBRADO',
            ],
            [
                "codigo_ibge" => 2516003,
                "estado_id" => 12,
                "nome" => 'SOLÂNEA',
            ],
            [
                "codigo_ibge" => 2516102,
                "estado_id" => 12,
                "nome" => 'SOLEDADE',
            ],
            [
                "codigo_ibge" => 2516151,
                "estado_id" => 12,
                "nome" => 'SOSSÊGO',
            ],
            [
                "codigo_ibge" => 2516201,
                "estado_id" => 12,
                "nome" => 'SOUSA',
            ],
            [
                "codigo_ibge" => 2516300,
                "estado_id" => 12,
                "nome" => 'SUMÉ',
            ],
            [
                "codigo_ibge" => 2516409,
                "estado_id" => 12,
                "nome" => 'TACIMA',
            ],
            [
                "codigo_ibge" => 2516508,
                "estado_id" => 12,
                "nome" => 'TAPEROÁ',
            ],
            [
                "codigo_ibge" => 2516607,
                "estado_id" => 12,
                "nome" => 'TAVARES',
            ],
            [
                "codigo_ibge" => 2516706,
                "estado_id" => 12,
                "nome" => 'TEIXEIRA',
            ],
            [
                "codigo_ibge" => 2516755,
                "estado_id" => 12,
                "nome" => 'TENÓRIO',
            ],
            [
                "codigo_ibge" => 2516805,
                "estado_id" => 12,
                "nome" => 'TRIUNFO',
            ],
            [
                "codigo_ibge" => 2516904,
                "estado_id" => 12,
                "nome" => 'UIRAÚNA',
            ],
            [
                "codigo_ibge" => 2517001,
                "estado_id" => 12,
                "nome" => 'UMBUZEIRO',
            ],
            [
                "codigo_ibge" => 2517100,
                "estado_id" => 12,
                "nome" => 'VÁRZEA',
            ],
            [
                "codigo_ibge" => 2517209,
                "estado_id" => 12,
                "nome" => 'VIEIRÓPOLIS',
            ],
            [
                "codigo_ibge" => 2517407,
                "estado_id" => 12,
                "nome" => 'ZABELÊ',
            ],
            [
                "codigo_ibge" => 2600054,
                "estado_id" => 13,
                "nome" => 'ABREU E LIMA',
            ],
            [
                "codigo_ibge" => 2600104,
                "estado_id" => 13,
                "nome" => 'AFOGADOS DA INGAZEIRA',
            ],
            [
                "codigo_ibge" => 2600203,
                "estado_id" => 13,
                "nome" => 'AFRÂNIO',
            ],
            [
                "codigo_ibge" => 2600302,
                "estado_id" => 13,
                "nome" => 'AGRESTINA',
            ],
            [
                "codigo_ibge" => 2600401,
                "estado_id" => 13,
                "nome" => 'ÁGUA PRETA',
            ],
            [
                "codigo_ibge" => 2600500,
                "estado_id" => 13,
                "nome" => 'ÁGUAS BELAS',
            ],
            [
                "codigo_ibge" => 2600609,
                "estado_id" => 13,
                "nome" => 'ALAGOINHA',
            ],
            [
                "codigo_ibge" => 2600708,
                "estado_id" => 13,
                "nome" => 'ALIANÇA',
            ],
            [
                "codigo_ibge" => 2600807,
                "estado_id" => 13,
                "nome" => 'ALTINHO',
            ],
            [
                "codigo_ibge" => 2600906,
                "estado_id" => 13,
                "nome" => 'AMARAJI',
            ],
            [
                "codigo_ibge" => 2601003,
                "estado_id" => 13,
                "nome" => 'ANGELIM',
            ],
            [
                "codigo_ibge" => 2601052,
                "estado_id" => 13,
                "nome" => 'ARAÇOIABA',
            ],
            [
                "codigo_ibge" => 2601102,
                "estado_id" => 13,
                "nome" => 'ARARIPINA',
            ],
            [
                "codigo_ibge" => 2601201,
                "estado_id" => 13,
                "nome" => 'ARCOVERDE',
            ],
            [
                "codigo_ibge" => 2601300,
                "estado_id" => 13,
                "nome" => 'BARRA DE GUABIRABA',
            ],
            [
                "codigo_ibge" => 2601409,
                "estado_id" => 13,
                "nome" => 'BARREIROS',
            ],
            [
                "codigo_ibge" => 2601508,
                "estado_id" => 13,
                "nome" => 'BELÉM DE MARIA',
            ],
            [
                "codigo_ibge" => 2601607,
                "estado_id" => 13,
                "nome" => 'BELÉM DE SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 2601706,
                "estado_id" => 13,
                "nome" => 'BELO JARDIM',
            ],
            [
                "codigo_ibge" => 2601805,
                "estado_id" => 13,
                "nome" => 'BETÂNIA',
            ],
            [
                "codigo_ibge" => 2601904,
                "estado_id" => 13,
                "nome" => 'BEZERROS',
            ],
            [
                "codigo_ibge" => 2602001,
                "estado_id" => 13,
                "nome" => 'BODOCÓ',
            ],
            [
                "codigo_ibge" => 2602100,
                "estado_id" => 13,
                "nome" => 'BOM CONSELHO',
            ],
            [
                "codigo_ibge" => 2602209,
                "estado_id" => 13,
                "nome" => 'BOM JARDIM',
            ],
            [
                "codigo_ibge" => 2602308,
                "estado_id" => 13,
                "nome" => 'BONITO',
            ],
            [
                "codigo_ibge" => 2602407,
                "estado_id" => 13,
                "nome" => 'BREJÃO',
            ],
            [
                "codigo_ibge" => 2602506,
                "estado_id" => 13,
                "nome" => 'BREJINHO',
            ],
            [
                "codigo_ibge" => 2602605,
                "estado_id" => 13,
                "nome" => 'BREJO DA MADRE DE DEUS',
            ],
            [
                "codigo_ibge" => 2602704,
                "estado_id" => 13,
                "nome" => 'BUENOS AIRES',
            ],
            [
                "codigo_ibge" => 2602803,
                "estado_id" => 13,
                "nome" => 'BUÍQUE',
            ],
            [
                "codigo_ibge" => 2602902,
                "estado_id" => 13,
                "nome" => 'CABO DE SANTO AGOSTINHO',
            ],
            [
                "codigo_ibge" => 2603009,
                "estado_id" => 13,
                "nome" => 'CABROBÓ',
            ],
            [
                "codigo_ibge" => 2603108,
                "estado_id" => 13,
                "nome" => 'CACHOEIRINHA',
            ],
            [
                "codigo_ibge" => 2603207,
                "estado_id" => 13,
                "nome" => 'CAETÉS',
            ],
            [
                "codigo_ibge" => 2603306,
                "estado_id" => 13,
                "nome" => 'CALÇADO',
            ],
            [
                "codigo_ibge" => 2603405,
                "estado_id" => 13,
                "nome" => 'CALUMBI',
            ],
            [
                "codigo_ibge" => 2603454,
                "estado_id" => 13,
                "nome" => 'CAMARAGIBE',
            ],
            [
                "codigo_ibge" => 2603504,
                "estado_id" => 13,
                "nome" => 'CAMOCIM DE SÃO FÉLIX',
            ],
            [
                "codigo_ibge" => 2603603,
                "estado_id" => 13,
                "nome" => 'CAMUTANGA',
            ],
            [
                "codigo_ibge" => 2603702,
                "estado_id" => 13,
                "nome" => 'CANHOTINHO',
            ],
            [
                "codigo_ibge" => 2603801,
                "estado_id" => 13,
                "nome" => 'CAPOEIRAS',
            ],
            [
                "codigo_ibge" => 2603900,
                "estado_id" => 13,
                "nome" => 'CARNAÍBA',
            ],
            [
                "codigo_ibge" => 2603926,
                "estado_id" => 13,
                "nome" => 'CARNAUBEIRA DA PENHA',
            ],
            [
                "codigo_ibge" => 2604007,
                "estado_id" => 13,
                "nome" => 'CARPINA',
            ],
            [
                "codigo_ibge" => 2604106,
                "estado_id" => 13,
                "nome" => 'CARUARU',
            ],
            [
                "codigo_ibge" => 2604155,
                "estado_id" => 13,
                "nome" => 'CASINHAS',
            ],
            [
                "codigo_ibge" => 2604205,
                "estado_id" => 13,
                "nome" => 'CATENDE',
            ],
            [
                "codigo_ibge" => 2604304,
                "estado_id" => 13,
                "nome" => 'CEDRO',
            ],
            [
                "codigo_ibge" => 2604403,
                "estado_id" => 13,
                "nome" => 'CHÃ DE ALEGRIA',
            ],
            [
                "codigo_ibge" => 2604502,
                "estado_id" => 13,
                "nome" => 'CHÃ GRANDE',
            ],
            [
                "codigo_ibge" => 2604601,
                "estado_id" => 13,
                "nome" => 'CONDADO',
            ],
            [
                "codigo_ibge" => 2604700,
                "estado_id" => 13,
                "nome" => 'CORRENTES',
            ],
            [
                "codigo_ibge" => 2604809,
                "estado_id" => 13,
                "nome" => 'CORTÊS',
            ],
            [
                "codigo_ibge" => 2604908,
                "estado_id" => 13,
                "nome" => 'CUMARU',
            ],
            [
                "codigo_ibge" => 2605004,
                "estado_id" => 13,
                "nome" => 'CUPIRA',
            ],
            [
                "codigo_ibge" => 2605103,
                "estado_id" => 13,
                "nome" => 'CUSTÓDIA',
            ],
            [
                "codigo_ibge" => 2605152,
                "estado_id" => 13,
                "nome" => 'DORMENTES',
            ],
            [
                "codigo_ibge" => 2605202,
                "estado_id" => 13,
                "nome" => 'ESCADA',
            ],
            [
                "codigo_ibge" => 2605301,
                "estado_id" => 13,
                "nome" => 'EXU',
            ],
            [
                "codigo_ibge" => 2605400,
                "estado_id" => 13,
                "nome" => 'FEIRA NOVA',
            ],
            [
                "codigo_ibge" => 2605459,
                "estado_id" => 13,
                "nome" => 'FERNANDO DE NORONHA',
            ],
            [
                "codigo_ibge" => 2605509,
                "estado_id" => 13,
                "nome" => 'FERREIROS',
            ],
            [
                "codigo_ibge" => 2605608,
                "estado_id" => 13,
                "nome" => 'FLORES',
            ],
            [
                "codigo_ibge" => 2605707,
                "estado_id" => 13,
                "nome" => 'FLORESTA',
            ],
            [
                "codigo_ibge" => 2605806,
                "estado_id" => 13,
                "nome" => 'FREI MIGUELINHO',
            ],
            [
                "codigo_ibge" => 2605905,
                "estado_id" => 13,
                "nome" => 'GAMELEIRA',
            ],
            [
                "codigo_ibge" => 2606002,
                "estado_id" => 13,
                "nome" => 'GARANHUNS',
            ],
            [
                "codigo_ibge" => 2606101,
                "estado_id" => 13,
                "nome" => 'GLÓRIA DO GOITÁ',
            ],
            [
                "codigo_ibge" => 2606200,
                "estado_id" => 13,
                "nome" => 'GOIANA',
            ],
            [
                "codigo_ibge" => 2606309,
                "estado_id" => 13,
                "nome" => 'GRANITO',
            ],
            [
                "codigo_ibge" => 2606408,
                "estado_id" => 13,
                "nome" => 'GRAVATÁ',
            ],
            [
                "codigo_ibge" => 2606507,
                "estado_id" => 13,
                "nome" => 'IATI',
            ],
            [
                "codigo_ibge" => 2606606,
                "estado_id" => 13,
                "nome" => 'IBIMIRIM',
            ],
            [
                "codigo_ibge" => 2606705,
                "estado_id" => 13,
                "nome" => 'IBIRAJUBA',
            ],
            [
                "codigo_ibge" => 2606804,
                "estado_id" => 13,
                "nome" => 'IGARASSU',
            ],
            [
                "codigo_ibge" => 2606903,
                "estado_id" => 13,
                "nome" => 'IGUARACI',
            ],
            [
                "codigo_ibge" => 2607000,
                "estado_id" => 13,
                "nome" => 'INAJÁ',
            ],
            [
                "codigo_ibge" => 2607109,
                "estado_id" => 13,
                "nome" => 'INGAZEIRA',
            ],
            [
                "codigo_ibge" => 2607208,
                "estado_id" => 13,
                "nome" => 'IPOJUCA',
            ],
            [
                "codigo_ibge" => 2607307,
                "estado_id" => 13,
                "nome" => 'IPUBI',
            ],
            [
                "codigo_ibge" => 2607406,
                "estado_id" => 13,
                "nome" => 'ITACURUBA',
            ],
            [
                "codigo_ibge" => 2607505,
                "estado_id" => 13,
                "nome" => 'ITAÍBA',
            ],
            [
                "codigo_ibge" => 2607604,
                "estado_id" => 13,
                "nome" => 'ILHA DE ITAMARACÁ',
            ],
            [
                "codigo_ibge" => 2607653,
                "estado_id" => 13,
                "nome" => 'ITAMBÉ',
            ],
            [
                "codigo_ibge" => 2607703,
                "estado_id" => 13,
                "nome" => 'ITAPETIM',
            ],
            [
                "codigo_ibge" => 2607752,
                "estado_id" => 13,
                "nome" => 'ITAPISSUMA',
            ],
            [
                "codigo_ibge" => 2607802,
                "estado_id" => 13,
                "nome" => 'ITAQUITINGA',
            ],
            [
                "codigo_ibge" => 2607901,
                "estado_id" => 13,
                "nome" => 'JABOATÃO DOS GUARARAPES',
            ],
            [
                "codigo_ibge" => 2607950,
                "estado_id" => 13,
                "nome" => 'JAQUEIRA',
            ],
            [
                "codigo_ibge" => 2608008,
                "estado_id" => 13,
                "nome" => 'JATAÚBA',
            ],
            [
                "codigo_ibge" => 2608057,
                "estado_id" => 13,
                "nome" => 'JATOBÁ',
            ],
            [
                "codigo_ibge" => 2608107,
                "estado_id" => 13,
                "nome" => 'JOÃO ALFREDO',
            ],
            [
                "codigo_ibge" => 2608206,
                "estado_id" => 13,
                "nome" => 'JOAQUIM NABUCO',
            ],
            [
                "codigo_ibge" => 2608255,
                "estado_id" => 13,
                "nome" => 'JUCATI',
            ],
            [
                "codigo_ibge" => 2608305,
                "estado_id" => 13,
                "nome" => 'JUPI',
            ],
            [
                "codigo_ibge" => 2608404,
                "estado_id" => 13,
                "nome" => 'JUREMA',
            ],
            [
                "codigo_ibge" => 2608453,
                "estado_id" => 13,
                "nome" => 'LAGOA DO CARRO',
            ],
            [
                "codigo_ibge" => 2608503,
                "estado_id" => 13,
                "nome" => 'LAGOA DO ITAENGA',
            ],
            [
                "codigo_ibge" => 2608602,
                "estado_id" => 13,
                "nome" => 'LAGOA DO OURO',
            ],
            [
                "codigo_ibge" => 2608701,
                "estado_id" => 13,
                "nome" => 'LAGOA DOS GATOS',
            ],
            [
                "codigo_ibge" => 2608750,
                "estado_id" => 13,
                "nome" => 'LAGOA GRANDE',
            ],
            [
                "codigo_ibge" => 2608800,
                "estado_id" => 13,
                "nome" => 'LAJEDO',
            ],
            [
                "codigo_ibge" => 2608909,
                "estado_id" => 13,
                "nome" => 'LIMOEIRO',
            ],
            [
                "codigo_ibge" => 2609006,
                "estado_id" => 13,
                "nome" => 'MACAPARANA',
            ],
            [
                "codigo_ibge" => 2609105,
                "estado_id" => 13,
                "nome" => 'MACHADOS',
            ],
            [
                "codigo_ibge" => 2609154,
                "estado_id" => 13,
                "nome" => 'MANARI',
            ],
            [
                "codigo_ibge" => 2609204,
                "estado_id" => 13,
                "nome" => 'MARAIAL',
            ],
            [
                "codigo_ibge" => 2609303,
                "estado_id" => 13,
                "nome" => 'MIRANDIBA',
            ],
            [
                "codigo_ibge" => 2609402,
                "estado_id" => 13,
                "nome" => 'MORENO',
            ],
            [
                "codigo_ibge" => 2609501,
                "estado_id" => 13,
                "nome" => 'NAZARÉ DA MATA',
            ],
            [
                "codigo_ibge" => 2609600,
                "estado_id" => 13,
                "nome" => 'OLINDA',
            ],
            [
                "codigo_ibge" => 2609709,
                "estado_id" => 13,
                "nome" => 'OROBÓ',
            ],
            [
                "codigo_ibge" => 2609808,
                "estado_id" => 13,
                "nome" => 'OROCÓ',
            ],
            [
                "codigo_ibge" => 2609907,
                "estado_id" => 13,
                "nome" => 'OURICURI',
            ],
            [
                "codigo_ibge" => 2610004,
                "estado_id" => 13,
                "nome" => 'PALMARES',
            ],
            [
                "codigo_ibge" => 2610103,
                "estado_id" => 13,
                "nome" => 'PALMEIRINA',
            ],
            [
                "codigo_ibge" => 2610202,
                "estado_id" => 13,
                "nome" => 'PANELAS',
            ],
            [
                "codigo_ibge" => 2610301,
                "estado_id" => 13,
                "nome" => 'PARANATAMA',
            ],
            [
                "codigo_ibge" => 2610400,
                "estado_id" => 13,
                "nome" => 'PARNAMIRIM',
            ],
            [
                "codigo_ibge" => 2610509,
                "estado_id" => 13,
                "nome" => 'PASSIRA',
            ],
            [
                "codigo_ibge" => 2610608,
                "estado_id" => 13,
                "nome" => 'PAUDALHO',
            ],
            [
                "codigo_ibge" => 2610707,
                "estado_id" => 13,
                "nome" => 'PAULISTA',
            ],
            [
                "codigo_ibge" => 2610806,
                "estado_id" => 13,
                "nome" => 'PEDRA',
            ],
            [
                "codigo_ibge" => 2610905,
                "estado_id" => 13,
                "nome" => 'PESQUEIRA',
            ],
            [
                "codigo_ibge" => 2611002,
                "estado_id" => 13,
                "nome" => 'PETROLÂNDIA',
            ],
            [
                "codigo_ibge" => 2611101,
                "estado_id" => 13,
                "nome" => 'PETROLINA',
            ],
            [
                "codigo_ibge" => 2611200,
                "estado_id" => 13,
                "nome" => 'POÇÃO',
            ],
            [
                "codigo_ibge" => 2611309,
                "estado_id" => 13,
                "nome" => 'POMBOS',
            ],
            [
                "codigo_ibge" => 2611408,
                "estado_id" => 13,
                "nome" => 'PRIMAVERA',
            ],
            [
                "codigo_ibge" => 2611507,
                "estado_id" => 13,
                "nome" => 'QUIPAPÁ',
            ],
            [
                "codigo_ibge" => 2611533,
                "estado_id" => 13,
                "nome" => 'QUIXABA',
            ],
            [
                "codigo_ibge" => 2611606,
                "estado_id" => 13,
                "nome" => 'RECIFE',
            ],
            [
                "codigo_ibge" => 2611705,
                "estado_id" => 13,
                "nome" => 'RIACHO DAS ALMAS',
            ],
            [
                "codigo_ibge" => 2611804,
                "estado_id" => 13,
                "nome" => 'RIBEIRÃO',
            ],
            [
                "codigo_ibge" => 2611903,
                "estado_id" => 13,
                "nome" => 'RIO FORMOSO',
            ],
            [
                "codigo_ibge" => 2612000,
                "estado_id" => 13,
                "nome" => 'SAIRÉ',
            ],
            [
                "codigo_ibge" => 2612109,
                "estado_id" => 13,
                "nome" => 'SALGADINHO',
            ],
            [
                "codigo_ibge" => 2612208,
                "estado_id" => 13,
                "nome" => 'SALGUEIRO',
            ],
            [
                "codigo_ibge" => 2612307,
                "estado_id" => 13,
                "nome" => 'SALOÁ',
            ],
            [
                "codigo_ibge" => 2612406,
                "estado_id" => 13,
                "nome" => 'SANHARÓ',
            ],
            [
                "codigo_ibge" => 2612455,
                "estado_id" => 13,
                "nome" => 'SANTA CRUZ',
            ],
            [
                "codigo_ibge" => 2612471,
                "estado_id" => 13,
                "nome" => 'SANTA CRUZ DA BAIXA VERDE',
            ],
            [
                "codigo_ibge" => 2612505,
                "estado_id" => 13,
                "nome" => 'SANTA CRUZ DO CAPIBARIBE',
            ],
            [
                "codigo_ibge" => 2612554,
                "estado_id" => 13,
                "nome" => 'SANTA FILOMENA',
            ],
            [
                "codigo_ibge" => 2612604,
                "estado_id" => 13,
                "nome" => 'SANTA MARIA DA BOA VISTA',
            ],
            [
                "codigo_ibge" => 2612703,
                "estado_id" => 13,
                "nome" => 'SANTA MARIA DO CAMBUCÁ',
            ],
            [
                "codigo_ibge" => 2612802,
                "estado_id" => 13,
                "nome" => 'SANTA TEREZINHA',
            ],
            [
                "codigo_ibge" => 2612901,
                "estado_id" => 13,
                "nome" => 'SÃO BENEDITO DO SUL',
            ],
            [
                "codigo_ibge" => 2613008,
                "estado_id" => 13,
                "nome" => 'SÃO BENTO DO UNA',
            ],
            [
                "codigo_ibge" => 2613107,
                "estado_id" => 13,
                "nome" => 'SÃO CAITANO',
            ],
            [
                "codigo_ibge" => 2613206,
                "estado_id" => 13,
                "nome" => 'SÃO JOÃO',
            ],
            [
                "codigo_ibge" => 2613305,
                "estado_id" => 13,
                "nome" => 'SÃO JOAQUIM DO MONTE',
            ],
            [
                "codigo_ibge" => 2613404,
                "estado_id" => 13,
                "nome" => 'SÃO JOSÉ DA COROA GRANDE',
            ],
            [
                "codigo_ibge" => 2613503,
                "estado_id" => 13,
                "nome" => 'SÃO JOSÉ DO BELMONTE',
            ],
            [
                "codigo_ibge" => 2613602,
                "estado_id" => 13,
                "nome" => 'SÃO JOSÉ DO EGITO',
            ],
            [
                "codigo_ibge" => 2613701,
                "estado_id" => 13,
                "nome" => 'SÃO LOURENÇO DA MATA',
            ],
            [
                "codigo_ibge" => 2613800,
                "estado_id" => 13,
                "nome" => 'SÃO VICENTE FERRER',
            ],
            [
                "codigo_ibge" => 2613909,
                "estado_id" => 13,
                "nome" => 'SERRA TALHADA',
            ],
            [
                "codigo_ibge" => 2614006,
                "estado_id" => 13,
                "nome" => 'SERRITA',
            ],
            [
                "codigo_ibge" => 2614105,
                "estado_id" => 13,
                "nome" => 'SERTÂNIA',
            ],
            [
                "codigo_ibge" => 2614204,
                "estado_id" => 13,
                "nome" => 'SIRINHAÉM',
            ],
            [
                "codigo_ibge" => 2614303,
                "estado_id" => 13,
                "nome" => 'MOREILÂNDIA',
            ],
            [
                "codigo_ibge" => 2614402,
                "estado_id" => 13,
                "nome" => 'SOLIDÃO',
            ],
            [
                "codigo_ibge" => 2614501,
                "estado_id" => 13,
                "nome" => 'SURUBIM',
            ],
            [
                "codigo_ibge" => 2614600,
                "estado_id" => 13,
                "nome" => 'TABIRA',
            ],
            [
                "codigo_ibge" => 2614709,
                "estado_id" => 13,
                "nome" => 'TACAIMBÓ',
            ],
            [
                "codigo_ibge" => 2614808,
                "estado_id" => 13,
                "nome" => 'TACARATU',
            ],
            [
                "codigo_ibge" => 2614857,
                "estado_id" => 13,
                "nome" => 'TAMANDARÉ',
            ],
            [
                "codigo_ibge" => 2615003,
                "estado_id" => 13,
                "nome" => 'TAQUARITINGA DO NORTE',
            ],
            [
                "codigo_ibge" => 2615102,
                "estado_id" => 13,
                "nome" => 'TEREZINHA',
            ],
            [
                "codigo_ibge" => 2615201,
                "estado_id" => 13,
                "nome" => 'TERRA NOVA',
            ],
            [
                "codigo_ibge" => 2615300,
                "estado_id" => 13,
                "nome" => 'TIMBAÚBA',
            ],
            [
                "codigo_ibge" => 2615409,
                "estado_id" => 13,
                "nome" => 'TORITAMA',
            ],
            [
                "codigo_ibge" => 2615508,
                "estado_id" => 13,
                "nome" => 'TRACUNHAÉM',
            ],
            [
                "codigo_ibge" => 2615607,
                "estado_id" => 13,
                "nome" => 'TRINDADE',
            ],
            [
                "codigo_ibge" => 2615706,
                "estado_id" => 13,
                "nome" => 'TRIUNFO',
            ],
            [
                "codigo_ibge" => 2615805,
                "estado_id" => 13,
                "nome" => 'TUPANATINGA',
            ],
            [
                "codigo_ibge" => 2615904,
                "estado_id" => 13,
                "nome" => 'TUPARETAMA',
            ],
            [
                "codigo_ibge" => 2616001,
                "estado_id" => 13,
                "nome" => 'VENTUROSA',
            ],
            [
                "codigo_ibge" => 2616100,
                "estado_id" => 13,
                "nome" => 'VERDEJANTE',
            ],
            [
                "codigo_ibge" => 2616183,
                "estado_id" => 13,
                "nome" => 'VERTENTE DO LÉRIO',
            ],
            [
                "codigo_ibge" => 2616209,
                "estado_id" => 13,
                "nome" => 'VERTENTES',
            ],
            [
                "codigo_ibge" => 2616308,
                "estado_id" => 13,
                "nome" => 'VICÊNCIA',
            ],
            [
                "codigo_ibge" => 2616407,
                "estado_id" => 13,
                "nome" => 'VITÓRIA DE SANTO ANTÃO',
            ],
            [
                "codigo_ibge" => 2616506,
                "estado_id" => 13,
                "nome" => 'XEXÉU',
            ],
            [
                "codigo_ibge" => 2700102,
                "estado_id" => 14,
                "nome" => 'ÁGUA BRANCA',
            ],
            [
                "codigo_ibge" => 2700201,
                "estado_id" => 14,
                "nome" => 'ANADIA',
            ],
            [
                "codigo_ibge" => 2700300,
                "estado_id" => 14,
                "nome" => 'ARAPIRACA',
            ],
            [
                "codigo_ibge" => 2700409,
                "estado_id" => 14,
                "nome" => 'ATALAIA',
            ],
            [
                "codigo_ibge" => 2700508,
                "estado_id" => 14,
                "nome" => 'BARRA DE SANTO ANTÔNIO',
            ],
            [
                "codigo_ibge" => 2700607,
                "estado_id" => 14,
                "nome" => 'BARRA DE SÃO MIGUEL',
            ],
            [
                "codigo_ibge" => 2700706,
                "estado_id" => 14,
                "nome" => 'BATALHA',
            ],
            [
                "codigo_ibge" => 2700805,
                "estado_id" => 14,
                "nome" => 'BELÉM',
            ],
            [
                "codigo_ibge" => 2700904,
                "estado_id" => 14,
                "nome" => 'BELO MONTE',
            ],
            [
                "codigo_ibge" => 2701001,
                "estado_id" => 14,
                "nome" => 'BOCA DA MATA',
            ],
            [
                "codigo_ibge" => 2701100,
                "estado_id" => 14,
                "nome" => 'BRANQUINHA',
            ],
            [
                "codigo_ibge" => 2701209,
                "estado_id" => 14,
                "nome" => 'CACIMBINHAS',
            ],
            [
                "codigo_ibge" => 2701308,
                "estado_id" => 14,
                "nome" => 'CAJUEIRO',
            ],
            [
                "codigo_ibge" => 2701357,
                "estado_id" => 14,
                "nome" => 'CAMPESTRE',
            ],
            [
                "codigo_ibge" => 2701407,
                "estado_id" => 14,
                "nome" => 'CAMPO ALEGRE',
            ],
            [
                "codigo_ibge" => 2701506,
                "estado_id" => 14,
                "nome" => 'CAMPO GRANDE',
            ],
            [
                "codigo_ibge" => 2701605,
                "estado_id" => 14,
                "nome" => 'CANAPI',
            ],
            [
                "codigo_ibge" => 2701704,
                "estado_id" => 14,
                "nome" => 'CAPELA',
            ],
            [
                "codigo_ibge" => 2701803,
                "estado_id" => 14,
                "nome" => 'CARNEIROS',
            ],
            [
                "codigo_ibge" => 2701902,
                "estado_id" => 14,
                "nome" => 'CHÃ PRETA',
            ],
            [
                "codigo_ibge" => 2702009,
                "estado_id" => 14,
                "nome" => 'COITÉ DO NÓIA',
            ],
            [
                "codigo_ibge" => 2702108,
                "estado_id" => 14,
                "nome" => 'COLÔNIA LEOPOLDINA',
            ],
            [
                "codigo_ibge" => 2702207,
                "estado_id" => 14,
                "nome" => 'COQUEIRO SECO',
            ],
            [
                "codigo_ibge" => 2702306,
                "estado_id" => 14,
                "nome" => 'CORURIPE',
            ],
            [
                "codigo_ibge" => 2702355,
                "estado_id" => 14,
                "nome" => 'CRAÍBAS',
            ],
            [
                "codigo_ibge" => 2702405,
                "estado_id" => 14,
                "nome" => 'DELMIRO GOUVEIA',
            ],
            [
                "codigo_ibge" => 2702504,
                "estado_id" => 14,
                "nome" => 'DOIS RIACHOS',
            ],
            [
                "codigo_ibge" => 2702553,
                "estado_id" => 14,
                "nome" => 'ESTRELA DE ALAGOAS',
            ],
            [
                "codigo_ibge" => 2702603,
                "estado_id" => 14,
                "nome" => 'FEIRA GRANDE',
            ],
            [
                "codigo_ibge" => 2702702,
                "estado_id" => 14,
                "nome" => 'FELIZ DESERTO',
            ],
            [
                "codigo_ibge" => 2702801,
                "estado_id" => 14,
                "nome" => 'FLEXEIRAS',
            ],
            [
                "codigo_ibge" => 2702900,
                "estado_id" => 14,
                "nome" => 'GIRAU DO PONCIANO',
            ],
            [
                "codigo_ibge" => 2703007,
                "estado_id" => 14,
                "nome" => 'IBATEGUARA',
            ],
            [
                "codigo_ibge" => 2703106,
                "estado_id" => 14,
                "nome" => 'IGACI',
            ],
            [
                "codigo_ibge" => 2703205,
                "estado_id" => 14,
                "nome" => 'IGREJA NOVA',
            ],
            [
                "codigo_ibge" => 2703304,
                "estado_id" => 14,
                "nome" => 'INHAPI',
            ],
            [
                "codigo_ibge" => 2703403,
                "estado_id" => 14,
                "nome" => 'JACARÉ DOS HOMENS',
            ],
            [
                "codigo_ibge" => 2703502,
                "estado_id" => 14,
                "nome" => 'JACUÍPE',
            ],
            [
                "codigo_ibge" => 2703601,
                "estado_id" => 14,
                "nome" => 'JAPARATINGA',
            ],
            [
                "codigo_ibge" => 2703700,
                "estado_id" => 14,
                "nome" => 'JARAMATAIA',
            ],
            [
                "codigo_ibge" => 2703759,
                "estado_id" => 14,
                "nome" => 'JEQUIÁ DA PRAIA',
            ],
            [
                "codigo_ibge" => 2703809,
                "estado_id" => 14,
                "nome" => 'JOAQUIM GOMES',
            ],
            [
                "codigo_ibge" => 2703908,
                "estado_id" => 14,
                "nome" => 'JUNDIÁ',
            ],
            [
                "codigo_ibge" => 2704005,
                "estado_id" => 14,
                "nome" => 'JUNQUEIRO',
            ],
            [
                "codigo_ibge" => 2704104,
                "estado_id" => 14,
                "nome" => 'LAGOA DA CANOA',
            ],
            [
                "codigo_ibge" => 2704203,
                "estado_id" => 14,
                "nome" => 'LIMOEIRO DE ANADIA',
            ],
            [
                "codigo_ibge" => 2704302,
                "estado_id" => 14,
                "nome" => 'MACEIÓ',
            ],
            [
                "codigo_ibge" => 2704401,
                "estado_id" => 14,
                "nome" => 'MAJOR ISIDORO',
            ],
            [
                "codigo_ibge" => 2704500,
                "estado_id" => 14,
                "nome" => 'MARAGOGI',
            ],
            [
                "codigo_ibge" => 2704609,
                "estado_id" => 14,
                "nome" => 'MARAVILHA',
            ],
            [
                "codigo_ibge" => 2704708,
                "estado_id" => 14,
                "nome" => 'MARECHAL DEODORO',
            ],
            [
                "codigo_ibge" => 2704807,
                "estado_id" => 14,
                "nome" => 'MARIBONDO',
            ],
            [
                "codigo_ibge" => 2704906,
                "estado_id" => 14,
                "nome" => 'MAR VERMELHO',
            ],
            [
                "codigo_ibge" => 2705002,
                "estado_id" => 14,
                "nome" => 'MATA GRANDE',
            ],
            [
                "codigo_ibge" => 2705101,
                "estado_id" => 14,
                "nome" => 'MATRIZ DE CAMARAGIBE',
            ],
            [
                "codigo_ibge" => 2705200,
                "estado_id" => 14,
                "nome" => 'MESSIAS',
            ],
            [
                "codigo_ibge" => 2705309,
                "estado_id" => 14,
                "nome" => 'MINADOR DO NEGRÃO',
            ],
            [
                "codigo_ibge" => 2705408,
                "estado_id" => 14,
                "nome" => 'MONTEIRÓPOLIS',
            ],
            [
                "codigo_ibge" => 2705507,
                "estado_id" => 14,
                "nome" => 'MURICI',
            ],
            [
                "codigo_ibge" => 2705606,
                "estado_id" => 14,
                "nome" => 'NOVO LINO',
            ],
            [
                "codigo_ibge" => 2705705,
                "estado_id" => 14,
                "nome" => 'OLHO D`ÁGUA DAS FLORES',
            ],
            [
                "codigo_ibge" => 2705804,
                "estado_id" => 14,
                "nome" => 'OLHO D`ÁGUA DO CASADO',
            ],
            [
                "codigo_ibge" => 2705903,
                "estado_id" => 14,
                "nome" => 'OLHO D`ÁGUA GRANDE',
            ],
            [
                "codigo_ibge" => 2706000,
                "estado_id" => 14,
                "nome" => 'OLIVENÇA',
            ],
            [
                "codigo_ibge" => 2706109,
                "estado_id" => 14,
                "nome" => 'OURO BRANCO',
            ],
            [
                "codigo_ibge" => 2706208,
                "estado_id" => 14,
                "nome" => 'PALESTINA',
            ],
            [
                "codigo_ibge" => 2706307,
                "estado_id" => 14,
                "nome" => 'PALMEIRA DOS ÍNDIOS',
            ],
            [
                "codigo_ibge" => 2706406,
                "estado_id" => 14,
                "nome" => 'PÃO DE AÇÚCAR',
            ],
            [
                "codigo_ibge" => 2706422,
                "estado_id" => 14,
                "nome" => 'PARICONHA',
            ],
            [
                "codigo_ibge" => 2706448,
                "estado_id" => 14,
                "nome" => 'PARIPUEIRA',
            ],
            [
                "codigo_ibge" => 2706505,
                "estado_id" => 14,
                "nome" => 'PASSO DE CAMARAGIBE',
            ],
            [
                "codigo_ibge" => 2706604,
                "estado_id" => 14,
                "nome" => 'PAULO JACINTO',
            ],
            [
                "codigo_ibge" => 2706703,
                "estado_id" => 14,
                "nome" => 'PENEDO',
            ],
            [
                "codigo_ibge" => 2706802,
                "estado_id" => 14,
                "nome" => 'PIAÇABUÇU',
            ],
            [
                "codigo_ibge" => 2706901,
                "estado_id" => 14,
                "nome" => 'PILAR',
            ],
            [
                "codigo_ibge" => 2707008,
                "estado_id" => 14,
                "nome" => 'PINDOBA',
            ],
            [
                "codigo_ibge" => 2707107,
                "estado_id" => 14,
                "nome" => 'PIRANHAS',
            ],
            [
                "codigo_ibge" => 2707206,
                "estado_id" => 14,
                "nome" => 'POÇO DAS TRINCHEIRAS',
            ],
            [
                "codigo_ibge" => 2707305,
                "estado_id" => 14,
                "nome" => 'PORTO CALVO',
            ],
            [
                "codigo_ibge" => 2707404,
                "estado_id" => 14,
                "nome" => 'PORTO DE PEDRAS',
            ],
            [
                "codigo_ibge" => 2707503,
                "estado_id" => 14,
                "nome" => 'PORTO REAL DO COLÉGIO',
            ],
            [
                "codigo_ibge" => 2707602,
                "estado_id" => 14,
                "nome" => 'QUEBRANGULO',
            ],
            [
                "codigo_ibge" => 2707701,
                "estado_id" => 14,
                "nome" => 'RIO LARGO',
            ],
            [
                "codigo_ibge" => 2707800,
                "estado_id" => 14,
                "nome" => 'ROTEIRO',
            ],
            [
                "codigo_ibge" => 2707909,
                "estado_id" => 14,
                "nome" => 'SANTA LUZIA DO NORTE',
            ],
            [
                "codigo_ibge" => 2708006,
                "estado_id" => 14,
                "nome" => 'SANTANA DO IPANEMA',
            ],
            [
                "codigo_ibge" => 2708105,
                "estado_id" => 14,
                "nome" => 'SANTANA DO MUNDAÚ',
            ],
            [
                "codigo_ibge" => 2708204,
                "estado_id" => 14,
                "nome" => 'SÃO BRÁS',
            ],
            [
                "codigo_ibge" => 2708303,
                "estado_id" => 14,
                "nome" => 'SÃO JOSÉ DA LAJE',
            ],
            [
                "codigo_ibge" => 2708402,
                "estado_id" => 14,
                "nome" => 'SÃO JOSÉ DA TAPERA',
            ],
            [
                "codigo_ibge" => 2708501,
                "estado_id" => 14,
                "nome" => 'SÃO LUÍS DO QUITUNDE',
            ],
            [
                "codigo_ibge" => 2708600,
                "estado_id" => 14,
                "nome" => 'SÃO MIGUEL DOS CAMPOS',
            ],
            [
                "codigo_ibge" => 2708709,
                "estado_id" => 14,
                "nome" => 'SÃO MIGUEL DOS MILAGRES',
            ],
            [
                "codigo_ibge" => 2708808,
                "estado_id" => 14,
                "nome" => 'SÃO SEBASTIÃO',
            ],
            [
                "codigo_ibge" => 2708907,
                "estado_id" => 14,
                "nome" => 'SATUBA',
            ],
            [
                "codigo_ibge" => 2708956,
                "estado_id" => 14,
                "nome" => 'SENADOR RUI PALMEIRA',
            ],
            [
                "codigo_ibge" => 2709004,
                "estado_id" => 14,
                "nome" => 'TANQUE D`ARCA',
            ],
            [
                "codigo_ibge" => 2709103,
                "estado_id" => 14,
                "nome" => 'TAQUARANA',
            ],
            [
                "codigo_ibge" => 2709152,
                "estado_id" => 14,
                "nome" => 'TEOTÔNIO VILELA',
            ],
            [
                "codigo_ibge" => 2709202,
                "estado_id" => 14,
                "nome" => 'TRAIPU',
            ],
            [
                "codigo_ibge" => 2709301,
                "estado_id" => 14,
                "nome" => 'UNIÃO DOS PALMARES',
            ],
            [
                "codigo_ibge" => 2709400,
                "estado_id" => 14,
                "nome" => 'VIÇOSA',
            ],
            [
                "codigo_ibge" => 2800100,
                "estado_id" => 15,
                "nome" => 'AMPARO DE SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 2800209,
                "estado_id" => 15,
                "nome" => 'AQUIDABÃ',
            ],
            [
                "codigo_ibge" => 2800308,
                "estado_id" => 15,
                "nome" => 'ARACAJU',
            ],
            [
                "codigo_ibge" => 2800407,
                "estado_id" => 15,
                "nome" => 'ARAUÁ',
            ],
            [
                "codigo_ibge" => 2800506,
                "estado_id" => 15,
                "nome" => 'AREIA BRANCA',
            ],
            [
                "codigo_ibge" => 2800605,
                "estado_id" => 15,
                "nome" => 'BARRA DOS COQUEIROS',
            ],
            [
                "codigo_ibge" => 2800670,
                "estado_id" => 15,
                "nome" => 'BOQUIM',
            ],
            [
                "codigo_ibge" => 2800704,
                "estado_id" => 15,
                "nome" => 'BREJO GRANDE',
            ],
            [
                "codigo_ibge" => 2801009,
                "estado_id" => 15,
                "nome" => 'CAMPO DO BRITO',
            ],
            [
                "codigo_ibge" => 2801108,
                "estado_id" => 15,
                "nome" => 'CANHOBA',
            ],
            [
                "codigo_ibge" => 2801207,
                "estado_id" => 15,
                "nome" => 'CANINDÉ DE SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 2801306,
                "estado_id" => 15,
                "nome" => 'CAPELA',
            ],
            [
                "codigo_ibge" => 2801405,
                "estado_id" => 15,
                "nome" => 'CARIRA',
            ],
            [
                "codigo_ibge" => 2801504,
                "estado_id" => 15,
                "nome" => 'CARMÓPOLIS',
            ],
            [
                "codigo_ibge" => 2801603,
                "estado_id" => 15,
                "nome" => 'CEDRO DE SÃO JOÃO',
            ],
            [
                "codigo_ibge" => 2801702,
                "estado_id" => 15,
                "nome" => 'CRISTINÁPOLIS',
            ],
            [
                "codigo_ibge" => 2801900,
                "estado_id" => 15,
                "nome" => 'CUMBE',
            ],
            [
                "codigo_ibge" => 2802007,
                "estado_id" => 15,
                "nome" => 'DIVINA PASTORA',
            ],
            [
                "codigo_ibge" => 2802106,
                "estado_id" => 15,
                "nome" => 'ESTÂNCIA',
            ],
            [
                "codigo_ibge" => 2802205,
                "estado_id" => 15,
                "nome" => 'FEIRA NOVA',
            ],
            [
                "codigo_ibge" => 2802304,
                "estado_id" => 15,
                "nome" => 'FREI PAULO',
            ],
            [
                "codigo_ibge" => 2802403,
                "estado_id" => 15,
                "nome" => 'GARARU',
            ],
            [
                "codigo_ibge" => 2802502,
                "estado_id" => 15,
                "nome" => 'GENERAL MAYNARD',
            ],
            [
                "codigo_ibge" => 2802601,
                "estado_id" => 15,
                "nome" => 'GRACHO CARDOSO',
            ],
            [
                "codigo_ibge" => 2802700,
                "estado_id" => 15,
                "nome" => 'ILHA DAS FLORES',
            ],
            [
                "codigo_ibge" => 2802809,
                "estado_id" => 15,
                "nome" => 'INDIAROBA',
            ],
            [
                "codigo_ibge" => 2802908,
                "estado_id" => 15,
                "nome" => 'ITABAIANA',
            ],
            [
                "codigo_ibge" => 2803005,
                "estado_id" => 15,
                "nome" => 'ITABAIANINHA',
            ],
            [
                "codigo_ibge" => 2803104,
                "estado_id" => 15,
                "nome" => 'ITABI',
            ],
            [
                "codigo_ibge" => 2803203,
                "estado_id" => 15,
                "nome" => 'ITAPORANGA D`AJUDA',
            ],
            [
                "codigo_ibge" => 2803302,
                "estado_id" => 15,
                "nome" => 'JAPARATUBA',
            ],
            [
                "codigo_ibge" => 2803401,
                "estado_id" => 15,
                "nome" => 'JAPOATÃ',
            ],
            [
                "codigo_ibge" => 2803500,
                "estado_id" => 15,
                "nome" => 'LAGARTO',
            ],
            [
                "codigo_ibge" => 2803609,
                "estado_id" => 15,
                "nome" => 'LARANJEIRAS',
            ],
            [
                "codigo_ibge" => 2803708,
                "estado_id" => 15,
                "nome" => 'MACAMBIRA',
            ],
            [
                "codigo_ibge" => 2803807,
                "estado_id" => 15,
                "nome" => 'MALHADA DOS BOIS',
            ],
            [
                "codigo_ibge" => 2803906,
                "estado_id" => 15,
                "nome" => 'MALHADOR',
            ],
            [
                "codigo_ibge" => 2804003,
                "estado_id" => 15,
                "nome" => 'MARUIM',
            ],
            [
                "codigo_ibge" => 2804102,
                "estado_id" => 15,
                "nome" => 'MOITA BONITA',
            ],
            [
                "codigo_ibge" => 2804201,
                "estado_id" => 15,
                "nome" => 'MONTE ALEGRE DE SERGIPE',
            ],
            [
                "codigo_ibge" => 2804300,
                "estado_id" => 15,
                "nome" => 'MURIBECA',
            ],
            [
                "codigo_ibge" => 2804409,
                "estado_id" => 15,
                "nome" => 'NEÓPOLIS',
            ],
            [
                "codigo_ibge" => 2804458,
                "estado_id" => 15,
                "nome" => 'NOSSA SENHORA APARECIDA',
            ],
            [
                "codigo_ibge" => 2804508,
                "estado_id" => 15,
                "nome" => 'NOSSA SENHORA DA GLÓRIA',
            ],
            [
                "codigo_ibge" => 2804607,
                "estado_id" => 15,
                "nome" => 'NOSSA SENHORA DAS DORES',
            ],
            [
                "codigo_ibge" => 2804706,
                "estado_id" => 15,
                "nome" => 'NOSSA SENHORA DE LOURDES',
            ],
            [
                "codigo_ibge" => 2804805,
                "estado_id" => 15,
                "nome" => 'NOSSA SENHORA DO SOCORRO',
            ],
            [
                "codigo_ibge" => 2804904,
                "estado_id" => 15,
                "nome" => 'PACATUBA',
            ],
            [
                "codigo_ibge" => 2805000,
                "estado_id" => 15,
                "nome" => 'PEDRA MOLE',
            ],
            [
                "codigo_ibge" => 2805109,
                "estado_id" => 15,
                "nome" => 'PEDRINHAS',
            ],
            [
                "codigo_ibge" => 2805208,
                "estado_id" => 15,
                "nome" => 'PINHÃO',
            ],
            [
                "codigo_ibge" => 2805307,
                "estado_id" => 15,
                "nome" => 'PIRAMBU',
            ],
            [
                "codigo_ibge" => 2805406,
                "estado_id" => 15,
                "nome" => 'POÇO REDONDO',
            ],
            [
                "codigo_ibge" => 2805505,
                "estado_id" => 15,
                "nome" => 'POÇO VERDE',
            ],
            [
                "codigo_ibge" => 2805604,
                "estado_id" => 15,
                "nome" => 'PORTO DA FOLHA',
            ],
            [
                "codigo_ibge" => 2805703,
                "estado_id" => 15,
                "nome" => 'PROPRIÁ',
            ],
            [
                "codigo_ibge" => 2805802,
                "estado_id" => 15,
                "nome" => 'RIACHÃO DO DANTAS',
            ],
            [
                "codigo_ibge" => 2805901,
                "estado_id" => 15,
                "nome" => 'RIACHUELO',
            ],
            [
                "codigo_ibge" => 2806008,
                "estado_id" => 15,
                "nome" => 'RIBEIRÓPOLIS',
            ],
            [
                "codigo_ibge" => 2806107,
                "estado_id" => 15,
                "nome" => 'ROSÁRIO DO CATETE',
            ],
            [
                "codigo_ibge" => 2806206,
                "estado_id" => 15,
                "nome" => 'SALGADO',
            ],
            [
                "codigo_ibge" => 2806305,
                "estado_id" => 15,
                "nome" => 'SANTA LUZIA DO ITANHY',
            ],
            [
                "codigo_ibge" => 2806404,
                "estado_id" => 15,
                "nome" => 'SANTANA DO SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 2806503,
                "estado_id" => 15,
                "nome" => 'SANTA ROSA DE LIMA',
            ],
            [
                "codigo_ibge" => 2806602,
                "estado_id" => 15,
                "nome" => 'SANTO AMARO DAS BROTAS',
            ],
            [
                "codigo_ibge" => 2806701,
                "estado_id" => 15,
                "nome" => 'SÃO CRISTÓVÃO',
            ],
            [
                "codigo_ibge" => 2806800,
                "estado_id" => 15,
                "nome" => 'SÃO DOMINGOS',
            ],
            [
                "codigo_ibge" => 2806909,
                "estado_id" => 15,
                "nome" => 'SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 2807006,
                "estado_id" => 15,
                "nome" => 'SÃO MIGUEL DO ALEIXO',
            ],
            [
                "codigo_ibge" => 2807105,
                "estado_id" => 15,
                "nome" => 'SIMÃO DIAS',
            ],
            [
                "codigo_ibge" => 2807204,
                "estado_id" => 15,
                "nome" => 'SIRIRI',
            ],
            [
                "codigo_ibge" => 2807303,
                "estado_id" => 15,
                "nome" => 'TELHA',
            ],
            [
                "codigo_ibge" => 2807402,
                "estado_id" => 15,
                "nome" => 'TOBIAS BARRETO',
            ],
            [
                "codigo_ibge" => 2807501,
                "estado_id" => 15,
                "nome" => 'TOMAR DO GERU',
            ],
            [
                "codigo_ibge" => 2807600,
                "estado_id" => 15,
                "nome" => 'UMBAÚBA',
            ],
            [
                "codigo_ibge" => 2900108,
                "estado_id" => 16,
                "nome" => 'ABAÍRA',
            ],
            [
                "codigo_ibge" => 2900207,
                "estado_id" => 16,
                "nome" => 'ABARÉ',
            ],
            [
                "codigo_ibge" => 2900306,
                "estado_id" => 16,
                "nome" => 'ACAJUTIBA',
            ],
            [
                "codigo_ibge" => 2900355,
                "estado_id" => 16,
                "nome" => 'ADUSTINA',
            ],
            [
                "codigo_ibge" => 2900405,
                "estado_id" => 16,
                "nome" => 'ÁGUA FRIA',
            ],
            [
                "codigo_ibge" => 2900504,
                "estado_id" => 16,
                "nome" => 'ÉRICO CARDOSO',
            ],
            [
                "codigo_ibge" => 2900603,
                "estado_id" => 16,
                "nome" => 'AIQUARA',
            ],
            [
                "codigo_ibge" => 2900702,
                "estado_id" => 16,
                "nome" => 'ALAGOINHAS',
            ],
            [
                "codigo_ibge" => 2900801,
                "estado_id" => 16,
                "nome" => 'ALCOBAÇA',
            ],
            [
                "codigo_ibge" => 2900900,
                "estado_id" => 16,
                "nome" => 'ALMADINA',
            ],
            [
                "codigo_ibge" => 2901007,
                "estado_id" => 16,
                "nome" => 'AMARGOSA',
            ],
            [
                "codigo_ibge" => 2901106,
                "estado_id" => 16,
                "nome" => 'AMÉLIA RODRIGUES',
            ],
            [
                "codigo_ibge" => 2901155,
                "estado_id" => 16,
                "nome" => 'AMÉRICA DOURADA',
            ],
            [
                "codigo_ibge" => 2901205,
                "estado_id" => 16,
                "nome" => 'ANAGÉ',
            ],
            [
                "codigo_ibge" => 2901304,
                "estado_id" => 16,
                "nome" => 'ANDARAÍ',
            ],
            [
                "codigo_ibge" => 2901353,
                "estado_id" => 16,
                "nome" => 'ANDORINHA',
            ],
            [
                "codigo_ibge" => 2901403,
                "estado_id" => 16,
                "nome" => 'ANGICAL',
            ],
            [
                "codigo_ibge" => 2901502,
                "estado_id" => 16,
                "nome" => 'ANGUERA',
            ],
            [
                "codigo_ibge" => 2901601,
                "estado_id" => 16,
                "nome" => 'ANTAS',
            ],
            [
                "codigo_ibge" => 2901700,
                "estado_id" => 16,
                "nome" => 'ANTÔNIO CARDOSO',
            ],
            [
                "codigo_ibge" => 2901809,
                "estado_id" => 16,
                "nome" => 'ANTÔNIO GONÇALVES',
            ],
            [
                "codigo_ibge" => 2901908,
                "estado_id" => 16,
                "nome" => 'APORÁ',
            ],
            [
                "codigo_ibge" => 2901957,
                "estado_id" => 16,
                "nome" => 'APUAREMA',
            ],
            [
                "codigo_ibge" => 2902005,
                "estado_id" => 16,
                "nome" => 'ARACATU',
            ],
            [
                "codigo_ibge" => 2902054,
                "estado_id" => 16,
                "nome" => 'ARAÇAS',
            ],
            [
                "codigo_ibge" => 2902104,
                "estado_id" => 16,
                "nome" => 'ARACI',
            ],
            [
                "codigo_ibge" => 2902203,
                "estado_id" => 16,
                "nome" => 'ARAMARI',
            ],
            [
                "codigo_ibge" => 2902252,
                "estado_id" => 16,
                "nome" => 'ARATACA',
            ],
            [
                "codigo_ibge" => 2902302,
                "estado_id" => 16,
                "nome" => 'ARATUÍPE',
            ],
            [
                "codigo_ibge" => 2902401,
                "estado_id" => 16,
                "nome" => 'AURELINO LEAL',
            ],
            [
                "codigo_ibge" => 2902500,
                "estado_id" => 16,
                "nome" => 'BAIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 2902609,
                "estado_id" => 16,
                "nome" => 'BAIXA GRANDE',
            ],
            [
                "codigo_ibge" => 2902658,
                "estado_id" => 16,
                "nome" => 'BANZAÊ',
            ],
            [
                "codigo_ibge" => 2902708,
                "estado_id" => 16,
                "nome" => 'BARRA',
            ],
            [
                "codigo_ibge" => 2902807,
                "estado_id" => 16,
                "nome" => 'BARRA DA ESTIVA',
            ],
            [
                "codigo_ibge" => 2902906,
                "estado_id" => 16,
                "nome" => 'BARRA DO CHOÇA',
            ],
            [
                "codigo_ibge" => 2903003,
                "estado_id" => 16,
                "nome" => 'BARRA DO MENDES',
            ],
            [
                "codigo_ibge" => 2903102,
                "estado_id" => 16,
                "nome" => 'BARRA DO ROCHA',
            ],
            [
                "codigo_ibge" => 2903201,
                "estado_id" => 16,
                "nome" => 'BARREIRAS',
            ],
            [
                "codigo_ibge" => 2903235,
                "estado_id" => 16,
                "nome" => 'BARRO ALTO',
            ],
            [
                "codigo_ibge" => 2903276,
                "estado_id" => 16,
                "nome" => 'BARROCAS',
            ],
            [
                "codigo_ibge" => 2903300,
                "estado_id" => 16,
                "nome" => 'BARRO PRETO',
            ],
            [
                "codigo_ibge" => 2903409,
                "estado_id" => 16,
                "nome" => 'BELMONTE',
            ],
            [
                "codigo_ibge" => 2903508,
                "estado_id" => 16,
                "nome" => 'BELO CAMPO',
            ],
            [
                "codigo_ibge" => 2903607,
                "estado_id" => 16,
                "nome" => 'BIRITINGA',
            ],
            [
                "codigo_ibge" => 2903706,
                "estado_id" => 16,
                "nome" => 'BOA NOVA',
            ],
            [
                "codigo_ibge" => 2903805,
                "estado_id" => 16,
                "nome" => 'BOA VISTA DO TUPIM',
            ],
            [
                "codigo_ibge" => 2903904,
                "estado_id" => 16,
                "nome" => 'BOM JESUS DA LAPA',
            ],
            [
                "codigo_ibge" => 2903953,
                "estado_id" => 16,
                "nome" => 'BOM JESUS DA SERRA',
            ],
            [
                "codigo_ibge" => 2904001,
                "estado_id" => 16,
                "nome" => 'BONINAL',
            ],
            [
                "codigo_ibge" => 2904050,
                "estado_id" => 16,
                "nome" => 'BONITO',
            ],
            [
                "codigo_ibge" => 2904100,
                "estado_id" => 16,
                "nome" => 'BOQUIRA',
            ],
            [
                "codigo_ibge" => 2904209,
                "estado_id" => 16,
                "nome" => 'BOTUPORÃ',
            ],
            [
                "codigo_ibge" => 2904308,
                "estado_id" => 16,
                "nome" => 'BREJÕES',
            ],
            [
                "codigo_ibge" => 2904407,
                "estado_id" => 16,
                "nome" => 'BREJOLÂNDIA',
            ],
            [
                "codigo_ibge" => 2904506,
                "estado_id" => 16,
                "nome" => 'BROTAS DE MACAÚBAS',
            ],
            [
                "codigo_ibge" => 2904605,
                "estado_id" => 16,
                "nome" => 'BRUMADO',
            ],
            [
                "codigo_ibge" => 2904704,
                "estado_id" => 16,
                "nome" => 'BUERAREMA',
            ],
            [
                "codigo_ibge" => 2904753,
                "estado_id" => 16,
                "nome" => 'BURITIRAMA',
            ],
            [
                "codigo_ibge" => 2904803,
                "estado_id" => 16,
                "nome" => 'CAATIBA',
            ],
            [
                "codigo_ibge" => 2904852,
                "estado_id" => 16,
                "nome" => 'CABACEIRAS DO PARAGUAÇU',
            ],
            [
                "codigo_ibge" => 2904902,
                "estado_id" => 16,
                "nome" => 'CACHOEIRA',
            ],
            [
                "codigo_ibge" => 2905008,
                "estado_id" => 16,
                "nome" => 'CACULÉ',
            ],
            [
                "codigo_ibge" => 2905107,
                "estado_id" => 16,
                "nome" => 'CAÉM',
            ],
            [
                "codigo_ibge" => 2905156,
                "estado_id" => 16,
                "nome" => 'CAETANOS',
            ],
            [
                "codigo_ibge" => 2905206,
                "estado_id" => 16,
                "nome" => 'CAETITÉ',
            ],
            [
                "codigo_ibge" => 2905305,
                "estado_id" => 16,
                "nome" => 'CAFARNAUM',
            ],
            [
                "codigo_ibge" => 2905404,
                "estado_id" => 16,
                "nome" => 'CAIRU',
            ],
            [
                "codigo_ibge" => 2905503,
                "estado_id" => 16,
                "nome" => 'CALDEIRÃO GRANDE',
            ],
            [
                "codigo_ibge" => 2905602,
                "estado_id" => 16,
                "nome" => 'CAMACAN',
            ],
            [
                "codigo_ibge" => 2905701,
                "estado_id" => 16,
                "nome" => 'CAMAÇARI',
            ],
            [
                "codigo_ibge" => 2905800,
                "estado_id" => 16,
                "nome" => 'CAMAMU',
            ],
            [
                "codigo_ibge" => 2905909,
                "estado_id" => 16,
                "nome" => 'CAMPO ALEGRE DE LOURDES',
            ],
            [
                "codigo_ibge" => 2906006,
                "estado_id" => 16,
                "nome" => 'CAMPO FORMOSO',
            ],
            [
                "codigo_ibge" => 2906105,
                "estado_id" => 16,
                "nome" => 'CANÁPOLIS',
            ],
            [
                "codigo_ibge" => 2906204,
                "estado_id" => 16,
                "nome" => 'CANARANA',
            ],
            [
                "codigo_ibge" => 2906303,
                "estado_id" => 16,
                "nome" => 'CANAVIEIRAS',
            ],
            [
                "codigo_ibge" => 2906402,
                "estado_id" => 16,
                "nome" => 'CANDEAL',
            ],
            [
                "codigo_ibge" => 2906501,
                "estado_id" => 16,
                "nome" => 'CANDEIAS',
            ],
            [
                "codigo_ibge" => 2906600,
                "estado_id" => 16,
                "nome" => 'CANDIBA',
            ],
            [
                "codigo_ibge" => 2906709,
                "estado_id" => 16,
                "nome" => 'CÂNDIDO SALES',
            ],
            [
                "codigo_ibge" => 2906808,
                "estado_id" => 16,
                "nome" => 'CANSANÇÃO',
            ],
            [
                "codigo_ibge" => 2906824,
                "estado_id" => 16,
                "nome" => 'CANUDOS',
            ],
            [
                "codigo_ibge" => 2906857,
                "estado_id" => 16,
                "nome" => 'CAPELA DO ALTO ALEGRE',
            ],
            [
                "codigo_ibge" => 2906873,
                "estado_id" => 16,
                "nome" => 'CAPIM GROSSO',
            ],
            [
                "codigo_ibge" => 2906899,
                "estado_id" => 16,
                "nome" => 'CARAÍBAS',
            ],
            [
                "codigo_ibge" => 2906907,
                "estado_id" => 16,
                "nome" => 'CARAVELAS',
            ],
            [
                "codigo_ibge" => 2907004,
                "estado_id" => 16,
                "nome" => 'CARDEAL DA SILVA',
            ],
            [
                "codigo_ibge" => 2907103,
                "estado_id" => 16,
                "nome" => 'CARINHANHA',
            ],
            [
                "codigo_ibge" => 2907202,
                "estado_id" => 16,
                "nome" => 'CASA NOVA',
            ],
            [
                "codigo_ibge" => 2907301,
                "estado_id" => 16,
                "nome" => 'CASTRO ALVES',
            ],
            [
                "codigo_ibge" => 2907400,
                "estado_id" => 16,
                "nome" => 'CATOLÂNDIA',
            ],
            [
                "codigo_ibge" => 2907509,
                "estado_id" => 16,
                "nome" => 'CATU',
            ],
            [
                "codigo_ibge" => 2907558,
                "estado_id" => 16,
                "nome" => 'CATURAMA',
            ],
            [
                "codigo_ibge" => 2907608,
                "estado_id" => 16,
                "nome" => 'CENTRAL',
            ],
            [
                "codigo_ibge" => 2907707,
                "estado_id" => 16,
                "nome" => 'CHORROCHÓ',
            ],
            [
                "codigo_ibge" => 2907806,
                "estado_id" => 16,
                "nome" => 'CÍCERO DANTAS',
            ],
            [
                "codigo_ibge" => 2907905,
                "estado_id" => 16,
                "nome" => 'CIPÓ',
            ],
            [
                "codigo_ibge" => 2908002,
                "estado_id" => 16,
                "nome" => 'COARACI',
            ],
            [
                "codigo_ibge" => 2908101,
                "estado_id" => 16,
                "nome" => 'COCOS',
            ],
            [
                "codigo_ibge" => 2908200,
                "estado_id" => 16,
                "nome" => 'CONCEIÇÃO DA FEIRA',
            ],
            [
                "codigo_ibge" => 2908309,
                "estado_id" => 16,
                "nome" => 'CONCEIÇÃO DO ALMEIDA',
            ],
            [
                "codigo_ibge" => 2908408,
                "estado_id" => 16,
                "nome" => 'CONCEIÇÃO DO COITÉ',
            ],
            [
                "codigo_ibge" => 2908507,
                "estado_id" => 16,
                "nome" => 'CONCEIÇÃO DO JACUÍPE',
            ],
            [
                "codigo_ibge" => 2908606,
                "estado_id" => 16,
                "nome" => 'CONDE',
            ],
            [
                "codigo_ibge" => 2908705,
                "estado_id" => 16,
                "nome" => 'CONDEÚBA',
            ],
            [
                "codigo_ibge" => 2908804,
                "estado_id" => 16,
                "nome" => 'CONTENDAS DO SINCORÁ',
            ],
            [
                "codigo_ibge" => 2908903,
                "estado_id" => 16,
                "nome" => 'CORAÇÃO DE MARIA',
            ],
            [
                "codigo_ibge" => 2909000,
                "estado_id" => 16,
                "nome" => 'CORDEIROS',
            ],
            [
                "codigo_ibge" => 2909109,
                "estado_id" => 16,
                "nome" => 'CORIBE',
            ],
            [
                "codigo_ibge" => 2909208,
                "estado_id" => 16,
                "nome" => 'CORONEL JOÃO SÁ',
            ],
            [
                "codigo_ibge" => 2909307,
                "estado_id" => 16,
                "nome" => 'CORRENTINA',
            ],
            [
                "codigo_ibge" => 2909406,
                "estado_id" => 16,
                "nome" => 'COTEGIPE',
            ],
            [
                "codigo_ibge" => 2909505,
                "estado_id" => 16,
                "nome" => 'CRAVOLÂNDIA',
            ],
            [
                "codigo_ibge" => 2909604,
                "estado_id" => 16,
                "nome" => 'CRISÓPOLIS',
            ],
            [
                "codigo_ibge" => 2909703,
                "estado_id" => 16,
                "nome" => 'CRISTÓPOLIS',
            ],
            [
                "codigo_ibge" => 2909802,
                "estado_id" => 16,
                "nome" => 'CRUZ DAS ALMAS',
            ],
            [
                "codigo_ibge" => 2909901,
                "estado_id" => 16,
                "nome" => 'CURAÇÁ',
            ],
            [
                "codigo_ibge" => 2910008,
                "estado_id" => 16,
                "nome" => 'DÁRIO MEIRA',
            ],
            [
                "codigo_ibge" => 2910057,
                "estado_id" => 16,
                "nome" => 'DIAS D`ÁVILA',
            ],
            [
                "codigo_ibge" => 2910107,
                "estado_id" => 16,
                "nome" => 'DOM BASÍLIO',
            ],
            [
                "codigo_ibge" => 2910206,
                "estado_id" => 16,
                "nome" => 'DOM MACEDO COSTA',
            ],
            [
                "codigo_ibge" => 2910305,
                "estado_id" => 16,
                "nome" => 'ELÍSIO MEDRADO',
            ],
            [
                "codigo_ibge" => 2910404,
                "estado_id" => 16,
                "nome" => 'ENCRUZILHADA',
            ],
            [
                "codigo_ibge" => 2910503,
                "estado_id" => 16,
                "nome" => 'ENTRE RIOS',
            ],
            [
                "codigo_ibge" => 2910602,
                "estado_id" => 16,
                "nome" => 'ESPLANADA',
            ],
            [
                "codigo_ibge" => 2910701,
                "estado_id" => 16,
                "nome" => 'EUCLIDES DA CUNHA',
            ],
            [
                "codigo_ibge" => 2910727,
                "estado_id" => 16,
                "nome" => 'EUNÁPOLIS',
            ],
            [
                "codigo_ibge" => 2910750,
                "estado_id" => 16,
                "nome" => 'FÁTIMA',
            ],
            [
                "codigo_ibge" => 2910776,
                "estado_id" => 16,
                "nome" => 'FEIRA DA MATA',
            ],
            [
                "codigo_ibge" => 2910800,
                "estado_id" => 16,
                "nome" => 'FEIRA DE SANTANA',
            ],
            [
                "codigo_ibge" => 2910859,
                "estado_id" => 16,
                "nome" => 'FILADÉLFIA',
            ],
            [
                "codigo_ibge" => 2910909,
                "estado_id" => 16,
                "nome" => 'FIRMINO ALVES',
            ],
            [
                "codigo_ibge" => 2911006,
                "estado_id" => 16,
                "nome" => 'FLORESTA AZUL',
            ],
            [
                "codigo_ibge" => 2911105,
                "estado_id" => 16,
                "nome" => 'FORMOSA DO RIO PRETO',
            ],
            [
                "codigo_ibge" => 2911204,
                "estado_id" => 16,
                "nome" => 'GANDU',
            ],
            [
                "codigo_ibge" => 2911253,
                "estado_id" => 16,
                "nome" => 'GAVIÃO',
            ],
            [
                "codigo_ibge" => 2911303,
                "estado_id" => 16,
                "nome" => 'GENTIO DO OURO',
            ],
            [
                "codigo_ibge" => 2911402,
                "estado_id" => 16,
                "nome" => 'GLÓRIA',
            ],
            [
                "codigo_ibge" => 2911501,
                "estado_id" => 16,
                "nome" => 'GONGOGI',
            ],
            [
                "codigo_ibge" => 2911600,
                "estado_id" => 16,
                "nome" => 'GOVERNADOR MANGABEIRA',
            ],
            [
                "codigo_ibge" => 2911659,
                "estado_id" => 16,
                "nome" => 'GUAJERU',
            ],
            [
                "codigo_ibge" => 2911709,
                "estado_id" => 16,
                "nome" => 'GUANAMBI',
            ],
            [
                "codigo_ibge" => 2911808,
                "estado_id" => 16,
                "nome" => 'GUARATINGA',
            ],
            [
                "codigo_ibge" => 2911857,
                "estado_id" => 16,
                "nome" => 'HELIÓPOLIS',
            ],
            [
                "codigo_ibge" => 2911907,
                "estado_id" => 16,
                "nome" => 'IAÇU',
            ],
            [
                "codigo_ibge" => 2912004,
                "estado_id" => 16,
                "nome" => 'IBIASSUCÊ',
            ],
            [
                "codigo_ibge" => 2912103,
                "estado_id" => 16,
                "nome" => 'IBICARAÍ',
            ],
            [
                "codigo_ibge" => 2912202,
                "estado_id" => 16,
                "nome" => 'IBICOARA',
            ],
            [
                "codigo_ibge" => 2912301,
                "estado_id" => 16,
                "nome" => 'IBICUÍ',
            ],
            [
                "codigo_ibge" => 2912400,
                "estado_id" => 16,
                "nome" => 'IBIPEBA',
            ],
            [
                "codigo_ibge" => 2912509,
                "estado_id" => 16,
                "nome" => 'IBIPITANGA',
            ],
            [
                "codigo_ibge" => 2912608,
                "estado_id" => 16,
                "nome" => 'IBIQUERA',
            ],
            [
                "codigo_ibge" => 2912707,
                "estado_id" => 16,
                "nome" => 'IBIRAPITANGA',
            ],
            [
                "codigo_ibge" => 2912806,
                "estado_id" => 16,
                "nome" => 'IBIRAPUÃ',
            ],
            [
                "codigo_ibge" => 2912905,
                "estado_id" => 16,
                "nome" => 'IBIRATAIA',
            ],
            [
                "codigo_ibge" => 2913002,
                "estado_id" => 16,
                "nome" => 'IBITIARA',
            ],
            [
                "codigo_ibge" => 2913101,
                "estado_id" => 16,
                "nome" => 'IBITITÁ',
            ],
            [
                "codigo_ibge" => 2913200,
                "estado_id" => 16,
                "nome" => 'IBOTIRAMA',
            ],
            [
                "codigo_ibge" => 2913309,
                "estado_id" => 16,
                "nome" => 'ICHU',
            ],
            [
                "codigo_ibge" => 2913408,
                "estado_id" => 16,
                "nome" => 'IGAPORÃ',
            ],
            [
                "codigo_ibge" => 2913457,
                "estado_id" => 16,
                "nome" => 'IGRAPIÚNA',
            ],
            [
                "codigo_ibge" => 2913507,
                "estado_id" => 16,
                "nome" => 'IGUAÍ',
            ],
            [
                "codigo_ibge" => 2913606,
                "estado_id" => 16,
                "nome" => 'ILHÉUS',
            ],
            [
                "codigo_ibge" => 2913705,
                "estado_id" => 16,
                "nome" => 'INHAMBUPE',
            ],
            [
                "codigo_ibge" => 2913804,
                "estado_id" => 16,
                "nome" => 'IPECAETÁ',
            ],
            [
                "codigo_ibge" => 2913903,
                "estado_id" => 16,
                "nome" => 'IPIAÚ',
            ],
            [
                "codigo_ibge" => 2914000,
                "estado_id" => 16,
                "nome" => 'IPIRÁ',
            ],
            [
                "codigo_ibge" => 2914109,
                "estado_id" => 16,
                "nome" => 'IPUPIARA',
            ],
            [
                "codigo_ibge" => 2914208,
                "estado_id" => 16,
                "nome" => 'IRAJUBA',
            ],
            [
                "codigo_ibge" => 2914307,
                "estado_id" => 16,
                "nome" => 'IRAMAIA',
            ],
            [
                "codigo_ibge" => 2914406,
                "estado_id" => 16,
                "nome" => 'IRAQUARA',
            ],
            [
                "codigo_ibge" => 2914505,
                "estado_id" => 16,
                "nome" => 'IRARÁ',
            ],
            [
                "codigo_ibge" => 2914604,
                "estado_id" => 16,
                "nome" => 'IRECÊ',
            ],
            [
                "codigo_ibge" => 2914653,
                "estado_id" => 16,
                "nome" => 'ITABELA',
            ],
            [
                "codigo_ibge" => 2914703,
                "estado_id" => 16,
                "nome" => 'ITABERABA',
            ],
            [
                "codigo_ibge" => 2914802,
                "estado_id" => 16,
                "nome" => 'ITABUNA',
            ],
            [
                "codigo_ibge" => 2914901,
                "estado_id" => 16,
                "nome" => 'ITACARÉ',
            ],
            [
                "codigo_ibge" => 2915007,
                "estado_id" => 16,
                "nome" => 'ITAETÉ',
            ],
            [
                "codigo_ibge" => 2915106,
                "estado_id" => 16,
                "nome" => 'ITAGI',
            ],
            [
                "codigo_ibge" => 2915205,
                "estado_id" => 16,
                "nome" => 'ITAGIBÁ',
            ],
            [
                "codigo_ibge" => 2915304,
                "estado_id" => 16,
                "nome" => 'ITAGIMIRIM',
            ],
            [
                "codigo_ibge" => 2915353,
                "estado_id" => 16,
                "nome" => 'ITAGUAÇU DA BAHIA',
            ],
            [
                "codigo_ibge" => 2915403,
                "estado_id" => 16,
                "nome" => 'ITAJU DO COLÔNIA',
            ],
            [
                "codigo_ibge" => 2915502,
                "estado_id" => 16,
                "nome" => 'ITAJUÍPE',
            ],
            [
                "codigo_ibge" => 2915601,
                "estado_id" => 16,
                "nome" => 'ITAMARAJU',
            ],
            [
                "codigo_ibge" => 2915700,
                "estado_id" => 16,
                "nome" => 'ITAMARI',
            ],
            [
                "codigo_ibge" => 2915809,
                "estado_id" => 16,
                "nome" => 'ITAMBÉ',
            ],
            [
                "codigo_ibge" => 2915908,
                "estado_id" => 16,
                "nome" => 'ITANAGRA',
            ],
            [
                "codigo_ibge" => 2916005,
                "estado_id" => 16,
                "nome" => 'ITANHÉM',
            ],
            [
                "codigo_ibge" => 2916104,
                "estado_id" => 16,
                "nome" => 'ITAPARICA',
            ],
            [
                "codigo_ibge" => 2916203,
                "estado_id" => 16,
                "nome" => 'ITAPÉ',
            ],
            [
                "codigo_ibge" => 2916302,
                "estado_id" => 16,
                "nome" => 'ITAPEBI',
            ],
            [
                "codigo_ibge" => 2916401,
                "estado_id" => 16,
                "nome" => 'ITAPETINGA',
            ],
            [
                "codigo_ibge" => 2916500,
                "estado_id" => 16,
                "nome" => 'ITAPICURU',
            ],
            [
                "codigo_ibge" => 2916609,
                "estado_id" => 16,
                "nome" => 'ITAPITANGA',
            ],
            [
                "codigo_ibge" => 2916708,
                "estado_id" => 16,
                "nome" => 'ITAQUARA',
            ],
            [
                "codigo_ibge" => 2916807,
                "estado_id" => 16,
                "nome" => 'ITARANTIM',
            ],
            [
                "codigo_ibge" => 2916856,
                "estado_id" => 16,
                "nome" => 'ITATIM',
            ],
            [
                "codigo_ibge" => 2916906,
                "estado_id" => 16,
                "nome" => 'ITIRUÇU',
            ],
            [
                "codigo_ibge" => 2917003,
                "estado_id" => 16,
                "nome" => 'ITIÚBA',
            ],
            [
                "codigo_ibge" => 2917102,
                "estado_id" => 16,
                "nome" => 'ITORORÓ',
            ],
            [
                "codigo_ibge" => 2917201,
                "estado_id" => 16,
                "nome" => 'ITUAÇU',
            ],
            [
                "codigo_ibge" => 2917300,
                "estado_id" => 16,
                "nome" => 'ITUBERÁ',
            ],
            [
                "codigo_ibge" => 2917334,
                "estado_id" => 16,
                "nome" => 'IUIÚ',
            ],
            [
                "codigo_ibge" => 2917359,
                "estado_id" => 16,
                "nome" => 'JABORANDI',
            ],
            [
                "codigo_ibge" => 2917409,
                "estado_id" => 16,
                "nome" => 'JACARACI',
            ],
            [
                "codigo_ibge" => 2917508,
                "estado_id" => 16,
                "nome" => 'JACOBINA',
            ],
            [
                "codigo_ibge" => 2917607,
                "estado_id" => 16,
                "nome" => 'JAGUAQUARA',
            ],
            [
                "codigo_ibge" => 2917706,
                "estado_id" => 16,
                "nome" => 'JAGUARARI',
            ],
            [
                "codigo_ibge" => 2917805,
                "estado_id" => 16,
                "nome" => 'JAGUARIPE',
            ],
            [
                "codigo_ibge" => 2917904,
                "estado_id" => 16,
                "nome" => 'JANDAÍRA',
            ],
            [
                "codigo_ibge" => 2918001,
                "estado_id" => 16,
                "nome" => 'JEQUIÉ',
            ],
            [
                "codigo_ibge" => 2918100,
                "estado_id" => 16,
                "nome" => 'JEREMOABO',
            ],
            [
                "codigo_ibge" => 2918209,
                "estado_id" => 16,
                "nome" => 'JIQUIRIÇÁ',
            ],
            [
                "codigo_ibge" => 2918308,
                "estado_id" => 16,
                "nome" => 'JITAÚNA',
            ],
            [
                "codigo_ibge" => 2918357,
                "estado_id" => 16,
                "nome" => 'JOÃO DOURADO',
            ],
            [
                "codigo_ibge" => 2918407,
                "estado_id" => 16,
                "nome" => 'JUAZEIRO',
            ],
            [
                "codigo_ibge" => 2918456,
                "estado_id" => 16,
                "nome" => 'JUCURUÇU',
            ],
            [
                "codigo_ibge" => 2918506,
                "estado_id" => 16,
                "nome" => 'JUSSARA',
            ],
            [
                "codigo_ibge" => 2918555,
                "estado_id" => 16,
                "nome" => 'JUSSARI',
            ],
            [
                "codigo_ibge" => 2918605,
                "estado_id" => 16,
                "nome" => 'JUSSIAPE',
            ],
            [
                "codigo_ibge" => 2918704,
                "estado_id" => 16,
                "nome" => 'LAFAIETE COUTINHO',
            ],
            [
                "codigo_ibge" => 2918753,
                "estado_id" => 16,
                "nome" => 'LAGOA REAL',
            ],
            [
                "codigo_ibge" => 2918803,
                "estado_id" => 16,
                "nome" => 'LAJE',
            ],
            [
                "codigo_ibge" => 2918902,
                "estado_id" => 16,
                "nome" => 'LAJEDÃO',
            ],
            [
                "codigo_ibge" => 2919009,
                "estado_id" => 16,
                "nome" => 'LAJEDINHO',
            ],
            [
                "codigo_ibge" => 2919058,
                "estado_id" => 16,
                "nome" => 'LAJEDO DO TABOCAL',
            ],
            [
                "codigo_ibge" => 2919108,
                "estado_id" => 16,
                "nome" => 'LAMARÃO',
            ],
            [
                "codigo_ibge" => 2919157,
                "estado_id" => 16,
                "nome" => 'LAPÃO',
            ],
            [
                "codigo_ibge" => 2919207,
                "estado_id" => 16,
                "nome" => 'LAURO DE FREITAS',
            ],
            [
                "codigo_ibge" => 2919306,
                "estado_id" => 16,
                "nome" => 'LENÇÓIS',
            ],
            [
                "codigo_ibge" => 2919405,
                "estado_id" => 16,
                "nome" => 'LICÍNIO DE ALMEIDA',
            ],
            [
                "codigo_ibge" => 2919504,
                "estado_id" => 16,
                "nome" => 'LIVRAMENTO DE NOSSA SENHORA',
            ],
            [
                "codigo_ibge" => 2919553,
                "estado_id" => 16,
                "nome" => 'LUÍS EDUARDO MAGALHÃES',
            ],
            [
                "codigo_ibge" => 2919603,
                "estado_id" => 16,
                "nome" => 'MACAJUBA',
            ],
            [
                "codigo_ibge" => 2919702,
                "estado_id" => 16,
                "nome" => 'MACARANI',
            ],
            [
                "codigo_ibge" => 2919801,
                "estado_id" => 16,
                "nome" => 'MACAÚBAS',
            ],
            [
                "codigo_ibge" => 2919900,
                "estado_id" => 16,
                "nome" => 'MACURURÉ',
            ],
            [
                "codigo_ibge" => 2919926,
                "estado_id" => 16,
                "nome" => 'MADRE DE DEUS',
            ],
            [
                "codigo_ibge" => 2919959,
                "estado_id" => 16,
                "nome" => 'MAETINGA',
            ],
            [
                "codigo_ibge" => 2920007,
                "estado_id" => 16,
                "nome" => 'MAIQUINIQUE',
            ],
            [
                "codigo_ibge" => 2920106,
                "estado_id" => 16,
                "nome" => 'MAIRI',
            ],
            [
                "codigo_ibge" => 2920205,
                "estado_id" => 16,
                "nome" => 'MALHADA',
            ],
            [
                "codigo_ibge" => 2920304,
                "estado_id" => 16,
                "nome" => 'MALHADA DE PEDRAS',
            ],
            [
                "codigo_ibge" => 2920403,
                "estado_id" => 16,
                "nome" => 'MANOEL VITORINO',
            ],
            [
                "codigo_ibge" => 2920452,
                "estado_id" => 16,
                "nome" => 'MANSIDÃO',
            ],
            [
                "codigo_ibge" => 2920502,
                "estado_id" => 16,
                "nome" => 'MARACÁS',
            ],
            [
                "codigo_ibge" => 2920601,
                "estado_id" => 16,
                "nome" => 'MARAGOGIPE',
            ],
            [
                "codigo_ibge" => 2920700,
                "estado_id" => 16,
                "nome" => 'MARAÚ',
            ],
            [
                "codigo_ibge" => 2920809,
                "estado_id" => 16,
                "nome" => 'MARCIONÍLIO SOUZA',
            ],
            [
                "codigo_ibge" => 2920908,
                "estado_id" => 16,
                "nome" => 'MASCOTE',
            ],
            [
                "codigo_ibge" => 2921005,
                "estado_id" => 16,
                "nome" => 'MATA DE SÃO JOÃO',
            ],
            [
                "codigo_ibge" => 2921054,
                "estado_id" => 16,
                "nome" => 'MATINA',
            ],
            [
                "codigo_ibge" => 2921104,
                "estado_id" => 16,
                "nome" => 'MEDEIROS NETO',
            ],
            [
                "codigo_ibge" => 2921203,
                "estado_id" => 16,
                "nome" => 'MIGUEL CALMON',
            ],
            [
                "codigo_ibge" => 2921302,
                "estado_id" => 16,
                "nome" => 'MILAGRES',
            ],
            [
                "codigo_ibge" => 2921401,
                "estado_id" => 16,
                "nome" => 'MIRANGABA',
            ],
            [
                "codigo_ibge" => 2921450,
                "estado_id" => 16,
                "nome" => 'MIRANTE',
            ],
            [
                "codigo_ibge" => 2921500,
                "estado_id" => 16,
                "nome" => 'MONTE SANTO',
            ],
            [
                "codigo_ibge" => 2921609,
                "estado_id" => 16,
                "nome" => 'MORPARÁ',
            ],
            [
                "codigo_ibge" => 2921708,
                "estado_id" => 16,
                "nome" => 'MORRO DO CHAPÉU',
            ],
            [
                "codigo_ibge" => 2921807,
                "estado_id" => 16,
                "nome" => 'MORTUGABA',
            ],
            [
                "codigo_ibge" => 2921906,
                "estado_id" => 16,
                "nome" => 'MUCUGÊ',
            ],
            [
                "codigo_ibge" => 2922003,
                "estado_id" => 16,
                "nome" => 'MUCURI',
            ],
            [
                "codigo_ibge" => 2922052,
                "estado_id" => 16,
                "nome" => 'MULUNGU DO MORRO',
            ],
            [
                "codigo_ibge" => 2922102,
                "estado_id" => 16,
                "nome" => 'MUNDO NOVO',
            ],
            [
                "codigo_ibge" => 2922201,
                "estado_id" => 16,
                "nome" => 'MUNIZ FERREIRA',
            ],
            [
                "codigo_ibge" => 2922250,
                "estado_id" => 16,
                "nome" => 'MUQUÉM DE SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 2922300,
                "estado_id" => 16,
                "nome" => 'MURITIBA',
            ],
            [
                "codigo_ibge" => 2922409,
                "estado_id" => 16,
                "nome" => 'MUTUÍPE',
            ],
            [
                "codigo_ibge" => 2922508,
                "estado_id" => 16,
                "nome" => 'NAZARÉ',
            ],
            [
                "codigo_ibge" => 2922607,
                "estado_id" => 16,
                "nome" => 'NILO PEÇANHA',
            ],
            [
                "codigo_ibge" => 2922656,
                "estado_id" => 16,
                "nome" => 'NORDESTINA',
            ],
            [
                "codigo_ibge" => 2922706,
                "estado_id" => 16,
                "nome" => 'NOVA CANAÃ',
            ],
            [
                "codigo_ibge" => 2922730,
                "estado_id" => 16,
                "nome" => 'NOVA FÁTIMA',
            ],
            [
                "codigo_ibge" => 2922755,
                "estado_id" => 16,
                "nome" => 'NOVA IBIÁ',
            ],
            [
                "codigo_ibge" => 2922805,
                "estado_id" => 16,
                "nome" => 'NOVA ITARANA',
            ],
            [
                "codigo_ibge" => 2922854,
                "estado_id" => 16,
                "nome" => 'NOVA REDENÇÃO',
            ],
            [
                "codigo_ibge" => 2922904,
                "estado_id" => 16,
                "nome" => 'NOVA SOURE',
            ],
            [
                "codigo_ibge" => 2923001,
                "estado_id" => 16,
                "nome" => 'NOVA VIÇOSA',
            ],
            [
                "codigo_ibge" => 2923035,
                "estado_id" => 16,
                "nome" => 'NOVO HORIZONTE',
            ],
            [
                "codigo_ibge" => 2923050,
                "estado_id" => 16,
                "nome" => 'NOVO TRIUNFO',
            ],
            [
                "codigo_ibge" => 2923100,
                "estado_id" => 16,
                "nome" => 'OLINDINA',
            ],
            [
                "codigo_ibge" => 2923209,
                "estado_id" => 16,
                "nome" => 'OLIVEIRA DOS BREJINHOS',
            ],
            [
                "codigo_ibge" => 2923308,
                "estado_id" => 16,
                "nome" => 'OURIÇANGAS',
            ],
            [
                "codigo_ibge" => 2923357,
                "estado_id" => 16,
                "nome" => 'OUROLÂNDIA',
            ],
            [
                "codigo_ibge" => 2923407,
                "estado_id" => 16,
                "nome" => 'PALMAS DE MONTE ALTO',
            ],
            [
                "codigo_ibge" => 2923506,
                "estado_id" => 16,
                "nome" => 'PALMEIRAS',
            ],
            [
                "codigo_ibge" => 2923605,
                "estado_id" => 16,
                "nome" => 'PARAMIRIM',
            ],
            [
                "codigo_ibge" => 2923704,
                "estado_id" => 16,
                "nome" => 'PARATINGA',
            ],
            [
                "codigo_ibge" => 2923803,
                "estado_id" => 16,
                "nome" => 'PARIPIRANGA',
            ],
            [
                "codigo_ibge" => 2923902,
                "estado_id" => 16,
                "nome" => 'PAU BRASIL',
            ],
            [
                "codigo_ibge" => 2924009,
                "estado_id" => 16,
                "nome" => 'PAULO AFONSO',
            ],
            [
                "codigo_ibge" => 2924058,
                "estado_id" => 16,
                "nome" => 'PÉ DE SERRA',
            ],
            [
                "codigo_ibge" => 2924108,
                "estado_id" => 16,
                "nome" => 'PEDRÃO',
            ],
            [
                "codigo_ibge" => 2924207,
                "estado_id" => 16,
                "nome" => 'PEDRO ALEXANDRE',
            ],
            [
                "codigo_ibge" => 2924306,
                "estado_id" => 16,
                "nome" => 'PIATÃ',
            ],
            [
                "codigo_ibge" => 2924405,
                "estado_id" => 16,
                "nome" => 'PILÃO ARCADO',
            ],
            [
                "codigo_ibge" => 2924504,
                "estado_id" => 16,
                "nome" => 'PINDAÍ',
            ],
            [
                "codigo_ibge" => 2924603,
                "estado_id" => 16,
                "nome" => 'PINDOBAÇU',
            ],
            [
                "codigo_ibge" => 2924652,
                "estado_id" => 16,
                "nome" => 'PINTADAS',
            ],
            [
                "codigo_ibge" => 2924678,
                "estado_id" => 16,
                "nome" => 'PIRAÍ DO NORTE',
            ],
            [
                "codigo_ibge" => 2924702,
                "estado_id" => 16,
                "nome" => 'PIRIPÁ',
            ],
            [
                "codigo_ibge" => 2924801,
                "estado_id" => 16,
                "nome" => 'PIRITIBA',
            ],
            [
                "codigo_ibge" => 2924900,
                "estado_id" => 16,
                "nome" => 'PLANALTINO',
            ],
            [
                "codigo_ibge" => 2925006,
                "estado_id" => 16,
                "nome" => 'PLANALTO',
            ],
            [
                "codigo_ibge" => 2925105,
                "estado_id" => 16,
                "nome" => 'POÇÕES',
            ],
            [
                "codigo_ibge" => 2925204,
                "estado_id" => 16,
                "nome" => 'POJUCA',
            ],
            [
                "codigo_ibge" => 2925253,
                "estado_id" => 16,
                "nome" => 'PONTO NOVO',
            ],
            [
                "codigo_ibge" => 2925303,
                "estado_id" => 16,
                "nome" => 'PORTO SEGURO',
            ],
            [
                "codigo_ibge" => 2925402,
                "estado_id" => 16,
                "nome" => 'POTIRAGUÁ',
            ],
            [
                "codigo_ibge" => 2925501,
                "estado_id" => 16,
                "nome" => 'PRADO',
            ],
            [
                "codigo_ibge" => 2925600,
                "estado_id" => 16,
                "nome" => 'PRESIDENTE DUTRA',
            ],
            [
                "codigo_ibge" => 2925709,
                "estado_id" => 16,
                "nome" => 'PRESIDENTE JÂNIO QUADROS',
            ],
            [
                "codigo_ibge" => 2925758,
                "estado_id" => 16,
                "nome" => 'PRESIDENTE TANCREDO NEVES',
            ],
            [
                "codigo_ibge" => 2925808,
                "estado_id" => 16,
                "nome" => 'QUEIMADAS',
            ],
            [
                "codigo_ibge" => 2925907,
                "estado_id" => 16,
                "nome" => 'QUIJINGUE',
            ],
            [
                "codigo_ibge" => 2925931,
                "estado_id" => 16,
                "nome" => 'QUIXABEIRA',
            ],
            [
                "codigo_ibge" => 2925956,
                "estado_id" => 16,
                "nome" => 'RAFAEL JAMBEIRO',
            ],
            [
                "codigo_ibge" => 2926004,
                "estado_id" => 16,
                "nome" => 'REMANSO',
            ],
            [
                "codigo_ibge" => 2926103,
                "estado_id" => 16,
                "nome" => 'RETIROLÂNDIA',
            ],
            [
                "codigo_ibge" => 2926202,
                "estado_id" => 16,
                "nome" => 'RIACHÃO DAS NEVES',
            ],
            [
                "codigo_ibge" => 2926301,
                "estado_id" => 16,
                "nome" => 'RIACHÃO DO JACUÍPE',
            ],
            [
                "codigo_ibge" => 2926400,
                "estado_id" => 16,
                "nome" => 'RIACHO DE SANTANA',
            ],
            [
                "codigo_ibge" => 2926509,
                "estado_id" => 16,
                "nome" => 'RIBEIRA DO AMPARO',
            ],
            [
                "codigo_ibge" => 2926608,
                "estado_id" => 16,
                "nome" => 'RIBEIRA DO POMBAL',
            ],
            [
                "codigo_ibge" => 2926657,
                "estado_id" => 16,
                "nome" => 'RIBEIRÃO DO LARGO',
            ],
            [
                "codigo_ibge" => 2926707,
                "estado_id" => 16,
                "nome" => 'RIO DE CONTAS',
            ],
            [
                "codigo_ibge" => 2926806,
                "estado_id" => 16,
                "nome" => 'RIO DO ANTÔNIO',
            ],
            [
                "codigo_ibge" => 2926905,
                "estado_id" => 16,
                "nome" => 'RIO DO PIRES',
            ],
            [
                "codigo_ibge" => 2927002,
                "estado_id" => 16,
                "nome" => 'RIO REAL',
            ],
            [
                "codigo_ibge" => 2927101,
                "estado_id" => 16,
                "nome" => 'RODELAS',
            ],
            [
                "codigo_ibge" => 2927200,
                "estado_id" => 16,
                "nome" => 'RUY BARBOSA',
            ],
            [
                "codigo_ibge" => 2927309,
                "estado_id" => 16,
                "nome" => 'SALINAS DA MARGARIDA',
            ],
            [
                "codigo_ibge" => 2927408,
                "estado_id" => 16,
                "nome" => 'SALVADOR',
            ],
            [
                "codigo_ibge" => 2927507,
                "estado_id" => 16,
                "nome" => 'SANTA BÁRBARA',
            ],
            [
                "codigo_ibge" => 2927606,
                "estado_id" => 16,
                "nome" => 'SANTA BRÍGIDA',
            ],
            [
                "codigo_ibge" => 2927705,
                "estado_id" => 16,
                "nome" => 'SANTA CRUZ CABRÁLIA',
            ],
            [
                "codigo_ibge" => 2927804,
                "estado_id" => 16,
                "nome" => 'SANTA CRUZ DA VITÓRIA',
            ],
            [
                "codigo_ibge" => 2927903,
                "estado_id" => 16,
                "nome" => 'SANTA INÊS',
            ],
            [
                "codigo_ibge" => 2928000,
                "estado_id" => 16,
                "nome" => 'SANTALUZ',
            ],
            [
                "codigo_ibge" => 2928059,
                "estado_id" => 16,
                "nome" => 'SANTA LUZIA',
            ],
            [
                "codigo_ibge" => 2928109,
                "estado_id" => 16,
                "nome" => 'SANTA MARIA DA VITÓRIA',
            ],
            [
                "codigo_ibge" => 2928208,
                "estado_id" => 16,
                "nome" => 'SANTANA',
            ],
            [
                "codigo_ibge" => 2928307,
                "estado_id" => 16,
                "nome" => 'SANTANÓPOLIS',
            ],
            [
                "codigo_ibge" => 2928406,
                "estado_id" => 16,
                "nome" => 'SANTA RITA DE CÁSSIA',
            ],
            [
                "codigo_ibge" => 2928505,
                "estado_id" => 16,
                "nome" => 'SANTA TERESINHA',
            ],
            [
                "codigo_ibge" => 2928604,
                "estado_id" => 16,
                "nome" => 'SANTO AMARO',
            ],
            [
                "codigo_ibge" => 2928703,
                "estado_id" => 16,
                "nome" => 'SANTO ANTÔNIO DE JESUS',
            ],
            [
                "codigo_ibge" => 2928802,
                "estado_id" => 16,
                "nome" => 'SANTO ESTÊVÃO',
            ],
            [
                "codigo_ibge" => 2928901,
                "estado_id" => 16,
                "nome" => 'SÃO DESIDÉRIO',
            ],
            [
                "codigo_ibge" => 2928950,
                "estado_id" => 16,
                "nome" => 'SÃO DOMINGOS',
            ],
            [
                "codigo_ibge" => 2929008,
                "estado_id" => 16,
                "nome" => 'SÃO FÉLIX',
            ],
            [
                "codigo_ibge" => 2929057,
                "estado_id" => 16,
                "nome" => 'SÃO FÉLIX DO CORIBE',
            ],
            [
                "codigo_ibge" => 2929107,
                "estado_id" => 16,
                "nome" => 'SÃO FELIPE',
            ],
            [
                "codigo_ibge" => 2929206,
                "estado_id" => 16,
                "nome" => 'SÃO FRANCISCO DO CONDE',
            ],
            [
                "codigo_ibge" => 2929255,
                "estado_id" => 16,
                "nome" => 'SÃO GABRIEL',
            ],
            [
                "codigo_ibge" => 2929305,
                "estado_id" => 16,
                "nome" => 'SÃO GONÇALO DOS CAMPOS',
            ],
            [
                "codigo_ibge" => 2929354,
                "estado_id" => 16,
                "nome" => 'SÃO JOSÉ DA VITÓRIA',
            ],
            [
                "codigo_ibge" => 2929370,
                "estado_id" => 16,
                "nome" => 'SÃO JOSÉ DO JACUÍPE',
            ],
            [
                "codigo_ibge" => 2929404,
                "estado_id" => 16,
                "nome" => 'SÃO MIGUEL DAS MATAS',
            ],
            [
                "codigo_ibge" => 2929503,
                "estado_id" => 16,
                "nome" => 'SÃO SEBASTIÃO DO PASSÉ',
            ],
            [
                "codigo_ibge" => 2929602,
                "estado_id" => 16,
                "nome" => 'SAPEAÇU',
            ],
            [
                "codigo_ibge" => 2929701,
                "estado_id" => 16,
                "nome" => 'SÁTIRO DIAS',
            ],
            [
                "codigo_ibge" => 2929750,
                "estado_id" => 16,
                "nome" => 'SAUBARA',
            ],
            [
                "codigo_ibge" => 2929800,
                "estado_id" => 16,
                "nome" => 'SAÚDE',
            ],
            [
                "codigo_ibge" => 2929909,
                "estado_id" => 16,
                "nome" => 'SEABRA',
            ],
            [
                "codigo_ibge" => 2930006,
                "estado_id" => 16,
                "nome" => 'SEBASTIÃO LARANJEIRAS',
            ],
            [
                "codigo_ibge" => 2930105,
                "estado_id" => 16,
                "nome" => 'SENHOR DO BONFIM',
            ],
            [
                "codigo_ibge" => 2930154,
                "estado_id" => 16,
                "nome" => 'SERRA DO RAMALHO',
            ],
            [
                "codigo_ibge" => 2930204,
                "estado_id" => 16,
                "nome" => 'SENTO SÉ',
            ],
            [
                "codigo_ibge" => 2930303,
                "estado_id" => 16,
                "nome" => 'SERRA DOURADA',
            ],
            [
                "codigo_ibge" => 2930402,
                "estado_id" => 16,
                "nome" => 'SERRA PRETA',
            ],
            [
                "codigo_ibge" => 2930501,
                "estado_id" => 16,
                "nome" => 'SERRINHA',
            ],
            [
                "codigo_ibge" => 2930600,
                "estado_id" => 16,
                "nome" => 'SERROLÂNDIA',
            ],
            [
                "codigo_ibge" => 2930709,
                "estado_id" => 16,
                "nome" => 'SIMÕES FILHO',
            ],
            [
                "codigo_ibge" => 2930758,
                "estado_id" => 16,
                "nome" => 'SÍTIO DO MATO',
            ],
            [
                "codigo_ibge" => 2930766,
                "estado_id" => 16,
                "nome" => 'SÍTIO DO QUINTO',
            ],
            [
                "codigo_ibge" => 2930774,
                "estado_id" => 16,
                "nome" => 'SOBRADINHO',
            ],
            [
                "codigo_ibge" => 2930808,
                "estado_id" => 16,
                "nome" => 'SOUTO SOARES',
            ],
            [
                "codigo_ibge" => 2930907,
                "estado_id" => 16,
                "nome" => 'TABOCAS DO BREJO VELHO',
            ],
            [
                "codigo_ibge" => 2931004,
                "estado_id" => 16,
                "nome" => 'TANHAÇU',
            ],
            [
                "codigo_ibge" => 2931053,
                "estado_id" => 16,
                "nome" => 'TANQUE NOVO',
            ],
            [
                "codigo_ibge" => 2931103,
                "estado_id" => 16,
                "nome" => 'TANQUINHO',
            ],
            [
                "codigo_ibge" => 2931202,
                "estado_id" => 16,
                "nome" => 'TAPEROÁ',
            ],
            [
                "codigo_ibge" => 2931301,
                "estado_id" => 16,
                "nome" => 'TAPIRAMUTÁ',
            ],
            [
                "codigo_ibge" => 2931350,
                "estado_id" => 16,
                "nome" => 'TEIXEIRA DE FREITAS',
            ],
            [
                "codigo_ibge" => 2931400,
                "estado_id" => 16,
                "nome" => 'TEODORO SAMPAIO',
            ],
            [
                "codigo_ibge" => 2931509,
                "estado_id" => 16,
                "nome" => 'TEOFILÂNDIA',
            ],
            [
                "codigo_ibge" => 2931608,
                "estado_id" => 16,
                "nome" => 'TEOLÂNDIA',
            ],
            [
                "codigo_ibge" => 2931707,
                "estado_id" => 16,
                "nome" => 'TERRA NOVA',
            ],
            [
                "codigo_ibge" => 2931806,
                "estado_id" => 16,
                "nome" => 'TREMEDAL',
            ],
            [
                "codigo_ibge" => 2931905,
                "estado_id" => 16,
                "nome" => 'TUCANO',
            ],
            [
                "codigo_ibge" => 2932002,
                "estado_id" => 16,
                "nome" => 'UAUÁ',
            ],
            [
                "codigo_ibge" => 2932101,
                "estado_id" => 16,
                "nome" => 'UBAÍRA',
            ],
            [
                "codigo_ibge" => 2932200,
                "estado_id" => 16,
                "nome" => 'UBAITABA',
            ],
            [
                "codigo_ibge" => 2932309,
                "estado_id" => 16,
                "nome" => 'UBATÃ',
            ],
            [
                "codigo_ibge" => 2932408,
                "estado_id" => 16,
                "nome" => 'UIBAÍ',
            ],
            [
                "codigo_ibge" => 2932457,
                "estado_id" => 16,
                "nome" => 'UMBURANAS',
            ],
            [
                "codigo_ibge" => 2932507,
                "estado_id" => 16,
                "nome" => 'UNA',
            ],
            [
                "codigo_ibge" => 2932606,
                "estado_id" => 16,
                "nome" => 'URANDI',
            ],
            [
                "codigo_ibge" => 2932705,
                "estado_id" => 16,
                "nome" => 'URUÇUCA',
            ],
            [
                "codigo_ibge" => 2932804,
                "estado_id" => 16,
                "nome" => 'UTINGA',
            ],
            [
                "codigo_ibge" => 2932903,
                "estado_id" => 16,
                "nome" => 'VALENÇA',
            ],
            [
                "codigo_ibge" => 2933000,
                "estado_id" => 16,
                "nome" => 'VALENTE',
            ],
            [
                "codigo_ibge" => 2933059,
                "estado_id" => 16,
                "nome" => 'VÁRZEA DA ROÇA',
            ],
            [
                "codigo_ibge" => 2933109,
                "estado_id" => 16,
                "nome" => 'VÁRZEA DO POÇO',
            ],
            [
                "codigo_ibge" => 2933158,
                "estado_id" => 16,
                "nome" => 'VÁRZEA NOVA',
            ],
            [
                "codigo_ibge" => 2933174,
                "estado_id" => 16,
                "nome" => 'VARZEDO',
            ],
            [
                "codigo_ibge" => 2933208,
                "estado_id" => 16,
                "nome" => 'VERA CRUZ',
            ],
            [
                "codigo_ibge" => 2933257,
                "estado_id" => 16,
                "nome" => 'VEREDA',
            ],
            [
                "codigo_ibge" => 2933307,
                "estado_id" => 16,
                "nome" => 'VITÓRIA DA CONQUISTA',
            ],
            [
                "codigo_ibge" => 2933406,
                "estado_id" => 16,
                "nome" => 'WAGNER',
            ],
            [
                "codigo_ibge" => 2933455,
                "estado_id" => 16,
                "nome" => 'WANDERLEY',
            ],
            [
                "codigo_ibge" => 2933505,
                "estado_id" => 16,
                "nome" => 'WENCESLAU GUIMARÃES',
            ],
            [
                "codigo_ibge" => 2933604,
                "estado_id" => 16,
                "nome" => 'XIQUE-XIQUE',
            ],
            [
                "codigo_ibge" => 3100104,
                "estado_id" => 17,
                "nome" => 'ABADIA DOS DOURADOS',
            ],
            [
                "codigo_ibge" => 3100203,
                "estado_id" => 17,
                "nome" => 'ABAETÉ',
            ],
            [
                "codigo_ibge" => 3100302,
                "estado_id" => 17,
                "nome" => 'ABRE CAMPO',
            ],
            [
                "codigo_ibge" => 3100401,
                "estado_id" => 17,
                "nome" => 'ACAIACA',
            ],
            [
                "codigo_ibge" => 3100500,
                "estado_id" => 17,
                "nome" => 'AÇUCENA',
            ],
            [
                "codigo_ibge" => 3100609,
                "estado_id" => 17,
                "nome" => 'ÁGUA BOA',
            ],
            [
                "codigo_ibge" => 3100708,
                "estado_id" => 17,
                "nome" => 'ÁGUA COMPRIDA',
            ],
            [
                "codigo_ibge" => 3100807,
                "estado_id" => 17,
                "nome" => 'AGUANIL',
            ],
            [
                "codigo_ibge" => 3100906,
                "estado_id" => 17,
                "nome" => 'ÁGUAS FORMOSAS',
            ],
            [
                "codigo_ibge" => 3101003,
                "estado_id" => 17,
                "nome" => 'ÁGUAS VERMELHAS',
            ],
            [
                "codigo_ibge" => 3101102,
                "estado_id" => 17,
                "nome" => 'AIMORÉS',
            ],
            [
                "codigo_ibge" => 3101201,
                "estado_id" => 17,
                "nome" => 'AIURUOCA',
            ],
            [
                "codigo_ibge" => 3101300,
                "estado_id" => 17,
                "nome" => 'ALAGOA',
            ],
            [
                "codigo_ibge" => 3101409,
                "estado_id" => 17,
                "nome" => 'ALBERTINA',
            ],
            [
                "codigo_ibge" => 3101508,
                "estado_id" => 17,
                "nome" => 'ALÉM PARAÍBA',
            ],
            [
                "codigo_ibge" => 3101607,
                "estado_id" => 17,
                "nome" => 'ALFENAS',
            ],
            [
                "codigo_ibge" => 3101631,
                "estado_id" => 17,
                "nome" => 'ALFREDO VASCONCELOS',
            ],
            [
                "codigo_ibge" => 3101706,
                "estado_id" => 17,
                "nome" => 'ALMENARA',
            ],
            [
                "codigo_ibge" => 3101805,
                "estado_id" => 17,
                "nome" => 'ALPERCATA',
            ],
            [
                "codigo_ibge" => 3101904,
                "estado_id" => 17,
                "nome" => 'ALPINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3102001,
                "estado_id" => 17,
                "nome" => 'ALTEROSA',
            ],
            [
                "codigo_ibge" => 3102050,
                "estado_id" => 17,
                "nome" => 'ALTO CAPARAÓ',
            ],
            [
                "codigo_ibge" => 3102100,
                "estado_id" => 17,
                "nome" => 'ALTO RIO DOCE',
            ],
            [
                "codigo_ibge" => 3102209,
                "estado_id" => 17,
                "nome" => 'ALVARENGA',
            ],
            [
                "codigo_ibge" => 3102308,
                "estado_id" => 17,
                "nome" => 'ALVINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3102407,
                "estado_id" => 17,
                "nome" => 'ALVORADA DE MINAS',
            ],
            [
                "codigo_ibge" => 3102506,
                "estado_id" => 17,
                "nome" => 'AMPARO DO SERRA',
            ],
            [
                "codigo_ibge" => 3102605,
                "estado_id" => 17,
                "nome" => 'ANDRADAS',
            ],
            [
                "codigo_ibge" => 3102704,
                "estado_id" => 17,
                "nome" => 'CACHOEIRA DE PAJEÚ',
            ],
            [
                "codigo_ibge" => 3102803,
                "estado_id" => 17,
                "nome" => 'ANDRELÂNDIA',
            ],
            [
                "codigo_ibge" => 3102852,
                "estado_id" => 17,
                "nome" => 'ANGELÂNDIA',
            ],
            [
                "codigo_ibge" => 3102902,
                "estado_id" => 17,
                "nome" => 'ANTÔNIO CARLOS',
            ],
            [
                "codigo_ibge" => 3103009,
                "estado_id" => 17,
                "nome" => 'ANTÔNIO DIAS',
            ],
            [
                "codigo_ibge" => 3103108,
                "estado_id" => 17,
                "nome" => 'ANTÔNIO PRADO DE MINAS',
            ],
            [
                "codigo_ibge" => 3103207,
                "estado_id" => 17,
                "nome" => 'ARAÇAÍ',
            ],
            [
                "codigo_ibge" => 3103306,
                "estado_id" => 17,
                "nome" => 'ARACITABA',
            ],
            [
                "codigo_ibge" => 3103405,
                "estado_id" => 17,
                "nome" => 'ARAÇUAÍ',
            ],
            [
                "codigo_ibge" => 3103504,
                "estado_id" => 17,
                "nome" => 'ARAGUARI',
            ],
            [
                "codigo_ibge" => 3103603,
                "estado_id" => 17,
                "nome" => 'ARANTINA',
            ],
            [
                "codigo_ibge" => 3103702,
                "estado_id" => 17,
                "nome" => 'ARAPONGA',
            ],
            [
                "codigo_ibge" => 3103751,
                "estado_id" => 17,
                "nome" => 'ARAPORÃ',
            ],
            [
                "codigo_ibge" => 3103801,
                "estado_id" => 17,
                "nome" => 'ARAPUÁ',
            ],
            [
                "codigo_ibge" => 3103900,
                "estado_id" => 17,
                "nome" => 'ARAÚJOS',
            ],
            [
                "codigo_ibge" => 3104007,
                "estado_id" => 17,
                "nome" => 'ARAXÁ',
            ],
            [
                "codigo_ibge" => 3104106,
                "estado_id" => 17,
                "nome" => 'ARCEBURGO',
            ],
            [
                "codigo_ibge" => 3104205,
                "estado_id" => 17,
                "nome" => 'ARCOS',
            ],
            [
                "codigo_ibge" => 3104304,
                "estado_id" => 17,
                "nome" => 'AREADO',
            ],
            [
                "codigo_ibge" => 3104403,
                "estado_id" => 17,
                "nome" => 'ARGIRITA',
            ],
            [
                "codigo_ibge" => 3104452,
                "estado_id" => 17,
                "nome" => 'ARICANDUVA',
            ],
            [
                "codigo_ibge" => 3104502,
                "estado_id" => 17,
                "nome" => 'ARINOS',
            ],
            [
                "codigo_ibge" => 3104601,
                "estado_id" => 17,
                "nome" => 'ASTOLFO DUTRA',
            ],
            [
                "codigo_ibge" => 3104700,
                "estado_id" => 17,
                "nome" => 'ATALÉIA',
            ],
            [
                "codigo_ibge" => 3104809,
                "estado_id" => 17,
                "nome" => 'AUGUSTO DE LIMA',
            ],
            [
                "codigo_ibge" => 3104908,
                "estado_id" => 17,
                "nome" => 'BAEPENDI',
            ],
            [
                "codigo_ibge" => 3105004,
                "estado_id" => 17,
                "nome" => 'BALDIM',
            ],
            [
                "codigo_ibge" => 3105103,
                "estado_id" => 17,
                "nome" => 'BAMBUÍ',
            ],
            [
                "codigo_ibge" => 3105202,
                "estado_id" => 17,
                "nome" => 'BANDEIRA',
            ],
            [
                "codigo_ibge" => 3105301,
                "estado_id" => 17,
                "nome" => 'BANDEIRA DO SUL',
            ],
            [
                "codigo_ibge" => 3105400,
                "estado_id" => 17,
                "nome" => 'BARÃO DE COCAIS',
            ],
            [
                "codigo_ibge" => 3105509,
                "estado_id" => 17,
                "nome" => 'BARÃO DE MONTE ALTO',
            ],
            [
                "codigo_ibge" => 3105608,
                "estado_id" => 17,
                "nome" => 'BARBACENA',
            ],
            [
                "codigo_ibge" => 3105707,
                "estado_id" => 17,
                "nome" => 'BARRA LONGA',
            ],
            [
                "codigo_ibge" => 3105905,
                "estado_id" => 17,
                "nome" => 'BARROSO',
            ],
            [
                "codigo_ibge" => 3106002,
                "estado_id" => 17,
                "nome" => 'BELA VISTA DE MINAS',
            ],
            [
                "codigo_ibge" => 3106101,
                "estado_id" => 17,
                "nome" => 'BELMIRO BRAGA',
            ],
            [
                "codigo_ibge" => 3106200,
                "estado_id" => 17,
                "nome" => 'BELO HORIZONTE',
            ],
            [
                "codigo_ibge" => 3106309,
                "estado_id" => 17,
                "nome" => 'BELO ORIENTE',
            ],
            [
                "codigo_ibge" => 3106408,
                "estado_id" => 17,
                "nome" => 'BELO VALE',
            ],
            [
                "codigo_ibge" => 3106507,
                "estado_id" => 17,
                "nome" => 'BERILO',
            ],
            [
                "codigo_ibge" => 3106606,
                "estado_id" => 17,
                "nome" => 'BERTÓPOLIS',
            ],
            [
                "codigo_ibge" => 3106655,
                "estado_id" => 17,
                "nome" => 'BERIZAL',
            ],
            [
                "codigo_ibge" => 3106705,
                "estado_id" => 17,
                "nome" => 'BETIM',
            ],
            [
                "codigo_ibge" => 3106804,
                "estado_id" => 17,
                "nome" => 'BIAS FORTES',
            ],
            [
                "codigo_ibge" => 3106903,
                "estado_id" => 17,
                "nome" => 'BICAS',
            ],
            [
                "codigo_ibge" => 3107000,
                "estado_id" => 17,
                "nome" => 'BIQUINHAS',
            ],
            [
                "codigo_ibge" => 3107109,
                "estado_id" => 17,
                "nome" => 'BOA ESPERANÇA',
            ],
            [
                "codigo_ibge" => 3107208,
                "estado_id" => 17,
                "nome" => 'BOCAINA DE MINAS',
            ],
            [
                "codigo_ibge" => 3107307,
                "estado_id" => 17,
                "nome" => 'BOCAIÚVA',
            ],
            [
                "codigo_ibge" => 3107406,
                "estado_id" => 17,
                "nome" => 'BOM DESPACHO',
            ],
            [
                "codigo_ibge" => 3107505,
                "estado_id" => 17,
                "nome" => 'BOM JARDIM DE MINAS',
            ],
            [
                "codigo_ibge" => 3107604,
                "estado_id" => 17,
                "nome" => 'BOM JESUS DA PENHA',
            ],
            [
                "codigo_ibge" => 3107703,
                "estado_id" => 17,
                "nome" => 'BOM JESUS DO AMPARO',
            ],
            [
                "codigo_ibge" => 3107802,
                "estado_id" => 17,
                "nome" => 'BOM JESUS DO GALHO',
            ],
            [
                "codigo_ibge" => 3107901,
                "estado_id" => 17,
                "nome" => 'BOM REPOUSO',
            ],
            [
                "codigo_ibge" => 3108008,
                "estado_id" => 17,
                "nome" => 'BOM SUCESSO',
            ],
            [
                "codigo_ibge" => 3108107,
                "estado_id" => 17,
                "nome" => 'BONFIM',
            ],
            [
                "codigo_ibge" => 3108206,
                "estado_id" => 17,
                "nome" => 'BONFINÓPOLIS DE MINAS',
            ],
            [
                "codigo_ibge" => 3108255,
                "estado_id" => 17,
                "nome" => 'BONITO DE MINAS',
            ],
            [
                "codigo_ibge" => 3108305,
                "estado_id" => 17,
                "nome" => 'BORDA DA MATA',
            ],
            [
                "codigo_ibge" => 3108404,
                "estado_id" => 17,
                "nome" => 'BOTELHOS',
            ],
            [
                "codigo_ibge" => 3108503,
                "estado_id" => 17,
                "nome" => 'BOTUMIRIM',
            ],
            [
                "codigo_ibge" => 3108552,
                "estado_id" => 17,
                "nome" => 'BRASILÂNDIA DE MINAS',
            ],
            [
                "codigo_ibge" => 3108602,
                "estado_id" => 17,
                "nome" => 'BRASÍLIA DE MINAS',
            ],
            [
                "codigo_ibge" => 3108701,
                "estado_id" => 17,
                "nome" => 'BRÁS PIRES',
            ],
            [
                "codigo_ibge" => 3108800,
                "estado_id" => 17,
                "nome" => 'BRAÚNAS',
            ],
            [
                "codigo_ibge" => 3108909,
                "estado_id" => 17,
                "nome" => 'BRAZÓPOLIS',
            ],
            [
                "codigo_ibge" => 3109006,
                "estado_id" => 17,
                "nome" => 'BRUMADINHO',
            ],
            [
                "codigo_ibge" => 3109105,
                "estado_id" => 17,
                "nome" => 'BUENO BRANDÃO',
            ],
            [
                "codigo_ibge" => 3109204,
                "estado_id" => 17,
                "nome" => 'BUENÓPOLIS',
            ],
            [
                "codigo_ibge" => 3109253,
                "estado_id" => 17,
                "nome" => 'BUGRE',
            ],
            [
                "codigo_ibge" => 3109303,
                "estado_id" => 17,
                "nome" => 'BURITIS',
            ],
            [
                "codigo_ibge" => 3109402,
                "estado_id" => 17,
                "nome" => 'BURITIZEIRO',
            ],
            [
                "codigo_ibge" => 3109451,
                "estado_id" => 17,
                "nome" => 'CABECEIRA GRANDE',
            ],
            [
                "codigo_ibge" => 3109501,
                "estado_id" => 17,
                "nome" => 'CABO VERDE',
            ],
            [
                "codigo_ibge" => 3109600,
                "estado_id" => 17,
                "nome" => 'CACHOEIRA DA PRATA',
            ],
            [
                "codigo_ibge" => 3109709,
                "estado_id" => 17,
                "nome" => 'CACHOEIRA DE MINAS',
            ],
            [
                "codigo_ibge" => 3109808,
                "estado_id" => 17,
                "nome" => 'CACHOEIRA DOURADA',
            ],
            [
                "codigo_ibge" => 3109907,
                "estado_id" => 17,
                "nome" => 'CAETANÓPOLIS',
            ],
            [
                "codigo_ibge" => 3110004,
                "estado_id" => 17,
                "nome" => 'CAETÉ',
            ],
            [
                "codigo_ibge" => 3110103,
                "estado_id" => 17,
                "nome" => 'CAIANA',
            ],
            [
                "codigo_ibge" => 3110202,
                "estado_id" => 17,
                "nome" => 'CAJURI',
            ],
            [
                "codigo_ibge" => 3110301,
                "estado_id" => 17,
                "nome" => 'CALDAS',
            ],
            [
                "codigo_ibge" => 3110400,
                "estado_id" => 17,
                "nome" => 'CAMACHO',
            ],
            [
                "codigo_ibge" => 3110509,
                "estado_id" => 17,
                "nome" => 'CAMANDUCAIA',
            ],
            [
                "codigo_ibge" => 3110608,
                "estado_id" => 17,
                "nome" => 'CAMBUÍ',
            ],
            [
                "codigo_ibge" => 3110707,
                "estado_id" => 17,
                "nome" => 'CAMBUQUIRA',
            ],
            [
                "codigo_ibge" => 3110806,
                "estado_id" => 17,
                "nome" => 'CAMPANÁRIO',
            ],
            [
                "codigo_ibge" => 3110905,
                "estado_id" => 17,
                "nome" => 'CAMPANHA',
            ],
            [
                "codigo_ibge" => 3111002,
                "estado_id" => 17,
                "nome" => 'CAMPESTRE',
            ],
            [
                "codigo_ibge" => 3111101,
                "estado_id" => 17,
                "nome" => 'CAMPINA VERDE',
            ],
            [
                "codigo_ibge" => 3111150,
                "estado_id" => 17,
                "nome" => 'CAMPO AZUL',
            ],
            [
                "codigo_ibge" => 3111200,
                "estado_id" => 17,
                "nome" => 'CAMPO BELO',
            ],
            [
                "codigo_ibge" => 3111309,
                "estado_id" => 17,
                "nome" => 'CAMPO DO MEIO',
            ],
            [
                "codigo_ibge" => 3111408,
                "estado_id" => 17,
                "nome" => 'CAMPO FLORIDO',
            ],
            [
                "codigo_ibge" => 3111507,
                "estado_id" => 17,
                "nome" => 'CAMPOS ALTOS',
            ],
            [
                "codigo_ibge" => 3111606,
                "estado_id" => 17,
                "nome" => 'CAMPOS GERAIS',
            ],
            [
                "codigo_ibge" => 3111705,
                "estado_id" => 17,
                "nome" => 'CANAÃ',
            ],
            [
                "codigo_ibge" => 3111804,
                "estado_id" => 17,
                "nome" => 'CANÁPOLIS',
            ],
            [
                "codigo_ibge" => 3111903,
                "estado_id" => 17,
                "nome" => 'CANA VERDE',
            ],
            [
                "codigo_ibge" => 3112000,
                "estado_id" => 17,
                "nome" => 'CANDEIAS',
            ],
            [
                "codigo_ibge" => 3112059,
                "estado_id" => 17,
                "nome" => 'CANTAGALO',
            ],
            [
                "codigo_ibge" => 3112109,
                "estado_id" => 17,
                "nome" => 'CAPARAÓ',
            ],
            [
                "codigo_ibge" => 3112208,
                "estado_id" => 17,
                "nome" => 'CAPELA NOVA',
            ],
            [
                "codigo_ibge" => 3112307,
                "estado_id" => 17,
                "nome" => 'CAPELINHA',
            ],
            [
                "codigo_ibge" => 3112406,
                "estado_id" => 17,
                "nome" => 'CAPETINGA',
            ],
            [
                "codigo_ibge" => 3112505,
                "estado_id" => 17,
                "nome" => 'CAPIM BRANCO',
            ],
            [
                "codigo_ibge" => 3112604,
                "estado_id" => 17,
                "nome" => 'CAPINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3112653,
                "estado_id" => 17,
                "nome" => 'CAPITÃO ANDRADE',
            ],
            [
                "codigo_ibge" => 3112703,
                "estado_id" => 17,
                "nome" => 'CAPITÃO ENÉAS',
            ],
            [
                "codigo_ibge" => 3112802,
                "estado_id" => 17,
                "nome" => 'CAPITÓLIO',
            ],
            [
                "codigo_ibge" => 3112901,
                "estado_id" => 17,
                "nome" => 'CAPUTIRA',
            ],
            [
                "codigo_ibge" => 3113008,
                "estado_id" => 17,
                "nome" => 'CARAÍ',
            ],
            [
                "codigo_ibge" => 3113107,
                "estado_id" => 17,
                "nome" => 'CARANAÍBA',
            ],
            [
                "codigo_ibge" => 3113206,
                "estado_id" => 17,
                "nome" => 'CARANDAÍ',
            ],
            [
                "codigo_ibge" => 3113305,
                "estado_id" => 17,
                "nome" => 'CARANGOLA',
            ],
            [
                "codigo_ibge" => 3113404,
                "estado_id" => 17,
                "nome" => 'CARATINGA',
            ],
            [
                "codigo_ibge" => 3113503,
                "estado_id" => 17,
                "nome" => 'CARBONITA',
            ],
            [
                "codigo_ibge" => 3113602,
                "estado_id" => 17,
                "nome" => 'CAREAÇU',
            ],
            [
                "codigo_ibge" => 3113701,
                "estado_id" => 17,
                "nome" => 'CARLOS CHAGAS',
            ],
            [
                "codigo_ibge" => 3113800,
                "estado_id" => 17,
                "nome" => 'CARMÉSIA',
            ],
            [
                "codigo_ibge" => 3113909,
                "estado_id" => 17,
                "nome" => 'CARMO DA CACHOEIRA',
            ],
            [
                "codigo_ibge" => 3114006,
                "estado_id" => 17,
                "nome" => 'CARMO DA MATA',
            ],
            [
                "codigo_ibge" => 3114105,
                "estado_id" => 17,
                "nome" => 'CARMO DE MINAS',
            ],
            [
                "codigo_ibge" => 3114204,
                "estado_id" => 17,
                "nome" => 'CARMO DO CAJURU',
            ],
            [
                "codigo_ibge" => 3114303,
                "estado_id" => 17,
                "nome" => 'CARMO DO PARANAÍBA',
            ],
            [
                "codigo_ibge" => 3114402,
                "estado_id" => 17,
                "nome" => 'CARMO DO RIO CLARO',
            ],
            [
                "codigo_ibge" => 3114501,
                "estado_id" => 17,
                "nome" => 'CARMÓPOLIS DE MINAS',
            ],
            [
                "codigo_ibge" => 3114550,
                "estado_id" => 17,
                "nome" => 'CARNEIRINHO',
            ],
            [
                "codigo_ibge" => 3114600,
                "estado_id" => 17,
                "nome" => 'CARRANCAS',
            ],
            [
                "codigo_ibge" => 3114709,
                "estado_id" => 17,
                "nome" => 'CARVALHÓPOLIS',
            ],
            [
                "codigo_ibge" => 3114808,
                "estado_id" => 17,
                "nome" => 'CARVALHOS',
            ],
            [
                "codigo_ibge" => 3114907,
                "estado_id" => 17,
                "nome" => 'CASA GRANDE',
            ],
            [
                "codigo_ibge" => 3115003,
                "estado_id" => 17,
                "nome" => 'CASCALHO RICO',
            ],
            [
                "codigo_ibge" => 3115102,
                "estado_id" => 17,
                "nome" => 'CÁSSIA',
            ],
            [
                "codigo_ibge" => 3115201,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DA BARRA DE MINAS',
            ],
            [
                "codigo_ibge" => 3115300,
                "estado_id" => 17,
                "nome" => 'CATAGUASES',
            ],
            [
                "codigo_ibge" => 3115359,
                "estado_id" => 17,
                "nome" => 'CATAS ALTAS',
            ],
            [
                "codigo_ibge" => 3115409,
                "estado_id" => 17,
                "nome" => 'CATAS ALTAS DA NORUEGA',
            ],
            [
                "codigo_ibge" => 3115458,
                "estado_id" => 17,
                "nome" => 'CATUJI',
            ],
            [
                "codigo_ibge" => 3115474,
                "estado_id" => 17,
                "nome" => 'CATUTI',
            ],
            [
                "codigo_ibge" => 3115508,
                "estado_id" => 17,
                "nome" => 'CAXAMBU',
            ],
            [
                "codigo_ibge" => 3115607,
                "estado_id" => 17,
                "nome" => 'CEDRO DO ABAETÉ',
            ],
            [
                "codigo_ibge" => 3115706,
                "estado_id" => 17,
                "nome" => 'CENTRAL DE MINAS',
            ],
            [
                "codigo_ibge" => 3115805,
                "estado_id" => 17,
                "nome" => 'CENTRALINA',
            ],
            [
                "codigo_ibge" => 3115904,
                "estado_id" => 17,
                "nome" => 'CHÁCARA',
            ],
            [
                "codigo_ibge" => 3116001,
                "estado_id" => 17,
                "nome" => 'CHALÉ',
            ],
            [
                "codigo_ibge" => 3116100,
                "estado_id" => 17,
                "nome" => 'CHAPADA DO NORTE',
            ],
            [
                "codigo_ibge" => 3116159,
                "estado_id" => 17,
                "nome" => 'CHAPADA GAÚCHA',
            ],
            [
                "codigo_ibge" => 3116209,
                "estado_id" => 17,
                "nome" => 'CHIADOR',
            ],
            [
                "codigo_ibge" => 3116308,
                "estado_id" => 17,
                "nome" => 'CIPOTÂNEA',
            ],
            [
                "codigo_ibge" => 3116407,
                "estado_id" => 17,
                "nome" => 'CLARAVAL',
            ],
            [
                "codigo_ibge" => 3116506,
                "estado_id" => 17,
                "nome" => 'CLARO DOS POÇÕES',
            ],
            [
                "codigo_ibge" => 3116605,
                "estado_id" => 17,
                "nome" => 'CLÁUDIO',
            ],
            [
                "codigo_ibge" => 3116704,
                "estado_id" => 17,
                "nome" => 'COIMBRA',
            ],
            [
                "codigo_ibge" => 3116803,
                "estado_id" => 17,
                "nome" => 'COLUNA',
            ],
            [
                "codigo_ibge" => 3116902,
                "estado_id" => 17,
                "nome" => 'COMENDADOR GOMES',
            ],
            [
                "codigo_ibge" => 3117009,
                "estado_id" => 17,
                "nome" => 'COMERCINHO',
            ],
            [
                "codigo_ibge" => 3117108,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DA APARECIDA',
            ],
            [
                "codigo_ibge" => 3117207,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DAS PEDRAS',
            ],
            [
                "codigo_ibge" => 3117306,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DAS ALAGOAS',
            ],
            [
                "codigo_ibge" => 3117405,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DE IPANEMA',
            ],
            [
                "codigo_ibge" => 3117504,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DO MATO DENTRO',
            ],
            [
                "codigo_ibge" => 3117603,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DO PARÁ',
            ],
            [
                "codigo_ibge" => 3117702,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DO RIO VERDE',
            ],
            [
                "codigo_ibge" => 3117801,
                "estado_id" => 17,
                "nome" => 'CONCEIÇÃO DOS OUROS',
            ],
            [
                "codigo_ibge" => 3117836,
                "estado_id" => 17,
                "nome" => 'CÔNEGO MARINHO',
            ],
            [
                "codigo_ibge" => 3117876,
                "estado_id" => 17,
                "nome" => 'CONFINS',
            ],
            [
                "codigo_ibge" => 3117900,
                "estado_id" => 17,
                "nome" => 'CONGONHAL',
            ],
            [
                "codigo_ibge" => 3118007,
                "estado_id" => 17,
                "nome" => 'CONGONHAS',
            ],
            [
                "codigo_ibge" => 3118106,
                "estado_id" => 17,
                "nome" => 'CONGONHAS DO NORTE',
            ],
            [
                "codigo_ibge" => 3118205,
                "estado_id" => 17,
                "nome" => 'CONQUISTA',
            ],
            [
                "codigo_ibge" => 3118304,
                "estado_id" => 17,
                "nome" => 'CONSELHEIRO LAFAIETE',
            ],
            [
                "codigo_ibge" => 3118403,
                "estado_id" => 17,
                "nome" => 'CONSELHEIRO PENA',
            ],
            [
                "codigo_ibge" => 3118502,
                "estado_id" => 17,
                "nome" => 'CONSOLAÇÃO',
            ],
            [
                "codigo_ibge" => 3118601,
                "estado_id" => 17,
                "nome" => 'CONTAGEM',
            ],
            [
                "codigo_ibge" => 3118700,
                "estado_id" => 17,
                "nome" => 'COQUEIRAL',
            ],
            [
                "codigo_ibge" => 3118809,
                "estado_id" => 17,
                "nome" => 'CORAÇÃO DE JESUS',
            ],
            [
                "codigo_ibge" => 3118908,
                "estado_id" => 17,
                "nome" => 'CORDISBURGO',
            ],
            [
                "codigo_ibge" => 3119005,
                "estado_id" => 17,
                "nome" => 'CORDISLÂNDIA',
            ],
            [
                "codigo_ibge" => 3119104,
                "estado_id" => 17,
                "nome" => 'CORINTO',
            ],
            [
                "codigo_ibge" => 3119203,
                "estado_id" => 17,
                "nome" => 'COROACI',
            ],
            [
                "codigo_ibge" => 3119302,
                "estado_id" => 17,
                "nome" => 'COROMANDEL',
            ],
            [
                "codigo_ibge" => 3119401,
                "estado_id" => 17,
                "nome" => 'CORONEL FABRICIANO',
            ],
            [
                "codigo_ibge" => 3119500,
                "estado_id" => 17,
                "nome" => 'CORONEL MURTA',
            ],
            [
                "codigo_ibge" => 3119609,
                "estado_id" => 17,
                "nome" => 'CORONEL PACHECO',
            ],
            [
                "codigo_ibge" => 3119708,
                "estado_id" => 17,
                "nome" => 'CORONEL XAVIER CHAVES',
            ],
            [
                "codigo_ibge" => 3119807,
                "estado_id" => 17,
                "nome" => 'CÓRREGO DANTA',
            ],
            [
                "codigo_ibge" => 3119906,
                "estado_id" => 17,
                "nome" => 'CÓRREGO DO BOM JESUS',
            ],
            [
                "codigo_ibge" => 3119955,
                "estado_id" => 17,
                "nome" => 'CÓRREGO FUNDO',
            ],
            [
                "codigo_ibge" => 3120003,
                "estado_id" => 17,
                "nome" => 'CÓRREGO NOVO',
            ],
            [
                "codigo_ibge" => 3120102,
                "estado_id" => 17,
                "nome" => 'COUTO DE MAGALHÃES DE MINAS',
            ],
            [
                "codigo_ibge" => 3120151,
                "estado_id" => 17,
                "nome" => 'CRISÓLITA',
            ],
            [
                "codigo_ibge" => 3120201,
                "estado_id" => 17,
                "nome" => 'CRISTAIS',
            ],
            [
                "codigo_ibge" => 3120300,
                "estado_id" => 17,
                "nome" => 'CRISTÁLIA',
            ],
            [
                "codigo_ibge" => 3120409,
                "estado_id" => 17,
                "nome" => 'CRISTIANO OTONI',
            ],
            [
                "codigo_ibge" => 3120508,
                "estado_id" => 17,
                "nome" => 'CRISTINA',
            ],
            [
                "codigo_ibge" => 3120607,
                "estado_id" => 17,
                "nome" => 'CRUCILÂNDIA',
            ],
            [
                "codigo_ibge" => 3120706,
                "estado_id" => 17,
                "nome" => 'CRUZEIRO DA FORTALEZA',
            ],
            [
                "codigo_ibge" => 3120805,
                "estado_id" => 17,
                "nome" => 'CRUZÍLIA',
            ],
            [
                "codigo_ibge" => 3120839,
                "estado_id" => 17,
                "nome" => 'CUPARAQUE',
            ],
            [
                "codigo_ibge" => 3120870,
                "estado_id" => 17,
                "nome" => 'CURRAL DE DENTRO',
            ],
            [
                "codigo_ibge" => 3120904,
                "estado_id" => 17,
                "nome" => 'CURVELO',
            ],
            [
                "codigo_ibge" => 3121001,
                "estado_id" => 17,
                "nome" => 'DATAS',
            ],
            [
                "codigo_ibge" => 3121100,
                "estado_id" => 17,
                "nome" => 'DELFIM MOREIRA',
            ],
            [
                "codigo_ibge" => 3121209,
                "estado_id" => 17,
                "nome" => 'DELFINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3121258,
                "estado_id" => 17,
                "nome" => 'DELTA',
            ],
            [
                "codigo_ibge" => 3121308,
                "estado_id" => 17,
                "nome" => 'DESCOBERTO',
            ],
            [
                "codigo_ibge" => 3121407,
                "estado_id" => 17,
                "nome" => 'DESTERRO DE ENTRE RIOS',
            ],
            [
                "codigo_ibge" => 3121506,
                "estado_id" => 17,
                "nome" => 'DESTERRO DO MELO',
            ],
            [
                "codigo_ibge" => 3121605,
                "estado_id" => 17,
                "nome" => 'DIAMANTINA',
            ],
            [
                "codigo_ibge" => 3121704,
                "estado_id" => 17,
                "nome" => 'DIOGO DE VASCONCELOS',
            ],
            [
                "codigo_ibge" => 3121803,
                "estado_id" => 17,
                "nome" => 'DIONÍSIO',
            ],
            [
                "codigo_ibge" => 3121902,
                "estado_id" => 17,
                "nome" => 'DIVINÉSIA',
            ],
            [
                "codigo_ibge" => 3122009,
                "estado_id" => 17,
                "nome" => 'DIVINO',
            ],
            [
                "codigo_ibge" => 3122108,
                "estado_id" => 17,
                "nome" => 'DIVINO DAS LARANJEIRAS',
            ],
            [
                "codigo_ibge" => 3122207,
                "estado_id" => 17,
                "nome" => 'DIVINOLÂNDIA DE MINAS',
            ],
            [
                "codigo_ibge" => 3122306,
                "estado_id" => 17,
                "nome" => 'DIVINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3122355,
                "estado_id" => 17,
                "nome" => 'DIVISA ALEGRE',
            ],
            [
                "codigo_ibge" => 3122405,
                "estado_id" => 17,
                "nome" => 'DIVISA NOVA',
            ],
            [
                "codigo_ibge" => 3122454,
                "estado_id" => 17,
                "nome" => 'DIVISÓPOLIS',
            ],
            [
                "codigo_ibge" => 3122470,
                "estado_id" => 17,
                "nome" => 'DOM BOSCO',
            ],
            [
                "codigo_ibge" => 3122504,
                "estado_id" => 17,
                "nome" => 'DOM CAVATI',
            ],
            [
                "codigo_ibge" => 3122603,
                "estado_id" => 17,
                "nome" => 'DOM JOAQUIM',
            ],
            [
                "codigo_ibge" => 3122702,
                "estado_id" => 17,
                "nome" => 'DOM SILVÉRIO',
            ],
            [
                "codigo_ibge" => 3122801,
                "estado_id" => 17,
                "nome" => 'DOM VIÇOSO',
            ],
            [
                "codigo_ibge" => 3122900,
                "estado_id" => 17,
                "nome" => 'DONA EUSÉBIA',
            ],
            [
                "codigo_ibge" => 3123007,
                "estado_id" => 17,
                "nome" => 'DORES DE CAMPOS',
            ],
            [
                "codigo_ibge" => 3123106,
                "estado_id" => 17,
                "nome" => 'DORES DE GUANHÃES',
            ],
            [
                "codigo_ibge" => 3123205,
                "estado_id" => 17,
                "nome" => 'DORES DO INDAIÁ',
            ],
            [
                "codigo_ibge" => 3123304,
                "estado_id" => 17,
                "nome" => 'DORES DO TURVO',
            ],
            [
                "codigo_ibge" => 3123403,
                "estado_id" => 17,
                "nome" => 'DORESÓPOLIS',
            ],
            [
                "codigo_ibge" => 3123502,
                "estado_id" => 17,
                "nome" => 'DOURADOQUARA',
            ],
            [
                "codigo_ibge" => 3123528,
                "estado_id" => 17,
                "nome" => 'DURANDÉ',
            ],
            [
                "codigo_ibge" => 3123601,
                "estado_id" => 17,
                "nome" => 'ELÓI MENDES',
            ],
            [
                "codigo_ibge" => 3123700,
                "estado_id" => 17,
                "nome" => 'ENGENHEIRO CALDAS',
            ],
            [
                "codigo_ibge" => 3123809,
                "estado_id" => 17,
                "nome" => 'ENGENHEIRO NAVARRO',
            ],
            [
                "codigo_ibge" => 3123858,
                "estado_id" => 17,
                "nome" => 'ENTRE FOLHAS',
            ],
            [
                "codigo_ibge" => 3123908,
                "estado_id" => 17,
                "nome" => 'ENTRE RIOS DE MINAS',
            ],
            [
                "codigo_ibge" => 3124005,
                "estado_id" => 17,
                "nome" => 'ERVÁLIA',
            ],
            [
                "codigo_ibge" => 3124104,
                "estado_id" => 17,
                "nome" => 'ESMERALDAS',
            ],
            [
                "codigo_ibge" => 3124203,
                "estado_id" => 17,
                "nome" => 'ESPERA FELIZ',
            ],
            [
                "codigo_ibge" => 3124302,
                "estado_id" => 17,
                "nome" => 'ESPINOSA',
            ],
            [
                "codigo_ibge" => 3124401,
                "estado_id" => 17,
                "nome" => 'ESPÍRITO SANTO DO DOURADO',
            ],
            [
                "codigo_ibge" => 3124500,
                "estado_id" => 17,
                "nome" => 'ESTIVA',
            ],
            [
                "codigo_ibge" => 3124609,
                "estado_id" => 17,
                "nome" => 'ESTRELA DALVA',
            ],
            [
                "codigo_ibge" => 3124708,
                "estado_id" => 17,
                "nome" => 'ESTRELA DO INDAIÁ',
            ],
            [
                "codigo_ibge" => 3124807,
                "estado_id" => 17,
                "nome" => 'ESTRELA DO SUL',
            ],
            [
                "codigo_ibge" => 3124906,
                "estado_id" => 17,
                "nome" => 'EUGENÓPOLIS',
            ],
            [
                "codigo_ibge" => 3125002,
                "estado_id" => 17,
                "nome" => 'EWBANK DA CÂMARA',
            ],
            [
                "codigo_ibge" => 3125101,
                "estado_id" => 17,
                "nome" => 'EXTREMA',
            ],
            [
                "codigo_ibge" => 3125200,
                "estado_id" => 17,
                "nome" => 'FAMA',
            ],
            [
                "codigo_ibge" => 3125309,
                "estado_id" => 17,
                "nome" => 'FARIA LEMOS',
            ],
            [
                "codigo_ibge" => 3125408,
                "estado_id" => 17,
                "nome" => 'FELÍCIO DOS SANTOS',
            ],
            [
                "codigo_ibge" => 3125507,
                "estado_id" => 17,
                "nome" => 'SÃO GONÇALO DO RIO PRETO',
            ],
            [
                "codigo_ibge" => 3125606,
                "estado_id" => 17,
                "nome" => 'FELISBURGO',
            ],
            [
                "codigo_ibge" => 3125705,
                "estado_id" => 17,
                "nome" => 'FELIXLÂNDIA',
            ],
            [
                "codigo_ibge" => 3125804,
                "estado_id" => 17,
                "nome" => 'FERNANDES TOURINHO',
            ],
            [
                "codigo_ibge" => 3125903,
                "estado_id" => 17,
                "nome" => 'FERROS',
            ],
            [
                "codigo_ibge" => 3125952,
                "estado_id" => 17,
                "nome" => 'FERVEDOURO',
            ],
            [
                "codigo_ibge" => 3126000,
                "estado_id" => 17,
                "nome" => 'FLORESTAL',
            ],
            [
                "codigo_ibge" => 3126109,
                "estado_id" => 17,
                "nome" => 'FORMIGA',
            ],
            [
                "codigo_ibge" => 3126208,
                "estado_id" => 17,
                "nome" => 'FORMOSO',
            ],
            [
                "codigo_ibge" => 3126307,
                "estado_id" => 17,
                "nome" => 'FORTALEZA DE MINAS',
            ],
            [
                "codigo_ibge" => 3126406,
                "estado_id" => 17,
                "nome" => 'FORTUNA DE MINAS',
            ],
            [
                "codigo_ibge" => 3126505,
                "estado_id" => 17,
                "nome" => 'FRANCISCO BADARÓ',
            ],
            [
                "codigo_ibge" => 3126604,
                "estado_id" => 17,
                "nome" => 'FRANCISCO DUMONT',
            ],
            [
                "codigo_ibge" => 3126703,
                "estado_id" => 17,
                "nome" => 'FRANCISCO SÁ',
            ],
            [
                "codigo_ibge" => 3126752,
                "estado_id" => 17,
                "nome" => 'FRANCISCÓPOLIS',
            ],
            [
                "codigo_ibge" => 3126802,
                "estado_id" => 17,
                "nome" => 'FREI GASPAR',
            ],
            [
                "codigo_ibge" => 3126901,
                "estado_id" => 17,
                "nome" => 'FREI INOCÊNCIO',
            ],
            [
                "codigo_ibge" => 3126950,
                "estado_id" => 17,
                "nome" => 'FREI LAGONEGRO',
            ],
            [
                "codigo_ibge" => 3127008,
                "estado_id" => 17,
                "nome" => 'FRONTEIRA',
            ],
            [
                "codigo_ibge" => 3127057,
                "estado_id" => 17,
                "nome" => 'FRONTEIRA DOS VALES',
            ],
            [
                "codigo_ibge" => 3127073,
                "estado_id" => 17,
                "nome" => 'FRUTA DE LEITE',
            ],
            [
                "codigo_ibge" => 3127107,
                "estado_id" => 17,
                "nome" => 'FRUTAL',
            ],
            [
                "codigo_ibge" => 3127206,
                "estado_id" => 17,
                "nome" => 'FUNILÂNDIA',
            ],
            [
                "codigo_ibge" => 3127305,
                "estado_id" => 17,
                "nome" => 'GALILÉIA',
            ],
            [
                "codigo_ibge" => 3127339,
                "estado_id" => 17,
                "nome" => 'GAMELEIRAS',
            ],
            [
                "codigo_ibge" => 3127354,
                "estado_id" => 17,
                "nome" => 'GLAUCILÂNDIA',
            ],
            [
                "codigo_ibge" => 3127370,
                "estado_id" => 17,
                "nome" => 'GOIABEIRA',
            ],
            [
                "codigo_ibge" => 3127388,
                "estado_id" => 17,
                "nome" => 'GOIANÁ',
            ],
            [
                "codigo_ibge" => 3127404,
                "estado_id" => 17,
                "nome" => 'GONÇALVES',
            ],
            [
                "codigo_ibge" => 3127503,
                "estado_id" => 17,
                "nome" => 'GONZAGA',
            ],
            [
                "codigo_ibge" => 3127602,
                "estado_id" => 17,
                "nome" => 'GOUVEIA',
            ],
            [
                "codigo_ibge" => 3127701,
                "estado_id" => 17,
                "nome" => 'GOVERNADOR VALADARES',
            ],
            [
                "codigo_ibge" => 3127800,
                "estado_id" => 17,
                "nome" => 'GRÃO MOGOL',
            ],
            [
                "codigo_ibge" => 3127909,
                "estado_id" => 17,
                "nome" => 'GRUPIARA',
            ],
            [
                "codigo_ibge" => 3128006,
                "estado_id" => 17,
                "nome" => 'GUANHÃES',
            ],
            [
                "codigo_ibge" => 3128105,
                "estado_id" => 17,
                "nome" => 'GUAPÉ',
            ],
            [
                "codigo_ibge" => 3128204,
                "estado_id" => 17,
                "nome" => 'GUARACIABA',
            ],
            [
                "codigo_ibge" => 3128253,
                "estado_id" => 17,
                "nome" => 'GUARACIAMA',
            ],
            [
                "codigo_ibge" => 3128303,
                "estado_id" => 17,
                "nome" => 'GUARANÉSIA',
            ],
            [
                "codigo_ibge" => 3128402,
                "estado_id" => 17,
                "nome" => 'GUARANI',
            ],
            [
                "codigo_ibge" => 3128501,
                "estado_id" => 17,
                "nome" => 'GUARARÁ',
            ],
            [
                "codigo_ibge" => 3128600,
                "estado_id" => 17,
                "nome" => 'GUARDA-MOR',
            ],
            [
                "codigo_ibge" => 3128709,
                "estado_id" => 17,
                "nome" => 'GUAXUPÉ',
            ],
            [
                "codigo_ibge" => 3128808,
                "estado_id" => 17,
                "nome" => 'GUIDOVAL',
            ],
            [
                "codigo_ibge" => 3128907,
                "estado_id" => 17,
                "nome" => 'GUIMARÂNIA',
            ],
            [
                "codigo_ibge" => 3129004,
                "estado_id" => 17,
                "nome" => 'GUIRICEMA',
            ],
            [
                "codigo_ibge" => 3129103,
                "estado_id" => 17,
                "nome" => 'GURINHATÃ',
            ],
            [
                "codigo_ibge" => 3129202,
                "estado_id" => 17,
                "nome" => 'HELIODORA',
            ],
            [
                "codigo_ibge" => 3129301,
                "estado_id" => 17,
                "nome" => 'IAPU',
            ],
            [
                "codigo_ibge" => 3129400,
                "estado_id" => 17,
                "nome" => 'IBERTIOGA',
            ],
            [
                "codigo_ibge" => 3129509,
                "estado_id" => 17,
                "nome" => 'IBIÁ',
            ],
            [
                "codigo_ibge" => 3129608,
                "estado_id" => 17,
                "nome" => 'IBIAÍ',
            ],
            [
                "codigo_ibge" => 3129657,
                "estado_id" => 17,
                "nome" => 'IBIRACATU',
            ],
            [
                "codigo_ibge" => 3129707,
                "estado_id" => 17,
                "nome" => 'IBIRACI',
            ],
            [
                "codigo_ibge" => 3129806,
                "estado_id" => 17,
                "nome" => 'IBIRITÉ',
            ],
            [
                "codigo_ibge" => 3129905,
                "estado_id" => 17,
                "nome" => 'IBITIÚRA DE MINAS',
            ],
            [
                "codigo_ibge" => 3130002,
                "estado_id" => 17,
                "nome" => 'IBITURUNA',
            ],
            [
                "codigo_ibge" => 3130051,
                "estado_id" => 17,
                "nome" => 'ICARAÍ DE MINAS',
            ],
            [
                "codigo_ibge" => 3130101,
                "estado_id" => 17,
                "nome" => 'IGARAPÉ',
            ],
            [
                "codigo_ibge" => 3130200,
                "estado_id" => 17,
                "nome" => 'IGARATINGA',
            ],
            [
                "codigo_ibge" => 3130309,
                "estado_id" => 17,
                "nome" => 'IGUATAMA',
            ],
            [
                "codigo_ibge" => 3130408,
                "estado_id" => 17,
                "nome" => 'IJACI',
            ],
            [
                "codigo_ibge" => 3130507,
                "estado_id" => 17,
                "nome" => 'ILICÍNEA',
            ],
            [
                "codigo_ibge" => 3130556,
                "estado_id" => 17,
                "nome" => 'IMBÉ DE MINAS',
            ],
            [
                "codigo_ibge" => 3130606,
                "estado_id" => 17,
                "nome" => 'INCONFIDENTES',
            ],
            [
                "codigo_ibge" => 3130655,
                "estado_id" => 17,
                "nome" => 'INDAIABIRA',
            ],
            [
                "codigo_ibge" => 3130705,
                "estado_id" => 17,
                "nome" => 'INDIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 3130804,
                "estado_id" => 17,
                "nome" => 'INGAÍ',
            ],
            [
                "codigo_ibge" => 3130903,
                "estado_id" => 17,
                "nome" => 'INHAPIM',
            ],
            [
                "codigo_ibge" => 3131000,
                "estado_id" => 17,
                "nome" => 'INHAÚMA',
            ],
            [
                "codigo_ibge" => 3131109,
                "estado_id" => 17,
                "nome" => 'INIMUTABA',
            ],
            [
                "codigo_ibge" => 3131158,
                "estado_id" => 17,
                "nome" => 'IPABA',
            ],
            [
                "codigo_ibge" => 3131208,
                "estado_id" => 17,
                "nome" => 'IPANEMA',
            ],
            [
                "codigo_ibge" => 3131307,
                "estado_id" => 17,
                "nome" => 'IPATINGA',
            ],
            [
                "codigo_ibge" => 3131406,
                "estado_id" => 17,
                "nome" => 'IPIAÇU',
            ],
            [
                "codigo_ibge" => 3131505,
                "estado_id" => 17,
                "nome" => 'IPUIÚNA',
            ],
            [
                "codigo_ibge" => 3131604,
                "estado_id" => 17,
                "nome" => 'IRAÍ DE MINAS',
            ],
            [
                "codigo_ibge" => 3131703,
                "estado_id" => 17,
                "nome" => 'ITABIRA',
            ],
            [
                "codigo_ibge" => 3131802,
                "estado_id" => 17,
                "nome" => 'ITABIRINHA',
            ],
            [
                "codigo_ibge" => 3131901,
                "estado_id" => 17,
                "nome" => 'ITABIRITO',
            ],
            [
                "codigo_ibge" => 3132008,
                "estado_id" => 17,
                "nome" => 'ITACAMBIRA',
            ],
            [
                "codigo_ibge" => 3132107,
                "estado_id" => 17,
                "nome" => 'ITACARAMBI',
            ],
            [
                "codigo_ibge" => 3132206,
                "estado_id" => 17,
                "nome" => 'ITAGUARA',
            ],
            [
                "codigo_ibge" => 3132305,
                "estado_id" => 17,
                "nome" => 'ITAIPÉ',
            ],
            [
                "codigo_ibge" => 3132404,
                "estado_id" => 17,
                "nome" => 'ITAJUBÁ',
            ],
            [
                "codigo_ibge" => 3132503,
                "estado_id" => 17,
                "nome" => 'ITAMARANDIBA',
            ],
            [
                "codigo_ibge" => 3132602,
                "estado_id" => 17,
                "nome" => 'ITAMARATI DE MINAS',
            ],
            [
                "codigo_ibge" => 3132701,
                "estado_id" => 17,
                "nome" => 'ITAMBACURI',
            ],
            [
                "codigo_ibge" => 3132800,
                "estado_id" => 17,
                "nome" => 'ITAMBÉ DO MATO DENTRO',
            ],
            [
                "codigo_ibge" => 3132909,
                "estado_id" => 17,
                "nome" => 'ITAMOGI',
            ],
            [
                "codigo_ibge" => 3133006,
                "estado_id" => 17,
                "nome" => 'ITAMONTE',
            ],
            [
                "codigo_ibge" => 3133105,
                "estado_id" => 17,
                "nome" => 'ITANHANDU',
            ],
            [
                "codigo_ibge" => 3133204,
                "estado_id" => 17,
                "nome" => 'ITANHOMI',
            ],
            [
                "codigo_ibge" => 3133303,
                "estado_id" => 17,
                "nome" => 'ITAOBIM',
            ],
            [
                "codigo_ibge" => 3133402,
                "estado_id" => 17,
                "nome" => 'ITAPAGIPE',
            ],
            [
                "codigo_ibge" => 3133501,
                "estado_id" => 17,
                "nome" => 'ITAPECERICA',
            ],
            [
                "codigo_ibge" => 3133600,
                "estado_id" => 17,
                "nome" => 'ITAPEVA',
            ],
            [
                "codigo_ibge" => 3133709,
                "estado_id" => 17,
                "nome" => 'ITATIAIUÇU',
            ],
            [
                "codigo_ibge" => 3133758,
                "estado_id" => 17,
                "nome" => 'ITAÚ DE MINAS',
            ],
            [
                "codigo_ibge" => 3133808,
                "estado_id" => 17,
                "nome" => 'ITAÚNA',
            ],
            [
                "codigo_ibge" => 3133907,
                "estado_id" => 17,
                "nome" => 'ITAVERAVA',
            ],
            [
                "codigo_ibge" => 3134004,
                "estado_id" => 17,
                "nome" => 'ITINGA',
            ],
            [
                "codigo_ibge" => 3134103,
                "estado_id" => 17,
                "nome" => 'ITUETA',
            ],
            [
                "codigo_ibge" => 3134202,
                "estado_id" => 17,
                "nome" => 'ITUIUTABA',
            ],
            [
                "codigo_ibge" => 3134301,
                "estado_id" => 17,
                "nome" => 'ITUMIRIM',
            ],
            [
                "codigo_ibge" => 3134400,
                "estado_id" => 17,
                "nome" => 'ITURAMA',
            ],
            [
                "codigo_ibge" => 3134509,
                "estado_id" => 17,
                "nome" => 'ITUTINGA',
            ],
            [
                "codigo_ibge" => 3134608,
                "estado_id" => 17,
                "nome" => 'JABOTICATUBAS',
            ],
            [
                "codigo_ibge" => 3134707,
                "estado_id" => 17,
                "nome" => 'JACINTO',
            ],
            [
                "codigo_ibge" => 3134806,
                "estado_id" => 17,
                "nome" => 'JACUÍ',
            ],
            [
                "codigo_ibge" => 3134905,
                "estado_id" => 17,
                "nome" => 'JACUTINGA',
            ],
            [
                "codigo_ibge" => 3135001,
                "estado_id" => 17,
                "nome" => 'JAGUARAÇU',
            ],
            [
                "codigo_ibge" => 3135050,
                "estado_id" => 17,
                "nome" => 'JAÍBA',
            ],
            [
                "codigo_ibge" => 3135076,
                "estado_id" => 17,
                "nome" => 'JAMPRUCA',
            ],
            [
                "codigo_ibge" => 3135100,
                "estado_id" => 17,
                "nome" => 'JANAÚBA',
            ],
            [
                "codigo_ibge" => 3135209,
                "estado_id" => 17,
                "nome" => 'JANUÁRIA',
            ],
            [
                "codigo_ibge" => 3135308,
                "estado_id" => 17,
                "nome" => 'JAPARAÍBA',
            ],
            [
                "codigo_ibge" => 3135357,
                "estado_id" => 17,
                "nome" => 'JAPONVAR',
            ],
            [
                "codigo_ibge" => 3135407,
                "estado_id" => 17,
                "nome" => 'JECEABA',
            ],
            [
                "codigo_ibge" => 3135456,
                "estado_id" => 17,
                "nome" => 'JENIPAPO DE MINAS',
            ],
            [
                "codigo_ibge" => 3135506,
                "estado_id" => 17,
                "nome" => 'JEQUERI',
            ],
            [
                "codigo_ibge" => 3135605,
                "estado_id" => 17,
                "nome" => 'JEQUITAÍ',
            ],
            [
                "codigo_ibge" => 3135704,
                "estado_id" => 17,
                "nome" => 'JEQUITIBÁ',
            ],
            [
                "codigo_ibge" => 3135803,
                "estado_id" => 17,
                "nome" => 'JEQUITINHONHA',
            ],
            [
                "codigo_ibge" => 3135902,
                "estado_id" => 17,
                "nome" => 'JESUÂNIA',
            ],
            [
                "codigo_ibge" => 3136009,
                "estado_id" => 17,
                "nome" => 'JOAÍMA',
            ],
            [
                "codigo_ibge" => 3136108,
                "estado_id" => 17,
                "nome" => 'JOANÉSIA',
            ],
            [
                "codigo_ibge" => 3136207,
                "estado_id" => 17,
                "nome" => 'JOÃO MONLEVADE',
            ],
            [
                "codigo_ibge" => 3136306,
                "estado_id" => 17,
                "nome" => 'JOÃO PINHEIRO',
            ],
            [
                "codigo_ibge" => 3136405,
                "estado_id" => 17,
                "nome" => 'JOAQUIM FELÍCIO',
            ],
            [
                "codigo_ibge" => 3136504,
                "estado_id" => 17,
                "nome" => 'JORDÂNIA',
            ],
            [
                "codigo_ibge" => 3136520,
                "estado_id" => 17,
                "nome" => 'JOSÉ GONÇALVES DE MINAS',
            ],
            [
                "codigo_ibge" => 3136553,
                "estado_id" => 17,
                "nome" => 'JOSÉ RAYDAN',
            ],
            [
                "codigo_ibge" => 3136579,
                "estado_id" => 17,
                "nome" => 'JOSENÓPOLIS',
            ],
            [
                "codigo_ibge" => 3136603,
                "estado_id" => 17,
                "nome" => 'NOVA UNIÃO',
            ],
            [
                "codigo_ibge" => 3136652,
                "estado_id" => 17,
                "nome" => 'JUATUBA',
            ],
            [
                "codigo_ibge" => 3136702,
                "estado_id" => 17,
                "nome" => 'JUIZ DE FORA',
            ],
            [
                "codigo_ibge" => 3136801,
                "estado_id" => 17,
                "nome" => 'JURAMENTO',
            ],
            [
                "codigo_ibge" => 3136900,
                "estado_id" => 17,
                "nome" => 'JURUAIA',
            ],
            [
                "codigo_ibge" => 3136959,
                "estado_id" => 17,
                "nome" => 'JUVENÍLIA',
            ],
            [
                "codigo_ibge" => 3137007,
                "estado_id" => 17,
                "nome" => 'LADAINHA',
            ],
            [
                "codigo_ibge" => 3137106,
                "estado_id" => 17,
                "nome" => 'LAGAMAR',
            ],
            [
                "codigo_ibge" => 3137205,
                "estado_id" => 17,
                "nome" => 'LAGOA DA PRATA',
            ],
            [
                "codigo_ibge" => 3137304,
                "estado_id" => 17,
                "nome" => 'LAGOA DOS PATOS',
            ],
            [
                "codigo_ibge" => 3137403,
                "estado_id" => 17,
                "nome" => 'LAGOA DOURADA',
            ],
            [
                "codigo_ibge" => 3137502,
                "estado_id" => 17,
                "nome" => 'LAGOA FORMOSA',
            ],
            [
                "codigo_ibge" => 3137536,
                "estado_id" => 17,
                "nome" => 'LAGOA GRANDE',
            ],
            [
                "codigo_ibge" => 3137601,
                "estado_id" => 17,
                "nome" => 'LAGOA SANTA',
            ],
            [
                "codigo_ibge" => 3137700,
                "estado_id" => 17,
                "nome" => 'LAJINHA',
            ],
            [
                "codigo_ibge" => 3137809,
                "estado_id" => 17,
                "nome" => 'LAMBARI',
            ],
            [
                "codigo_ibge" => 3137908,
                "estado_id" => 17,
                "nome" => 'LAMIM',
            ],
            [
                "codigo_ibge" => 3138005,
                "estado_id" => 17,
                "nome" => 'LARANJAL',
            ],
            [
                "codigo_ibge" => 3138104,
                "estado_id" => 17,
                "nome" => 'LASSANCE',
            ],
            [
                "codigo_ibge" => 3138203,
                "estado_id" => 17,
                "nome" => 'LAVRAS',
            ],
            [
                "codigo_ibge" => 3138302,
                "estado_id" => 17,
                "nome" => 'LEANDRO FERREIRA',
            ],
            [
                "codigo_ibge" => 3138351,
                "estado_id" => 17,
                "nome" => 'LEME DO PRADO',
            ],
            [
                "codigo_ibge" => 3138401,
                "estado_id" => 17,
                "nome" => 'LEOPOLDINA',
            ],
            [
                "codigo_ibge" => 3138500,
                "estado_id" => 17,
                "nome" => 'LIBERDADE',
            ],
            [
                "codigo_ibge" => 3138609,
                "estado_id" => 17,
                "nome" => 'LIMA DUARTE',
            ],
            [
                "codigo_ibge" => 3138625,
                "estado_id" => 17,
                "nome" => 'LIMEIRA DO OESTE',
            ],
            [
                "codigo_ibge" => 3138658,
                "estado_id" => 17,
                "nome" => 'LONTRA',
            ],
            [
                "codigo_ibge" => 3138674,
                "estado_id" => 17,
                "nome" => 'LUISBURGO',
            ],
            [
                "codigo_ibge" => 3138682,
                "estado_id" => 17,
                "nome" => 'LUISLÂNDIA',
            ],
            [
                "codigo_ibge" => 3138708,
                "estado_id" => 17,
                "nome" => 'LUMINÁRIAS',
            ],
            [
                "codigo_ibge" => 3138807,
                "estado_id" => 17,
                "nome" => 'LUZ',
            ],
            [
                "codigo_ibge" => 3138906,
                "estado_id" => 17,
                "nome" => 'MACHACALIS',
            ],
            [
                "codigo_ibge" => 3139003,
                "estado_id" => 17,
                "nome" => 'MACHADO',
            ],
            [
                "codigo_ibge" => 3139102,
                "estado_id" => 17,
                "nome" => 'MADRE DE DEUS DE MINAS',
            ],
            [
                "codigo_ibge" => 3139201,
                "estado_id" => 17,
                "nome" => 'MALACACHETA',
            ],
            [
                "codigo_ibge" => 3139250,
                "estado_id" => 17,
                "nome" => 'MAMONAS',
            ],
            [
                "codigo_ibge" => 3139300,
                "estado_id" => 17,
                "nome" => 'MANGA',
            ],
            [
                "codigo_ibge" => 3139409,
                "estado_id" => 17,
                "nome" => 'MANHUAÇU',
            ],
            [
                "codigo_ibge" => 3139508,
                "estado_id" => 17,
                "nome" => 'MANHUMIRIM',
            ],
            [
                "codigo_ibge" => 3139607,
                "estado_id" => 17,
                "nome" => 'MANTENA',
            ],
            [
                "codigo_ibge" => 3139706,
                "estado_id" => 17,
                "nome" => 'MARAVILHAS',
            ],
            [
                "codigo_ibge" => 3139805,
                "estado_id" => 17,
                "nome" => 'MAR DE ESPANHA',
            ],
            [
                "codigo_ibge" => 3139904,
                "estado_id" => 17,
                "nome" => 'MARIA DA FÉ',
            ],
            [
                "codigo_ibge" => 3140001,
                "estado_id" => 17,
                "nome" => 'MARIANA',
            ],
            [
                "codigo_ibge" => 3140100,
                "estado_id" => 17,
                "nome" => 'MARILAC',
            ],
            [
                "codigo_ibge" => 3140159,
                "estado_id" => 17,
                "nome" => 'MÁRIO CAMPOS',
            ],
            [
                "codigo_ibge" => 3140209,
                "estado_id" => 17,
                "nome" => 'MARIPÁ DE MINAS',
            ],
            [
                "codigo_ibge" => 3140308,
                "estado_id" => 17,
                "nome" => 'MARLIÉRIA',
            ],
            [
                "codigo_ibge" => 3140407,
                "estado_id" => 17,
                "nome" => 'MARMELÓPOLIS',
            ],
            [
                "codigo_ibge" => 3140506,
                "estado_id" => 17,
                "nome" => 'MARTINHO CAMPOS',
            ],
            [
                "codigo_ibge" => 3140530,
                "estado_id" => 17,
                "nome" => 'MARTINS SOARES',
            ],
            [
                "codigo_ibge" => 3140555,
                "estado_id" => 17,
                "nome" => 'MATA VERDE',
            ],
            [
                "codigo_ibge" => 3140605,
                "estado_id" => 17,
                "nome" => 'MATERLÂNDIA',
            ],
            [
                "codigo_ibge" => 3140704,
                "estado_id" => 17,
                "nome" => 'MATEUS LEME',
            ],
            [
                "codigo_ibge" => 3140803,
                "estado_id" => 17,
                "nome" => 'MATIAS BARBOSA',
            ],
            [
                "codigo_ibge" => 3140852,
                "estado_id" => 17,
                "nome" => 'MATIAS CARDOSO',
            ],
            [
                "codigo_ibge" => 3140902,
                "estado_id" => 17,
                "nome" => 'MATIPÓ',
            ],
            [
                "codigo_ibge" => 3141009,
                "estado_id" => 17,
                "nome" => 'MATO VERDE',
            ],
            [
                "codigo_ibge" => 3141108,
                "estado_id" => 17,
                "nome" => 'MATOZINHOS',
            ],
            [
                "codigo_ibge" => 3141207,
                "estado_id" => 17,
                "nome" => 'MATUTINA',
            ],
            [
                "codigo_ibge" => 3141306,
                "estado_id" => 17,
                "nome" => 'MEDEIROS',
            ],
            [
                "codigo_ibge" => 3141405,
                "estado_id" => 17,
                "nome" => 'MEDINA',
            ],
            [
                "codigo_ibge" => 3141504,
                "estado_id" => 17,
                "nome" => 'MENDES PIMENTEL',
            ],
            [
                "codigo_ibge" => 3141603,
                "estado_id" => 17,
                "nome" => 'MERCÊS',
            ],
            [
                "codigo_ibge" => 3141702,
                "estado_id" => 17,
                "nome" => 'MESQUITA',
            ],
            [
                "codigo_ibge" => 3141801,
                "estado_id" => 17,
                "nome" => 'MINAS NOVAS',
            ],
            [
                "codigo_ibge" => 3141900,
                "estado_id" => 17,
                "nome" => 'MINDURI',
            ],
            [
                "codigo_ibge" => 3142007,
                "estado_id" => 17,
                "nome" => 'MIRABELA',
            ],
            [
                "codigo_ibge" => 3142106,
                "estado_id" => 17,
                "nome" => 'MIRADOURO',
            ],
            [
                "codigo_ibge" => 3142205,
                "estado_id" => 17,
                "nome" => 'MIRAÍ',
            ],
            [
                "codigo_ibge" => 3142254,
                "estado_id" => 17,
                "nome" => 'MIRAVÂNIA',
            ],
            [
                "codigo_ibge" => 3142304,
                "estado_id" => 17,
                "nome" => 'MOEDA',
            ],
            [
                "codigo_ibge" => 3142403,
                "estado_id" => 17,
                "nome" => 'MOEMA',
            ],
            [
                "codigo_ibge" => 3142502,
                "estado_id" => 17,
                "nome" => 'MONJOLOS',
            ],
            [
                "codigo_ibge" => 3142601,
                "estado_id" => 17,
                "nome" => 'MONSENHOR PAULO',
            ],
            [
                "codigo_ibge" => 3142700,
                "estado_id" => 17,
                "nome" => 'MONTALVÂNIA',
            ],
            [
                "codigo_ibge" => 3142809,
                "estado_id" => 17,
                "nome" => 'MONTE ALEGRE DE MINAS',
            ],
            [
                "codigo_ibge" => 3142908,
                "estado_id" => 17,
                "nome" => 'MONTE AZUL',
            ],
            [
                "codigo_ibge" => 3143005,
                "estado_id" => 17,
                "nome" => 'MONTE BELO',
            ],
            [
                "codigo_ibge" => 3143104,
                "estado_id" => 17,
                "nome" => 'MONTE CARMELO',
            ],
            [
                "codigo_ibge" => 3143153,
                "estado_id" => 17,
                "nome" => 'MONTE FORMOSO',
            ],
            [
                "codigo_ibge" => 3143203,
                "estado_id" => 17,
                "nome" => 'MONTE SANTO DE MINAS',
            ],
            [
                "codigo_ibge" => 3143302,
                "estado_id" => 17,
                "nome" => 'MONTES CLAROS',
            ],
            [
                "codigo_ibge" => 3143401,
                "estado_id" => 17,
                "nome" => 'MONTE SIÃO',
            ],
            [
                "codigo_ibge" => 3143450,
                "estado_id" => 17,
                "nome" => 'MONTEZUMA',
            ],
            [
                "codigo_ibge" => 3143500,
                "estado_id" => 17,
                "nome" => 'MORADA NOVA DE MINAS',
            ],
            [
                "codigo_ibge" => 3143609,
                "estado_id" => 17,
                "nome" => 'MORRO DA GARÇA',
            ],
            [
                "codigo_ibge" => 3143708,
                "estado_id" => 17,
                "nome" => 'MORRO DO PILAR',
            ],
            [
                "codigo_ibge" => 3143807,
                "estado_id" => 17,
                "nome" => 'MUNHOZ',
            ],
            [
                "codigo_ibge" => 3143906,
                "estado_id" => 17,
                "nome" => 'MURIAÉ',
            ],
            [
                "codigo_ibge" => 3144003,
                "estado_id" => 17,
                "nome" => 'MUTUM',
            ],
            [
                "codigo_ibge" => 3144102,
                "estado_id" => 17,
                "nome" => 'MUZAMBINHO',
            ],
            [
                "codigo_ibge" => 3144201,
                "estado_id" => 17,
                "nome" => 'NACIP RAYDAN',
            ],
            [
                "codigo_ibge" => 3144300,
                "estado_id" => 17,
                "nome" => 'NANUQUE',
            ],
            [
                "codigo_ibge" => 3144359,
                "estado_id" => 17,
                "nome" => 'NAQUE',
            ],
            [
                "codigo_ibge" => 3144375,
                "estado_id" => 17,
                "nome" => 'NATALÂNDIA',
            ],
            [
                "codigo_ibge" => 3144409,
                "estado_id" => 17,
                "nome" => 'NATÉRCIA',
            ],
            [
                "codigo_ibge" => 3144508,
                "estado_id" => 17,
                "nome" => 'NAZARENO',
            ],
            [
                "codigo_ibge" => 3144607,
                "estado_id" => 17,
                "nome" => 'NEPOMUCENO',
            ],
            [
                "codigo_ibge" => 3144656,
                "estado_id" => 17,
                "nome" => 'NINHEIRA',
            ],
            [
                "codigo_ibge" => 3144672,
                "estado_id" => 17,
                "nome" => 'NOVA BELÉM',
            ],
            [
                "codigo_ibge" => 3144706,
                "estado_id" => 17,
                "nome" => 'NOVA ERA',
            ],
            [
                "codigo_ibge" => 3144805,
                "estado_id" => 17,
                "nome" => 'NOVA LIMA',
            ],
            [
                "codigo_ibge" => 3144904,
                "estado_id" => 17,
                "nome" => 'NOVA MÓDICA',
            ],
            [
                "codigo_ibge" => 3145000,
                "estado_id" => 17,
                "nome" => 'NOVA PONTE',
            ],
            [
                "codigo_ibge" => 3145059,
                "estado_id" => 17,
                "nome" => 'NOVA PORTEIRINHA',
            ],
            [
                "codigo_ibge" => 3145109,
                "estado_id" => 17,
                "nome" => 'NOVA RESENDE',
            ],
            [
                "codigo_ibge" => 3145208,
                "estado_id" => 17,
                "nome" => 'NOVA SERRANA',
            ],
            [
                "codigo_ibge" => 3145307,
                "estado_id" => 17,
                "nome" => 'NOVO CRUZEIRO',
            ],
            [
                "codigo_ibge" => 3145356,
                "estado_id" => 17,
                "nome" => 'NOVO ORIENTE DE MINAS',
            ],
            [
                "codigo_ibge" => 3145372,
                "estado_id" => 17,
                "nome" => 'NOVORIZONTE',
            ],
            [
                "codigo_ibge" => 3145406,
                "estado_id" => 17,
                "nome" => 'OLARIA',
            ],
            [
                "codigo_ibge" => 3145455,
                "estado_id" => 17,
                "nome" => 'OLHOS-D`ÁGUA',
            ],
            [
                "codigo_ibge" => 3145505,
                "estado_id" => 17,
                "nome" => 'OLÍMPIO NORONHA',
            ],
            [
                "codigo_ibge" => 3145604,
                "estado_id" => 17,
                "nome" => 'OLIVEIRA',
            ],
            [
                "codigo_ibge" => 3145703,
                "estado_id" => 17,
                "nome" => 'OLIVEIRA FORTES',
            ],
            [
                "codigo_ibge" => 3145802,
                "estado_id" => 17,
                "nome" => 'ONÇA DE PITANGUI',
            ],
            [
                "codigo_ibge" => 3145851,
                "estado_id" => 17,
                "nome" => 'ORATÓRIOS',
            ],
            [
                "codigo_ibge" => 3145877,
                "estado_id" => 17,
                "nome" => 'ORIZÂNIA',
            ],
            [
                "codigo_ibge" => 3145901,
                "estado_id" => 17,
                "nome" => 'OURO BRANCO',
            ],
            [
                "codigo_ibge" => 3146008,
                "estado_id" => 17,
                "nome" => 'OURO FINO',
            ],
            [
                "codigo_ibge" => 3146107,
                "estado_id" => 17,
                "nome" => 'OURO PRETO',
            ],
            [
                "codigo_ibge" => 3146206,
                "estado_id" => 17,
                "nome" => 'OURO VERDE DE MINAS',
            ],
            [
                "codigo_ibge" => 3146255,
                "estado_id" => 17,
                "nome" => 'PADRE CARVALHO',
            ],
            [
                "codigo_ibge" => 3146305,
                "estado_id" => 17,
                "nome" => 'PADRE PARAÍSO',
            ],
            [
                "codigo_ibge" => 3146404,
                "estado_id" => 17,
                "nome" => 'PAINEIRAS',
            ],
            [
                "codigo_ibge" => 3146503,
                "estado_id" => 17,
                "nome" => 'PAINS',
            ],
            [
                "codigo_ibge" => 3146552,
                "estado_id" => 17,
                "nome" => 'PAI PEDRO',
            ],
            [
                "codigo_ibge" => 3146602,
                "estado_id" => 17,
                "nome" => 'PAIVA',
            ],
            [
                "codigo_ibge" => 3146701,
                "estado_id" => 17,
                "nome" => 'PALMA',
            ],
            [
                "codigo_ibge" => 3146750,
                "estado_id" => 17,
                "nome" => 'PALMÓPOLIS',
            ],
            [
                "codigo_ibge" => 3146909,
                "estado_id" => 17,
                "nome" => 'PAPAGAIOS',
            ],
            [
                "codigo_ibge" => 3147006,
                "estado_id" => 17,
                "nome" => 'PARACATU',
            ],
            [
                "codigo_ibge" => 3147105,
                "estado_id" => 17,
                "nome" => 'PARÁ DE MINAS',
            ],
            [
                "codigo_ibge" => 3147204,
                "estado_id" => 17,
                "nome" => 'PARAGUAÇU',
            ],
            [
                "codigo_ibge" => 3147303,
                "estado_id" => 17,
                "nome" => 'PARAISÓPOLIS',
            ],
            [
                "codigo_ibge" => 3147402,
                "estado_id" => 17,
                "nome" => 'PARAOPEBA',
            ],
            [
                "codigo_ibge" => 3147501,
                "estado_id" => 17,
                "nome" => 'PASSABÉM',
            ],
            [
                "codigo_ibge" => 3147600,
                "estado_id" => 17,
                "nome" => 'PASSA QUATRO',
            ],
            [
                "codigo_ibge" => 3147709,
                "estado_id" => 17,
                "nome" => 'PASSA TEMPO',
            ],
            [
                "codigo_ibge" => 3147808,
                "estado_id" => 17,
                "nome" => 'PASSA-VINTE',
            ],
            [
                "codigo_ibge" => 3147907,
                "estado_id" => 17,
                "nome" => 'PASSOS',
            ],
            [
                "codigo_ibge" => 3147956,
                "estado_id" => 17,
                "nome" => 'PATIS',
            ],
            [
                "codigo_ibge" => 3148004,
                "estado_id" => 17,
                "nome" => 'PATOS DE MINAS',
            ],
            [
                "codigo_ibge" => 3148103,
                "estado_id" => 17,
                "nome" => 'PATROCÍNIO',
            ],
            [
                "codigo_ibge" => 3148202,
                "estado_id" => 17,
                "nome" => 'PATROCÍNIO DO MURIAÉ',
            ],
            [
                "codigo_ibge" => 3148301,
                "estado_id" => 17,
                "nome" => 'PAULA CÂNDIDO',
            ],
            [
                "codigo_ibge" => 3148400,
                "estado_id" => 17,
                "nome" => 'PAULISTAS',
            ],
            [
                "codigo_ibge" => 3148509,
                "estado_id" => 17,
                "nome" => 'PAVÃO',
            ],
            [
                "codigo_ibge" => 3148608,
                "estado_id" => 17,
                "nome" => 'PEÇANHA',
            ],
            [
                "codigo_ibge" => 3148707,
                "estado_id" => 17,
                "nome" => 'PEDRA AZUL',
            ],
            [
                "codigo_ibge" => 3148756,
                "estado_id" => 17,
                "nome" => 'PEDRA BONITA',
            ],
            [
                "codigo_ibge" => 3148806,
                "estado_id" => 17,
                "nome" => 'PEDRA DO ANTA',
            ],
            [
                "codigo_ibge" => 3148905,
                "estado_id" => 17,
                "nome" => 'PEDRA DO INDAIÁ',
            ],
            [
                "codigo_ibge" => 3149002,
                "estado_id" => 17,
                "nome" => 'PEDRA DOURADA',
            ],
            [
                "codigo_ibge" => 3149101,
                "estado_id" => 17,
                "nome" => 'PEDRALVA',
            ],
            [
                "codigo_ibge" => 3149150,
                "estado_id" => 17,
                "nome" => 'PEDRAS DE MARIA DA CRUZ',
            ],
            [
                "codigo_ibge" => 3149200,
                "estado_id" => 17,
                "nome" => 'PEDRINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3149309,
                "estado_id" => 17,
                "nome" => 'PEDRO LEOPOLDO',
            ],
            [
                "codigo_ibge" => 3149408,
                "estado_id" => 17,
                "nome" => 'PEDRO TEIXEIRA',
            ],
            [
                "codigo_ibge" => 3149507,
                "estado_id" => 17,
                "nome" => 'PEQUERI',
            ],
            [
                "codigo_ibge" => 3149606,
                "estado_id" => 17,
                "nome" => 'PEQUI',
            ],
            [
                "codigo_ibge" => 3149705,
                "estado_id" => 17,
                "nome" => 'PERDIGÃO',
            ],
            [
                "codigo_ibge" => 3149804,
                "estado_id" => 17,
                "nome" => 'PERDIZES',
            ],
            [
                "codigo_ibge" => 3149903,
                "estado_id" => 17,
                "nome" => 'PERDÕES',
            ],
            [
                "codigo_ibge" => 3149952,
                "estado_id" => 17,
                "nome" => 'PERIQUITO',
            ],
            [
                "codigo_ibge" => 3150000,
                "estado_id" => 17,
                "nome" => 'PESCADOR',
            ],
            [
                "codigo_ibge" => 3150109,
                "estado_id" => 17,
                "nome" => 'PIAU',
            ],
            [
                "codigo_ibge" => 3150158,
                "estado_id" => 17,
                "nome" => 'PIEDADE DE CARATINGA',
            ],
            [
                "codigo_ibge" => 3150208,
                "estado_id" => 17,
                "nome" => 'PIEDADE DE PONTE NOVA',
            ],
            [
                "codigo_ibge" => 3150307,
                "estado_id" => 17,
                "nome" => 'PIEDADE DO RIO GRANDE',
            ],
            [
                "codigo_ibge" => 3150406,
                "estado_id" => 17,
                "nome" => 'PIEDADE DOS GERAIS',
            ],
            [
                "codigo_ibge" => 3150505,
                "estado_id" => 17,
                "nome" => 'PIMENTA',
            ],
            [
                "codigo_ibge" => 3150539,
                "estado_id" => 17,
                "nome" => 'PINGO-D`ÁGUA',
            ],
            [
                "codigo_ibge" => 3150570,
                "estado_id" => 17,
                "nome" => 'PINTÓPOLIS',
            ],
            [
                "codigo_ibge" => 3150604,
                "estado_id" => 17,
                "nome" => 'PIRACEMA',
            ],
            [
                "codigo_ibge" => 3150703,
                "estado_id" => 17,
                "nome" => 'PIRAJUBA',
            ],
            [
                "codigo_ibge" => 3150802,
                "estado_id" => 17,
                "nome" => 'PIRANGA',
            ],
            [
                "codigo_ibge" => 3150901,
                "estado_id" => 17,
                "nome" => 'PIRANGUÇU',
            ],
            [
                "codigo_ibge" => 3151008,
                "estado_id" => 17,
                "nome" => 'PIRANGUINHO',
            ],
            [
                "codigo_ibge" => 3151107,
                "estado_id" => 17,
                "nome" => 'PIRAPETINGA',
            ],
            [
                "codigo_ibge" => 3151206,
                "estado_id" => 17,
                "nome" => 'PIRAPORA',
            ],
            [
                "codigo_ibge" => 3151305,
                "estado_id" => 17,
                "nome" => 'PIRAÚBA',
            ],
            [
                "codigo_ibge" => 3151404,
                "estado_id" => 17,
                "nome" => 'PITANGUI',
            ],
            [
                "codigo_ibge" => 3151503,
                "estado_id" => 17,
                "nome" => 'PIUMHI',
            ],
            [
                "codigo_ibge" => 3151602,
                "estado_id" => 17,
                "nome" => 'PLANURA',
            ],
            [
                "codigo_ibge" => 3151701,
                "estado_id" => 17,
                "nome" => 'POÇO FUNDO',
            ],
            [
                "codigo_ibge" => 3151800,
                "estado_id" => 17,
                "nome" => 'POÇOS DE CALDAS',
            ],
            [
                "codigo_ibge" => 3151909,
                "estado_id" => 17,
                "nome" => 'POCRANE',
            ],
            [
                "codigo_ibge" => 3152006,
                "estado_id" => 17,
                "nome" => 'POMPÉU',
            ],
            [
                "codigo_ibge" => 3152105,
                "estado_id" => 17,
                "nome" => 'PONTE NOVA',
            ],
            [
                "codigo_ibge" => 3152131,
                "estado_id" => 17,
                "nome" => 'PONTO CHIQUE',
            ],
            [
                "codigo_ibge" => 3152170,
                "estado_id" => 17,
                "nome" => 'PONTO DOS VOLANTES',
            ],
            [
                "codigo_ibge" => 3152204,
                "estado_id" => 17,
                "nome" => 'PORTEIRINHA',
            ],
            [
                "codigo_ibge" => 3152303,
                "estado_id" => 17,
                "nome" => 'PORTO FIRME',
            ],
            [
                "codigo_ibge" => 3152402,
                "estado_id" => 17,
                "nome" => 'POTÉ',
            ],
            [
                "codigo_ibge" => 3152501,
                "estado_id" => 17,
                "nome" => 'POUSO ALEGRE',
            ],
            [
                "codigo_ibge" => 3152600,
                "estado_id" => 17,
                "nome" => 'POUSO ALTO',
            ],
            [
                "codigo_ibge" => 3152709,
                "estado_id" => 17,
                "nome" => 'PRADOS',
            ],
            [
                "codigo_ibge" => 3152808,
                "estado_id" => 17,
                "nome" => 'PRATA',
            ],
            [
                "codigo_ibge" => 3152907,
                "estado_id" => 17,
                "nome" => 'PRATÁPOLIS',
            ],
            [
                "codigo_ibge" => 3153004,
                "estado_id" => 17,
                "nome" => 'PRATINHA',
            ],
            [
                "codigo_ibge" => 3153103,
                "estado_id" => 17,
                "nome" => 'PRESIDENTE BERNARDES',
            ],
            [
                "codigo_ibge" => 3153202,
                "estado_id" => 17,
                "nome" => 'PRESIDENTE JUSCELINO',
            ],
            [
                "codigo_ibge" => 3153301,
                "estado_id" => 17,
                "nome" => 'PRESIDENTE KUBITSCHEK',
            ],
            [
                "codigo_ibge" => 3153400,
                "estado_id" => 17,
                "nome" => 'PRESIDENTE OLEGÁRIO',
            ],
            [
                "codigo_ibge" => 3153509,
                "estado_id" => 17,
                "nome" => 'ALTO JEQUITIBÁ',
            ],
            [
                "codigo_ibge" => 3153608,
                "estado_id" => 17,
                "nome" => 'PRUDENTE DE MORAIS',
            ],
            [
                "codigo_ibge" => 3153707,
                "estado_id" => 17,
                "nome" => 'QUARTEL GERAL',
            ],
            [
                "codigo_ibge" => 3153806,
                "estado_id" => 17,
                "nome" => 'QUELUZITO',
            ],
            [
                "codigo_ibge" => 3153905,
                "estado_id" => 17,
                "nome" => 'RAPOSOS',
            ],
            [
                "codigo_ibge" => 3154002,
                "estado_id" => 17,
                "nome" => 'RAUL SOARES',
            ],
            [
                "codigo_ibge" => 3154101,
                "estado_id" => 17,
                "nome" => 'RECREIO',
            ],
            [
                "codigo_ibge" => 3154150,
                "estado_id" => 17,
                "nome" => 'REDUTO',
            ],
            [
                "codigo_ibge" => 3154200,
                "estado_id" => 17,
                "nome" => 'RESENDE COSTA',
            ],
            [
                "codigo_ibge" => 3154309,
                "estado_id" => 17,
                "nome" => 'RESPLENDOR',
            ],
            [
                "codigo_ibge" => 3154408,
                "estado_id" => 17,
                "nome" => 'RESSAQUINHA',
            ],
            [
                "codigo_ibge" => 3154457,
                "estado_id" => 17,
                "nome" => 'RIACHINHO',
            ],
            [
                "codigo_ibge" => 3154507,
                "estado_id" => 17,
                "nome" => 'RIACHO DOS MACHADOS',
            ],
            [
                "codigo_ibge" => 3154606,
                "estado_id" => 17,
                "nome" => 'RIBEIRÃO DAS NEVES',
            ],
            [
                "codigo_ibge" => 3154705,
                "estado_id" => 17,
                "nome" => 'RIBEIRÃO VERMELHO',
            ],
            [
                "codigo_ibge" => 3154804,
                "estado_id" => 17,
                "nome" => 'RIO ACIMA',
            ],
            [
                "codigo_ibge" => 3154903,
                "estado_id" => 17,
                "nome" => 'RIO CASCA',
            ],
            [
                "codigo_ibge" => 3155009,
                "estado_id" => 17,
                "nome" => 'RIO DOCE',
            ],
            [
                "codigo_ibge" => 3155108,
                "estado_id" => 17,
                "nome" => 'RIO DO PRADO',
            ],
            [
                "codigo_ibge" => 3155207,
                "estado_id" => 17,
                "nome" => 'RIO ESPERA',
            ],
            [
                "codigo_ibge" => 3155306,
                "estado_id" => 17,
                "nome" => 'RIO MANSO',
            ],
            [
                "codigo_ibge" => 3155405,
                "estado_id" => 17,
                "nome" => 'RIO NOVO',
            ],
            [
                "codigo_ibge" => 3155504,
                "estado_id" => 17,
                "nome" => 'RIO PARANAÍBA',
            ],
            [
                "codigo_ibge" => 3155603,
                "estado_id" => 17,
                "nome" => 'RIO PARDO DE MINAS',
            ],
            [
                "codigo_ibge" => 3155702,
                "estado_id" => 17,
                "nome" => 'RIO PIRACICABA',
            ],
            [
                "codigo_ibge" => 3155801,
                "estado_id" => 17,
                "nome" => 'RIO POMBA',
            ],
            [
                "codigo_ibge" => 3155900,
                "estado_id" => 17,
                "nome" => 'RIO PRETO',
            ],
            [
                "codigo_ibge" => 3156007,
                "estado_id" => 17,
                "nome" => 'RIO VERMELHO',
            ],
            [
                "codigo_ibge" => 3156106,
                "estado_id" => 17,
                "nome" => 'RITÁPOLIS',
            ],
            [
                "codigo_ibge" => 3156205,
                "estado_id" => 17,
                "nome" => 'ROCHEDO DE MINAS',
            ],
            [
                "codigo_ibge" => 3156304,
                "estado_id" => 17,
                "nome" => 'RODEIRO',
            ],
            [
                "codigo_ibge" => 3156403,
                "estado_id" => 17,
                "nome" => 'ROMARIA',
            ],
            [
                "codigo_ibge" => 3156452,
                "estado_id" => 17,
                "nome" => 'ROSÁRIO DA LIMEIRA',
            ],
            [
                "codigo_ibge" => 3156502,
                "estado_id" => 17,
                "nome" => 'RUBELITA',
            ],
            [
                "codigo_ibge" => 3156601,
                "estado_id" => 17,
                "nome" => 'RUBIM',
            ],
            [
                "codigo_ibge" => 3156700,
                "estado_id" => 17,
                "nome" => 'SABARÁ',
            ],
            [
                "codigo_ibge" => 3156809,
                "estado_id" => 17,
                "nome" => 'SABINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3156908,
                "estado_id" => 17,
                "nome" => 'SACRAMENTO',
            ],
            [
                "codigo_ibge" => 3157005,
                "estado_id" => 17,
                "nome" => 'SALINAS',
            ],
            [
                "codigo_ibge" => 3157104,
                "estado_id" => 17,
                "nome" => 'SALTO DA DIVISA',
            ],
            [
                "codigo_ibge" => 3157203,
                "estado_id" => 17,
                "nome" => 'SANTA BÁRBARA',
            ],
            [
                "codigo_ibge" => 3157252,
                "estado_id" => 17,
                "nome" => 'SANTA BÁRBARA DO LESTE',
            ],
            [
                "codigo_ibge" => 3157278,
                "estado_id" => 17,
                "nome" => 'SANTA BÁRBARA DO MONTE VERDE',
            ],
            [
                "codigo_ibge" => 3157302,
                "estado_id" => 17,
                "nome" => 'SANTA BÁRBARA DO TUGÚRIO',
            ],
            [
                "codigo_ibge" => 3157336,
                "estado_id" => 17,
                "nome" => 'SANTA CRUZ DE MINAS',
            ],
            [
                "codigo_ibge" => 3157377,
                "estado_id" => 17,
                "nome" => 'SANTA CRUZ DE SALINAS',
            ],
            [
                "codigo_ibge" => 3157401,
                "estado_id" => 17,
                "nome" => 'SANTA CRUZ DO ESCALVADO',
            ],
            [
                "codigo_ibge" => 3157500,
                "estado_id" => 17,
                "nome" => 'SANTA EFIGÊNIA DE MINAS',
            ],
            [
                "codigo_ibge" => 3157609,
                "estado_id" => 17,
                "nome" => 'SANTA FÉ DE MINAS',
            ],
            [
                "codigo_ibge" => 3157658,
                "estado_id" => 17,
                "nome" => 'SANTA HELENA DE MINAS',
            ],
            [
                "codigo_ibge" => 3157708,
                "estado_id" => 17,
                "nome" => 'SANTA JULIANA',
            ],
            [
                "codigo_ibge" => 3157807,
                "estado_id" => 17,
                "nome" => 'SANTA LUZIA',
            ],
            [
                "codigo_ibge" => 3157906,
                "estado_id" => 17,
                "nome" => 'SANTA MARGARIDA',
            ],
            [
                "codigo_ibge" => 3158003,
                "estado_id" => 17,
                "nome" => 'SANTA MARIA DE ITABIRA',
            ],
            [
                "codigo_ibge" => 3158102,
                "estado_id" => 17,
                "nome" => 'SANTA MARIA DO SALTO',
            ],
            [
                "codigo_ibge" => 3158201,
                "estado_id" => 17,
                "nome" => 'SANTA MARIA DO SUAÇUÍ',
            ],
            [
                "codigo_ibge" => 3158300,
                "estado_id" => 17,
                "nome" => 'SANTANA DA VARGEM',
            ],
            [
                "codigo_ibge" => 3158409,
                "estado_id" => 17,
                "nome" => 'SANTANA DE CATAGUASES',
            ],
            [
                "codigo_ibge" => 3158508,
                "estado_id" => 17,
                "nome" => 'SANTANA DE PIRAPAMA',
            ],
            [
                "codigo_ibge" => 3158607,
                "estado_id" => 17,
                "nome" => 'SANTANA DO DESERTO',
            ],
            [
                "codigo_ibge" => 3158706,
                "estado_id" => 17,
                "nome" => 'SANTANA DO GARAMBÉU',
            ],
            [
                "codigo_ibge" => 3158805,
                "estado_id" => 17,
                "nome" => 'SANTANA DO JACARÉ',
            ],
            [
                "codigo_ibge" => 3158904,
                "estado_id" => 17,
                "nome" => 'SANTANA DO MANHUAÇU',
            ],
            [
                "codigo_ibge" => 3158953,
                "estado_id" => 17,
                "nome" => 'SANTANA DO PARAÍSO',
            ],
            [
                "codigo_ibge" => 3159001,
                "estado_id" => 17,
                "nome" => 'SANTANA DO RIACHO',
            ],
            [
                "codigo_ibge" => 3159100,
                "estado_id" => 17,
                "nome" => 'SANTANA DOS MONTES',
            ],
            [
                "codigo_ibge" => 3159209,
                "estado_id" => 17,
                "nome" => 'SANTA RITA DE CALDAS',
            ],
            [
                "codigo_ibge" => 3159308,
                "estado_id" => 17,
                "nome" => 'SANTA RITA DE JACUTINGA',
            ],
            [
                "codigo_ibge" => 3159357,
                "estado_id" => 17,
                "nome" => 'SANTA RITA DE MINAS',
            ],
            [
                "codigo_ibge" => 3159407,
                "estado_id" => 17,
                "nome" => 'SANTA RITA DE IBITIPOCA',
            ],
            [
                "codigo_ibge" => 3159506,
                "estado_id" => 17,
                "nome" => 'SANTA RITA DO ITUETO',
            ],
            [
                "codigo_ibge" => 3159605,
                "estado_id" => 17,
                "nome" => 'SANTA RITA DO SAPUCAÍ',
            ],
            [
                "codigo_ibge" => 3159704,
                "estado_id" => 17,
                "nome" => 'SANTA ROSA DA SERRA',
            ],
            [
                "codigo_ibge" => 3159803,
                "estado_id" => 17,
                "nome" => 'SANTA VITÓRIA',
            ],
            [
                "codigo_ibge" => 3159902,
                "estado_id" => 17,
                "nome" => 'SANTO ANTÔNIO DO AMPARO',
            ],
            [
                "codigo_ibge" => 3160009,
                "estado_id" => 17,
                "nome" => 'SANTO ANTÔNIO DO AVENTUREIRO',
            ],
            [
                "codigo_ibge" => 3160108,
                "estado_id" => 17,
                "nome" => 'SANTO ANTÔNIO DO GRAMA',
            ],
            [
                "codigo_ibge" => 3160207,
                "estado_id" => 17,
                "nome" => 'SANTO ANTÔNIO DO ITAMBÉ',
            ],
            [
                "codigo_ibge" => 3160306,
                "estado_id" => 17,
                "nome" => 'SANTO ANTÔNIO DO JACINTO',
            ],
            [
                "codigo_ibge" => 3160405,
                "estado_id" => 17,
                "nome" => 'SANTO ANTÔNIO DO MONTE',
            ],
            [
                "codigo_ibge" => 3160454,
                "estado_id" => 17,
                "nome" => 'SANTO ANTÔNIO DO RETIRO',
            ],
            [
                "codigo_ibge" => 3160504,
                "estado_id" => 17,
                "nome" => 'SANTO ANTÔNIO DO RIO ABAIXO',
            ],
            [
                "codigo_ibge" => 3160603,
                "estado_id" => 17,
                "nome" => 'SANTO HIPÓLITO',
            ],
            [
                "codigo_ibge" => 3160702,
                "estado_id" => 17,
                "nome" => 'SANTOS DUMONT',
            ],
            [
                "codigo_ibge" => 3160801,
                "estado_id" => 17,
                "nome" => 'SÃO BENTO ABADE',
            ],
            [
                "codigo_ibge" => 3160900,
                "estado_id" => 17,
                "nome" => 'SÃO BRÁS DO SUAÇUÍ',
            ],
            [
                "codigo_ibge" => 3160959,
                "estado_id" => 17,
                "nome" => 'SÃO DOMINGOS DAS DORES',
            ],
            [
                "codigo_ibge" => 3161007,
                "estado_id" => 17,
                "nome" => 'SÃO DOMINGOS DO PRATA',
            ],
            [
                "codigo_ibge" => 3161056,
                "estado_id" => 17,
                "nome" => 'SÃO FÉLIX DE MINAS',
            ],
            [
                "codigo_ibge" => 3161106,
                "estado_id" => 17,
                "nome" => 'SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 3161205,
                "estado_id" => 17,
                "nome" => 'SÃO FRANCISCO DE PAULA',
            ],
            [
                "codigo_ibge" => 3161304,
                "estado_id" => 17,
                "nome" => 'SÃO FRANCISCO DE SALES',
            ],
            [
                "codigo_ibge" => 3161403,
                "estado_id" => 17,
                "nome" => 'SÃO FRANCISCO DO GLÓRIA',
            ],
            [
                "codigo_ibge" => 3161502,
                "estado_id" => 17,
                "nome" => 'SÃO GERALDO',
            ],
            [
                "codigo_ibge" => 3161601,
                "estado_id" => 17,
                "nome" => 'SÃO GERALDO DA PIEDADE',
            ],
            [
                "codigo_ibge" => 3161650,
                "estado_id" => 17,
                "nome" => 'SÃO GERALDO DO BAIXIO',
            ],
            [
                "codigo_ibge" => 3161700,
                "estado_id" => 17,
                "nome" => 'SÃO GONÇALO DO ABAETÉ',
            ],
            [
                "codigo_ibge" => 3161809,
                "estado_id" => 17,
                "nome" => 'SÃO GONÇALO DO PARÁ',
            ],
            [
                "codigo_ibge" => 3161908,
                "estado_id" => 17,
                "nome" => 'SÃO GONÇALO DO RIO ABAIXO',
            ],
            [
                "codigo_ibge" => 3162005,
                "estado_id" => 17,
                "nome" => 'SÃO GONÇALO DO SAPUCAÍ',
            ],
            [
                "codigo_ibge" => 3162104,
                "estado_id" => 17,
                "nome" => 'SÃO GOTARDO',
            ],
            [
                "codigo_ibge" => 3162203,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO BATISTA DO GLÓRIA',
            ],
            [
                "codigo_ibge" => 3162252,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DA LAGOA',
            ],
            [
                "codigo_ibge" => 3162302,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DA MATA',
            ],
            [
                "codigo_ibge" => 3162401,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DA PONTE',
            ],
            [
                "codigo_ibge" => 3162450,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 3162500,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DEL REI',
            ],
            [
                "codigo_ibge" => 3162559,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DO MANHUAÇU',
            ],
            [
                "codigo_ibge" => 3162575,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DO MANTENINHA',
            ],
            [
                "codigo_ibge" => 3162609,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DO ORIENTE',
            ],
            [
                "codigo_ibge" => 3162658,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DO PACUÍ',
            ],
            [
                "codigo_ibge" => 3162708,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO DO PARAÍSO',
            ],
            [
                "codigo_ibge" => 3162807,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO EVANGELISTA',
            ],
            [
                "codigo_ibge" => 3162906,
                "estado_id" => 17,
                "nome" => 'SÃO JOÃO NEPOMUCENO',
            ],
            [
                "codigo_ibge" => 3162922,
                "estado_id" => 17,
                "nome" => 'SÃO JOAQUIM DE BICAS',
            ],
            [
                "codigo_ibge" => 3162948,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DA BARRA',
            ],
            [
                "codigo_ibge" => 3162955,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DA LAPA',
            ],
            [
                "codigo_ibge" => 3163003,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DA SAFIRA',
            ],
            [
                "codigo_ibge" => 3163102,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DA VARGINHA',
            ],
            [
                "codigo_ibge" => 3163201,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DO ALEGRE',
            ],
            [
                "codigo_ibge" => 3163300,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DO DIVINO',
            ],
            [
                "codigo_ibge" => 3163409,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DO GOIABAL',
            ],
            [
                "codigo_ibge" => 3163508,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DO JACURI',
            ],
            [
                "codigo_ibge" => 3163607,
                "estado_id" => 17,
                "nome" => 'SÃO JOSÉ DO MANTIMENTO',
            ],
            [
                "codigo_ibge" => 3163706,
                "estado_id" => 17,
                "nome" => 'SÃO LOURENÇO',
            ],
            [
                "codigo_ibge" => 3163805,
                "estado_id" => 17,
                "nome" => 'SÃO MIGUEL DO ANTA',
            ],
            [
                "codigo_ibge" => 3163904,
                "estado_id" => 17,
                "nome" => 'SÃO PEDRO DA UNIÃO',
            ],
            [
                "codigo_ibge" => 3164001,
                "estado_id" => 17,
                "nome" => 'SÃO PEDRO DOS FERROS',
            ],
            [
                "codigo_ibge" => 3164100,
                "estado_id" => 17,
                "nome" => 'SÃO PEDRO DO SUAÇUÍ',
            ],
            [
                "codigo_ibge" => 3164209,
                "estado_id" => 17,
                "nome" => 'SÃO ROMÃO',
            ],
            [
                "codigo_ibge" => 3164308,
                "estado_id" => 17,
                "nome" => 'SÃO ROQUE DE MINAS',
            ],
            [
                "codigo_ibge" => 3164407,
                "estado_id" => 17,
                "nome" => 'SÃO SEBASTIÃO DA BELA VISTA',
            ],
            [
                "codigo_ibge" => 3164431,
                "estado_id" => 17,
                "nome" => 'SÃO SEBASTIÃO DA VARGEM ALEGRE',
            ],
            [
                "codigo_ibge" => 3164472,
                "estado_id" => 17,
                "nome" => 'SÃO SEBASTIÃO DO ANTA',
            ],
            [
                "codigo_ibge" => 3164506,
                "estado_id" => 17,
                "nome" => 'SÃO SEBASTIÃO DO MARANHÃO',
            ],
            [
                "codigo_ibge" => 3164605,
                "estado_id" => 17,
                "nome" => 'SÃO SEBASTIÃO DO OESTE',
            ],
            [
                "codigo_ibge" => 3164704,
                "estado_id" => 17,
                "nome" => 'SÃO SEBASTIÃO DO PARAÍSO',
            ],
            [
                "codigo_ibge" => 3164803,
                "estado_id" => 17,
                "nome" => 'SÃO SEBASTIÃO DO RIO PRETO',
            ],
            [
                "codigo_ibge" => 3164902,
                "estado_id" => 17,
                "nome" => 'SÃO SEBASTIÃO DO RIO VERDE',
            ],
            [
                "codigo_ibge" => 3165008,
                "estado_id" => 17,
                "nome" => 'SÃO TIAGO',
            ],
            [
                "codigo_ibge" => 3165107,
                "estado_id" => 17,
                "nome" => 'SÃO TOMÁS DE AQUINO',
            ],
            [
                "codigo_ibge" => 3165206,
                "estado_id" => 17,
                "nome" => 'SÃO THOMÉ DAS LETRAS',
            ],
            [
                "codigo_ibge" => 3165305,
                "estado_id" => 17,
                "nome" => 'SÃO VICENTE DE MINAS',
            ],
            [
                "codigo_ibge" => 3165404,
                "estado_id" => 17,
                "nome" => 'SAPUCAÍ-MIRIM',
            ],
            [
                "codigo_ibge" => 3165503,
                "estado_id" => 17,
                "nome" => 'SARDOÁ',
            ],
            [
                "codigo_ibge" => 3165537,
                "estado_id" => 17,
                "nome" => 'SARZEDO',
            ],
            [
                "codigo_ibge" => 3165552,
                "estado_id" => 17,
                "nome" => 'SETUBINHA',
            ],
            [
                "codigo_ibge" => 3165560,
                "estado_id" => 17,
                "nome" => 'SEM-PEIXE',
            ],
            [
                "codigo_ibge" => 3165578,
                "estado_id" => 17,
                "nome" => 'SENADOR AMARAL',
            ],
            [
                "codigo_ibge" => 3165602,
                "estado_id" => 17,
                "nome" => 'SENADOR CORTES',
            ],
            [
                "codigo_ibge" => 3165701,
                "estado_id" => 17,
                "nome" => 'SENADOR FIRMINO',
            ],
            [
                "codigo_ibge" => 3165800,
                "estado_id" => 17,
                "nome" => 'SENADOR JOSÉ BENTO',
            ],
            [
                "codigo_ibge" => 3165909,
                "estado_id" => 17,
                "nome" => 'SENADOR MODESTINO GONÇALVES',
            ],
            [
                "codigo_ibge" => 3166006,
                "estado_id" => 17,
                "nome" => 'SENHORA DE OLIVEIRA',
            ],
            [
                "codigo_ibge" => 3166105,
                "estado_id" => 17,
                "nome" => 'SENHORA DO PORTO',
            ],
            [
                "codigo_ibge" => 3166204,
                "estado_id" => 17,
                "nome" => 'SENHORA DOS REMÉDIOS',
            ],
            [
                "codigo_ibge" => 3166303,
                "estado_id" => 17,
                "nome" => 'SERICITA',
            ],
            [
                "codigo_ibge" => 3166402,
                "estado_id" => 17,
                "nome" => 'SERITINGA',
            ],
            [
                "codigo_ibge" => 3166501,
                "estado_id" => 17,
                "nome" => 'SERRA AZUL DE MINAS',
            ],
            [
                "codigo_ibge" => 3166600,
                "estado_id" => 17,
                "nome" => 'SERRA DA SAUDADE',
            ],
            [
                "codigo_ibge" => 3166709,
                "estado_id" => 17,
                "nome" => 'SERRA DOS AIMORÉS',
            ],
            [
                "codigo_ibge" => 3166808,
                "estado_id" => 17,
                "nome" => 'SERRA DO SALITRE',
            ],
            [
                "codigo_ibge" => 3166907,
                "estado_id" => 17,
                "nome" => 'SERRANIA',
            ],
            [
                "codigo_ibge" => 3166956,
                "estado_id" => 17,
                "nome" => 'SERRANÓPOLIS DE MINAS',
            ],
            [
                "codigo_ibge" => 3167004,
                "estado_id" => 17,
                "nome" => 'SERRANOS',
            ],
            [
                "codigo_ibge" => 3167103,
                "estado_id" => 17,
                "nome" => 'SERRO',
            ],
            [
                "codigo_ibge" => 3167202,
                "estado_id" => 17,
                "nome" => 'SETE LAGOAS',
            ],
            [
                "codigo_ibge" => 3167301,
                "estado_id" => 17,
                "nome" => 'SILVEIRÂNIA',
            ],
            [
                "codigo_ibge" => 3167400,
                "estado_id" => 17,
                "nome" => 'SILVIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 3167509,
                "estado_id" => 17,
                "nome" => 'SIMÃO PEREIRA',
            ],
            [
                "codigo_ibge" => 3167608,
                "estado_id" => 17,
                "nome" => 'SIMONÉSIA',
            ],
            [
                "codigo_ibge" => 3167707,
                "estado_id" => 17,
                "nome" => 'SOBRÁLIA',
            ],
            [
                "codigo_ibge" => 3167806,
                "estado_id" => 17,
                "nome" => 'SOLEDADE DE MINAS',
            ],
            [
                "codigo_ibge" => 3167905,
                "estado_id" => 17,
                "nome" => 'TABULEIRO',
            ],
            [
                "codigo_ibge" => 3168002,
                "estado_id" => 17,
                "nome" => 'TAIOBEIRAS',
            ],
            [
                "codigo_ibge" => 3168051,
                "estado_id" => 17,
                "nome" => 'TAPARUBA',
            ],
            [
                "codigo_ibge" => 3168101,
                "estado_id" => 17,
                "nome" => 'TAPIRA',
            ],
            [
                "codigo_ibge" => 3168200,
                "estado_id" => 17,
                "nome" => 'TAPIRAÍ',
            ],
            [
                "codigo_ibge" => 3168309,
                "estado_id" => 17,
                "nome" => 'TAQUARAÇU DE MINAS',
            ],
            [
                "codigo_ibge" => 3168408,
                "estado_id" => 17,
                "nome" => 'TARUMIRIM',
            ],
            [
                "codigo_ibge" => 3168507,
                "estado_id" => 17,
                "nome" => 'TEIXEIRAS',
            ],
            [
                "codigo_ibge" => 3168606,
                "estado_id" => 17,
                "nome" => 'TEÓFILO OTONI',
            ],
            [
                "codigo_ibge" => 3168705,
                "estado_id" => 17,
                "nome" => 'TIMÓTEO',
            ],
            [
                "codigo_ibge" => 3168804,
                "estado_id" => 17,
                "nome" => 'TIRADENTES',
            ],
            [
                "codigo_ibge" => 3168903,
                "estado_id" => 17,
                "nome" => 'TIROS',
            ],
            [
                "codigo_ibge" => 3169000,
                "estado_id" => 17,
                "nome" => 'TOCANTINS',
            ],
            [
                "codigo_ibge" => 3169059,
                "estado_id" => 17,
                "nome" => 'TOCOS DO MOJI',
            ],
            [
                "codigo_ibge" => 3169109,
                "estado_id" => 17,
                "nome" => 'TOLEDO',
            ],
            [
                "codigo_ibge" => 3169208,
                "estado_id" => 17,
                "nome" => 'TOMBOS',
            ],
            [
                "codigo_ibge" => 3169307,
                "estado_id" => 17,
                "nome" => 'TRÊS CORAÇÕES',
            ],
            [
                "codigo_ibge" => 3169356,
                "estado_id" => 17,
                "nome" => 'TRÊS MARIAS',
            ],
            [
                "codigo_ibge" => 3169406,
                "estado_id" => 17,
                "nome" => 'TRÊS PONTAS',
            ],
            [
                "codigo_ibge" => 3169505,
                "estado_id" => 17,
                "nome" => 'TUMIRITINGA',
            ],
            [
                "codigo_ibge" => 3169604,
                "estado_id" => 17,
                "nome" => 'TUPACIGUARA',
            ],
            [
                "codigo_ibge" => 3169703,
                "estado_id" => 17,
                "nome" => 'TURMALINA',
            ],
            [
                "codigo_ibge" => 3169802,
                "estado_id" => 17,
                "nome" => 'TURVOLÂNDIA',
            ],
            [
                "codigo_ibge" => 3169901,
                "estado_id" => 17,
                "nome" => 'UBÁ',
            ],
            [
                "codigo_ibge" => 3170008,
                "estado_id" => 17,
                "nome" => 'UBAÍ',
            ],
            [
                "codigo_ibge" => 3170057,
                "estado_id" => 17,
                "nome" => 'UBAPORANGA',
            ],
            [
                "codigo_ibge" => 3170107,
                "estado_id" => 17,
                "nome" => 'UBERABA',
            ],
            [
                "codigo_ibge" => 3170206,
                "estado_id" => 17,
                "nome" => 'UBERLÂNDIA',
            ],
            [
                "codigo_ibge" => 3170305,
                "estado_id" => 17,
                "nome" => 'UMBURATIBA',
            ],
            [
                "codigo_ibge" => 3170404,
                "estado_id" => 17,
                "nome" => 'UNAÍ',
            ],
            [
                "codigo_ibge" => 3170438,
                "estado_id" => 17,
                "nome" => 'UNIÃO DE MINAS',
            ],
            [
                "codigo_ibge" => 3170479,
                "estado_id" => 17,
                "nome" => 'URUANA DE MINAS',
            ],
            [
                "codigo_ibge" => 3170503,
                "estado_id" => 17,
                "nome" => 'URUCÂNIA',
            ],
            [
                "codigo_ibge" => 3170529,
                "estado_id" => 17,
                "nome" => 'URUCUIA',
            ],
            [
                "codigo_ibge" => 3170578,
                "estado_id" => 17,
                "nome" => 'VARGEM ALEGRE',
            ],
            [
                "codigo_ibge" => 3170602,
                "estado_id" => 17,
                "nome" => 'VARGEM BONITA',
            ],
            [
                "codigo_ibge" => 3170651,
                "estado_id" => 17,
                "nome" => 'VARGEM GRANDE DO RIO PARDO',
            ],
            [
                "codigo_ibge" => 3170701,
                "estado_id" => 17,
                "nome" => 'VARGINHA',
            ],
            [
                "codigo_ibge" => 3170750,
                "estado_id" => 17,
                "nome" => 'VARJÃO DE MINAS',
            ],
            [
                "codigo_ibge" => 3170800,
                "estado_id" => 17,
                "nome" => 'VÁRZEA DA PALMA',
            ],
            [
                "codigo_ibge" => 3170909,
                "estado_id" => 17,
                "nome" => 'VARZELÂNDIA',
            ],
            [
                "codigo_ibge" => 3171006,
                "estado_id" => 17,
                "nome" => 'VAZANTE',
            ],
            [
                "codigo_ibge" => 3171030,
                "estado_id" => 17,
                "nome" => 'VERDELÂNDIA',
            ],
            [
                "codigo_ibge" => 3171071,
                "estado_id" => 17,
                "nome" => 'VEREDINHA',
            ],
            [
                "codigo_ibge" => 3171105,
                "estado_id" => 17,
                "nome" => 'VERÍSSIMO',
            ],
            [
                "codigo_ibge" => 3171154,
                "estado_id" => 17,
                "nome" => 'VERMELHO NOVO',
            ],
            [
                "codigo_ibge" => 3171204,
                "estado_id" => 17,
                "nome" => 'VESPASIANO',
            ],
            [
                "codigo_ibge" => 3171303,
                "estado_id" => 17,
                "nome" => 'VIÇOSA',
            ],
            [
                "codigo_ibge" => 3171402,
                "estado_id" => 17,
                "nome" => 'VIEIRAS',
            ],
            [
                "codigo_ibge" => 3171501,
                "estado_id" => 17,
                "nome" => 'MATHIAS LOBATO',
            ],
            [
                "codigo_ibge" => 3171600,
                "estado_id" => 17,
                "nome" => 'VIRGEM DA LAPA',
            ],
            [
                "codigo_ibge" => 3171709,
                "estado_id" => 17,
                "nome" => 'VIRGÍNIA',
            ],
            [
                "codigo_ibge" => 3171808,
                "estado_id" => 17,
                "nome" => 'VIRGINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3171907,
                "estado_id" => 17,
                "nome" => 'VIRGOLÂNDIA',
            ],
            [
                "codigo_ibge" => 3172004,
                "estado_id" => 17,
                "nome" => 'VISCONDE DO RIO BRANCO',
            ],
            [
                "codigo_ibge" => 3172103,
                "estado_id" => 17,
                "nome" => 'VOLTA GRANDE',
            ],
            [
                "codigo_ibge" => 3172202,
                "estado_id" => 17,
                "nome" => 'WENCESLAU BRAZ',
            ],
            [
                "codigo_ibge" => 3200102,
                "estado_id" => 18,
                "nome" => 'AFONSO CLÁUDIO',
            ],
            [
                "codigo_ibge" => 3200136,
                "estado_id" => 18,
                "nome" => 'ÁGUIA BRANCA',
            ],
            [
                "codigo_ibge" => 3200169,
                "estado_id" => 18,
                "nome" => 'ÁGUA DOCE DO NORTE',
            ],
            [
                "codigo_ibge" => 3200201,
                "estado_id" => 18,
                "nome" => 'ALEGRE',
            ],
            [
                "codigo_ibge" => 3200300,
                "estado_id" => 18,
                "nome" => 'ALFREDO CHAVES',
            ],
            [
                "codigo_ibge" => 3200359,
                "estado_id" => 18,
                "nome" => 'ALTO RIO NOVO',
            ],
            [
                "codigo_ibge" => 3200409,
                "estado_id" => 18,
                "nome" => 'ANCHIETA',
            ],
            [
                "codigo_ibge" => 3200508,
                "estado_id" => 18,
                "nome" => 'APIACÁ',
            ],
            [
                "codigo_ibge" => 3200607,
                "estado_id" => 18,
                "nome" => 'ARACRUZ',
            ],
            [
                "codigo_ibge" => 3200706,
                "estado_id" => 18,
                "nome" => 'ATILIO VIVACQUA',
            ],
            [
                "codigo_ibge" => 3200805,
                "estado_id" => 18,
                "nome" => 'BAIXO GUANDU',
            ],
            [
                "codigo_ibge" => 3200904,
                "estado_id" => 18,
                "nome" => 'BARRA DE SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 3201001,
                "estado_id" => 18,
                "nome" => 'BOA ESPERANÇA',
            ],
            [
                "codigo_ibge" => 3201100,
                "estado_id" => 18,
                "nome" => 'BOM JESUS DO NORTE',
            ],
            [
                "codigo_ibge" => 3201159,
                "estado_id" => 18,
                "nome" => 'BREJETUBA',
            ],
            [
                "codigo_ibge" => 3201209,
                "estado_id" => 18,
                "nome" => 'CACHOEIRO DE ITAPEMIRIM',
            ],
            [
                "codigo_ibge" => 3201308,
                "estado_id" => 18,
                "nome" => 'CARIACICA',
            ],
            [
                "codigo_ibge" => 3201407,
                "estado_id" => 18,
                "nome" => 'CASTELO',
            ],
            [
                "codigo_ibge" => 3201506,
                "estado_id" => 18,
                "nome" => 'COLATINA',
            ],
            [
                "codigo_ibge" => 3201605,
                "estado_id" => 18,
                "nome" => 'CONCEIÇÃO DA BARRA',
            ],
            [
                "codigo_ibge" => 3201704,
                "estado_id" => 18,
                "nome" => 'CONCEIÇÃO DO CASTELO',
            ],
            [
                "codigo_ibge" => 3201803,
                "estado_id" => 18,
                "nome" => 'DIVINO DE SÃO LOURENÇO',
            ],
            [
                "codigo_ibge" => 3201902,
                "estado_id" => 18,
                "nome" => 'DOMINGOS MARTINS',
            ],
            [
                "codigo_ibge" => 3202009,
                "estado_id" => 18,
                "nome" => 'DORES DO RIO PRETO',
            ],
            [
                "codigo_ibge" => 3202108,
                "estado_id" => 18,
                "nome" => 'ECOPORANGA',
            ],
            [
                "codigo_ibge" => 3202207,
                "estado_id" => 18,
                "nome" => 'FUNDÃO',
            ],
            [
                "codigo_ibge" => 3202256,
                "estado_id" => 18,
                "nome" => 'GOVERNADOR LINDENBERG',
            ],
            [
                "codigo_ibge" => 3202306,
                "estado_id" => 18,
                "nome" => 'GUAÇUÍ',
            ],
            [
                "codigo_ibge" => 3202405,
                "estado_id" => 18,
                "nome" => 'GUARAPARI',
            ],
            [
                "codigo_ibge" => 3202454,
                "estado_id" => 18,
                "nome" => 'IBATIBA',
            ],
            [
                "codigo_ibge" => 3202504,
                "estado_id" => 18,
                "nome" => 'IBIRAÇU',
            ],
            [
                "codigo_ibge" => 3202553,
                "estado_id" => 18,
                "nome" => 'IBITIRAMA',
            ],
            [
                "codigo_ibge" => 3202603,
                "estado_id" => 18,
                "nome" => 'ICONHA',
            ],
            [
                "codigo_ibge" => 3202652,
                "estado_id" => 18,
                "nome" => 'IRUPI',
            ],
            [
                "codigo_ibge" => 3202702,
                "estado_id" => 18,
                "nome" => 'ITAGUAÇU',
            ],
            [
                "codigo_ibge" => 3202801,
                "estado_id" => 18,
                "nome" => 'ITAPEMIRIM',
            ],
            [
                "codigo_ibge" => 3202900,
                "estado_id" => 18,
                "nome" => 'ITARANA',
            ],
            [
                "codigo_ibge" => 3203007,
                "estado_id" => 18,
                "nome" => 'IÚNA',
            ],
            [
                "codigo_ibge" => 3203056,
                "estado_id" => 18,
                "nome" => 'JAGUARÉ',
            ],
            [
                "codigo_ibge" => 3203106,
                "estado_id" => 18,
                "nome" => 'JERÔNIMO MONTEIRO',
            ],
            [
                "codigo_ibge" => 3203130,
                "estado_id" => 18,
                "nome" => 'JOÃO NEIVA',
            ],
            [
                "codigo_ibge" => 3203163,
                "estado_id" => 18,
                "nome" => 'LARANJA DA TERRA',
            ],
            [
                "codigo_ibge" => 3203205,
                "estado_id" => 18,
                "nome" => 'LINHARES',
            ],
            [
                "codigo_ibge" => 3203304,
                "estado_id" => 18,
                "nome" => 'MANTENÓPOLIS',
            ],
            [
                "codigo_ibge" => 3203320,
                "estado_id" => 18,
                "nome" => 'MARATAÍZES',
            ],
            [
                "codigo_ibge" => 3203346,
                "estado_id" => 18,
                "nome" => 'MARECHAL FLORIANO',
            ],
            [
                "codigo_ibge" => 3203353,
                "estado_id" => 18,
                "nome" => 'MARILÂNDIA',
            ],
            [
                "codigo_ibge" => 3203403,
                "estado_id" => 18,
                "nome" => 'MIMOSO DO SUL',
            ],
            [
                "codigo_ibge" => 3203502,
                "estado_id" => 18,
                "nome" => 'MONTANHA',
            ],
            [
                "codigo_ibge" => 3203601,
                "estado_id" => 18,
                "nome" => 'MUCURICI',
            ],
            [
                "codigo_ibge" => 3203700,
                "estado_id" => 18,
                "nome" => 'MUNIZ FREIRE',
            ],
            [
                "codigo_ibge" => 3203809,
                "estado_id" => 18,
                "nome" => 'MUQUI',
            ],
            [
                "codigo_ibge" => 3203908,
                "estado_id" => 18,
                "nome" => 'NOVA VENÉCIA',
            ],
            [
                "codigo_ibge" => 3204005,
                "estado_id" => 18,
                "nome" => 'PANCAS',
            ],
            [
                "codigo_ibge" => 3204054,
                "estado_id" => 18,
                "nome" => 'PEDRO CANÁRIO',
            ],
            [
                "codigo_ibge" => 3204104,
                "estado_id" => 18,
                "nome" => 'PINHEIROS',
            ],
            [
                "codigo_ibge" => 3204203,
                "estado_id" => 18,
                "nome" => 'PIÚMA',
            ],
            [
                "codigo_ibge" => 3204252,
                "estado_id" => 18,
                "nome" => 'PONTO BELO',
            ],
            [
                "codigo_ibge" => 3204302,
                "estado_id" => 18,
                "nome" => 'PRESIDENTE KENNEDY',
            ],
            [
                "codigo_ibge" => 3204351,
                "estado_id" => 18,
                "nome" => 'RIO BANANAL',
            ],
            [
                "codigo_ibge" => 3204401,
                "estado_id" => 18,
                "nome" => 'RIO NOVO DO SUL',
            ],
            [
                "codigo_ibge" => 3204500,
                "estado_id" => 18,
                "nome" => 'SANTA LEOPOLDINA',
            ],
            [
                "codigo_ibge" => 3204559,
                "estado_id" => 18,
                "nome" => 'SANTA MARIA DE JETIBÁ',
            ],
            [
                "codigo_ibge" => 3204609,
                "estado_id" => 18,
                "nome" => 'SANTA TERESA',
            ],
            [
                "codigo_ibge" => 3204658,
                "estado_id" => 18,
                "nome" => 'SÃO DOMINGOS DO NORTE',
            ],
            [
                "codigo_ibge" => 3204708,
                "estado_id" => 18,
                "nome" => 'SÃO GABRIEL DA PALHA',
            ],
            [
                "codigo_ibge" => 3204807,
                "estado_id" => 18,
                "nome" => 'SÃO JOSÉ DO CALÇADO',
            ],
            [
                "codigo_ibge" => 3204906,
                "estado_id" => 18,
                "nome" => 'SÃO MATEUS',
            ],
            [
                "codigo_ibge" => 3204955,
                "estado_id" => 18,
                "nome" => 'SÃO ROQUE DO CANAÃ',
            ],
            [
                "codigo_ibge" => 3205002,
                "estado_id" => 18,
                "nome" => 'SERRA',
            ],
            [
                "codigo_ibge" => 3205010,
                "estado_id" => 18,
                "nome" => 'SOORETAMA',
            ],
            [
                "codigo_ibge" => 3205036,
                "estado_id" => 18,
                "nome" => 'VARGEM ALTA',
            ],
            [
                "codigo_ibge" => 3205069,
                "estado_id" => 18,
                "nome" => 'VENDA NOVA DO IMIGRANTE',
            ],
            [
                "codigo_ibge" => 3205101,
                "estado_id" => 18,
                "nome" => 'VIANA',
            ],
            [
                "codigo_ibge" => 3205150,
                "estado_id" => 18,
                "nome" => 'VILA PAVÃO',
            ],
            [
                "codigo_ibge" => 3205176,
                "estado_id" => 18,
                "nome" => 'VILA VALÉRIO',
            ],
            [
                "codigo_ibge" => 3205200,
                "estado_id" => 18,
                "nome" => 'VILA VELHA',
            ],
            [
                "codigo_ibge" => 3205309,
                "estado_id" => 18,
                "nome" => 'VITÓRIA',
            ],
            [
                "codigo_ibge" => 3300100,
                "estado_id" => 19,
                "nome" => 'ANGRA DOS REIS',
            ],
            [
                "codigo_ibge" => 3300159,
                "estado_id" => 19,
                "nome" => 'APERIBÉ',
            ],
            [
                "codigo_ibge" => 3300209,
                "estado_id" => 19,
                "nome" => 'ARARUAMA',
            ],
            [
                "codigo_ibge" => 3300225,
                "estado_id" => 19,
                "nome" => 'AREAL',
            ],
            [
                "codigo_ibge" => 3300233,
                "estado_id" => 19,
                "nome" => 'ARMAÇÃO DOS BÚZIOS',
            ],
            [
                "codigo_ibge" => 3300258,
                "estado_id" => 19,
                "nome" => 'ARRAIAL DO CABO',
            ],
            [
                "codigo_ibge" => 3300308,
                "estado_id" => 19,
                "nome" => 'BARRA DO PIRAÍ',
            ],
            [
                "codigo_ibge" => 3300407,
                "estado_id" => 19,
                "nome" => 'BARRA MANSA',
            ],
            [
                "codigo_ibge" => 3300456,
                "estado_id" => 19,
                "nome" => 'BELFORD ROXO',
            ],
            [
                "codigo_ibge" => 3300506,
                "estado_id" => 19,
                "nome" => 'BOM JARDIM',
            ],
            [
                "codigo_ibge" => 3300605,
                "estado_id" => 19,
                "nome" => 'BOM JESUS DO ITABAPOANA',
            ],
            [
                "codigo_ibge" => 3300704,
                "estado_id" => 19,
                "nome" => 'CABO FRIO',
            ],
            [
                "codigo_ibge" => 3300803,
                "estado_id" => 19,
                "nome" => 'CACHOEIRAS DE MACACU',
            ],
            [
                "codigo_ibge" => 3300902,
                "estado_id" => 19,
                "nome" => 'CAMBUCI',
            ],
            [
                "codigo_ibge" => 3300936,
                "estado_id" => 19,
                "nome" => 'CARAPEBUS',
            ],
            [
                "codigo_ibge" => 3300951,
                "estado_id" => 19,
                "nome" => 'COMENDADOR LEVY GASPARIAN',
            ],
            [
                "codigo_ibge" => 3301009,
                "estado_id" => 19,
                "nome" => 'CAMPOS DOS GOYTACAZES',
            ],
            [
                "codigo_ibge" => 3301108,
                "estado_id" => 19,
                "nome" => 'CANTAGALO',
            ],
            [
                "codigo_ibge" => 3301157,
                "estado_id" => 19,
                "nome" => 'CARDOSO MOREIRA',
            ],
            [
                "codigo_ibge" => 3301207,
                "estado_id" => 19,
                "nome" => 'CARMO',
            ],
            [
                "codigo_ibge" => 3301306,
                "estado_id" => 19,
                "nome" => 'CASIMIRO DE ABREU',
            ],
            [
                "codigo_ibge" => 3301405,
                "estado_id" => 19,
                "nome" => 'CONCEIÇÃO DE MACABU',
            ],
            [
                "codigo_ibge" => 3301504,
                "estado_id" => 19,
                "nome" => 'CORDEIRO',
            ],
            [
                "codigo_ibge" => 3301603,
                "estado_id" => 19,
                "nome" => 'DUAS BARRAS',
            ],
            [
                "codigo_ibge" => 3301702,
                "estado_id" => 19,
                "nome" => 'DUQUE DE CAXIAS',
            ],
            [
                "codigo_ibge" => 3301801,
                "estado_id" => 19,
                "nome" => 'ENGENHEIRO PAULO DE FRONTIN',
            ],
            [
                "codigo_ibge" => 3301850,
                "estado_id" => 19,
                "nome" => 'GUAPIMIRIM',
            ],
            [
                "codigo_ibge" => 3301876,
                "estado_id" => 19,
                "nome" => 'IGUABA GRANDE',
            ],
            [
                "codigo_ibge" => 3301900,
                "estado_id" => 19,
                "nome" => 'ITABORAÍ',
            ],
            [
                "codigo_ibge" => 3302007,
                "estado_id" => 19,
                "nome" => 'ITAGUAÍ',
            ],
            [
                "codigo_ibge" => 3302056,
                "estado_id" => 19,
                "nome" => 'ITALVA',
            ],
            [
                "codigo_ibge" => 3302106,
                "estado_id" => 19,
                "nome" => 'ITAOCARA',
            ],
            [
                "codigo_ibge" => 3302205,
                "estado_id" => 19,
                "nome" => 'ITAPERUNA',
            ],
            [
                "codigo_ibge" => 3302254,
                "estado_id" => 19,
                "nome" => 'ITATIAIA',
            ],
            [
                "codigo_ibge" => 3302270,
                "estado_id" => 19,
                "nome" => 'JAPERI',
            ],
            [
                "codigo_ibge" => 3302304,
                "estado_id" => 19,
                "nome" => 'LAJE DO MURIAÉ',
            ],
            [
                "codigo_ibge" => 3302403,
                "estado_id" => 19,
                "nome" => 'MACAÉ',
            ],
            [
                "codigo_ibge" => 3302452,
                "estado_id" => 19,
                "nome" => 'MACUCO',
            ],
            [
                "codigo_ibge" => 3302502,
                "estado_id" => 19,
                "nome" => 'MAGÉ',
            ],
            [
                "codigo_ibge" => 3302601,
                "estado_id" => 19,
                "nome" => 'MANGARATIBA',
            ],
            [
                "codigo_ibge" => 3302700,
                "estado_id" => 19,
                "nome" => 'MARICÁ',
            ],
            [
                "codigo_ibge" => 3302809,
                "estado_id" => 19,
                "nome" => 'MENDES',
            ],
            [
                "codigo_ibge" => 3302858,
                "estado_id" => 19,
                "nome" => 'MESQUITA',
            ],
            [
                "codigo_ibge" => 3302908,
                "estado_id" => 19,
                "nome" => 'MIGUEL PEREIRA',
            ],
            [
                "codigo_ibge" => 3303005,
                "estado_id" => 19,
                "nome" => 'MIRACEMA',
            ],
            [
                "codigo_ibge" => 3303104,
                "estado_id" => 19,
                "nome" => 'NATIVIDADE',
            ],
            [
                "codigo_ibge" => 3303203,
                "estado_id" => 19,
                "nome" => 'NILÓPOLIS',
            ],
            [
                "codigo_ibge" => 3303302,
                "estado_id" => 19,
                "nome" => 'NITERÓI',
            ],
            [
                "codigo_ibge" => 3303401,
                "estado_id" => 19,
                "nome" => 'NOVA FRIBURGO',
            ],
            [
                "codigo_ibge" => 3303500,
                "estado_id" => 19,
                "nome" => 'NOVA IGUAÇU',
            ],
            [
                "codigo_ibge" => 3303609,
                "estado_id" => 19,
                "nome" => 'PARACAMBI',
            ],
            [
                "codigo_ibge" => 3303708,
                "estado_id" => 19,
                "nome" => 'PARAÍBA DO SUL',
            ],
            [
                "codigo_ibge" => 3303807,
                "estado_id" => 19,
                "nome" => 'PARATY',
            ],
            [
                "codigo_ibge" => 3303856,
                "estado_id" => 19,
                "nome" => 'PATY DO ALFERES',
            ],
            [
                "codigo_ibge" => 3303906,
                "estado_id" => 19,
                "nome" => 'PETRÓPOLIS',
            ],
            [
                "codigo_ibge" => 3303955,
                "estado_id" => 19,
                "nome" => 'PINHEIRAL',
            ],
            [
                "codigo_ibge" => 3304003,
                "estado_id" => 19,
                "nome" => 'PIRAÍ',
            ],
            [
                "codigo_ibge" => 3304102,
                "estado_id" => 19,
                "nome" => 'PORCIÚNCULA',
            ],
            [
                "codigo_ibge" => 3304110,
                "estado_id" => 19,
                "nome" => 'PORTO REAL',
            ],
            [
                "codigo_ibge" => 3304128,
                "estado_id" => 19,
                "nome" => 'QUATIS',
            ],
            [
                "codigo_ibge" => 3304144,
                "estado_id" => 19,
                "nome" => 'QUEIMADOS',
            ],
            [
                "codigo_ibge" => 3304151,
                "estado_id" => 19,
                "nome" => 'QUISSAMÃ',
            ],
            [
                "codigo_ibge" => 3304201,
                "estado_id" => 19,
                "nome" => 'RESENDE',
            ],
            [
                "codigo_ibge" => 3304300,
                "estado_id" => 19,
                "nome" => 'RIO BONITO',
            ],
            [
                "codigo_ibge" => 3304409,
                "estado_id" => 19,
                "nome" => 'RIO CLARO',
            ],
            [
                "codigo_ibge" => 3304508,
                "estado_id" => 19,
                "nome" => 'RIO DAS FLORES',
            ],
            [
                "codigo_ibge" => 3304524,
                "estado_id" => 19,
                "nome" => 'RIO DAS OSTRAS',
            ],
            [
                "codigo_ibge" => 3304557,
                "estado_id" => 19,
                "nome" => 'RIO DE JANEIRO',
            ],
            [
                "codigo_ibge" => 3304607,
                "estado_id" => 19,
                "nome" => 'SANTA MARIA MADALENA',
            ],
            [
                "codigo_ibge" => 3304706,
                "estado_id" => 19,
                "nome" => 'SANTO ANTÔNIO DE PÁDUA',
            ],
            [
                "codigo_ibge" => 3304755,
                "estado_id" => 19,
                "nome" => 'SÃO FRANCISCO DE ITABAPOANA',
            ],
            [
                "codigo_ibge" => 3304805,
                "estado_id" => 19,
                "nome" => 'SÃO FIDÉLIS',
            ],
            [
                "codigo_ibge" => 3304904,
                "estado_id" => 19,
                "nome" => 'SÃO GONÇALO',
            ],
            [
                "codigo_ibge" => 3305000,
                "estado_id" => 19,
                "nome" => 'SÃO JOÃO DA BARRA',
            ],
            [
                "codigo_ibge" => 3305109,
                "estado_id" => 19,
                "nome" => 'SÃO JOÃO DE MERITI',
            ],
            [
                "codigo_ibge" => 3305133,
                "estado_id" => 19,
                "nome" => 'SÃO JOSÉ DE UBÁ',
            ],
            [
                "codigo_ibge" => 3305158,
                "estado_id" => 19,
                "nome" => 'SÃO JOSÉ DO VALE DO RIO PRETO',
            ],
            [
                "codigo_ibge" => 3305208,
                "estado_id" => 19,
                "nome" => 'SÃO PEDRO DA ALDEIA',
            ],
            [
                "codigo_ibge" => 3305307,
                "estado_id" => 19,
                "nome" => 'SÃO SEBASTIÃO DO ALTO',
            ],
            [
                "codigo_ibge" => 3305406,
                "estado_id" => 19,
                "nome" => 'SAPUCAIA',
            ],
            [
                "codigo_ibge" => 3305505,
                "estado_id" => 19,
                "nome" => 'SAQUAREMA',
            ],
            [
                "codigo_ibge" => 3305554,
                "estado_id" => 19,
                "nome" => 'SEROPÉDICA',
            ],
            [
                "codigo_ibge" => 3305604,
                "estado_id" => 19,
                "nome" => 'SILVA JARDIM',
            ],
            [
                "codigo_ibge" => 3305703,
                "estado_id" => 19,
                "nome" => 'SUMIDOURO',
            ],
            [
                "codigo_ibge" => 3305752,
                "estado_id" => 19,
                "nome" => 'TANGUÁ',
            ],
            [
                "codigo_ibge" => 3305802,
                "estado_id" => 19,
                "nome" => 'TERESÓPOLIS',
            ],
            [
                "codigo_ibge" => 3305901,
                "estado_id" => 19,
                "nome" => 'TRAJANO DE MORAES',
            ],
            [
                "codigo_ibge" => 3306008,
                "estado_id" => 19,
                "nome" => 'TRÊS RIOS',
            ],
            [
                "codigo_ibge" => 3306107,
                "estado_id" => 19,
                "nome" => 'VALENÇA',
            ],
            [
                "codigo_ibge" => 3306156,
                "estado_id" => 19,
                "nome" => 'VARRE-SAI',
            ],
            [
                "codigo_ibge" => 3306206,
                "estado_id" => 19,
                "nome" => 'VASSOURAS',
            ],
            [
                "codigo_ibge" => 3306305,
                "estado_id" => 19,
                "nome" => 'VOLTA REDONDA',
            ],
            [
                "codigo_ibge" => 3500105,
                "estado_id" => 20,
                "nome" => 'ADAMANTINA',
            ],
            [
                "codigo_ibge" => 3500204,
                "estado_id" => 20,
                "nome" => 'ADOLFO',
            ],
            [
                "codigo_ibge" => 3500303,
                "estado_id" => 20,
                "nome" => 'AGUAÍ',
            ],
            [
                "codigo_ibge" => 3500402,
                "estado_id" => 20,
                "nome" => 'ÁGUAS DA PRATA',
            ],
            [
                "codigo_ibge" => 3500501,
                "estado_id" => 20,
                "nome" => 'ÁGUAS DE LINDÓIA',
            ],
            [
                "codigo_ibge" => 3500550,
                "estado_id" => 20,
                "nome" => 'ÁGUAS DE SANTA BÁRBARA',
            ],
            [
                "codigo_ibge" => 3500600,
                "estado_id" => 20,
                "nome" => 'ÁGUAS DE SÃO PEDRO',
            ],
            [
                "codigo_ibge" => 3500709,
                "estado_id" => 20,
                "nome" => 'AGUDOS',
            ],
            [
                "codigo_ibge" => 3500758,
                "estado_id" => 20,
                "nome" => 'ALAMBARI',
            ],
            [
                "codigo_ibge" => 3500808,
                "estado_id" => 20,
                "nome" => 'ALFREDO MARCONDES',
            ],
            [
                "codigo_ibge" => 3500907,
                "estado_id" => 20,
                "nome" => 'ALTAIR',
            ],
            [
                "codigo_ibge" => 3501004,
                "estado_id" => 20,
                "nome" => 'ALTINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3501103,
                "estado_id" => 20,
                "nome" => 'ALTO ALEGRE',
            ],
            [
                "codigo_ibge" => 3501152,
                "estado_id" => 20,
                "nome" => 'ALUMÍNIO',
            ],
            [
                "codigo_ibge" => 3501202,
                "estado_id" => 20,
                "nome" => 'ÁLVARES FLORENCE',
            ],
            [
                "codigo_ibge" => 3501301,
                "estado_id" => 20,
                "nome" => 'ÁLVARES MACHADO',
            ],
            [
                "codigo_ibge" => 3501400,
                "estado_id" => 20,
                "nome" => 'ÁLVARO DE CARVALHO',
            ],
            [
                "codigo_ibge" => 3501509,
                "estado_id" => 20,
                "nome" => 'ALVINLÂNDIA',
            ],
            [
                "codigo_ibge" => 3501608,
                "estado_id" => 20,
                "nome" => 'AMERICANA',
            ],
            [
                "codigo_ibge" => 3501707,
                "estado_id" => 20,
                "nome" => 'AMÉRICO BRASILIENSE',
            ],
            [
                "codigo_ibge" => 3501806,
                "estado_id" => 20,
                "nome" => 'AMÉRICO DE CAMPOS',
            ],
            [
                "codigo_ibge" => 3501905,
                "estado_id" => 20,
                "nome" => 'AMPARO',
            ],
            [
                "codigo_ibge" => 3502002,
                "estado_id" => 20,
                "nome" => 'ANALÂNDIA',
            ],
            [
                "codigo_ibge" => 3502101,
                "estado_id" => 20,
                "nome" => 'ANDRADINA',
            ],
            [
                "codigo_ibge" => 3502200,
                "estado_id" => 20,
                "nome" => 'ANGATUBA',
            ],
            [
                "codigo_ibge" => 3502309,
                "estado_id" => 20,
                "nome" => 'ANHEMBI',
            ],
            [
                "codigo_ibge" => 3502408,
                "estado_id" => 20,
                "nome" => 'ANHUMAS',
            ],
            [
                "codigo_ibge" => 3502507,
                "estado_id" => 20,
                "nome" => 'APARECIDA',
            ],
            [
                "codigo_ibge" => 3502606,
                "estado_id" => 20,
                "nome" => 'APARECIDA D`OESTE',
            ],
            [
                "codigo_ibge" => 3502705,
                "estado_id" => 20,
                "nome" => 'APIAÍ',
            ],
            [
                "codigo_ibge" => 3502754,
                "estado_id" => 20,
                "nome" => 'ARAÇARIGUAMA',
            ],
            [
                "codigo_ibge" => 3502804,
                "estado_id" => 20,
                "nome" => 'ARAÇATUBA',
            ],
            [
                "codigo_ibge" => 3502903,
                "estado_id" => 20,
                "nome" => 'ARAÇOIABA DA SERRA',
            ],
            [
                "codigo_ibge" => 3503000,
                "estado_id" => 20,
                "nome" => 'ARAMINA',
            ],
            [
                "codigo_ibge" => 3503109,
                "estado_id" => 20,
                "nome" => 'ARANDU',
            ],
            [
                "codigo_ibge" => 3503158,
                "estado_id" => 20,
                "nome" => 'ARAPEÍ',
            ],
            [
                "codigo_ibge" => 3503208,
                "estado_id" => 20,
                "nome" => 'ARARAQUARA',
            ],
            [
                "codigo_ibge" => 3503307,
                "estado_id" => 20,
                "nome" => 'ARARAS',
            ],
            [
                "codigo_ibge" => 3503356,
                "estado_id" => 20,
                "nome" => 'ARCO-ÍRIS',
            ],
            [
                "codigo_ibge" => 3503406,
                "estado_id" => 20,
                "nome" => 'AREALVA',
            ],
            [
                "codigo_ibge" => 3503505,
                "estado_id" => 20,
                "nome" => 'AREIAS',
            ],
            [
                "codigo_ibge" => 3503604,
                "estado_id" => 20,
                "nome" => 'AREIÓPOLIS',
            ],
            [
                "codigo_ibge" => 3503703,
                "estado_id" => 20,
                "nome" => 'ARIRANHA',
            ],
            [
                "codigo_ibge" => 3503802,
                "estado_id" => 20,
                "nome" => 'ARTUR NOGUEIRA',
            ],
            [
                "codigo_ibge" => 3503901,
                "estado_id" => 20,
                "nome" => 'ARUJÁ',
            ],
            [
                "codigo_ibge" => 3503950,
                "estado_id" => 20,
                "nome" => 'ASPÁSIA',
            ],
            [
                "codigo_ibge" => 3504008,
                "estado_id" => 20,
                "nome" => 'ASSIS',
            ],
            [
                "codigo_ibge" => 3504107,
                "estado_id" => 20,
                "nome" => 'ATIBAIA',
            ],
            [
                "codigo_ibge" => 3504206,
                "estado_id" => 20,
                "nome" => 'AURIFLAMA',
            ],
            [
                "codigo_ibge" => 3504305,
                "estado_id" => 20,
                "nome" => 'AVAÍ',
            ],
            [
                "codigo_ibge" => 3504404,
                "estado_id" => 20,
                "nome" => 'AVANHANDAVA',
            ],
            [
                "codigo_ibge" => 3504503,
                "estado_id" => 20,
                "nome" => 'AVARÉ',
            ],
            [
                "codigo_ibge" => 3504602,
                "estado_id" => 20,
                "nome" => 'BADY BASSITT',
            ],
            [
                "codigo_ibge" => 3504701,
                "estado_id" => 20,
                "nome" => 'BALBINOS',
            ],
            [
                "codigo_ibge" => 3504800,
                "estado_id" => 20,
                "nome" => 'BÁLSAMO',
            ],
            [
                "codigo_ibge" => 3504909,
                "estado_id" => 20,
                "nome" => 'BANANAL',
            ],
            [
                "codigo_ibge" => 3505005,
                "estado_id" => 20,
                "nome" => 'BARÃO DE ANTONINA',
            ],
            [
                "codigo_ibge" => 3505104,
                "estado_id" => 20,
                "nome" => 'BARBOSA',
            ],
            [
                "codigo_ibge" => 3505203,
                "estado_id" => 20,
                "nome" => 'BARIRI',
            ],
            [
                "codigo_ibge" => 3505302,
                "estado_id" => 20,
                "nome" => 'BARRA BONITA',
            ],
            [
                "codigo_ibge" => 3505351,
                "estado_id" => 20,
                "nome" => 'BARRA DO CHAPÉU',
            ],
            [
                "codigo_ibge" => 3505401,
                "estado_id" => 20,
                "nome" => 'BARRA DO TURVO',
            ],
            [
                "codigo_ibge" => 3505500,
                "estado_id" => 20,
                "nome" => 'BARRETOS',
            ],
            [
                "codigo_ibge" => 3505609,
                "estado_id" => 20,
                "nome" => 'BARRINHA',
            ],
            [
                "codigo_ibge" => 3505708,
                "estado_id" => 20,
                "nome" => 'BARUERI',
            ],
            [
                "codigo_ibge" => 3505807,
                "estado_id" => 20,
                "nome" => 'BASTOS',
            ],
            [
                "codigo_ibge" => 3505906,
                "estado_id" => 20,
                "nome" => 'BATATAIS',
            ],
            [
                "codigo_ibge" => 3506003,
                "estado_id" => 20,
                "nome" => 'BAURU',
            ],
            [
                "codigo_ibge" => 3506102,
                "estado_id" => 20,
                "nome" => 'BEBEDOURO',
            ],
            [
                "codigo_ibge" => 3506201,
                "estado_id" => 20,
                "nome" => 'BENTO DE ABREU',
            ],
            [
                "codigo_ibge" => 3506300,
                "estado_id" => 20,
                "nome" => 'BERNARDINO DE CAMPOS',
            ],
            [
                "codigo_ibge" => 3506359,
                "estado_id" => 20,
                "nome" => 'BERTIOGA',
            ],
            [
                "codigo_ibge" => 3506409,
                "estado_id" => 20,
                "nome" => 'BILAC',
            ],
            [
                "codigo_ibge" => 3506508,
                "estado_id" => 20,
                "nome" => 'BIRIGUI',
            ],
            [
                "codigo_ibge" => 3506607,
                "estado_id" => 20,
                "nome" => 'BIRITIBA-MIRIM',
            ],
            [
                "codigo_ibge" => 3506706,
                "estado_id" => 20,
                "nome" => 'BOA ESPERANÇA DO SUL',
            ],
            [
                "codigo_ibge" => 3506805,
                "estado_id" => 20,
                "nome" => 'BOCAINA',
            ],
            [
                "codigo_ibge" => 3506904,
                "estado_id" => 20,
                "nome" => 'BOFETE',
            ],
            [
                "codigo_ibge" => 3507001,
                "estado_id" => 20,
                "nome" => 'BOITUVA',
            ],
            [
                "codigo_ibge" => 3507100,
                "estado_id" => 20,
                "nome" => 'BOM JESUS DOS PERDÕES',
            ],
            [
                "codigo_ibge" => 3507159,
                "estado_id" => 20,
                "nome" => 'BOM SUCESSO DE ITARARÉ',
            ],
            [
                "codigo_ibge" => 3507209,
                "estado_id" => 20,
                "nome" => 'BORÁ',
            ],
            [
                "codigo_ibge" => 3507308,
                "estado_id" => 20,
                "nome" => 'BORACÉIA',
            ],
            [
                "codigo_ibge" => 3507407,
                "estado_id" => 20,
                "nome" => 'BORBOREMA',
            ],
            [
                "codigo_ibge" => 3507456,
                "estado_id" => 20,
                "nome" => 'BOREBI',
            ],
            [
                "codigo_ibge" => 3507506,
                "estado_id" => 20,
                "nome" => 'BOTUCATU',
            ],
            [
                "codigo_ibge" => 3507605,
                "estado_id" => 20,
                "nome" => 'BRAGANÇA PAULISTA',
            ],
            [
                "codigo_ibge" => 3507704,
                "estado_id" => 20,
                "nome" => 'BRAÚNA',
            ],
            [
                "codigo_ibge" => 3507753,
                "estado_id" => 20,
                "nome" => 'BREJO ALEGRE',
            ],
            [
                "codigo_ibge" => 3507803,
                "estado_id" => 20,
                "nome" => 'BRODOWSKI',
            ],
            [
                "codigo_ibge" => 3507902,
                "estado_id" => 20,
                "nome" => 'BROTAS',
            ],
            [
                "codigo_ibge" => 3508009,
                "estado_id" => 20,
                "nome" => 'BURI',
            ],
            [
                "codigo_ibge" => 3508108,
                "estado_id" => 20,
                "nome" => 'BURITAMA',
            ],
            [
                "codigo_ibge" => 3508207,
                "estado_id" => 20,
                "nome" => 'BURITIZAL',
            ],
            [
                "codigo_ibge" => 3508306,
                "estado_id" => 20,
                "nome" => 'CABRÁLIA PAULISTA',
            ],
            [
                "codigo_ibge" => 3508405,
                "estado_id" => 20,
                "nome" => 'CABREÚVA',
            ],
            [
                "codigo_ibge" => 3508504,
                "estado_id" => 20,
                "nome" => 'CAÇAPAVA',
            ],
            [
                "codigo_ibge" => 3508603,
                "estado_id" => 20,
                "nome" => 'CACHOEIRA PAULISTA',
            ],
            [
                "codigo_ibge" => 3508702,
                "estado_id" => 20,
                "nome" => 'CACONDE',
            ],
            [
                "codigo_ibge" => 3508801,
                "estado_id" => 20,
                "nome" => 'CAFELÂNDIA',
            ],
            [
                "codigo_ibge" => 3508900,
                "estado_id" => 20,
                "nome" => 'CAIABU',
            ],
            [
                "codigo_ibge" => 3509007,
                "estado_id" => 20,
                "nome" => 'CAIEIRAS',
            ],
            [
                "codigo_ibge" => 3509106,
                "estado_id" => 20,
                "nome" => 'CAIUÁ',
            ],
            [
                "codigo_ibge" => 3509205,
                "estado_id" => 20,
                "nome" => 'CAJAMAR',
            ],
            [
                "codigo_ibge" => 3509254,
                "estado_id" => 20,
                "nome" => 'CAJATI',
            ],
            [
                "codigo_ibge" => 3509304,
                "estado_id" => 20,
                "nome" => 'CAJOBI',
            ],
            [
                "codigo_ibge" => 3509403,
                "estado_id" => 20,
                "nome" => 'CAJURU',
            ],
            [
                "codigo_ibge" => 3509452,
                "estado_id" => 20,
                "nome" => 'CAMPINA DO MONTE ALEGRE',
            ],
            [
                "codigo_ibge" => 3509502,
                "estado_id" => 20,
                "nome" => 'CAMPINAS',
            ],
            [
                "codigo_ibge" => 3509601,
                "estado_id" => 20,
                "nome" => 'CAMPO LIMPO PAULISTA',
            ],
            [
                "codigo_ibge" => 3509700,
                "estado_id" => 20,
                "nome" => 'CAMPOS DO JORDÃO',
            ],
            [
                "codigo_ibge" => 3509809,
                "estado_id" => 20,
                "nome" => 'CAMPOS NOVOS PAULISTA',
            ],
            [
                "codigo_ibge" => 3509908,
                "estado_id" => 20,
                "nome" => 'CANANÉIA',
            ],
            [
                "codigo_ibge" => 3509957,
                "estado_id" => 20,
                "nome" => 'CANAS',
            ],
            [
                "codigo_ibge" => 3510005,
                "estado_id" => 20,
                "nome" => 'CÂNDIDO MOTA',
            ],
            [
                "codigo_ibge" => 3510104,
                "estado_id" => 20,
                "nome" => 'CÂNDIDO RODRIGUES',
            ],
            [
                "codigo_ibge" => 3510153,
                "estado_id" => 20,
                "nome" => 'CANITAR',
            ],
            [
                "codigo_ibge" => 3510203,
                "estado_id" => 20,
                "nome" => 'CAPÃO BONITO',
            ],
            [
                "codigo_ibge" => 3510302,
                "estado_id" => 20,
                "nome" => 'CAPELA DO ALTO',
            ],
            [
                "codigo_ibge" => 3510401,
                "estado_id" => 20,
                "nome" => 'CAPIVARI',
            ],
            [
                "codigo_ibge" => 3510500,
                "estado_id" => 20,
                "nome" => 'CARAGUATATUBA',
            ],
            [
                "codigo_ibge" => 3510609,
                "estado_id" => 20,
                "nome" => 'CARAPICUÍBA',
            ],
            [
                "codigo_ibge" => 3510708,
                "estado_id" => 20,
                "nome" => 'CARDOSO',
            ],
            [
                "codigo_ibge" => 3510807,
                "estado_id" => 20,
                "nome" => 'CASA BRANCA',
            ],
            [
                "codigo_ibge" => 3510906,
                "estado_id" => 20,
                "nome" => 'CÁSSIA DOS COQUEIROS',
            ],
            [
                "codigo_ibge" => 3511003,
                "estado_id" => 20,
                "nome" => 'CASTILHO',
            ],
            [
                "codigo_ibge" => 3511102,
                "estado_id" => 20,
                "nome" => 'CATANDUVA',
            ],
            [
                "codigo_ibge" => 3511201,
                "estado_id" => 20,
                "nome" => 'CATIGUÁ',
            ],
            [
                "codigo_ibge" => 3511300,
                "estado_id" => 20,
                "nome" => 'CEDRAL',
            ],
            [
                "codigo_ibge" => 3511409,
                "estado_id" => 20,
                "nome" => 'CERQUEIRA CÉSAR',
            ],
            [
                "codigo_ibge" => 3511508,
                "estado_id" => 20,
                "nome" => 'CERQUILHO',
            ],
            [
                "codigo_ibge" => 3511607,
                "estado_id" => 20,
                "nome" => 'CESÁRIO LANGE',
            ],
            [
                "codigo_ibge" => 3511706,
                "estado_id" => 20,
                "nome" => 'CHARQUEADA',
            ],
            [
                "codigo_ibge" => 3511904,
                "estado_id" => 20,
                "nome" => 'CLEMENTINA',
            ],
            [
                "codigo_ibge" => 3512001,
                "estado_id" => 20,
                "nome" => 'COLINA',
            ],
            [
                "codigo_ibge" => 3512100,
                "estado_id" => 20,
                "nome" => 'COLÔMBIA',
            ],
            [
                "codigo_ibge" => 3512209,
                "estado_id" => 20,
                "nome" => 'CONCHAL',
            ],
            [
                "codigo_ibge" => 3512308,
                "estado_id" => 20,
                "nome" => 'CONCHAS',
            ],
            [
                "codigo_ibge" => 3512407,
                "estado_id" => 20,
                "nome" => 'CORDEIRÓPOLIS',
            ],
            [
                "codigo_ibge" => 3512506,
                "estado_id" => 20,
                "nome" => 'COROADOS',
            ],
            [
                "codigo_ibge" => 3512605,
                "estado_id" => 20,
                "nome" => 'CORONEL MACEDO',
            ],
            [
                "codigo_ibge" => 3512704,
                "estado_id" => 20,
                "nome" => 'CORUMBATAÍ',
            ],
            [
                "codigo_ibge" => 3512803,
                "estado_id" => 20,
                "nome" => 'COSMÓPOLIS',
            ],
            [
                "codigo_ibge" => 3512902,
                "estado_id" => 20,
                "nome" => 'COSMORAMA',
            ],
            [
                "codigo_ibge" => 3513009,
                "estado_id" => 20,
                "nome" => 'COTIA',
            ],
            [
                "codigo_ibge" => 3513108,
                "estado_id" => 20,
                "nome" => 'CRAVINHOS',
            ],
            [
                "codigo_ibge" => 3513207,
                "estado_id" => 20,
                "nome" => 'CRISTAIS PAULISTA',
            ],
            [
                "codigo_ibge" => 3513306,
                "estado_id" => 20,
                "nome" => 'CRUZÁLIA',
            ],
            [
                "codigo_ibge" => 3513405,
                "estado_id" => 20,
                "nome" => 'CRUZEIRO',
            ],
            [
                "codigo_ibge" => 3513504,
                "estado_id" => 20,
                "nome" => 'CUBATÃO',
            ],
            [
                "codigo_ibge" => 3513603,
                "estado_id" => 20,
                "nome" => 'CUNHA',
            ],
            [
                "codigo_ibge" => 3513702,
                "estado_id" => 20,
                "nome" => 'DESCALVADO',
            ],
            [
                "codigo_ibge" => 3513801,
                "estado_id" => 20,
                "nome" => 'DIADEMA',
            ],
            [
                "codigo_ibge" => 3513850,
                "estado_id" => 20,
                "nome" => 'DIRCE REIS',
            ],
            [
                "codigo_ibge" => 3513900,
                "estado_id" => 20,
                "nome" => 'DIVINOLÂNDIA',
            ],
            [
                "codigo_ibge" => 3514007,
                "estado_id" => 20,
                "nome" => 'DOBRADA',
            ],
            [
                "codigo_ibge" => 3514106,
                "estado_id" => 20,
                "nome" => 'DOIS CÓRREGOS',
            ],
            [
                "codigo_ibge" => 3514205,
                "estado_id" => 20,
                "nome" => 'DOLCINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3514304,
                "estado_id" => 20,
                "nome" => 'DOURADO',
            ],
            [
                "codigo_ibge" => 3514403,
                "estado_id" => 20,
                "nome" => 'DRACENA',
            ],
            [
                "codigo_ibge" => 3514502,
                "estado_id" => 20,
                "nome" => 'DUARTINA',
            ],
            [
                "codigo_ibge" => 3514601,
                "estado_id" => 20,
                "nome" => 'DUMONT',
            ],
            [
                "codigo_ibge" => 3514700,
                "estado_id" => 20,
                "nome" => 'ECHAPORÃ',
            ],
            [
                "codigo_ibge" => 3514809,
                "estado_id" => 20,
                "nome" => 'ELDORADO',
            ],
            [
                "codigo_ibge" => 3514908,
                "estado_id" => 20,
                "nome" => 'ELIAS FAUSTO',
            ],
            [
                "codigo_ibge" => 3514924,
                "estado_id" => 20,
                "nome" => 'ELISIÁRIO',
            ],
            [
                "codigo_ibge" => 3514957,
                "estado_id" => 20,
                "nome" => 'EMBAÚBA',
            ],
            [
                "codigo_ibge" => 3515004,
                "estado_id" => 20,
                "nome" => 'EMBU DAS ARTES',
            ],
            [
                "codigo_ibge" => 3515103,
                "estado_id" => 20,
                "nome" => 'EMBU-GUAÇU',
            ],
            [
                "codigo_ibge" => 3515129,
                "estado_id" => 20,
                "nome" => 'EMILIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 3515152,
                "estado_id" => 20,
                "nome" => 'ENGENHEIRO COELHO',
            ],
            [
                "codigo_ibge" => 3515186,
                "estado_id" => 20,
                "nome" => 'ESPÍRITO SANTO DO PINHAL',
            ],
            [
                "codigo_ibge" => 3515194,
                "estado_id" => 20,
                "nome" => 'ESPÍRITO SANTO DO TURVO',
            ],
            [
                "codigo_ibge" => 3515202,
                "estado_id" => 20,
                "nome" => 'ESTRELA D`OESTE',
            ],
            [
                "codigo_ibge" => 3515301,
                "estado_id" => 20,
                "nome" => 'ESTRELA DO NORTE',
            ],
            [
                "codigo_ibge" => 3515350,
                "estado_id" => 20,
                "nome" => 'EUCLIDES DA CUNHA PAULISTA',
            ],
            [
                "codigo_ibge" => 3515400,
                "estado_id" => 20,
                "nome" => 'FARTURA',
            ],
            [
                "codigo_ibge" => 3515509,
                "estado_id" => 20,
                "nome" => 'FERNANDÓPOLIS',
            ],
            [
                "codigo_ibge" => 3515608,
                "estado_id" => 20,
                "nome" => 'FERNANDO PRESTES',
            ],
            [
                "codigo_ibge" => 3515657,
                "estado_id" => 20,
                "nome" => 'FERNÃO',
            ],
            [
                "codigo_ibge" => 3515707,
                "estado_id" => 20,
                "nome" => 'FERRAZ DE VASCONCELOS',
            ],
            [
                "codigo_ibge" => 3515806,
                "estado_id" => 20,
                "nome" => 'FLORA RICA',
            ],
            [
                "codigo_ibge" => 3515905,
                "estado_id" => 20,
                "nome" => 'FLOREAL',
            ],
            [
                "codigo_ibge" => 3516002,
                "estado_id" => 20,
                "nome" => 'FLÓRIDA PAULISTA',
            ],
            [
                "codigo_ibge" => 3516101,
                "estado_id" => 20,
                "nome" => 'FLORÍNIA',
            ],
            [
                "codigo_ibge" => 3516200,
                "estado_id" => 20,
                "nome" => 'FRANCA',
            ],
            [
                "codigo_ibge" => 3516309,
                "estado_id" => 20,
                "nome" => 'FRANCISCO MORATO',
            ],
            [
                "codigo_ibge" => 3516408,
                "estado_id" => 20,
                "nome" => 'FRANCO DA ROCHA',
            ],
            [
                "codigo_ibge" => 3516507,
                "estado_id" => 20,
                "nome" => 'GABRIEL MONTEIRO',
            ],
            [
                "codigo_ibge" => 3516606,
                "estado_id" => 20,
                "nome" => 'GÁLIA',
            ],
            [
                "codigo_ibge" => 3516705,
                "estado_id" => 20,
                "nome" => 'GARÇA',
            ],
            [
                "codigo_ibge" => 3516804,
                "estado_id" => 20,
                "nome" => 'GASTÃO VIDIGAL',
            ],
            [
                "codigo_ibge" => 3516853,
                "estado_id" => 20,
                "nome" => 'GAVIÃO PEIXOTO',
            ],
            [
                "codigo_ibge" => 3516903,
                "estado_id" => 20,
                "nome" => 'GENERAL SALGADO',
            ],
            [
                "codigo_ibge" => 3517000,
                "estado_id" => 20,
                "nome" => 'GETULINA',
            ],
            [
                "codigo_ibge" => 3517109,
                "estado_id" => 20,
                "nome" => 'GLICÉRIO',
            ],
            [
                "codigo_ibge" => 3517208,
                "estado_id" => 20,
                "nome" => 'GUAIÇARA',
            ],
            [
                "codigo_ibge" => 3517307,
                "estado_id" => 20,
                "nome" => 'GUAIMBÊ',
            ],
            [
                "codigo_ibge" => 3517406,
                "estado_id" => 20,
                "nome" => 'GUAÍRA',
            ],
            [
                "codigo_ibge" => 3517505,
                "estado_id" => 20,
                "nome" => 'GUAPIAÇU',
            ],
            [
                "codigo_ibge" => 3517604,
                "estado_id" => 20,
                "nome" => 'GUAPIARA',
            ],
            [
                "codigo_ibge" => 3517703,
                "estado_id" => 20,
                "nome" => 'GUARÁ',
            ],
            [
                "codigo_ibge" => 3517802,
                "estado_id" => 20,
                "nome" => 'GUARAÇAÍ',
            ],
            [
                "codigo_ibge" => 3517901,
                "estado_id" => 20,
                "nome" => 'GUARACI',
            ],
            [
                "codigo_ibge" => 3518008,
                "estado_id" => 20,
                "nome" => 'GUARANI D`OESTE',
            ],
            [
                "codigo_ibge" => 3518107,
                "estado_id" => 20,
                "nome" => 'GUARANTÃ',
            ],
            [
                "codigo_ibge" => 3518206,
                "estado_id" => 20,
                "nome" => 'GUARARAPES',
            ],
            [
                "codigo_ibge" => 3518305,
                "estado_id" => 20,
                "nome" => 'GUARAREMA',
            ],
            [
                "codigo_ibge" => 3518404,
                "estado_id" => 20,
                "nome" => 'GUARATINGUETÁ',
            ],
            [
                "codigo_ibge" => 3518503,
                "estado_id" => 20,
                "nome" => 'GUAREÍ',
            ],
            [
                "codigo_ibge" => 3518602,
                "estado_id" => 20,
                "nome" => 'GUARIBA',
            ],
            [
                "codigo_ibge" => 3518701,
                "estado_id" => 20,
                "nome" => 'GUARUJÁ',
            ],
            [
                "codigo_ibge" => 3518800,
                "estado_id" => 20,
                "nome" => 'GUARULHOS',
            ],
            [
                "codigo_ibge" => 3518859,
                "estado_id" => 20,
                "nome" => 'GUATAPARÁ',
            ],
            [
                "codigo_ibge" => 3518909,
                "estado_id" => 20,
                "nome" => 'GUZOLÂNDIA',
            ],
            [
                "codigo_ibge" => 3519006,
                "estado_id" => 20,
                "nome" => 'HERCULÂNDIA',
            ],
            [
                "codigo_ibge" => 3519055,
                "estado_id" => 20,
                "nome" => 'HOLAMBRA',
            ],
            [
                "codigo_ibge" => 3519071,
                "estado_id" => 20,
                "nome" => 'HORTOLÂNDIA',
            ],
            [
                "codigo_ibge" => 3519105,
                "estado_id" => 20,
                "nome" => 'IACANGA',
            ],
            [
                "codigo_ibge" => 3519204,
                "estado_id" => 20,
                "nome" => 'IACRI',
            ],
            [
                "codigo_ibge" => 3519253,
                "estado_id" => 20,
                "nome" => 'IARAS',
            ],
            [
                "codigo_ibge" => 3519303,
                "estado_id" => 20,
                "nome" => 'IBATÉ',
            ],
            [
                "codigo_ibge" => 3519402,
                "estado_id" => 20,
                "nome" => 'IBIRÁ',
            ],
            [
                "codigo_ibge" => 3519501,
                "estado_id" => 20,
                "nome" => 'IBIRAREMA',
            ],
            [
                "codigo_ibge" => 3519600,
                "estado_id" => 20,
                "nome" => 'IBITINGA',
            ],
            [
                "codigo_ibge" => 3519709,
                "estado_id" => 20,
                "nome" => 'IBIÚNA',
            ],
            [
                "codigo_ibge" => 3519808,
                "estado_id" => 20,
                "nome" => 'ICÉM',
            ],
            [
                "codigo_ibge" => 3519907,
                "estado_id" => 20,
                "nome" => 'IEPÊ',
            ],
            [
                "codigo_ibge" => 3520004,
                "estado_id" => 20,
                "nome" => 'IGARAÇU DO TIETÊ',
            ],
            [
                "codigo_ibge" => 3520103,
                "estado_id" => 20,
                "nome" => 'IGARAPAVA',
            ],
            [
                "codigo_ibge" => 3520202,
                "estado_id" => 20,
                "nome" => 'IGARATÁ',
            ],
            [
                "codigo_ibge" => 3520301,
                "estado_id" => 20,
                "nome" => 'IGUAPE',
            ],
            [
                "codigo_ibge" => 3520400,
                "estado_id" => 20,
                "nome" => 'ILHABELA',
            ],
            [
                "codigo_ibge" => 3520426,
                "estado_id" => 20,
                "nome" => 'ILHA COMPRIDA',
            ],
            [
                "codigo_ibge" => 3520442,
                "estado_id" => 20,
                "nome" => 'ILHA SOLTEIRA',
            ],
            [
                "codigo_ibge" => 3520509,
                "estado_id" => 20,
                "nome" => 'INDAIATUBA',
            ],
            [
                "codigo_ibge" => 3520608,
                "estado_id" => 20,
                "nome" => 'INDIANA',
            ],
            [
                "codigo_ibge" => 3520707,
                "estado_id" => 20,
                "nome" => 'INDIAPORÃ',
            ],
            [
                "codigo_ibge" => 3520806,
                "estado_id" => 20,
                "nome" => 'INÚBIA PAULISTA',
            ],
            [
                "codigo_ibge" => 3520905,
                "estado_id" => 20,
                "nome" => 'IPAUSSU',
            ],
            [
                "codigo_ibge" => 3521002,
                "estado_id" => 20,
                "nome" => 'IPERÓ',
            ],
            [
                "codigo_ibge" => 3521101,
                "estado_id" => 20,
                "nome" => 'IPEÚNA',
            ],
            [
                "codigo_ibge" => 3521150,
                "estado_id" => 20,
                "nome" => 'IPIGUÁ',
            ],
            [
                "codigo_ibge" => 3521200,
                "estado_id" => 20,
                "nome" => 'IPORANGA',
            ],
            [
                "codigo_ibge" => 3521309,
                "estado_id" => 20,
                "nome" => 'IPUÃ',
            ],
            [
                "codigo_ibge" => 3521408,
                "estado_id" => 20,
                "nome" => 'IRACEMÁPOLIS',
            ],
            [
                "codigo_ibge" => 3521507,
                "estado_id" => 20,
                "nome" => 'IRAPUÃ',
            ],
            [
                "codigo_ibge" => 3521606,
                "estado_id" => 20,
                "nome" => 'IRAPURU',
            ],
            [
                "codigo_ibge" => 3521705,
                "estado_id" => 20,
                "nome" => 'ITABERÁ',
            ],
            [
                "codigo_ibge" => 3521804,
                "estado_id" => 20,
                "nome" => 'ITAÍ',
            ],
            [
                "codigo_ibge" => 3521903,
                "estado_id" => 20,
                "nome" => 'ITAJOBI',
            ],
            [
                "codigo_ibge" => 3522000,
                "estado_id" => 20,
                "nome" => 'ITAJU',
            ],
            [
                "codigo_ibge" => 3522109,
                "estado_id" => 20,
                "nome" => 'ITANHAÉM',
            ],
            [
                "codigo_ibge" => 3522158,
                "estado_id" => 20,
                "nome" => 'ITAÓCA',
            ],
            [
                "codigo_ibge" => 3522208,
                "estado_id" => 20,
                "nome" => 'ITAPECERICA DA SERRA',
            ],
            [
                "codigo_ibge" => 3522307,
                "estado_id" => 20,
                "nome" => 'ITAPETININGA',
            ],
            [
                "codigo_ibge" => 3522406,
                "estado_id" => 20,
                "nome" => 'ITAPEVA',
            ],
            [
                "codigo_ibge" => 3522505,
                "estado_id" => 20,
                "nome" => 'ITAPEVI',
            ],
            [
                "codigo_ibge" => 3522604,
                "estado_id" => 20,
                "nome" => 'ITAPIRA',
            ],
            [
                "codigo_ibge" => 3522653,
                "estado_id" => 20,
                "nome" => 'ITAPIRAPUÃ PAULISTA',
            ],
            [
                "codigo_ibge" => 3522703,
                "estado_id" => 20,
                "nome" => 'ITÁPOLIS',
            ],
            [
                "codigo_ibge" => 3522802,
                "estado_id" => 20,
                "nome" => 'ITAPORANGA',
            ],
            [
                "codigo_ibge" => 3522901,
                "estado_id" => 20,
                "nome" => 'ITAPUÍ',
            ],
            [
                "codigo_ibge" => 3523008,
                "estado_id" => 20,
                "nome" => 'ITAPURA',
            ],
            [
                "codigo_ibge" => 3523107,
                "estado_id" => 20,
                "nome" => 'ITAQUAQUECETUBA',
            ],
            [
                "codigo_ibge" => 3523206,
                "estado_id" => 20,
                "nome" => 'ITARARÉ',
            ],
            [
                "codigo_ibge" => 3523305,
                "estado_id" => 20,
                "nome" => 'ITARIRI',
            ],
            [
                "codigo_ibge" => 3523404,
                "estado_id" => 20,
                "nome" => 'ITATIBA',
            ],
            [
                "codigo_ibge" => 3523503,
                "estado_id" => 20,
                "nome" => 'ITATINGA',
            ],
            [
                "codigo_ibge" => 3523602,
                "estado_id" => 20,
                "nome" => 'ITIRAPINA',
            ],
            [
                "codigo_ibge" => 3523701,
                "estado_id" => 20,
                "nome" => 'ITIRAPUÃ',
            ],
            [
                "codigo_ibge" => 3523800,
                "estado_id" => 20,
                "nome" => 'ITOBI',
            ],
            [
                "codigo_ibge" => 3523909,
                "estado_id" => 20,
                "nome" => 'ITU',
            ],
            [
                "codigo_ibge" => 3524006,
                "estado_id" => 20,
                "nome" => 'ITUPEVA',
            ],
            [
                "codigo_ibge" => 3524105,
                "estado_id" => 20,
                "nome" => 'ITUVERAVA',
            ],
            [
                "codigo_ibge" => 3524204,
                "estado_id" => 20,
                "nome" => 'JABORANDI',
            ],
            [
                "codigo_ibge" => 3524303,
                "estado_id" => 20,
                "nome" => 'JABOTICABAL',
            ],
            [
                "codigo_ibge" => 3524402,
                "estado_id" => 20,
                "nome" => 'JACAREÍ',
            ],
            [
                "codigo_ibge" => 3524501,
                "estado_id" => 20,
                "nome" => 'JACI',
            ],
            [
                "codigo_ibge" => 3524600,
                "estado_id" => 20,
                "nome" => 'JACUPIRANGA',
            ],
            [
                "codigo_ibge" => 3524709,
                "estado_id" => 20,
                "nome" => 'JAGUARIÚNA',
            ],
            [
                "codigo_ibge" => 3524808,
                "estado_id" => 20,
                "nome" => 'JALES',
            ],
            [
                "codigo_ibge" => 3524907,
                "estado_id" => 20,
                "nome" => 'JAMBEIRO',
            ],
            [
                "codigo_ibge" => 3525003,
                "estado_id" => 20,
                "nome" => 'JANDIRA',
            ],
            [
                "codigo_ibge" => 3525102,
                "estado_id" => 20,
                "nome" => 'JARDINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3525201,
                "estado_id" => 20,
                "nome" => 'JARINU',
            ],
            [
                "codigo_ibge" => 3525300,
                "estado_id" => 20,
                "nome" => 'JAÚ',
            ],
            [
                "codigo_ibge" => 3525409,
                "estado_id" => 20,
                "nome" => 'JERIQUARA',
            ],
            [
                "codigo_ibge" => 3525508,
                "estado_id" => 20,
                "nome" => 'JOANÓPOLIS',
            ],
            [
                "codigo_ibge" => 3525607,
                "estado_id" => 20,
                "nome" => 'JOÃO RAMALHO',
            ],
            [
                "codigo_ibge" => 3525706,
                "estado_id" => 20,
                "nome" => 'JOSÉ BONIFÁCIO',
            ],
            [
                "codigo_ibge" => 3525805,
                "estado_id" => 20,
                "nome" => 'JÚLIO MESQUITA',
            ],
            [
                "codigo_ibge" => 3525854,
                "estado_id" => 20,
                "nome" => 'JUMIRIM',
            ],
            [
                "codigo_ibge" => 3525904,
                "estado_id" => 20,
                "nome" => 'JUNDIAÍ',
            ],
            [
                "codigo_ibge" => 3526001,
                "estado_id" => 20,
                "nome" => 'JUNQUEIRÓPOLIS',
            ],
            [
                "codigo_ibge" => 3526100,
                "estado_id" => 20,
                "nome" => 'JUQUIÁ',
            ],
            [
                "codigo_ibge" => 3526209,
                "estado_id" => 20,
                "nome" => 'JUQUITIBA',
            ],
            [
                "codigo_ibge" => 3526308,
                "estado_id" => 20,
                "nome" => 'LAGOINHA',
            ],
            [
                "codigo_ibge" => 3526407,
                "estado_id" => 20,
                "nome" => 'LARANJAL PAULISTA',
            ],
            [
                "codigo_ibge" => 3526506,
                "estado_id" => 20,
                "nome" => 'LAVÍNIA',
            ],
            [
                "codigo_ibge" => 3526605,
                "estado_id" => 20,
                "nome" => 'LAVRINHAS',
            ],
            [
                "codigo_ibge" => 3526704,
                "estado_id" => 20,
                "nome" => 'LEME',
            ],
            [
                "codigo_ibge" => 3526803,
                "estado_id" => 20,
                "nome" => 'LENÇÓIS PAULISTA',
            ],
            [
                "codigo_ibge" => 3526902,
                "estado_id" => 20,
                "nome" => 'LIMEIRA',
            ],
            [
                "codigo_ibge" => 3527009,
                "estado_id" => 20,
                "nome" => 'LINDÓIA',
            ],
            [
                "codigo_ibge" => 3527108,
                "estado_id" => 20,
                "nome" => 'LINS',
            ],
            [
                "codigo_ibge" => 3527207,
                "estado_id" => 20,
                "nome" => 'LORENA',
            ],
            [
                "codigo_ibge" => 3527256,
                "estado_id" => 20,
                "nome" => 'LOURDES',
            ],
            [
                "codigo_ibge" => 3527306,
                "estado_id" => 20,
                "nome" => 'LOUVEIRA',
            ],
            [
                "codigo_ibge" => 3527405,
                "estado_id" => 20,
                "nome" => 'LUCÉLIA',
            ],
            [
                "codigo_ibge" => 3527504,
                "estado_id" => 20,
                "nome" => 'LUCIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 3527603,
                "estado_id" => 20,
                "nome" => 'LUÍS ANTÔNIO',
            ],
            [
                "codigo_ibge" => 3527702,
                "estado_id" => 20,
                "nome" => 'LUIZIÂNIA',
            ],
            [
                "codigo_ibge" => 3527801,
                "estado_id" => 20,
                "nome" => 'LUPÉRCIO',
            ],
            [
                "codigo_ibge" => 3527900,
                "estado_id" => 20,
                "nome" => 'LUTÉCIA',
            ],
            [
                "codigo_ibge" => 3528007,
                "estado_id" => 20,
                "nome" => 'MACATUBA',
            ],
            [
                "codigo_ibge" => 3528106,
                "estado_id" => 20,
                "nome" => 'MACAUBAL',
            ],
            [
                "codigo_ibge" => 3528205,
                "estado_id" => 20,
                "nome" => 'MACEDÔNIA',
            ],
            [
                "codigo_ibge" => 3528304,
                "estado_id" => 20,
                "nome" => 'MAGDA',
            ],
            [
                "codigo_ibge" => 3528403,
                "estado_id" => 20,
                "nome" => 'MAIRINQUE',
            ],
            [
                "codigo_ibge" => 3528502,
                "estado_id" => 20,
                "nome" => 'MAIRIPORÃ',
            ],
            [
                "codigo_ibge" => 3528601,
                "estado_id" => 20,
                "nome" => 'MANDURI',
            ],
            [
                "codigo_ibge" => 3528700,
                "estado_id" => 20,
                "nome" => 'MARABÁ PAULISTA',
            ],
            [
                "codigo_ibge" => 3528809,
                "estado_id" => 20,
                "nome" => 'MARACAÍ',
            ],
            [
                "codigo_ibge" => 3528858,
                "estado_id" => 20,
                "nome" => 'MARAPOAMA',
            ],
            [
                "codigo_ibge" => 3528908,
                "estado_id" => 20,
                "nome" => 'MARIÁPOLIS',
            ],
            [
                "codigo_ibge" => 3529005,
                "estado_id" => 20,
                "nome" => 'MARÍLIA',
            ],
            [
                "codigo_ibge" => 3529104,
                "estado_id" => 20,
                "nome" => 'MARINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3529203,
                "estado_id" => 20,
                "nome" => 'MARTINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3529302,
                "estado_id" => 20,
                "nome" => 'MATÃO',
            ],
            [
                "codigo_ibge" => 3529401,
                "estado_id" => 20,
                "nome" => 'MAUÁ',
            ],
            [
                "codigo_ibge" => 3529500,
                "estado_id" => 20,
                "nome" => 'MENDONÇA',
            ],
            [
                "codigo_ibge" => 3529609,
                "estado_id" => 20,
                "nome" => 'MERIDIANO',
            ],
            [
                "codigo_ibge" => 3529658,
                "estado_id" => 20,
                "nome" => 'MESÓPOLIS',
            ],
            [
                "codigo_ibge" => 3529708,
                "estado_id" => 20,
                "nome" => 'MIGUELÓPOLIS',
            ],
            [
                "codigo_ibge" => 3529807,
                "estado_id" => 20,
                "nome" => 'MINEIROS DO TIETÊ',
            ],
            [
                "codigo_ibge" => 3529906,
                "estado_id" => 20,
                "nome" => 'MIRACATU',
            ],
            [
                "codigo_ibge" => 3530003,
                "estado_id" => 20,
                "nome" => 'MIRA ESTRELA',
            ],
            [
                "codigo_ibge" => 3530102,
                "estado_id" => 20,
                "nome" => 'MIRANDÓPOLIS',
            ],
            [
                "codigo_ibge" => 3530201,
                "estado_id" => 20,
                "nome" => 'MIRANTE DO PARANAPANEMA',
            ],
            [
                "codigo_ibge" => 3530300,
                "estado_id" => 20,
                "nome" => 'MIRASSOL',
            ],
            [
                "codigo_ibge" => 3530409,
                "estado_id" => 20,
                "nome" => 'MIRASSOLÂNDIA',
            ],
            [
                "codigo_ibge" => 3530508,
                "estado_id" => 20,
                "nome" => 'MOCOCA',
            ],
            [
                "codigo_ibge" => 3530607,
                "estado_id" => 20,
                "nome" => 'MOGI DAS CRUZES',
            ],
            [
                "codigo_ibge" => 3530706,
                "estado_id" => 20,
                "nome" => 'MOGI GUAÇU',
            ],
            [
                "codigo_ibge" => 3530805,
                "estado_id" => 20,
                "nome" => 'MOJI MIRIM',
            ],
            [
                "codigo_ibge" => 3530904,
                "estado_id" => 20,
                "nome" => 'MOMBUCA',
            ],
            [
                "codigo_ibge" => 3531001,
                "estado_id" => 20,
                "nome" => 'MONÇÕES',
            ],
            [
                "codigo_ibge" => 3531100,
                "estado_id" => 20,
                "nome" => 'MONGAGUÁ',
            ],
            [
                "codigo_ibge" => 3531209,
                "estado_id" => 20,
                "nome" => 'MONTE ALEGRE DO SUL',
            ],
            [
                "codigo_ibge" => 3531308,
                "estado_id" => 20,
                "nome" => 'MONTE ALTO',
            ],
            [
                "codigo_ibge" => 3531407,
                "estado_id" => 20,
                "nome" => 'MONTE APRAZÍVEL',
            ],
            [
                "codigo_ibge" => 3531506,
                "estado_id" => 20,
                "nome" => 'MONTE AZUL PAULISTA',
            ],
            [
                "codigo_ibge" => 3531605,
                "estado_id" => 20,
                "nome" => 'MONTE CASTELO',
            ],
            [
                "codigo_ibge" => 3531704,
                "estado_id" => 20,
                "nome" => 'MONTEIRO LOBATO',
            ],
            [
                "codigo_ibge" => 3531803,
                "estado_id" => 20,
                "nome" => 'MONTE MOR',
            ],
            [
                "codigo_ibge" => 3531902,
                "estado_id" => 20,
                "nome" => 'MORRO AGUDO',
            ],
            [
                "codigo_ibge" => 3532009,
                "estado_id" => 20,
                "nome" => 'MORUNGABA',
            ],
            [
                "codigo_ibge" => 3532058,
                "estado_id" => 20,
                "nome" => 'MOTUCA',
            ],
            [
                "codigo_ibge" => 3532108,
                "estado_id" => 20,
                "nome" => 'MURUTINGA DO SUL',
            ],
            [
                "codigo_ibge" => 3532157,
                "estado_id" => 20,
                "nome" => 'NANTES',
            ],
            [
                "codigo_ibge" => 3532207,
                "estado_id" => 20,
                "nome" => 'NARANDIBA',
            ],
            [
                "codigo_ibge" => 3532306,
                "estado_id" => 20,
                "nome" => 'NATIVIDADE DA SERRA',
            ],
            [
                "codigo_ibge" => 3532405,
                "estado_id" => 20,
                "nome" => 'NAZARÉ PAULISTA',
            ],
            [
                "codigo_ibge" => 3532504,
                "estado_id" => 20,
                "nome" => 'NEVES PAULISTA',
            ],
            [
                "codigo_ibge" => 3532603,
                "estado_id" => 20,
                "nome" => 'NHANDEARA',
            ],
            [
                "codigo_ibge" => 3532702,
                "estado_id" => 20,
                "nome" => 'NIPOÃ',
            ],
            [
                "codigo_ibge" => 3532801,
                "estado_id" => 20,
                "nome" => 'NOVA ALIANÇA',
            ],
            [
                "codigo_ibge" => 3532827,
                "estado_id" => 20,
                "nome" => 'NOVA CAMPINA',
            ],
            [
                "codigo_ibge" => 3532843,
                "estado_id" => 20,
                "nome" => 'NOVA CANAÃ PAULISTA',
            ],
            [
                "codigo_ibge" => 3532868,
                "estado_id" => 20,
                "nome" => 'NOVA CASTILHO',
            ],
            [
                "codigo_ibge" => 3532900,
                "estado_id" => 20,
                "nome" => 'NOVA EUROPA',
            ],
            [
                "codigo_ibge" => 3533007,
                "estado_id" => 20,
                "nome" => 'NOVA GRANADA',
            ],
            [
                "codigo_ibge" => 3533106,
                "estado_id" => 20,
                "nome" => 'NOVA GUATAPORANGA',
            ],
            [
                "codigo_ibge" => 3533205,
                "estado_id" => 20,
                "nome" => 'NOVA INDEPENDÊNCIA',
            ],
            [
                "codigo_ibge" => 3533254,
                "estado_id" => 20,
                "nome" => 'NOVAIS',
            ],
            [
                "codigo_ibge" => 3533304,
                "estado_id" => 20,
                "nome" => 'NOVA LUZITÂNIA',
            ],
            [
                "codigo_ibge" => 3533403,
                "estado_id" => 20,
                "nome" => 'NOVA ODESSA',
            ],
            [
                "codigo_ibge" => 3533502,
                "estado_id" => 20,
                "nome" => 'NOVO HORIZONTE',
            ],
            [
                "codigo_ibge" => 3533601,
                "estado_id" => 20,
                "nome" => 'NUPORANGA',
            ],
            [
                "codigo_ibge" => 3533700,
                "estado_id" => 20,
                "nome" => 'OCAUÇU',
            ],
            [
                "codigo_ibge" => 3533809,
                "estado_id" => 20,
                "nome" => 'ÓLEO',
            ],
            [
                "codigo_ibge" => 3533908,
                "estado_id" => 20,
                "nome" => 'OLÍMPIA',
            ],
            [
                "codigo_ibge" => 3534005,
                "estado_id" => 20,
                "nome" => 'ONDA VERDE',
            ],
            [
                "codigo_ibge" => 3534104,
                "estado_id" => 20,
                "nome" => 'ORIENTE',
            ],
            [
                "codigo_ibge" => 3534203,
                "estado_id" => 20,
                "nome" => 'ORINDIÚVA',
            ],
            [
                "codigo_ibge" => 3534302,
                "estado_id" => 20,
                "nome" => 'ORLÂNDIA',
            ],
            [
                "codigo_ibge" => 3534401,
                "estado_id" => 20,
                "nome" => 'OSASCO',
            ],
            [
                "codigo_ibge" => 3534500,
                "estado_id" => 20,
                "nome" => 'OSCAR BRESSANE',
            ],
            [
                "codigo_ibge" => 3534609,
                "estado_id" => 20,
                "nome" => 'OSVALDO CRUZ',
            ],
            [
                "codigo_ibge" => 3534708,
                "estado_id" => 20,
                "nome" => 'OURINHOS',
            ],
            [
                "codigo_ibge" => 3534757,
                "estado_id" => 20,
                "nome" => 'OUROESTE',
            ],
            [
                "codigo_ibge" => 3534807,
                "estado_id" => 20,
                "nome" => 'OURO VERDE',
            ],
            [
                "codigo_ibge" => 3534906,
                "estado_id" => 20,
                "nome" => 'PACAEMBU',
            ],
            [
                "codigo_ibge" => 3535002,
                "estado_id" => 20,
                "nome" => 'PALESTINA',
            ],
            [
                "codigo_ibge" => 3535101,
                "estado_id" => 20,
                "nome" => 'PALMARES PAULISTA',
            ],
            [
                "codigo_ibge" => 3535200,
                "estado_id" => 20,
                "nome" => 'PALMEIRA D`OESTE',
            ],
            [
                "codigo_ibge" => 3535309,
                "estado_id" => 20,
                "nome" => 'PALMITAL',
            ],
            [
                "codigo_ibge" => 3535408,
                "estado_id" => 20,
                "nome" => 'PANORAMA',
            ],
            [
                "codigo_ibge" => 3535507,
                "estado_id" => 20,
                "nome" => 'PARAGUAÇU PAULISTA',
            ],
            [
                "codigo_ibge" => 3535606,
                "estado_id" => 20,
                "nome" => 'PARAIBUNA',
            ],
            [
                "codigo_ibge" => 3535705,
                "estado_id" => 20,
                "nome" => 'PARAÍSO',
            ],
            [
                "codigo_ibge" => 3535804,
                "estado_id" => 20,
                "nome" => 'PARANAPANEMA',
            ],
            [
                "codigo_ibge" => 3535903,
                "estado_id" => 20,
                "nome" => 'PARANAPUÃ',
            ],
            [
                "codigo_ibge" => 3536000,
                "estado_id" => 20,
                "nome" => 'PARAPUÃ',
            ],
            [
                "codigo_ibge" => 3536109,
                "estado_id" => 20,
                "nome" => 'PARDINHO',
            ],
            [
                "codigo_ibge" => 3536208,
                "estado_id" => 20,
                "nome" => 'PARIQUERA-AÇU',
            ],
            [
                "codigo_ibge" => 3536257,
                "estado_id" => 20,
                "nome" => 'PARISI',
            ],
            [
                "codigo_ibge" => 3536307,
                "estado_id" => 20,
                "nome" => 'PATROCÍNIO PAULISTA',
            ],
            [
                "codigo_ibge" => 3536406,
                "estado_id" => 20,
                "nome" => 'PAULICÉIA',
            ],
            [
                "codigo_ibge" => 3536505,
                "estado_id" => 20,
                "nome" => 'PAULÍNIA',
            ],
            [
                "codigo_ibge" => 3536570,
                "estado_id" => 20,
                "nome" => 'PAULISTÂNIA',
            ],
            [
                "codigo_ibge" => 3536604,
                "estado_id" => 20,
                "nome" => 'PAULO DE FARIA',
            ],
            [
                "codigo_ibge" => 3536703,
                "estado_id" => 20,
                "nome" => 'PEDERNEIRAS',
            ],
            [
                "codigo_ibge" => 3536802,
                "estado_id" => 20,
                "nome" => 'PEDRA BELA',
            ],
            [
                "codigo_ibge" => 3536901,
                "estado_id" => 20,
                "nome" => 'PEDRANÓPOLIS',
            ],
            [
                "codigo_ibge" => 3537008,
                "estado_id" => 20,
                "nome" => 'PEDREGULHO',
            ],
            [
                "codigo_ibge" => 3537107,
                "estado_id" => 20,
                "nome" => 'PEDREIRA',
            ],
            [
                "codigo_ibge" => 3537156,
                "estado_id" => 20,
                "nome" => 'PEDRINHAS PAULISTA',
            ],
            [
                "codigo_ibge" => 3537206,
                "estado_id" => 20,
                "nome" => 'PEDRO DE TOLEDO',
            ],
            [
                "codigo_ibge" => 3537305,
                "estado_id" => 20,
                "nome" => 'PENÁPOLIS',
            ],
            [
                "codigo_ibge" => 3537404,
                "estado_id" => 20,
                "nome" => 'PEREIRA BARRETO',
            ],
            [
                "codigo_ibge" => 3537503,
                "estado_id" => 20,
                "nome" => 'PEREIRAS',
            ],
            [
                "codigo_ibge" => 3537602,
                "estado_id" => 20,
                "nome" => 'PERUÍBE',
            ],
            [
                "codigo_ibge" => 3537701,
                "estado_id" => 20,
                "nome" => 'PIACATU',
            ],
            [
                "codigo_ibge" => 3537800,
                "estado_id" => 20,
                "nome" => 'PIEDADE',
            ],
            [
                "codigo_ibge" => 3537909,
                "estado_id" => 20,
                "nome" => 'PILAR DO SUL',
            ],
            [
                "codigo_ibge" => 3538006,
                "estado_id" => 20,
                "nome" => 'PINDAMONHANGABA',
            ],
            [
                "codigo_ibge" => 3538105,
                "estado_id" => 20,
                "nome" => 'PINDORAMA',
            ],
            [
                "codigo_ibge" => 3538204,
                "estado_id" => 20,
                "nome" => 'PINHALZINHO',
            ],
            [
                "codigo_ibge" => 3538303,
                "estado_id" => 20,
                "nome" => 'PIQUEROBI',
            ],
            [
                "codigo_ibge" => 3538501,
                "estado_id" => 20,
                "nome" => 'PIQUETE',
            ],
            [
                "codigo_ibge" => 3538600,
                "estado_id" => 20,
                "nome" => 'PIRACAIA',
            ],
            [
                "codigo_ibge" => 3538709,
                "estado_id" => 20,
                "nome" => 'PIRACICABA',
            ],
            [
                "codigo_ibge" => 3538808,
                "estado_id" => 20,
                "nome" => 'PIRAJU',
            ],
            [
                "codigo_ibge" => 3538907,
                "estado_id" => 20,
                "nome" => 'PIRAJUÍ',
            ],
            [
                "codigo_ibge" => 3539004,
                "estado_id" => 20,
                "nome" => 'PIRANGI',
            ],
            [
                "codigo_ibge" => 3539103,
                "estado_id" => 20,
                "nome" => 'PIRAPORA DO BOM JESUS',
            ],
            [
                "codigo_ibge" => 3539202,
                "estado_id" => 20,
                "nome" => 'PIRAPOZINHO',
            ],
            [
                "codigo_ibge" => 3539301,
                "estado_id" => 20,
                "nome" => 'PIRASSUNUNGA',
            ],
            [
                "codigo_ibge" => 3539400,
                "estado_id" => 20,
                "nome" => 'PIRATININGA',
            ],
            [
                "codigo_ibge" => 3539509,
                "estado_id" => 20,
                "nome" => 'PITANGUEIRAS',
            ],
            [
                "codigo_ibge" => 3539608,
                "estado_id" => 20,
                "nome" => 'PLANALTO',
            ],
            [
                "codigo_ibge" => 3539707,
                "estado_id" => 20,
                "nome" => 'PLATINA',
            ],
            [
                "codigo_ibge" => 3539806,
                "estado_id" => 20,
                "nome" => 'POÁ',
            ],
            [
                "codigo_ibge" => 3539905,
                "estado_id" => 20,
                "nome" => 'POLONI',
            ],
            [
                "codigo_ibge" => 3540002,
                "estado_id" => 20,
                "nome" => 'POMPÉIA',
            ],
            [
                "codigo_ibge" => 3540101,
                "estado_id" => 20,
                "nome" => 'PONGAÍ',
            ],
            [
                "codigo_ibge" => 3540200,
                "estado_id" => 20,
                "nome" => 'PONTAL',
            ],
            [
                "codigo_ibge" => 3540259,
                "estado_id" => 20,
                "nome" => 'PONTALINDA',
            ],
            [
                "codigo_ibge" => 3540309,
                "estado_id" => 20,
                "nome" => 'PONTES GESTAL',
            ],
            [
                "codigo_ibge" => 3540408,
                "estado_id" => 20,
                "nome" => 'POPULINA',
            ],
            [
                "codigo_ibge" => 3540507,
                "estado_id" => 20,
                "nome" => 'PORANGABA',
            ],
            [
                "codigo_ibge" => 3540606,
                "estado_id" => 20,
                "nome" => 'PORTO FELIZ',
            ],
            [
                "codigo_ibge" => 3540705,
                "estado_id" => 20,
                "nome" => 'PORTO FERREIRA',
            ],
            [
                "codigo_ibge" => 3540754,
                "estado_id" => 20,
                "nome" => 'POTIM',
            ],
            [
                "codigo_ibge" => 3540804,
                "estado_id" => 20,
                "nome" => 'POTIRENDABA',
            ],
            [
                "codigo_ibge" => 3540853,
                "estado_id" => 20,
                "nome" => 'PRACINHA',
            ],
            [
                "codigo_ibge" => 3540903,
                "estado_id" => 20,
                "nome" => 'PRADÓPOLIS',
            ],
            [
                "codigo_ibge" => 3541000,
                "estado_id" => 20,
                "nome" => 'PRAIA GRANDE',
            ],
            [
                "codigo_ibge" => 3541059,
                "estado_id" => 20,
                "nome" => 'PRATÂNIA',
            ],
            [
                "codigo_ibge" => 3541109,
                "estado_id" => 20,
                "nome" => 'PRESIDENTE ALVES',
            ],
            [
                "codigo_ibge" => 3541208,
                "estado_id" => 20,
                "nome" => 'PRESIDENTE BERNARDES',
            ],
            [
                "codigo_ibge" => 3541307,
                "estado_id" => 20,
                "nome" => 'PRESIDENTE EPITÁCIO',
            ],
            [
                "codigo_ibge" => 3541406,
                "estado_id" => 20,
                "nome" => 'PRESIDENTE PRUDENTE',
            ],
            [
                "codigo_ibge" => 3541505,
                "estado_id" => 20,
                "nome" => 'PRESIDENTE VENCESLAU',
            ],
            [
                "codigo_ibge" => 3541604,
                "estado_id" => 20,
                "nome" => 'PROMISSÃO',
            ],
            [
                "codigo_ibge" => 3541653,
                "estado_id" => 20,
                "nome" => 'QUADRA',
            ],
            [
                "codigo_ibge" => 3541703,
                "estado_id" => 20,
                "nome" => 'QUATÁ',
            ],
            [
                "codigo_ibge" => 3541802,
                "estado_id" => 20,
                "nome" => 'QUEIROZ',
            ],
            [
                "codigo_ibge" => 3541901,
                "estado_id" => 20,
                "nome" => 'QUELUZ',
            ],
            [
                "codigo_ibge" => 3542008,
                "estado_id" => 20,
                "nome" => 'QUINTANA',
            ],
            [
                "codigo_ibge" => 3542107,
                "estado_id" => 20,
                "nome" => 'RAFARD',
            ],
            [
                "codigo_ibge" => 3542206,
                "estado_id" => 20,
                "nome" => 'RANCHARIA',
            ],
            [
                "codigo_ibge" => 3542305,
                "estado_id" => 20,
                "nome" => 'REDENÇÃO DA SERRA',
            ],
            [
                "codigo_ibge" => 3542404,
                "estado_id" => 20,
                "nome" => 'REGENTE FEIJÓ',
            ],
            [
                "codigo_ibge" => 3542503,
                "estado_id" => 20,
                "nome" => 'REGINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3542602,
                "estado_id" => 20,
                "nome" => 'REGISTRO',
            ],
            [
                "codigo_ibge" => 3542701,
                "estado_id" => 20,
                "nome" => 'RESTINGA',
            ],
            [
                "codigo_ibge" => 3542800,
                "estado_id" => 20,
                "nome" => 'RIBEIRA',
            ],
            [
                "codigo_ibge" => 3542909,
                "estado_id" => 20,
                "nome" => 'RIBEIRÃO BONITO',
            ],
            [
                "codigo_ibge" => 3543006,
                "estado_id" => 20,
                "nome" => 'RIBEIRÃO BRANCO',
            ],
            [
                "codigo_ibge" => 3543105,
                "estado_id" => 20,
                "nome" => 'RIBEIRÃO CORRENTE',
            ],
            [
                "codigo_ibge" => 3543204,
                "estado_id" => 20,
                "nome" => 'RIBEIRÃO DO SUL',
            ],
            [
                "codigo_ibge" => 3543238,
                "estado_id" => 20,
                "nome" => 'RIBEIRÃO DOS ÍNDIOS',
            ],
            [
                "codigo_ibge" => 3543253,
                "estado_id" => 20,
                "nome" => 'RIBEIRÃO GRANDE',
            ],
            [
                "codigo_ibge" => 3543303,
                "estado_id" => 20,
                "nome" => 'RIBEIRÃO PIRES',
            ],
            [
                "codigo_ibge" => 3543402,
                "estado_id" => 20,
                "nome" => 'RIBEIRÃO PRETO',
            ],
            [
                "codigo_ibge" => 3543501,
                "estado_id" => 20,
                "nome" => 'RIVERSUL',
            ],
            [
                "codigo_ibge" => 3543600,
                "estado_id" => 20,
                "nome" => 'RIFAINA',
            ],
            [
                "codigo_ibge" => 3543709,
                "estado_id" => 20,
                "nome" => 'RINCÃO',
            ],
            [
                "codigo_ibge" => 3543808,
                "estado_id" => 20,
                "nome" => 'RINÓPOLIS',
            ],
            [
                "codigo_ibge" => 3543907,
                "estado_id" => 20,
                "nome" => 'RIO CLARO',
            ],
            [
                "codigo_ibge" => 3544004,
                "estado_id" => 20,
                "nome" => 'RIO DAS PEDRAS',
            ],
            [
                "codigo_ibge" => 3544103,
                "estado_id" => 20,
                "nome" => 'RIO GRANDE DA SERRA',
            ],
            [
                "codigo_ibge" => 3544202,
                "estado_id" => 20,
                "nome" => 'RIOLÂNDIA',
            ],
            [
                "codigo_ibge" => 3544251,
                "estado_id" => 20,
                "nome" => 'ROSANA',
            ],
            [
                "codigo_ibge" => 3544301,
                "estado_id" => 20,
                "nome" => 'ROSEIRA',
            ],
            [
                "codigo_ibge" => 3544400,
                "estado_id" => 20,
                "nome" => 'RUBIÁCEA',
            ],
            [
                "codigo_ibge" => 3544509,
                "estado_id" => 20,
                "nome" => 'RUBINÉIA',
            ],
            [
                "codigo_ibge" => 3544608,
                "estado_id" => 20,
                "nome" => 'SABINO',
            ],
            [
                "codigo_ibge" => 3544707,
                "estado_id" => 20,
                "nome" => 'SAGRES',
            ],
            [
                "codigo_ibge" => 3544806,
                "estado_id" => 20,
                "nome" => 'SALES',
            ],
            [
                "codigo_ibge" => 3544905,
                "estado_id" => 20,
                "nome" => 'SALES OLIVEIRA',
            ],
            [
                "codigo_ibge" => 3545001,
                "estado_id" => 20,
                "nome" => 'SALESÓPOLIS',
            ],
            [
                "codigo_ibge" => 3545100,
                "estado_id" => 20,
                "nome" => 'SALMOURÃO',
            ],
            [
                "codigo_ibge" => 3545159,
                "estado_id" => 20,
                "nome" => 'SALTINHO',
            ],
            [
                "codigo_ibge" => 3545209,
                "estado_id" => 20,
                "nome" => 'SALTO',
            ],
            [
                "codigo_ibge" => 3545308,
                "estado_id" => 20,
                "nome" => 'SALTO DE PIRAPORA',
            ],
            [
                "codigo_ibge" => 3545407,
                "estado_id" => 20,
                "nome" => 'SALTO GRANDE',
            ],
            [
                "codigo_ibge" => 3545506,
                "estado_id" => 20,
                "nome" => 'SANDOVALINA',
            ],
            [
                "codigo_ibge" => 3545605,
                "estado_id" => 20,
                "nome" => 'SANTA ADÉLIA',
            ],
            [
                "codigo_ibge" => 3545704,
                "estado_id" => 20,
                "nome" => 'SANTA ALBERTINA',
            ],
            [
                "codigo_ibge" => 3545803,
                "estado_id" => 20,
                "nome" => 'SANTA BÁRBARA D`OESTE',
            ],
            [
                "codigo_ibge" => 3546009,
                "estado_id" => 20,
                "nome" => 'SANTA BRANCA',
            ],
            [
                "codigo_ibge" => 3546108,
                "estado_id" => 20,
                "nome" => 'SANTA CLARA D`OESTE',
            ],
            [
                "codigo_ibge" => 3546207,
                "estado_id" => 20,
                "nome" => 'SANTA CRUZ DA CONCEIÇÃO',
            ],
            [
                "codigo_ibge" => 3546256,
                "estado_id" => 20,
                "nome" => 'SANTA CRUZ DA ESPERANÇA',
            ],
            [
                "codigo_ibge" => 3546306,
                "estado_id" => 20,
                "nome" => 'SANTA CRUZ DAS PALMEIRAS',
            ],
            [
                "codigo_ibge" => 3546405,
                "estado_id" => 20,
                "nome" => 'SANTA CRUZ DO RIO PARDO',
            ],
            [
                "codigo_ibge" => 3546504,
                "estado_id" => 20,
                "nome" => 'SANTA ERNESTINA',
            ],
            [
                "codigo_ibge" => 3546603,
                "estado_id" => 20,
                "nome" => 'SANTA FÉ DO SUL',
            ],
            [
                "codigo_ibge" => 3546702,
                "estado_id" => 20,
                "nome" => 'SANTA GERTRUDES',
            ],
            [
                "codigo_ibge" => 3546801,
                "estado_id" => 20,
                "nome" => 'SANTA ISABEL',
            ],
            [
                "codigo_ibge" => 3546900,
                "estado_id" => 20,
                "nome" => 'SANTA LÚCIA',
            ],
            [
                "codigo_ibge" => 3547007,
                "estado_id" => 20,
                "nome" => 'SANTA MARIA DA SERRA',
            ],
            [
                "codigo_ibge" => 3547106,
                "estado_id" => 20,
                "nome" => 'SANTA MERCEDES',
            ],
            [
                "codigo_ibge" => 3547205,
                "estado_id" => 20,
                "nome" => 'SANTANA DA PONTE PENSA',
            ],
            [
                "codigo_ibge" => 3547304,
                "estado_id" => 20,
                "nome" => 'SANTANA DE PARNAÍBA',
            ],
            [
                "codigo_ibge" => 3547403,
                "estado_id" => 20,
                "nome" => 'SANTA RITA D`OESTE',
            ],
            [
                "codigo_ibge" => 3547502,
                "estado_id" => 20,
                "nome" => 'SANTA RITA DO PASSA QUATRO',
            ],
            [
                "codigo_ibge" => 3547601,
                "estado_id" => 20,
                "nome" => 'SANTA ROSA DE VITERBO',
            ],
            [
                "codigo_ibge" => 3547650,
                "estado_id" => 20,
                "nome" => 'SANTA SALETE',
            ],
            [
                "codigo_ibge" => 3547700,
                "estado_id" => 20,
                "nome" => 'SANTO ANASTÁCIO',
            ],
            [
                "codigo_ibge" => 3547809,
                "estado_id" => 20,
                "nome" => 'SANTO ANDRÉ',
            ],
            [
                "codigo_ibge" => 3547908,
                "estado_id" => 20,
                "nome" => 'SANTO ANTÔNIO DA ALEGRIA',
            ],
            [
                "codigo_ibge" => 3548005,
                "estado_id" => 20,
                "nome" => 'SANTO ANTÔNIO DE POSSE',
            ],
            [
                "codigo_ibge" => 3548054,
                "estado_id" => 20,
                "nome" => 'SANTO ANTÔNIO DO ARACANGUÁ',
            ],
            [
                "codigo_ibge" => 3548104,
                "estado_id" => 20,
                "nome" => 'SANTO ANTÔNIO DO JARDIM',
            ],
            [
                "codigo_ibge" => 3548203,
                "estado_id" => 20,
                "nome" => 'SANTO ANTÔNIO DO PINHAL',
            ],
            [
                "codigo_ibge" => 3548302,
                "estado_id" => 20,
                "nome" => 'SANTO EXPEDITO',
            ],
            [
                "codigo_ibge" => 3548401,
                "estado_id" => 20,
                "nome" => 'SANTÓPOLIS DO AGUAPEÍ',
            ],
            [
                "codigo_ibge" => 3548500,
                "estado_id" => 20,
                "nome" => 'SANTOS',
            ],
            [
                "codigo_ibge" => 3548609,
                "estado_id" => 20,
                "nome" => 'SÃO BENTO DO SAPUCAÍ',
            ],
            [
                "codigo_ibge" => 3548708,
                "estado_id" => 20,
                "nome" => 'SÃO BERNARDO DO CAMPO',
            ],
            [
                "codigo_ibge" => 3548807,
                "estado_id" => 20,
                "nome" => 'SÃO CAETANO DO SUL',
            ],
            [
                "codigo_ibge" => 3548906,
                "estado_id" => 20,
                "nome" => 'SÃO CARLOS',
            ],
            [
                "codigo_ibge" => 3549003,
                "estado_id" => 20,
                "nome" => 'SÃO FRANCISCO',
            ],
            [
                "codigo_ibge" => 3549102,
                "estado_id" => 20,
                "nome" => 'SÃO JOÃO DA BOA VISTA',
            ],
            [
                "codigo_ibge" => 3549201,
                "estado_id" => 20,
                "nome" => 'SÃO JOÃO DAS DUAS PONTES',
            ],
            [
                "codigo_ibge" => 3549250,
                "estado_id" => 20,
                "nome" => 'SÃO JOÃO DE IRACEMA',
            ],
            [
                "codigo_ibge" => 3549300,
                "estado_id" => 20,
                "nome" => 'SÃO JOÃO DO PAU D`ALHO',
            ],
            [
                "codigo_ibge" => 3549409,
                "estado_id" => 20,
                "nome" => 'SÃO JOAQUIM DA BARRA',
            ],
            [
                "codigo_ibge" => 3549508,
                "estado_id" => 20,
                "nome" => 'SÃO JOSÉ DA BELA VISTA',
            ],
            [
                "codigo_ibge" => 3549607,
                "estado_id" => 20,
                "nome" => 'SÃO JOSÉ DO BARREIRO',
            ],
            [
                "codigo_ibge" => 3549706,
                "estado_id" => 20,
                "nome" => 'SÃO JOSÉ DO RIO PARDO',
            ],
            [
                "codigo_ibge" => 3549805,
                "estado_id" => 20,
                "nome" => 'SÃO JOSÉ DO RIO PRETO',
            ],
            [
                "codigo_ibge" => 3549904,
                "estado_id" => 20,
                "nome" => 'SÃO JOSÉ DOS CAMPOS',
            ],
            [
                "codigo_ibge" => 3549953,
                "estado_id" => 20,
                "nome" => 'SÃO LOURENÇO DA SERRA',
            ],
            [
                "codigo_ibge" => 3550001,
                "estado_id" => 20,
                "nome" => 'SÃO LUÍS DO PARAITINGA',
            ],
            [
                "codigo_ibge" => 3550100,
                "estado_id" => 20,
                "nome" => 'SÃO MANUEL',
            ],
            [
                "codigo_ibge" => 3550209,
                "estado_id" => 20,
                "nome" => 'SÃO MIGUEL ARCANJO',
            ],
            [
                "codigo_ibge" => 3550308,
                "estado_id" => 20,
                "nome" => 'SÃO PAULO',
            ],
            [
                "codigo_ibge" => 3550407,
                "estado_id" => 20,
                "nome" => 'SÃO PEDRO',
            ],
            [
                "codigo_ibge" => 3550506,
                "estado_id" => 20,
                "nome" => 'SÃO PEDRO DO TURVO',
            ],
            [
                "codigo_ibge" => 3550605,
                "estado_id" => 20,
                "nome" => 'SÃO ROQUE',
            ],
            [
                "codigo_ibge" => 3550704,
                "estado_id" => 20,
                "nome" => 'SÃO SEBASTIÃO',
            ],
            [
                "codigo_ibge" => 3550803,
                "estado_id" => 20,
                "nome" => 'SÃO SEBASTIÃO DA GRAMA',
            ],
            [
                "codigo_ibge" => 3550902,
                "estado_id" => 20,
                "nome" => 'SÃO SIMÃO',
            ],
            [
                "codigo_ibge" => 3551009,
                "estado_id" => 20,
                "nome" => 'SÃO VICENTE',
            ],
            [
                "codigo_ibge" => 3551108,
                "estado_id" => 20,
                "nome" => 'SARAPUÍ',
            ],
            [
                "codigo_ibge" => 3551207,
                "estado_id" => 20,
                "nome" => 'SARUTAIÁ',
            ],
            [
                "codigo_ibge" => 3551306,
                "estado_id" => 20,
                "nome" => 'SEBASTIANÓPOLIS DO SUL',
            ],
            [
                "codigo_ibge" => 3551405,
                "estado_id" => 20,
                "nome" => 'SERRA AZUL',
            ],
            [
                "codigo_ibge" => 3551504,
                "estado_id" => 20,
                "nome" => 'SERRANA',
            ],
            [
                "codigo_ibge" => 3551603,
                "estado_id" => 20,
                "nome" => 'SERRA NEGRA',
            ],
            [
                "codigo_ibge" => 3551702,
                "estado_id" => 20,
                "nome" => 'SERTÃOZINHO',
            ],
            [
                "codigo_ibge" => 3551801,
                "estado_id" => 20,
                "nome" => 'SETE BARRAS',
            ],
            [
                "codigo_ibge" => 3551900,
                "estado_id" => 20,
                "nome" => 'SEVERÍNIA',
            ],
            [
                "codigo_ibge" => 3552007,
                "estado_id" => 20,
                "nome" => 'SILVEIRAS',
            ],
            [
                "codigo_ibge" => 3552106,
                "estado_id" => 20,
                "nome" => 'SOCORRO',
            ],
            [
                "codigo_ibge" => 3552205,
                "estado_id" => 20,
                "nome" => 'SOROCABA',
            ],
            [
                "codigo_ibge" => 3552304,
                "estado_id" => 20,
                "nome" => 'SUD MENNUCCI',
            ],
            [
                "codigo_ibge" => 3552403,
                "estado_id" => 20,
                "nome" => 'SUMARÉ',
            ],
            [
                "codigo_ibge" => 3552502,
                "estado_id" => 20,
                "nome" => 'SUZANO',
            ],
            [
                "codigo_ibge" => 3552551,
                "estado_id" => 20,
                "nome" => 'SUZANÁPOLIS',
            ],
            [
                "codigo_ibge" => 3552601,
                "estado_id" => 20,
                "nome" => 'TABAPUÃ',
            ],
            [
                "codigo_ibge" => 3552700,
                "estado_id" => 20,
                "nome" => 'TABATINGA',
            ],
            [
                "codigo_ibge" => 3552809,
                "estado_id" => 20,
                "nome" => 'TABOÃO DA SERRA',
            ],
            [
                "codigo_ibge" => 3552908,
                "estado_id" => 20,
                "nome" => 'TACIBA',
            ],
            [
                "codigo_ibge" => 3553005,
                "estado_id" => 20,
                "nome" => 'TAGUAÍ',
            ],
            [
                "codigo_ibge" => 3553104,
                "estado_id" => 20,
                "nome" => 'TAIAÇU',
            ],
            [
                "codigo_ibge" => 3553203,
                "estado_id" => 20,
                "nome" => 'TAIÚVA',
            ],
            [
                "codigo_ibge" => 3553302,
                "estado_id" => 20,
                "nome" => 'TAMBAÚ',
            ],
            [
                "codigo_ibge" => 3553401,
                "estado_id" => 20,
                "nome" => 'TANABI',
            ],
            [
                "codigo_ibge" => 3553500,
                "estado_id" => 20,
                "nome" => 'TAPIRAÍ',
            ],
            [
                "codigo_ibge" => 3553609,
                "estado_id" => 20,
                "nome" => 'TAPIRATIBA',
            ],
            [
                "codigo_ibge" => 3553658,
                "estado_id" => 20,
                "nome" => 'TAQUARAL',
            ],
            [
                "codigo_ibge" => 3553708,
                "estado_id" => 20,
                "nome" => 'TAQUARITINGA',
            ],
            [
                "codigo_ibge" => 3553807,
                "estado_id" => 20,
                "nome" => 'TAQUARITUBA',
            ],
            [
                "codigo_ibge" => 3553856,
                "estado_id" => 20,
                "nome" => 'TAQUARIVAÍ',
            ],
            [
                "codigo_ibge" => 3553906,
                "estado_id" => 20,
                "nome" => 'TARABAI',
            ],
            [
                "codigo_ibge" => 3553955,
                "estado_id" => 20,
                "nome" => 'TARUMÃ',
            ],
            [
                "codigo_ibge" => 3554003,
                "estado_id" => 20,
                "nome" => 'TATUÍ',
            ],
            [
                "codigo_ibge" => 3554102,
                "estado_id" => 20,
                "nome" => 'TAUBATÉ',
            ],
            [
                "codigo_ibge" => 3554201,
                "estado_id" => 20,
                "nome" => 'TEJUPÁ',
            ],
            [
                "codigo_ibge" => 3554300,
                "estado_id" => 20,
                "nome" => 'TEODORO SAMPAIO',
            ],
            [
                "codigo_ibge" => 3554409,
                "estado_id" => 20,
                "nome" => 'TERRA ROXA',
            ],
            [
                "codigo_ibge" => 3554508,
                "estado_id" => 20,
                "nome" => 'TIETÊ',
            ],
            [
                "codigo_ibge" => 3554607,
                "estado_id" => 20,
                "nome" => 'TIMBURI',
            ],
            [
                "codigo_ibge" => 3554656,
                "estado_id" => 20,
                "nome" => 'TORRE DE PEDRA',
            ],
            [
                "codigo_ibge" => 3554706,
                "estado_id" => 20,
                "nome" => 'TORRINHA',
            ],
            [
                "codigo_ibge" => 3554755,
                "estado_id" => 20,
                "nome" => 'TRABIJU',
            ],
            [
                "codigo_ibge" => 3554805,
                "estado_id" => 20,
                "nome" => 'TREMEMBÉ',
            ],
            [
                "codigo_ibge" => 3554904,
                "estado_id" => 20,
                "nome" => 'TRÊS FRONTEIRAS',
            ],
            [
                "codigo_ibge" => 3554953,
                "estado_id" => 20,
                "nome" => 'TUIUTI',
            ],
            [
                "codigo_ibge" => 3555000,
                "estado_id" => 20,
                "nome" => 'TUPÃ',
            ],
            [
                "codigo_ibge" => 3555109,
                "estado_id" => 20,
                "nome" => 'TUPI PAULISTA',
            ],
            [
                "codigo_ibge" => 3555208,
                "estado_id" => 20,
                "nome" => 'TURIÚBA',
            ],
            [
                "codigo_ibge" => 3555307,
                "estado_id" => 20,
                "nome" => 'TURMALINA',
            ],
            [
                "codigo_ibge" => 3555356,
                "estado_id" => 20,
                "nome" => 'UBARANA',
            ],
            [
                "codigo_ibge" => 3555406,
                "estado_id" => 20,
                "nome" => 'UBATUBA',
            ],
            [
                "codigo_ibge" => 3555505,
                "estado_id" => 20,
                "nome" => 'UBIRAJARA',
            ],
            [
                "codigo_ibge" => 3555604,
                "estado_id" => 20,
                "nome" => 'UCHOA',
            ],
            [
                "codigo_ibge" => 3555703,
                "estado_id" => 20,
                "nome" => 'UNIÃO PAULISTA',
            ],
            [
                "codigo_ibge" => 3555802,
                "estado_id" => 20,
                "nome" => 'URÂNIA',
            ],
            [
                "codigo_ibge" => 3555901,
                "estado_id" => 20,
                "nome" => 'URU',
            ],
            [
                "codigo_ibge" => 3556008,
                "estado_id" => 20,
                "nome" => 'URUPÊS',
            ],
            [
                "codigo_ibge" => 3556107,
                "estado_id" => 20,
                "nome" => 'VALENTIM GENTIL',
            ],
            [
                "codigo_ibge" => 3556206,
                "estado_id" => 20,
                "nome" => 'VALINHOS',
            ],
            [
                "codigo_ibge" => 3556305,
                "estado_id" => 20,
                "nome" => 'VALPARAÍSO',
            ],
            [
                "codigo_ibge" => 3556354,
                "estado_id" => 20,
                "nome" => 'VARGEM',
            ],
            [
                "codigo_ibge" => 3556404,
                "estado_id" => 20,
                "nome" => 'VARGEM GRANDE DO SUL',
            ],
            [
                "codigo_ibge" => 3556453,
                "estado_id" => 20,
                "nome" => 'VARGEM GRANDE PAULISTA',
            ],
            [
                "codigo_ibge" => 3556503,
                "estado_id" => 20,
                "nome" => 'VÁRZEA PAULISTA',
            ],
            [
                "codigo_ibge" => 3556602,
                "estado_id" => 20,
                "nome" => 'VERA CRUZ',
            ],
            [
                "codigo_ibge" => 3556701,
                "estado_id" => 20,
                "nome" => 'VINHEDO',
            ],
            [
                "codigo_ibge" => 3556800,
                "estado_id" => 20,
                "nome" => 'VIRADOURO',
            ],
            [
                "codigo_ibge" => 3556909,
                "estado_id" => 20,
                "nome" => 'VISTA ALEGRE DO ALTO',
            ],
            [
                "codigo_ibge" => 3556958,
                "estado_id" => 20,
                "nome" => 'VITÓRIA BRASIL',
            ],
            [
                "codigo_ibge" => 3557006,
                "estado_id" => 20,
                "nome" => 'VOTORANTIM',
            ],
            [
                "codigo_ibge" => 3557105,
                "estado_id" => 20,
                "nome" => 'VOTUPORANGA',
            ],
            [
                "codigo_ibge" => 3557154,
                "estado_id" => 20,
                "nome" => 'ZACARIAS',
            ],
            [
                "codigo_ibge" => 3557204,
                "estado_id" => 20,
                "nome" => 'CHAVANTES',
            ],
            [
                "codigo_ibge" => 3557303,
                "estado_id" => 20,
                "nome" => 'ESTIVA GERBI',
            ],
            [
                "codigo_ibge" => 4100103,
                "estado_id" => 21,
                "nome" => 'ABATIÁ',
            ],
            [
                "codigo_ibge" => 4100202,
                "estado_id" => 21,
                "nome" => 'ADRIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 4100301,
                "estado_id" => 21,
                "nome" => 'AGUDOS DO SUL',
            ],
            [
                "codigo_ibge" => 4100400,
                "estado_id" => 21,
                "nome" => 'ALMIRANTE TAMANDARÉ',
            ],
            [
                "codigo_ibge" => 4100459,
                "estado_id" => 21,
                "nome" => 'ALTAMIRA DO PARANÁ',
            ],
            [
                "codigo_ibge" => 4100509,
                "estado_id" => 21,
                "nome" => 'ALTÔNIA',
            ],
            [
                "codigo_ibge" => 4100608,
                "estado_id" => 21,
                "nome" => 'ALTO PARANÁ',
            ],
            [
                "codigo_ibge" => 4100707,
                "estado_id" => 21,
                "nome" => 'ALTO PIQUIRI',
            ],
            [
                "codigo_ibge" => 4100806,
                "estado_id" => 21,
                "nome" => 'ALVORADA DO SUL',
            ],
            [
                "codigo_ibge" => 4100905,
                "estado_id" => 21,
                "nome" => 'AMAPORÃ',
            ],
            [
                "codigo_ibge" => 4101002,
                "estado_id" => 21,
                "nome" => 'AMPÉRE',
            ],
            [
                "codigo_ibge" => 4101051,
                "estado_id" => 21,
                "nome" => 'ANAHY',
            ],
            [
                "codigo_ibge" => 4101101,
                "estado_id" => 21,
                "nome" => 'ANDIRÁ',
            ],
            [
                "codigo_ibge" => 4101150,
                "estado_id" => 21,
                "nome" => 'ÂNGULO',
            ],
            [
                "codigo_ibge" => 4101200,
                "estado_id" => 21,
                "nome" => 'ANTONINA',
            ],
            [
                "codigo_ibge" => 4101309,
                "estado_id" => 21,
                "nome" => 'ANTÔNIO OLINTO',
            ],
            [
                "codigo_ibge" => 4101408,
                "estado_id" => 21,
                "nome" => 'APUCARANA',
            ],
            [
                "codigo_ibge" => 4101507,
                "estado_id" => 21,
                "nome" => 'ARAPONGAS',
            ],
            [
                "codigo_ibge" => 4101606,
                "estado_id" => 21,
                "nome" => 'ARAPOTI',
            ],
            [
                "codigo_ibge" => 4101655,
                "estado_id" => 21,
                "nome" => 'ARAPUÃ',
            ],
            [
                "codigo_ibge" => 4101705,
                "estado_id" => 21,
                "nome" => 'ARARUNA',
            ],
            [
                "codigo_ibge" => 4101804,
                "estado_id" => 21,
                "nome" => 'ARAUCÁRIA',
            ],
            [
                "codigo_ibge" => 4101853,
                "estado_id" => 21,
                "nome" => 'ARIRANHA DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4101903,
                "estado_id" => 21,
                "nome" => 'ASSAÍ',
            ],
            [
                "codigo_ibge" => 4102000,
                "estado_id" => 21,
                "nome" => 'ASSIS CHATEAUBRIAND',
            ],
            [
                "codigo_ibge" => 4102109,
                "estado_id" => 21,
                "nome" => 'ASTORGA',
            ],
            [
                "codigo_ibge" => 4102208,
                "estado_id" => 21,
                "nome" => 'ATALAIA',
            ],
            [
                "codigo_ibge" => 4102307,
                "estado_id" => 21,
                "nome" => 'BALSA NOVA',
            ],
            [
                "codigo_ibge" => 4102406,
                "estado_id" => 21,
                "nome" => 'BANDEIRANTES',
            ],
            [
                "codigo_ibge" => 4102505,
                "estado_id" => 21,
                "nome" => 'BARBOSA FERRAZ',
            ],
            [
                "codigo_ibge" => 4102604,
                "estado_id" => 21,
                "nome" => 'BARRACÃO',
            ],
            [
                "codigo_ibge" => 4102703,
                "estado_id" => 21,
                "nome" => 'BARRA DO JACARÉ',
            ],
            [
                "codigo_ibge" => 4102752,
                "estado_id" => 21,
                "nome" => 'BELA VISTA DA CAROBA',
            ],
            [
                "codigo_ibge" => 4102802,
                "estado_id" => 21,
                "nome" => 'BELA VISTA DO PARAÍSO',
            ],
            [
                "codigo_ibge" => 4102901,
                "estado_id" => 21,
                "nome" => 'BITURUNA',
            ],
            [
                "codigo_ibge" => 4103008,
                "estado_id" => 21,
                "nome" => 'BOA ESPERANÇA',
            ],
            [
                "codigo_ibge" => 4103024,
                "estado_id" => 21,
                "nome" => 'BOA ESPERANÇA DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4103040,
                "estado_id" => 21,
                "nome" => 'BOA VENTURA DE SÃO ROQUE',
            ],
            [
                "codigo_ibge" => 4103057,
                "estado_id" => 21,
                "nome" => 'BOA VISTA DA APARECIDA',
            ],
            [
                "codigo_ibge" => 4103107,
                "estado_id" => 21,
                "nome" => 'BOCAIÚVA DO SUL',
            ],
            [
                "codigo_ibge" => 4103156,
                "estado_id" => 21,
                "nome" => 'BOM JESUS DO SUL',
            ],
            [
                "codigo_ibge" => 4103206,
                "estado_id" => 21,
                "nome" => 'BOM SUCESSO',
            ],
            [
                "codigo_ibge" => 4103222,
                "estado_id" => 21,
                "nome" => 'BOM SUCESSO DO SUL',
            ],
            [
                "codigo_ibge" => 4103305,
                "estado_id" => 21,
                "nome" => 'BORRAZÓPOLIS',
            ],
            [
                "codigo_ibge" => 4103354,
                "estado_id" => 21,
                "nome" => 'BRAGANEY',
            ],
            [
                "codigo_ibge" => 4103370,
                "estado_id" => 21,
                "nome" => 'BRASILÂNDIA DO SUL',
            ],
            [
                "codigo_ibge" => 4103404,
                "estado_id" => 21,
                "nome" => 'CAFEARA',
            ],
            [
                "codigo_ibge" => 4103453,
                "estado_id" => 21,
                "nome" => 'CAFELÂNDIA',
            ],
            [
                "codigo_ibge" => 4103479,
                "estado_id" => 21,
                "nome" => 'CAFEZAL DO SUL',
            ],
            [
                "codigo_ibge" => 4103503,
                "estado_id" => 21,
                "nome" => 'CALIFÓRNIA',
            ],
            [
                "codigo_ibge" => 4103602,
                "estado_id" => 21,
                "nome" => 'CAMBARÁ',
            ],
            [
                "codigo_ibge" => 4103701,
                "estado_id" => 21,
                "nome" => 'CAMBÉ',
            ],
            [
                "codigo_ibge" => 4103800,
                "estado_id" => 21,
                "nome" => 'CAMBIRA',
            ],
            [
                "codigo_ibge" => 4103909,
                "estado_id" => 21,
                "nome" => 'CAMPINA DA LAGOA',
            ],
            [
                "codigo_ibge" => 4103958,
                "estado_id" => 21,
                "nome" => 'CAMPINA DO SIMÃO',
            ],
            [
                "codigo_ibge" => 4104006,
                "estado_id" => 21,
                "nome" => 'CAMPINA GRANDE DO SUL',
            ],
            [
                "codigo_ibge" => 4104055,
                "estado_id" => 21,
                "nome" => 'CAMPO BONITO',
            ],
            [
                "codigo_ibge" => 4104105,
                "estado_id" => 21,
                "nome" => 'CAMPO DO TENENTE',
            ],
            [
                "codigo_ibge" => 4104204,
                "estado_id" => 21,
                "nome" => 'CAMPO LARGO',
            ],
            [
                "codigo_ibge" => 4104253,
                "estado_id" => 21,
                "nome" => 'CAMPO MAGRO',
            ],
            [
                "codigo_ibge" => 4104303,
                "estado_id" => 21,
                "nome" => 'CAMPO MOURÃO',
            ],
            [
                "codigo_ibge" => 4104402,
                "estado_id" => 21,
                "nome" => 'CÂNDIDO DE ABREU',
            ],
            [
                "codigo_ibge" => 4104428,
                "estado_id" => 21,
                "nome" => 'CANDÓI',
            ],
            [
                "codigo_ibge" => 4104451,
                "estado_id" => 21,
                "nome" => 'CANTAGALO',
            ],
            [
                "codigo_ibge" => 4104501,
                "estado_id" => 21,
                "nome" => 'CAPANEMA',
            ],
            [
                "codigo_ibge" => 4104600,
                "estado_id" => 21,
                "nome" => 'CAPITÃO LEÔNIDAS MARQUES',
            ],
            [
                "codigo_ibge" => 4104659,
                "estado_id" => 21,
                "nome" => 'CARAMBEÍ',
            ],
            [
                "codigo_ibge" => 4104709,
                "estado_id" => 21,
                "nome" => 'CARLÓPOLIS',
            ],
            [
                "codigo_ibge" => 4104808,
                "estado_id" => 21,
                "nome" => 'CASCAVEL',
            ],
            [
                "codigo_ibge" => 4104907,
                "estado_id" => 21,
                "nome" => 'CASTRO',
            ],
            [
                "codigo_ibge" => 4105003,
                "estado_id" => 21,
                "nome" => 'CATANDUVAS',
            ],
            [
                "codigo_ibge" => 4105102,
                "estado_id" => 21,
                "nome" => 'CENTENÁRIO DO SUL',
            ],
            [
                "codigo_ibge" => 4105201,
                "estado_id" => 21,
                "nome" => 'CERRO AZUL',
            ],
            [
                "codigo_ibge" => 4105300,
                "estado_id" => 21,
                "nome" => 'CÉU AZUL',
            ],
            [
                "codigo_ibge" => 4105409,
                "estado_id" => 21,
                "nome" => 'CHOPINZINHO',
            ],
            [
                "codigo_ibge" => 4105508,
                "estado_id" => 21,
                "nome" => 'CIANORTE',
            ],
            [
                "codigo_ibge" => 4105607,
                "estado_id" => 21,
                "nome" => 'CIDADE GAÚCHA',
            ],
            [
                "codigo_ibge" => 4105706,
                "estado_id" => 21,
                "nome" => 'CLEVELÂNDIA',
            ],
            [
                "codigo_ibge" => 4105805,
                "estado_id" => 21,
                "nome" => 'COLOMBO',
            ],
            [
                "codigo_ibge" => 4105904,
                "estado_id" => 21,
                "nome" => 'COLORADO',
            ],
            [
                "codigo_ibge" => 4106001,
                "estado_id" => 21,
                "nome" => 'CONGONHINHAS',
            ],
            [
                "codigo_ibge" => 4106100,
                "estado_id" => 21,
                "nome" => 'CONSELHEIRO MAIRINCK',
            ],
            [
                "codigo_ibge" => 4106209,
                "estado_id" => 21,
                "nome" => 'CONTENDA',
            ],
            [
                "codigo_ibge" => 4106308,
                "estado_id" => 21,
                "nome" => 'CORBÉLIA',
            ],
            [
                "codigo_ibge" => 4106407,
                "estado_id" => 21,
                "nome" => 'CORNÉLIO PROCÓPIO',
            ],
            [
                "codigo_ibge" => 4106456,
                "estado_id" => 21,
                "nome" => 'CORONEL DOMINGOS SOARES',
            ],
            [
                "codigo_ibge" => 4106506,
                "estado_id" => 21,
                "nome" => 'CORONEL VIVIDA',
            ],
            [
                "codigo_ibge" => 4106555,
                "estado_id" => 21,
                "nome" => 'CORUMBATAÍ DO SUL',
            ],
            [
                "codigo_ibge" => 4106571,
                "estado_id" => 21,
                "nome" => 'CRUZEIRO DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4106605,
                "estado_id" => 21,
                "nome" => 'CRUZEIRO DO OESTE',
            ],
            [
                "codigo_ibge" => 4106704,
                "estado_id" => 21,
                "nome" => 'CRUZEIRO DO SUL',
            ],
            [
                "codigo_ibge" => 4106803,
                "estado_id" => 21,
                "nome" => 'CRUZ MACHADO',
            ],
            [
                "codigo_ibge" => 4106852,
                "estado_id" => 21,
                "nome" => 'CRUZMALTINA',
            ],
            [
                "codigo_ibge" => 4106902,
                "estado_id" => 21,
                "nome" => 'CURITIBA',
            ],
            [
                "codigo_ibge" => 4107009,
                "estado_id" => 21,
                "nome" => 'CURIÚVA',
            ],
            [
                "codigo_ibge" => 4107108,
                "estado_id" => 21,
                "nome" => 'DIAMANTE DO NORTE',
            ],
            [
                "codigo_ibge" => 4107124,
                "estado_id" => 21,
                "nome" => 'DIAMANTE DO SUL',
            ],
            [
                "codigo_ibge" => 4107157,
                "estado_id" => 21,
                "nome" => 'DIAMANTE D`OESTE',
            ],
            [
                "codigo_ibge" => 4107207,
                "estado_id" => 21,
                "nome" => 'DOIS VIZINHOS',
            ],
            [
                "codigo_ibge" => 4107256,
                "estado_id" => 21,
                "nome" => 'DOURADINA',
            ],
            [
                "codigo_ibge" => 4107306,
                "estado_id" => 21,
                "nome" => 'DOUTOR CAMARGO',
            ],
            [
                "codigo_ibge" => 4107405,
                "estado_id" => 21,
                "nome" => 'ENÉAS MARQUES',
            ],
            [
                "codigo_ibge" => 4107504,
                "estado_id" => 21,
                "nome" => 'ENGENHEIRO BELTRÃO',
            ],
            [
                "codigo_ibge" => 4107520,
                "estado_id" => 21,
                "nome" => 'ESPERANÇA NOVA',
            ],
            [
                "codigo_ibge" => 4107538,
                "estado_id" => 21,
                "nome" => 'ENTRE RIOS DO OESTE',
            ],
            [
                "codigo_ibge" => 4107546,
                "estado_id" => 21,
                "nome" => 'ESPIGÃO ALTO DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4107553,
                "estado_id" => 21,
                "nome" => 'FAROL',
            ],
            [
                "codigo_ibge" => 4107603,
                "estado_id" => 21,
                "nome" => 'FAXINAL',
            ],
            [
                "codigo_ibge" => 4107652,
                "estado_id" => 21,
                "nome" => 'FAZENDA RIO GRANDE',
            ],
            [
                "codigo_ibge" => 4107702,
                "estado_id" => 21,
                "nome" => 'FÊNIX',
            ],
            [
                "codigo_ibge" => 4107736,
                "estado_id" => 21,
                "nome" => 'FERNANDES PINHEIRO',
            ],
            [
                "codigo_ibge" => 4107751,
                "estado_id" => 21,
                "nome" => 'FIGUEIRA',
            ],
            [
                "codigo_ibge" => 4107801,
                "estado_id" => 21,
                "nome" => 'FLORAÍ',
            ],
            [
                "codigo_ibge" => 4107850,
                "estado_id" => 21,
                "nome" => 'FLOR DA SERRA DO SUL',
            ],
            [
                "codigo_ibge" => 4107900,
                "estado_id" => 21,
                "nome" => 'FLORESTA',
            ],
            [
                "codigo_ibge" => 4108007,
                "estado_id" => 21,
                "nome" => 'FLORESTÓPOLIS',
            ],
            [
                "codigo_ibge" => 4108106,
                "estado_id" => 21,
                "nome" => 'FLÓRIDA',
            ],
            [
                "codigo_ibge" => 4108205,
                "estado_id" => 21,
                "nome" => 'FORMOSA DO OESTE',
            ],
            [
                "codigo_ibge" => 4108304,
                "estado_id" => 21,
                "nome" => 'FOZ DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4108320,
                "estado_id" => 21,
                "nome" => 'FRANCISCO ALVES',
            ],
            [
                "codigo_ibge" => 4108403,
                "estado_id" => 21,
                "nome" => 'FRANCISCO BELTRÃO',
            ],
            [
                "codigo_ibge" => 4108452,
                "estado_id" => 21,
                "nome" => 'FOZ DO JORDÃO',
            ],
            [
                "codigo_ibge" => 4108502,
                "estado_id" => 21,
                "nome" => 'GENERAL CARNEIRO',
            ],
            [
                "codigo_ibge" => 4108551,
                "estado_id" => 21,
                "nome" => 'GODOY MOREIRA',
            ],
            [
                "codigo_ibge" => 4108601,
                "estado_id" => 21,
                "nome" => 'GOIOERÊ',
            ],
            [
                "codigo_ibge" => 4108650,
                "estado_id" => 21,
                "nome" => 'GOIOXIM',
            ],
            [
                "codigo_ibge" => 4108700,
                "estado_id" => 21,
                "nome" => 'GRANDES RIOS',
            ],
            [
                "codigo_ibge" => 4108809,
                "estado_id" => 21,
                "nome" => 'GUAÍRA',
            ],
            [
                "codigo_ibge" => 4108908,
                "estado_id" => 21,
                "nome" => 'GUAIRAÇÁ',
            ],
            [
                "codigo_ibge" => 4108957,
                "estado_id" => 21,
                "nome" => 'GUAMIRANGA',
            ],
            [
                "codigo_ibge" => 4109005,
                "estado_id" => 21,
                "nome" => 'GUAPIRAMA',
            ],
            [
                "codigo_ibge" => 4109104,
                "estado_id" => 21,
                "nome" => 'GUAPOREMA',
            ],
            [
                "codigo_ibge" => 4109203,
                "estado_id" => 21,
                "nome" => 'GUARACI',
            ],
            [
                "codigo_ibge" => 4109302,
                "estado_id" => 21,
                "nome" => 'GUARANIAÇU',
            ],
            [
                "codigo_ibge" => 4109401,
                "estado_id" => 21,
                "nome" => 'GUARAPUAVA',
            ],
            [
                "codigo_ibge" => 4109500,
                "estado_id" => 21,
                "nome" => 'GUARAQUEÇABA',
            ],
            [
                "codigo_ibge" => 4109609,
                "estado_id" => 21,
                "nome" => 'GUARATUBA',
            ],
            [
                "codigo_ibge" => 4109658,
                "estado_id" => 21,
                "nome" => 'HONÓRIO SERPA',
            ],
            [
                "codigo_ibge" => 4109708,
                "estado_id" => 21,
                "nome" => 'IBAITI',
            ],
            [
                "codigo_ibge" => 4109757,
                "estado_id" => 21,
                "nome" => 'IBEMA',
            ],
            [
                "codigo_ibge" => 4109807,
                "estado_id" => 21,
                "nome" => 'IBIPORÃ',
            ],
            [
                "codigo_ibge" => 4109906,
                "estado_id" => 21,
                "nome" => 'ICARAÍMA',
            ],
            [
                "codigo_ibge" => 4110003,
                "estado_id" => 21,
                "nome" => 'IGUARAÇU',
            ],
            [
                "codigo_ibge" => 4110052,
                "estado_id" => 21,
                "nome" => 'IGUATU',
            ],
            [
                "codigo_ibge" => 4110078,
                "estado_id" => 21,
                "nome" => 'IMBAÚ',
            ],
            [
                "codigo_ibge" => 4110102,
                "estado_id" => 21,
                "nome" => 'IMBITUVA',
            ],
            [
                "codigo_ibge" => 4110201,
                "estado_id" => 21,
                "nome" => 'INÁCIO MARTINS',
            ],
            [
                "codigo_ibge" => 4110300,
                "estado_id" => 21,
                "nome" => 'INAJÁ',
            ],
            [
                "codigo_ibge" => 4110409,
                "estado_id" => 21,
                "nome" => 'INDIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 4110508,
                "estado_id" => 21,
                "nome" => 'IPIRANGA',
            ],
            [
                "codigo_ibge" => 4110607,
                "estado_id" => 21,
                "nome" => 'IPORÃ',
            ],
            [
                "codigo_ibge" => 4110656,
                "estado_id" => 21,
                "nome" => 'IRACEMA DO OESTE',
            ],
            [
                "codigo_ibge" => 4110706,
                "estado_id" => 21,
                "nome" => 'IRATI',
            ],
            [
                "codigo_ibge" => 4110805,
                "estado_id" => 21,
                "nome" => 'IRETAMA',
            ],
            [
                "codigo_ibge" => 4110904,
                "estado_id" => 21,
                "nome" => 'ITAGUAJÉ',
            ],
            [
                "codigo_ibge" => 4110953,
                "estado_id" => 21,
                "nome" => 'ITAIPULÂNDIA',
            ],
            [
                "codigo_ibge" => 4111001,
                "estado_id" => 21,
                "nome" => 'ITAMBARACÁ',
            ],
            [
                "codigo_ibge" => 4111100,
                "estado_id" => 21,
                "nome" => 'ITAMBÉ',
            ],
            [
                "codigo_ibge" => 4111209,
                "estado_id" => 21,
                "nome" => 'ITAPEJARA D`OESTE',
            ],
            [
                "codigo_ibge" => 4111258,
                "estado_id" => 21,
                "nome" => 'ITAPERUÇU',
            ],
            [
                "codigo_ibge" => 4111308,
                "estado_id" => 21,
                "nome" => 'ITAÚNA DO SUL',
            ],
            [
                "codigo_ibge" => 4111407,
                "estado_id" => 21,
                "nome" => 'IVAÍ',
            ],
            [
                "codigo_ibge" => 4111506,
                "estado_id" => 21,
                "nome" => 'IVAIPORÃ',
            ],
            [
                "codigo_ibge" => 4111555,
                "estado_id" => 21,
                "nome" => 'IVATÉ',
            ],
            [
                "codigo_ibge" => 4111605,
                "estado_id" => 21,
                "nome" => 'IVATUBA',
            ],
            [
                "codigo_ibge" => 4111704,
                "estado_id" => 21,
                "nome" => 'JABOTI',
            ],
            [
                "codigo_ibge" => 4111803,
                "estado_id" => 21,
                "nome" => 'JACAREZINHO',
            ],
            [
                "codigo_ibge" => 4111902,
                "estado_id" => 21,
                "nome" => 'JAGUAPITÃ',
            ],
            [
                "codigo_ibge" => 4112009,
                "estado_id" => 21,
                "nome" => 'JAGUARIAÍVA',
            ],
            [
                "codigo_ibge" => 4112108,
                "estado_id" => 21,
                "nome" => 'JANDAIA DO SUL',
            ],
            [
                "codigo_ibge" => 4112207,
                "estado_id" => 21,
                "nome" => 'JANIÓPOLIS',
            ],
            [
                "codigo_ibge" => 4112306,
                "estado_id" => 21,
                "nome" => 'JAPIRA',
            ],
            [
                "codigo_ibge" => 4112405,
                "estado_id" => 21,
                "nome" => 'JAPURÁ',
            ],
            [
                "codigo_ibge" => 4112504,
                "estado_id" => 21,
                "nome" => 'JARDIM ALEGRE',
            ],
            [
                "codigo_ibge" => 4112603,
                "estado_id" => 21,
                "nome" => 'JARDIM OLINDA',
            ],
            [
                "codigo_ibge" => 4112702,
                "estado_id" => 21,
                "nome" => 'JATAIZINHO',
            ],
            [
                "codigo_ibge" => 4112751,
                "estado_id" => 21,
                "nome" => 'JESUÍTAS',
            ],
            [
                "codigo_ibge" => 4112801,
                "estado_id" => 21,
                "nome" => 'JOAQUIM TÁVORA',
            ],
            [
                "codigo_ibge" => 4112900,
                "estado_id" => 21,
                "nome" => 'JUNDIAÍ DO SUL',
            ],
            [
                "codigo_ibge" => 4112959,
                "estado_id" => 21,
                "nome" => 'JURANDA',
            ],
            [
                "codigo_ibge" => 4113007,
                "estado_id" => 21,
                "nome" => 'JUSSARA',
            ],
            [
                "codigo_ibge" => 4113106,
                "estado_id" => 21,
                "nome" => 'KALORÉ',
            ],
            [
                "codigo_ibge" => 4113205,
                "estado_id" => 21,
                "nome" => 'LAPA',
            ],
            [
                "codigo_ibge" => 4113254,
                "estado_id" => 21,
                "nome" => 'LARANJAL',
            ],
            [
                "codigo_ibge" => 4113304,
                "estado_id" => 21,
                "nome" => 'LARANJEIRAS DO SUL',
            ],
            [
                "codigo_ibge" => 4113403,
                "estado_id" => 21,
                "nome" => 'LEÓPOLIS',
            ],
            [
                "codigo_ibge" => 4113429,
                "estado_id" => 21,
                "nome" => 'LIDIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 4113452,
                "estado_id" => 21,
                "nome" => 'LINDOESTE',
            ],
            [
                "codigo_ibge" => 4113502,
                "estado_id" => 21,
                "nome" => 'LOANDA',
            ],
            [
                "codigo_ibge" => 4113601,
                "estado_id" => 21,
                "nome" => 'LOBATO',
            ],
            [
                "codigo_ibge" => 4113700,
                "estado_id" => 21,
                "nome" => 'LONDRINA',
            ],
            [
                "codigo_ibge" => 4113734,
                "estado_id" => 21,
                "nome" => 'LUIZIANA',
            ],
            [
                "codigo_ibge" => 4113759,
                "estado_id" => 21,
                "nome" => 'LUNARDELLI',
            ],
            [
                "codigo_ibge" => 4113809,
                "estado_id" => 21,
                "nome" => 'LUPIONÓPOLIS',
            ],
            [
                "codigo_ibge" => 4113908,
                "estado_id" => 21,
                "nome" => 'MALLET',
            ],
            [
                "codigo_ibge" => 4114005,
                "estado_id" => 21,
                "nome" => 'MAMBORÊ',
            ],
            [
                "codigo_ibge" => 4114104,
                "estado_id" => 21,
                "nome" => 'MANDAGUAÇU',
            ],
            [
                "codigo_ibge" => 4114203,
                "estado_id" => 21,
                "nome" => 'MANDAGUARI',
            ],
            [
                "codigo_ibge" => 4114302,
                "estado_id" => 21,
                "nome" => 'MANDIRITUBA',
            ],
            [
                "codigo_ibge" => 4114351,
                "estado_id" => 21,
                "nome" => 'MANFRINÓPOLIS',
            ],
            [
                "codigo_ibge" => 4114401,
                "estado_id" => 21,
                "nome" => 'MANGUEIRINHA',
            ],
            [
                "codigo_ibge" => 4114500,
                "estado_id" => 21,
                "nome" => 'MANOEL RIBAS',
            ],
            [
                "codigo_ibge" => 4114609,
                "estado_id" => 21,
                "nome" => 'MARECHAL CÂNDIDO RONDON',
            ],
            [
                "codigo_ibge" => 4114708,
                "estado_id" => 21,
                "nome" => 'MARIA HELENA',
            ],
            [
                "codigo_ibge" => 4114807,
                "estado_id" => 21,
                "nome" => 'MARIALVA',
            ],
            [
                "codigo_ibge" => 4114906,
                "estado_id" => 21,
                "nome" => 'MARILÂNDIA DO SUL',
            ],
            [
                "codigo_ibge" => 4115002,
                "estado_id" => 21,
                "nome" => 'MARILENA',
            ],
            [
                "codigo_ibge" => 4115101,
                "estado_id" => 21,
                "nome" => 'MARILUZ',
            ],
            [
                "codigo_ibge" => 4115200,
                "estado_id" => 21,
                "nome" => 'MARINGÁ',
            ],
            [
                "codigo_ibge" => 4115309,
                "estado_id" => 21,
                "nome" => 'MARIÓPOLIS',
            ],
            [
                "codigo_ibge" => 4115358,
                "estado_id" => 21,
                "nome" => 'MARIPÁ',
            ],
            [
                "codigo_ibge" => 4115408,
                "estado_id" => 21,
                "nome" => 'MARMELEIRO',
            ],
            [
                "codigo_ibge" => 4115457,
                "estado_id" => 21,
                "nome" => 'MARQUINHO',
            ],
            [
                "codigo_ibge" => 4115507,
                "estado_id" => 21,
                "nome" => 'MARUMBI',
            ],
            [
                "codigo_ibge" => 4115606,
                "estado_id" => 21,
                "nome" => 'MATELÂNDIA',
            ],
            [
                "codigo_ibge" => 4115705,
                "estado_id" => 21,
                "nome" => 'MATINHOS',
            ],
            [
                "codigo_ibge" => 4115739,
                "estado_id" => 21,
                "nome" => 'MATO RICO',
            ],
            [
                "codigo_ibge" => 4115754,
                "estado_id" => 21,
                "nome" => 'MAUÁ DA SERRA',
            ],
            [
                "codigo_ibge" => 4115804,
                "estado_id" => 21,
                "nome" => 'MEDIANEIRA',
            ],
            [
                "codigo_ibge" => 4115853,
                "estado_id" => 21,
                "nome" => 'MERCEDES',
            ],
            [
                "codigo_ibge" => 4115903,
                "estado_id" => 21,
                "nome" => 'MIRADOR',
            ],
            [
                "codigo_ibge" => 4116000,
                "estado_id" => 21,
                "nome" => 'MIRASELVA',
            ],
            [
                "codigo_ibge" => 4116059,
                "estado_id" => 21,
                "nome" => 'MISSAL',
            ],
            [
                "codigo_ibge" => 4116109,
                "estado_id" => 21,
                "nome" => 'MOREIRA SALES',
            ],
            [
                "codigo_ibge" => 4116208,
                "estado_id" => 21,
                "nome" => 'MORRETES',
            ],
            [
                "codigo_ibge" => 4116307,
                "estado_id" => 21,
                "nome" => 'MUNHOZ DE MELO',
            ],
            [
                "codigo_ibge" => 4116406,
                "estado_id" => 21,
                "nome" => 'NOSSA SENHORA DAS GRAÇAS',
            ],
            [
                "codigo_ibge" => 4116505,
                "estado_id" => 21,
                "nome" => 'NOVA ALIANÇA DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4116604,
                "estado_id" => 21,
                "nome" => 'NOVA AMÉRICA DA COLINA',
            ],
            [
                "codigo_ibge" => 4116703,
                "estado_id" => 21,
                "nome" => 'NOVA AURORA',
            ],
            [
                "codigo_ibge" => 4116802,
                "estado_id" => 21,
                "nome" => 'NOVA CANTU',
            ],
            [
                "codigo_ibge" => 4116901,
                "estado_id" => 21,
                "nome" => 'NOVA ESPERANÇA',
            ],
            [
                "codigo_ibge" => 4116950,
                "estado_id" => 21,
                "nome" => 'NOVA ESPERANÇA DO SUDOESTE',
            ],
            [
                "codigo_ibge" => 4117008,
                "estado_id" => 21,
                "nome" => 'NOVA FÁTIMA',
            ],
            [
                "codigo_ibge" => 4117057,
                "estado_id" => 21,
                "nome" => 'NOVA LARANJEIRAS',
            ],
            [
                "codigo_ibge" => 4117107,
                "estado_id" => 21,
                "nome" => 'NOVA LONDRINA',
            ],
            [
                "codigo_ibge" => 4117206,
                "estado_id" => 21,
                "nome" => 'NOVA OLÍMPIA',
            ],
            [
                "codigo_ibge" => 4117214,
                "estado_id" => 21,
                "nome" => 'NOVA SANTA BÁRBARA',
            ],
            [
                "codigo_ibge" => 4117222,
                "estado_id" => 21,
                "nome" => 'NOVA SANTA ROSA',
            ],
            [
                "codigo_ibge" => 4117255,
                "estado_id" => 21,
                "nome" => 'NOVA PRATA DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4117271,
                "estado_id" => 21,
                "nome" => 'NOVA TEBAS',
            ],
            [
                "codigo_ibge" => 4117297,
                "estado_id" => 21,
                "nome" => 'NOVO ITACOLOMI',
            ],
            [
                "codigo_ibge" => 4117305,
                "estado_id" => 21,
                "nome" => 'ORTIGUEIRA',
            ],
            [
                "codigo_ibge" => 4117404,
                "estado_id" => 21,
                "nome" => 'OURIZONA',
            ],
            [
                "codigo_ibge" => 4117453,
                "estado_id" => 21,
                "nome" => 'OURO VERDE DO OESTE',
            ],
            [
                "codigo_ibge" => 4117503,
                "estado_id" => 21,
                "nome" => 'PAIÇANDU',
            ],
            [
                "codigo_ibge" => 4117602,
                "estado_id" => 21,
                "nome" => 'PALMAS',
            ],
            [
                "codigo_ibge" => 4117701,
                "estado_id" => 21,
                "nome" => 'PALMEIRA',
            ],
            [
                "codigo_ibge" => 4117800,
                "estado_id" => 21,
                "nome" => 'PALMITAL',
            ],
            [
                "codigo_ibge" => 4117909,
                "estado_id" => 21,
                "nome" => 'PALOTINA',
            ],
            [
                "codigo_ibge" => 4118006,
                "estado_id" => 21,
                "nome" => 'PARAÍSO DO NORTE',
            ],
            [
                "codigo_ibge" => 4118105,
                "estado_id" => 21,
                "nome" => 'PARANACITY',
            ],
            [
                "codigo_ibge" => 4118204,
                "estado_id" => 21,
                "nome" => 'PARANAGUÁ',
            ],
            [
                "codigo_ibge" => 4118303,
                "estado_id" => 21,
                "nome" => 'PARANAPOEMA',
            ],
            [
                "codigo_ibge" => 4118402,
                "estado_id" => 21,
                "nome" => 'PARANAVAÍ',
            ],
            [
                "codigo_ibge" => 4118451,
                "estado_id" => 21,
                "nome" => 'PATO BRAGADO',
            ],
            [
                "codigo_ibge" => 4118501,
                "estado_id" => 21,
                "nome" => 'PATO BRANCO',
            ],
            [
                "codigo_ibge" => 4118600,
                "estado_id" => 21,
                "nome" => 'PAULA FREITAS',
            ],
            [
                "codigo_ibge" => 4118709,
                "estado_id" => 21,
                "nome" => 'PAULO FRONTIN',
            ],
            [
                "codigo_ibge" => 4118808,
                "estado_id" => 21,
                "nome" => 'PEABIRU',
            ],
            [
                "codigo_ibge" => 4118857,
                "estado_id" => 21,
                "nome" => 'PEROBAL',
            ],
            [
                "codigo_ibge" => 4118907,
                "estado_id" => 21,
                "nome" => 'PÉROLA',
            ],
            [
                "codigo_ibge" => 4119004,
                "estado_id" => 21,
                "nome" => 'PÉROLA D`OESTE',
            ],
            [
                "codigo_ibge" => 4119103,
                "estado_id" => 21,
                "nome" => 'PIÊN',
            ],
            [
                "codigo_ibge" => 4119152,
                "estado_id" => 21,
                "nome" => 'PINHAIS',
            ],
            [
                "codigo_ibge" => 4119202,
                "estado_id" => 21,
                "nome" => 'PINHALÃO',
            ],
            [
                "codigo_ibge" => 4119251,
                "estado_id" => 21,
                "nome" => 'PINHAL DE SÃO BENTO',
            ],
            [
                "codigo_ibge" => 4119301,
                "estado_id" => 21,
                "nome" => 'PINHÃO',
            ],
            [
                "codigo_ibge" => 4119400,
                "estado_id" => 21,
                "nome" => 'PIRAÍ DO SUL',
            ],
            [
                "codigo_ibge" => 4119509,
                "estado_id" => 21,
                "nome" => 'PIRAQUARA',
            ],
            [
                "codigo_ibge" => 4119608,
                "estado_id" => 21,
                "nome" => 'PITANGA',
            ],
            [
                "codigo_ibge" => 4119657,
                "estado_id" => 21,
                "nome" => 'PITANGUEIRAS',
            ],
            [
                "codigo_ibge" => 4119707,
                "estado_id" => 21,
                "nome" => 'PLANALTINA DO PARANÁ',
            ],
            [
                "codigo_ibge" => 4119806,
                "estado_id" => 21,
                "nome" => 'PLANALTO',
            ],
            [
                "codigo_ibge" => 4119905,
                "estado_id" => 21,
                "nome" => 'PONTA GROSSA',
            ],
            [
                "codigo_ibge" => 4119954,
                "estado_id" => 21,
                "nome" => 'PONTAL DO PARANÁ',
            ],
            [
                "codigo_ibge" => 4120002,
                "estado_id" => 21,
                "nome" => 'PORECATU',
            ],
            [
                "codigo_ibge" => 4120101,
                "estado_id" => 21,
                "nome" => 'PORTO AMAZONAS',
            ],
            [
                "codigo_ibge" => 4120150,
                "estado_id" => 21,
                "nome" => 'PORTO BARREIRO',
            ],
            [
                "codigo_ibge" => 4120200,
                "estado_id" => 21,
                "nome" => 'PORTO RICO',
            ],
            [
                "codigo_ibge" => 4120309,
                "estado_id" => 21,
                "nome" => 'PORTO VITÓRIA',
            ],
            [
                "codigo_ibge" => 4120333,
                "estado_id" => 21,
                "nome" => 'PRADO FERREIRA',
            ],
            [
                "codigo_ibge" => 4120358,
                "estado_id" => 21,
                "nome" => 'PRANCHITA',
            ],
            [
                "codigo_ibge" => 4120408,
                "estado_id" => 21,
                "nome" => 'PRESIDENTE CASTELO BRANCO',
            ],
            [
                "codigo_ibge" => 4120507,
                "estado_id" => 21,
                "nome" => 'PRIMEIRO DE MAIO',
            ],
            [
                "codigo_ibge" => 4120606,
                "estado_id" => 21,
                "nome" => 'PRUDENTÓPOLIS',
            ],
            [
                "codigo_ibge" => 4120655,
                "estado_id" => 21,
                "nome" => 'QUARTO CENTENÁRIO',
            ],
            [
                "codigo_ibge" => 4120705,
                "estado_id" => 21,
                "nome" => 'QUATIGUÁ',
            ],
            [
                "codigo_ibge" => 4120804,
                "estado_id" => 21,
                "nome" => 'QUATRO BARRAS',
            ],
            [
                "codigo_ibge" => 4120853,
                "estado_id" => 21,
                "nome" => 'QUATRO PONTES',
            ],
            [
                "codigo_ibge" => 4120903,
                "estado_id" => 21,
                "nome" => 'QUEDAS DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4121000,
                "estado_id" => 21,
                "nome" => 'QUERÊNCIA DO NORTE',
            ],
            [
                "codigo_ibge" => 4121109,
                "estado_id" => 21,
                "nome" => 'QUINTA DO SOL',
            ],
            [
                "codigo_ibge" => 4121208,
                "estado_id" => 21,
                "nome" => 'QUITANDINHA',
            ],
            [
                "codigo_ibge" => 4121257,
                "estado_id" => 21,
                "nome" => 'RAMILÂNDIA',
            ],
            [
                "codigo_ibge" => 4121307,
                "estado_id" => 21,
                "nome" => 'RANCHO ALEGRE',
            ],
            [
                "codigo_ibge" => 4121356,
                "estado_id" => 21,
                "nome" => 'RANCHO ALEGRE D`OESTE',
            ],
            [
                "codigo_ibge" => 4121406,
                "estado_id" => 21,
                "nome" => 'REALEZA',
            ],
            [
                "codigo_ibge" => 4121505,
                "estado_id" => 21,
                "nome" => 'REBOUÇAS',
            ],
            [
                "codigo_ibge" => 4121604,
                "estado_id" => 21,
                "nome" => 'RENASCENÇA',
            ],
            [
                "codigo_ibge" => 4121703,
                "estado_id" => 21,
                "nome" => 'RESERVA',
            ],
            [
                "codigo_ibge" => 4121752,
                "estado_id" => 21,
                "nome" => 'RESERVA DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4121802,
                "estado_id" => 21,
                "nome" => 'RIBEIRÃO CLARO',
            ],
            [
                "codigo_ibge" => 4121901,
                "estado_id" => 21,
                "nome" => 'RIBEIRÃO DO PINHAL',
            ],
            [
                "codigo_ibge" => 4122008,
                "estado_id" => 21,
                "nome" => 'RIO AZUL',
            ],
            [
                "codigo_ibge" => 4122107,
                "estado_id" => 21,
                "nome" => 'RIO BOM',
            ],
            [
                "codigo_ibge" => 4122156,
                "estado_id" => 21,
                "nome" => 'RIO BONITO DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4122172,
                "estado_id" => 21,
                "nome" => 'RIO BRANCO DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4122206,
                "estado_id" => 21,
                "nome" => 'RIO BRANCO DO SUL',
            ],
            [
                "codigo_ibge" => 4122305,
                "estado_id" => 21,
                "nome" => 'RIO NEGRO',
            ],
            [
                "codigo_ibge" => 4122404,
                "estado_id" => 21,
                "nome" => 'ROLÂNDIA',
            ],
            [
                "codigo_ibge" => 4122503,
                "estado_id" => 21,
                "nome" => 'RONCADOR',
            ],
            [
                "codigo_ibge" => 4122602,
                "estado_id" => 21,
                "nome" => 'RONDON',
            ],
            [
                "codigo_ibge" => 4122651,
                "estado_id" => 21,
                "nome" => 'ROSÁRIO DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4122701,
                "estado_id" => 21,
                "nome" => 'SABÁUDIA',
            ],
            [
                "codigo_ibge" => 4122800,
                "estado_id" => 21,
                "nome" => 'SALGADO FILHO',
            ],
            [
                "codigo_ibge" => 4122909,
                "estado_id" => 21,
                "nome" => 'SALTO DO ITARARÉ',
            ],
            [
                "codigo_ibge" => 4123006,
                "estado_id" => 21,
                "nome" => 'SALTO DO LONTRA',
            ],
            [
                "codigo_ibge" => 4123105,
                "estado_id" => 21,
                "nome" => 'SANTA AMÉLIA',
            ],
            [
                "codigo_ibge" => 4123204,
                "estado_id" => 21,
                "nome" => 'SANTA CECÍLIA DO PAVÃO',
            ],
            [
                "codigo_ibge" => 4123303,
                "estado_id" => 21,
                "nome" => 'SANTA CRUZ DE MONTE CASTELO',
            ],
            [
                "codigo_ibge" => 4123402,
                "estado_id" => 21,
                "nome" => 'SANTA FÉ',
            ],
            [
                "codigo_ibge" => 4123501,
                "estado_id" => 21,
                "nome" => 'SANTA HELENA',
            ],
            [
                "codigo_ibge" => 4123600,
                "estado_id" => 21,
                "nome" => 'SANTA INÊS',
            ],
            [
                "codigo_ibge" => 4123709,
                "estado_id" => 21,
                "nome" => 'SANTA ISABEL DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4123808,
                "estado_id" => 21,
                "nome" => 'SANTA IZABEL DO OESTE',
            ],
            [
                "codigo_ibge" => 4123824,
                "estado_id" => 21,
                "nome" => 'SANTA LÚCIA',
            ],
            [
                "codigo_ibge" => 4123857,
                "estado_id" => 21,
                "nome" => 'SANTA MARIA DO OESTE',
            ],
            [
                "codigo_ibge" => 4123907,
                "estado_id" => 21,
                "nome" => 'SANTA MARIANA',
            ],
            [
                "codigo_ibge" => 4123956,
                "estado_id" => 21,
                "nome" => 'SANTA MÔNICA',
            ],
            [
                "codigo_ibge" => 4124004,
                "estado_id" => 21,
                "nome" => 'SANTANA DO ITARARÉ',
            ],
            [
                "codigo_ibge" => 4124020,
                "estado_id" => 21,
                "nome" => 'SANTA TEREZA DO OESTE',
            ],
            [
                "codigo_ibge" => 4124053,
                "estado_id" => 21,
                "nome" => 'SANTA TEREZINHA DE ITAIPU',
            ],
            [
                "codigo_ibge" => 4124103,
                "estado_id" => 21,
                "nome" => 'SANTO ANTÔNIO DA PLATINA',
            ],
            [
                "codigo_ibge" => 4124202,
                "estado_id" => 21,
                "nome" => 'SANTO ANTÔNIO DO CAIUÁ',
            ],
            [
                "codigo_ibge" => 4124301,
                "estado_id" => 21,
                "nome" => 'SANTO ANTÔNIO DO PARAÍSO',
            ],
            [
                "codigo_ibge" => 4124400,
                "estado_id" => 21,
                "nome" => 'SANTO ANTÔNIO DO SUDOESTE',
            ],
            [
                "codigo_ibge" => 4124509,
                "estado_id" => 21,
                "nome" => 'SANTO INÁCIO',
            ],
            [
                "codigo_ibge" => 4124608,
                "estado_id" => 21,
                "nome" => 'SÃO CARLOS DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4124707,
                "estado_id" => 21,
                "nome" => 'SÃO JERÔNIMO DA SERRA',
            ],
            [
                "codigo_ibge" => 4124806,
                "estado_id" => 21,
                "nome" => 'SÃO JOÃO',
            ],
            [
                "codigo_ibge" => 4124905,
                "estado_id" => 21,
                "nome" => 'SÃO JOÃO DO CAIUÁ',
            ],
            [
                "codigo_ibge" => 4125001,
                "estado_id" => 21,
                "nome" => 'SÃO JOÃO DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4125100,
                "estado_id" => 21,
                "nome" => 'SÃO JOÃO DO TRIUNFO',
            ],
            [
                "codigo_ibge" => 4125209,
                "estado_id" => 21,
                "nome" => 'SÃO JORGE D`OESTE',
            ],
            [
                "codigo_ibge" => 4125308,
                "estado_id" => 21,
                "nome" => 'SÃO JORGE DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4125357,
                "estado_id" => 21,
                "nome" => 'SÃO JORGE DO PATROCÍNIO',
            ],
            [
                "codigo_ibge" => 4125407,
                "estado_id" => 21,
                "nome" => 'SÃO JOSÉ DA BOA VISTA',
            ],
            [
                "codigo_ibge" => 4125456,
                "estado_id" => 21,
                "nome" => 'SÃO JOSÉ DAS PALMEIRAS',
            ],
            [
                "codigo_ibge" => 4125506,
                "estado_id" => 21,
                "nome" => 'SÃO JOSÉ DOS PINHAIS',
            ],
            [
                "codigo_ibge" => 4125555,
                "estado_id" => 21,
                "nome" => 'SÃO MANOEL DO PARANÁ',
            ],
            [
                "codigo_ibge" => 4125605,
                "estado_id" => 21,
                "nome" => 'SÃO MATEUS DO SUL',
            ],
            [
                "codigo_ibge" => 4125704,
                "estado_id" => 21,
                "nome" => 'SÃO MIGUEL DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4125753,
                "estado_id" => 21,
                "nome" => 'SÃO PEDRO DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4125803,
                "estado_id" => 21,
                "nome" => 'SÃO PEDRO DO IVAÍ',
            ],
            [
                "codigo_ibge" => 4125902,
                "estado_id" => 21,
                "nome" => 'SÃO PEDRO DO PARANÁ',
            ],
            [
                "codigo_ibge" => 4126009,
                "estado_id" => 21,
                "nome" => 'SÃO SEBASTIÃO DA AMOREIRA',
            ],
            [
                "codigo_ibge" => 4126108,
                "estado_id" => 21,
                "nome" => 'SÃO TOMÉ',
            ],
            [
                "codigo_ibge" => 4126207,
                "estado_id" => 21,
                "nome" => 'SAPOPEMA',
            ],
            [
                "codigo_ibge" => 4126256,
                "estado_id" => 21,
                "nome" => 'SARANDI',
            ],
            [
                "codigo_ibge" => 4126272,
                "estado_id" => 21,
                "nome" => 'SAUDADE DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4126306,
                "estado_id" => 21,
                "nome" => 'SENGÉS',
            ],
            [
                "codigo_ibge" => 4126355,
                "estado_id" => 21,
                "nome" => 'SERRANÓPOLIS DO IGUAÇU',
            ],
            [
                "codigo_ibge" => 4126405,
                "estado_id" => 21,
                "nome" => 'SERTANEJA',
            ],
            [
                "codigo_ibge" => 4126504,
                "estado_id" => 21,
                "nome" => 'SERTANÓPOLIS',
            ],
            [
                "codigo_ibge" => 4126603,
                "estado_id" => 21,
                "nome" => 'SIQUEIRA CAMPOS',
            ],
            [
                "codigo_ibge" => 4126652,
                "estado_id" => 21,
                "nome" => 'SULINA',
            ],
            [
                "codigo_ibge" => 4126678,
                "estado_id" => 21,
                "nome" => 'TAMARANA',
            ],
            [
                "codigo_ibge" => 4126702,
                "estado_id" => 21,
                "nome" => 'TAMBOARA',
            ],
            [
                "codigo_ibge" => 4126801,
                "estado_id" => 21,
                "nome" => 'TAPEJARA',
            ],
            [
                "codigo_ibge" => 4126900,
                "estado_id" => 21,
                "nome" => 'TAPIRA',
            ],
            [
                "codigo_ibge" => 4127007,
                "estado_id" => 21,
                "nome" => 'TEIXEIRA SOARES',
            ],
            [
                "codigo_ibge" => 4127106,
                "estado_id" => 21,
                "nome" => 'TELÊMACO BORBA',
            ],
            [
                "codigo_ibge" => 4127205,
                "estado_id" => 21,
                "nome" => 'TERRA BOA',
            ],
            [
                "codigo_ibge" => 4127304,
                "estado_id" => 21,
                "nome" => 'TERRA RICA',
            ],
            [
                "codigo_ibge" => 4127403,
                "estado_id" => 21,
                "nome" => 'TERRA ROXA',
            ],
            [
                "codigo_ibge" => 4127502,
                "estado_id" => 21,
                "nome" => 'TIBAGI',
            ],
            [
                "codigo_ibge" => 4127601,
                "estado_id" => 21,
                "nome" => 'TIJUCAS DO SUL',
            ],
            [
                "codigo_ibge" => 4127700,
                "estado_id" => 21,
                "nome" => 'TOLEDO',
            ],
            [
                "codigo_ibge" => 4127809,
                "estado_id" => 21,
                "nome" => 'TOMAZINA',
            ],
            [
                "codigo_ibge" => 4127858,
                "estado_id" => 21,
                "nome" => 'TRÊS BARRAS DO PARANÁ',
            ],
            [
                "codigo_ibge" => 4127882,
                "estado_id" => 21,
                "nome" => 'TUNAS DO PARANÁ',
            ],
            [
                "codigo_ibge" => 4127908,
                "estado_id" => 21,
                "nome" => 'TUNEIRAS DO OESTE',
            ],
            [
                "codigo_ibge" => 4127957,
                "estado_id" => 21,
                "nome" => 'TUPÃSSI',
            ],
            [
                "codigo_ibge" => 4127965,
                "estado_id" => 21,
                "nome" => 'TURVO',
            ],
            [
                "codigo_ibge" => 4128005,
                "estado_id" => 21,
                "nome" => 'UBIRATÃ',
            ],
            [
                "codigo_ibge" => 4128104,
                "estado_id" => 21,
                "nome" => 'UMUARAMA',
            ],
            [
                "codigo_ibge" => 4128203,
                "estado_id" => 21,
                "nome" => 'UNIÃO DA VITÓRIA',
            ],
            [
                "codigo_ibge" => 4128302,
                "estado_id" => 21,
                "nome" => 'UNIFLOR',
            ],
            [
                "codigo_ibge" => 4128401,
                "estado_id" => 21,
                "nome" => 'URAÍ',
            ],
            [
                "codigo_ibge" => 4128500,
                "estado_id" => 21,
                "nome" => 'WENCESLAU BRAZ',
            ],
            [
                "codigo_ibge" => 4128534,
                "estado_id" => 21,
                "nome" => 'VENTANIA',
            ],
            [
                "codigo_ibge" => 4128559,
                "estado_id" => 21,
                "nome" => 'VERA CRUZ DO OESTE',
            ],
            [
                "codigo_ibge" => 4128609,
                "estado_id" => 21,
                "nome" => 'VERÊ',
            ],
            [
                "codigo_ibge" => 4128625,
                "estado_id" => 21,
                "nome" => 'ALTO PARAÍSO',
            ],
            [
                "codigo_ibge" => 4128633,
                "estado_id" => 21,
                "nome" => 'DOUTOR ULYSSES',
            ],
            [
                "codigo_ibge" => 4128658,
                "estado_id" => 21,
                "nome" => 'VIRMOND',
            ],
            [
                "codigo_ibge" => 4128708,
                "estado_id" => 21,
                "nome" => 'VITORINO',
            ],
            [
                "codigo_ibge" => 4128807,
                "estado_id" => 21,
                "nome" => 'XAMBRÊ',
            ],
            [
                "codigo_ibge" => 4200051,
                "estado_id" => 22,
                "nome" => 'ABDON BATISTA',
            ],
            [
                "codigo_ibge" => 4200101,
                "estado_id" => 22,
                "nome" => 'ABELARDO LUZ',
            ],
            [
                "codigo_ibge" => 4200200,
                "estado_id" => 22,
                "nome" => 'AGROLÂNDIA',
            ],
            [
                "codigo_ibge" => 4200309,
                "estado_id" => 22,
                "nome" => 'AGRONÔMICA',
            ],
            [
                "codigo_ibge" => 4200408,
                "estado_id" => 22,
                "nome" => 'ÁGUA DOCE',
            ],
            [
                "codigo_ibge" => 4200507,
                "estado_id" => 22,
                "nome" => 'ÁGUAS DE CHAPECÓ',
            ],
            [
                "codigo_ibge" => 4200556,
                "estado_id" => 22,
                "nome" => 'ÁGUAS FRIAS',
            ],
            [
                "codigo_ibge" => 4200606,
                "estado_id" => 22,
                "nome" => 'ÁGUAS MORNAS',
            ],
            [
                "codigo_ibge" => 4200705,
                "estado_id" => 22,
                "nome" => 'ALFREDO WAGNER',
            ],
            [
                "codigo_ibge" => 4200754,
                "estado_id" => 22,
                "nome" => 'ALTO BELA VISTA',
            ],
            [
                "codigo_ibge" => 4200804,
                "estado_id" => 22,
                "nome" => 'ANCHIETA',
            ],
            [
                "codigo_ibge" => 4200903,
                "estado_id" => 22,
                "nome" => 'ANGELINA',
            ],
            [
                "codigo_ibge" => 4201000,
                "estado_id" => 22,
                "nome" => 'ANITA GARIBALDI',
            ],
            [
                "codigo_ibge" => 4201109,
                "estado_id" => 22,
                "nome" => 'ANITÁPOLIS',
            ],
            [
                "codigo_ibge" => 4201208,
                "estado_id" => 22,
                "nome" => 'ANTÔNIO CARLOS',
            ],
            [
                "codigo_ibge" => 4201257,
                "estado_id" => 22,
                "nome" => 'APIÚNA',
            ],
            [
                "codigo_ibge" => 4201273,
                "estado_id" => 22,
                "nome" => 'ARABUTÃ',
            ],
            [
                "codigo_ibge" => 4201307,
                "estado_id" => 22,
                "nome" => 'ARAQUARI',
            ],
            [
                "codigo_ibge" => 4201406,
                "estado_id" => 22,
                "nome" => 'ARARANGUÁ',
            ],
            [
                "codigo_ibge" => 4201505,
                "estado_id" => 22,
                "nome" => 'ARMAZÉM',
            ],
            [
                "codigo_ibge" => 4201604,
                "estado_id" => 22,
                "nome" => 'ARROIO TRINTA',
            ],
            [
                "codigo_ibge" => 4201653,
                "estado_id" => 22,
                "nome" => 'ARVOREDO',
            ],
            [
                "codigo_ibge" => 4201703,
                "estado_id" => 22,
                "nome" => 'ASCURRA',
            ],
            [
                "codigo_ibge" => 4201802,
                "estado_id" => 22,
                "nome" => 'ATALANTA',
            ],
            [
                "codigo_ibge" => 4201901,
                "estado_id" => 22,
                "nome" => 'AURORA',
            ],
            [
                "codigo_ibge" => 4201950,
                "estado_id" => 22,
                "nome" => 'BALNEÁRIO ARROIO DO SILVA',
            ],
            [
                "codigo_ibge" => 4202008,
                "estado_id" => 22,
                "nome" => 'BALNEÁRIO CAMBORIÚ',
            ],
            [
                "codigo_ibge" => 4202057,
                "estado_id" => 22,
                "nome" => 'BALNEÁRIO BARRA DO SUL',
            ],
            [
                "codigo_ibge" => 4202073,
                "estado_id" => 22,
                "nome" => 'BALNEÁRIO GAIVOTA',
            ],
            [
                "codigo_ibge" => 4202081,
                "estado_id" => 22,
                "nome" => 'BANDEIRANTE',
            ],
            [
                "codigo_ibge" => 4202099,
                "estado_id" => 22,
                "nome" => 'BARRA BONITA',
            ],
            [
                "codigo_ibge" => 4202107,
                "estado_id" => 22,
                "nome" => 'BARRA VELHA',
            ],
            [
                "codigo_ibge" => 4202131,
                "estado_id" => 22,
                "nome" => 'BELA VISTA DO TOLDO',
            ],
            [
                "codigo_ibge" => 4202156,
                "estado_id" => 22,
                "nome" => 'BELMONTE',
            ],
            [
                "codigo_ibge" => 4202206,
                "estado_id" => 22,
                "nome" => 'BENEDITO NOVO',
            ],
            [
                "codigo_ibge" => 4202305,
                "estado_id" => 22,
                "nome" => 'BIGUAÇU',
            ],
            [
                "codigo_ibge" => 4202404,
                "estado_id" => 22,
                "nome" => 'BLUMENAU',
            ],
            [
                "codigo_ibge" => 4202438,
                "estado_id" => 22,
                "nome" => 'BOCAINA DO SUL',
            ],
            [
                "codigo_ibge" => 4202453,
                "estado_id" => 22,
                "nome" => 'BOMBINHAS',
            ],
            [
                "codigo_ibge" => 4202503,
                "estado_id" => 22,
                "nome" => 'BOM JARDIM DA SERRA',
            ],
            [
                "codigo_ibge" => 4202537,
                "estado_id" => 22,
                "nome" => 'BOM JESUS',
            ],
            [
                "codigo_ibge" => 4202578,
                "estado_id" => 22,
                "nome" => 'BOM JESUS DO OESTE',
            ],
            [
                "codigo_ibge" => 4202602,
                "estado_id" => 22,
                "nome" => 'BOM RETIRO',
            ],
            [
                "codigo_ibge" => 4202701,
                "estado_id" => 22,
                "nome" => 'BOTUVERÁ',
            ],
            [
                "codigo_ibge" => 4202800,
                "estado_id" => 22,
                "nome" => 'BRAÇO DO NORTE',
            ],
            [
                "codigo_ibge" => 4202859,
                "estado_id" => 22,
                "nome" => 'BRAÇO DO TROMBUDO',
            ],
            [
                "codigo_ibge" => 4202875,
                "estado_id" => 22,
                "nome" => 'BRUNÓPOLIS',
            ],
            [
                "codigo_ibge" => 4202909,
                "estado_id" => 22,
                "nome" => 'BRUSQUE',
            ],
            [
                "codigo_ibge" => 4203006,
                "estado_id" => 22,
                "nome" => 'CAÇADOR',
            ],
            [
                "codigo_ibge" => 4203105,
                "estado_id" => 22,
                "nome" => 'CAIBI',
            ],
            [
                "codigo_ibge" => 4203154,
                "estado_id" => 22,
                "nome" => 'CALMON',
            ],
            [
                "codigo_ibge" => 4203204,
                "estado_id" => 22,
                "nome" => 'CAMBORIÚ',
            ],
            [
                "codigo_ibge" => 4203253,
                "estado_id" => 22,
                "nome" => 'CAPÃO ALTO',
            ],
            [
                "codigo_ibge" => 4203303,
                "estado_id" => 22,
                "nome" => 'CAMPO ALEGRE',
            ],
            [
                "codigo_ibge" => 4203402,
                "estado_id" => 22,
                "nome" => 'CAMPO BELO DO SUL',
            ],
            [
                "codigo_ibge" => 4203501,
                "estado_id" => 22,
                "nome" => 'CAMPO ERÊ',
            ],
            [
                "codigo_ibge" => 4203600,
                "estado_id" => 22,
                "nome" => 'CAMPOS NOVOS',
            ],
            [
                "codigo_ibge" => 4203709,
                "estado_id" => 22,
                "nome" => 'CANELINHA',
            ],
            [
                "codigo_ibge" => 4203808,
                "estado_id" => 22,
                "nome" => 'CANOINHAS',
            ],
            [
                "codigo_ibge" => 4203907,
                "estado_id" => 22,
                "nome" => 'CAPINZAL',
            ],
            [
                "codigo_ibge" => 4203956,
                "estado_id" => 22,
                "nome" => 'CAPIVARI DE BAIXO',
            ],
            [
                "codigo_ibge" => 4204004,
                "estado_id" => 22,
                "nome" => 'CATANDUVAS',
            ],
            [
                "codigo_ibge" => 4204103,
                "estado_id" => 22,
                "nome" => 'CAXAMBU DO SUL',
            ],
            [
                "codigo_ibge" => 4204152,
                "estado_id" => 22,
                "nome" => 'CELSO RAMOS',
            ],
            [
                "codigo_ibge" => 4204178,
                "estado_id" => 22,
                "nome" => 'CERRO NEGRO',
            ],
            [
                "codigo_ibge" => 4204194,
                "estado_id" => 22,
                "nome" => 'CHAPADÃO DO LAGEADO',
            ],
            [
                "codigo_ibge" => 4204202,
                "estado_id" => 22,
                "nome" => 'CHAPECÓ',
            ],
            [
                "codigo_ibge" => 4204251,
                "estado_id" => 22,
                "nome" => 'COCAL DO SUL',
            ],
            [
                "codigo_ibge" => 4204301,
                "estado_id" => 22,
                "nome" => 'CONCÓRDIA',
            ],
            [
                "codigo_ibge" => 4204350,
                "estado_id" => 22,
                "nome" => 'CORDILHEIRA ALTA',
            ],
            [
                "codigo_ibge" => 4204400,
                "estado_id" => 22,
                "nome" => 'CORONEL FREITAS',
            ],
            [
                "codigo_ibge" => 4204459,
                "estado_id" => 22,
                "nome" => 'CORONEL MARTINS',
            ],
            [
                "codigo_ibge" => 4204509,
                "estado_id" => 22,
                "nome" => 'CORUPÁ',
            ],
            [
                "codigo_ibge" => 4204558,
                "estado_id" => 22,
                "nome" => 'CORREIA PINTO',
            ],
            [
                "codigo_ibge" => 4204608,
                "estado_id" => 22,
                "nome" => 'CRICIÚMA',
            ],
            [
                "codigo_ibge" => 4204707,
                "estado_id" => 22,
                "nome" => 'CUNHA PORÃ',
            ],
            [
                "codigo_ibge" => 4204756,
                "estado_id" => 22,
                "nome" => 'CUNHATAÍ',
            ],
            [
                "codigo_ibge" => 4204806,
                "estado_id" => 22,
                "nome" => 'CURITIBANOS',
            ],
            [
                "codigo_ibge" => 4204905,
                "estado_id" => 22,
                "nome" => 'DESCANSO',
            ],
            [
                "codigo_ibge" => 4205001,
                "estado_id" => 22,
                "nome" => 'DIONÍSIO CERQUEIRA',
            ],
            [
                "codigo_ibge" => 4205100,
                "estado_id" => 22,
                "nome" => 'DONA EMMA',
            ],
            [
                "codigo_ibge" => 4205159,
                "estado_id" => 22,
                "nome" => 'DOUTOR PEDRINHO',
            ],
            [
                "codigo_ibge" => 4205175,
                "estado_id" => 22,
                "nome" => 'ENTRE RIOS',
            ],
            [
                "codigo_ibge" => 4205191,
                "estado_id" => 22,
                "nome" => 'ERMO',
            ],
            [
                "codigo_ibge" => 4205209,
                "estado_id" => 22,
                "nome" => 'ERVAL VELHO',
            ],
            [
                "codigo_ibge" => 4205308,
                "estado_id" => 22,
                "nome" => 'FAXINAL DOS GUEDES',
            ],
            [
                "codigo_ibge" => 4205357,
                "estado_id" => 22,
                "nome" => 'FLOR DO SERTÃO',
            ],
            [
                "codigo_ibge" => 4205407,
                "estado_id" => 22,
                "nome" => 'FLORIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 4205431,
                "estado_id" => 22,
                "nome" => 'FORMOSA DO SUL',
            ],
            [
                "codigo_ibge" => 4205456,
                "estado_id" => 22,
                "nome" => 'FORQUILHINHA',
            ],
            [
                "codigo_ibge" => 4205506,
                "estado_id" => 22,
                "nome" => 'FRAIBURGO',
            ],
            [
                "codigo_ibge" => 4205555,
                "estado_id" => 22,
                "nome" => 'FREI ROGÉRIO',
            ],
            [
                "codigo_ibge" => 4205605,
                "estado_id" => 22,
                "nome" => 'GALVÃO',
            ],
            [
                "codigo_ibge" => 4205704,
                "estado_id" => 22,
                "nome" => 'GAROPABA',
            ],
            [
                "codigo_ibge" => 4205803,
                "estado_id" => 22,
                "nome" => 'GARUVA',
            ],
            [
                "codigo_ibge" => 4205902,
                "estado_id" => 22,
                "nome" => 'GASPAR',
            ],
            [
                "codigo_ibge" => 4206009,
                "estado_id" => 22,
                "nome" => 'GOVERNADOR CELSO RAMOS',
            ],
            [
                "codigo_ibge" => 4206108,
                "estado_id" => 22,
                "nome" => 'GRÃO PARÁ',
            ],
            [
                "codigo_ibge" => 4206207,
                "estado_id" => 22,
                "nome" => 'GRAVATAL',
            ],
            [
                "codigo_ibge" => 4206306,
                "estado_id" => 22,
                "nome" => 'GUABIRUBA',
            ],
            [
                "codigo_ibge" => 4206405,
                "estado_id" => 22,
                "nome" => 'GUARACIABA',
            ],
            [
                "codigo_ibge" => 4206504,
                "estado_id" => 22,
                "nome" => 'GUARAMIRIM',
            ],
            [
                "codigo_ibge" => 4206603,
                "estado_id" => 22,
                "nome" => 'GUARUJÁ DO SUL',
            ],
            [
                "codigo_ibge" => 4206652,
                "estado_id" => 22,
                "nome" => 'GUATAMBÚ',
            ],
            [
                "codigo_ibge" => 4206702,
                "estado_id" => 22,
                "nome" => 'HERVAL D`OESTE',
            ],
            [
                "codigo_ibge" => 4206751,
                "estado_id" => 22,
                "nome" => 'IBIAM',
            ],
            [
                "codigo_ibge" => 4206801,
                "estado_id" => 22,
                "nome" => 'IBICARÉ',
            ],
            [
                "codigo_ibge" => 4206900,
                "estado_id" => 22,
                "nome" => 'IBIRAMA',
            ],
            [
                "codigo_ibge" => 4207007,
                "estado_id" => 22,
                "nome" => 'IÇARA',
            ],
            [
                "codigo_ibge" => 4207106,
                "estado_id" => 22,
                "nome" => 'ILHOTA',
            ],
            [
                "codigo_ibge" => 4207205,
                "estado_id" => 22,
                "nome" => 'IMARUÍ',
            ],
            [
                "codigo_ibge" => 4207304,
                "estado_id" => 22,
                "nome" => 'IMBITUBA',
            ],
            [
                "codigo_ibge" => 4207403,
                "estado_id" => 22,
                "nome" => 'IMBUIA',
            ],
            [
                "codigo_ibge" => 4207502,
                "estado_id" => 22,
                "nome" => 'INDAIAL',
            ],
            [
                "codigo_ibge" => 4207577,
                "estado_id" => 22,
                "nome" => 'IOMERÊ',
            ],
            [
                "codigo_ibge" => 4207601,
                "estado_id" => 22,
                "nome" => 'IPIRA',
            ],
            [
                "codigo_ibge" => 4207650,
                "estado_id" => 22,
                "nome" => 'IPORÃ DO OESTE',
            ],
            [
                "codigo_ibge" => 4207684,
                "estado_id" => 22,
                "nome" => 'IPUAÇU',
            ],
            [
                "codigo_ibge" => 4207700,
                "estado_id" => 22,
                "nome" => 'IPUMIRIM',
            ],
            [
                "codigo_ibge" => 4207759,
                "estado_id" => 22,
                "nome" => 'IRACEMINHA',
            ],
            [
                "codigo_ibge" => 4207809,
                "estado_id" => 22,
                "nome" => 'IRANI',
            ],
            [
                "codigo_ibge" => 4207858,
                "estado_id" => 22,
                "nome" => 'IRATI',
            ],
            [
                "codigo_ibge" => 4207908,
                "estado_id" => 22,
                "nome" => 'IRINEÓPOLIS',
            ],
            [
                "codigo_ibge" => 4208005,
                "estado_id" => 22,
                "nome" => 'ITÁ',
            ],
            [
                "codigo_ibge" => 4208104,
                "estado_id" => 22,
                "nome" => 'ITAIÓPOLIS',
            ],
            [
                "codigo_ibge" => 4208203,
                "estado_id" => 22,
                "nome" => 'ITAJAÍ',
            ],
            [
                "codigo_ibge" => 4208302,
                "estado_id" => 22,
                "nome" => 'ITAPEMA',
            ],
            [
                "codigo_ibge" => 4208401,
                "estado_id" => 22,
                "nome" => 'ITAPIRANGA',
            ],
            [
                "codigo_ibge" => 4208450,
                "estado_id" => 22,
                "nome" => 'ITAPOÁ',
            ],
            [
                "codigo_ibge" => 4208500,
                "estado_id" => 22,
                "nome" => 'ITUPORANGA',
            ],
            [
                "codigo_ibge" => 4208609,
                "estado_id" => 22,
                "nome" => 'JABORÁ',
            ],
            [
                "codigo_ibge" => 4208708,
                "estado_id" => 22,
                "nome" => 'JACINTO MACHADO',
            ],
            [
                "codigo_ibge" => 4208807,
                "estado_id" => 22,
                "nome" => 'JAGUARUNA',
            ],
            [
                "codigo_ibge" => 4208906,
                "estado_id" => 22,
                "nome" => 'JARAGUÁ DO SUL',
            ],
            [
                "codigo_ibge" => 4208955,
                "estado_id" => 22,
                "nome" => 'JARDINÓPOLIS',
            ],
            [
                "codigo_ibge" => 4209003,
                "estado_id" => 22,
                "nome" => 'JOAÇABA',
            ],
            [
                "codigo_ibge" => 4209102,
                "estado_id" => 22,
                "nome" => 'JOINVILLE',
            ],
            [
                "codigo_ibge" => 4209151,
                "estado_id" => 22,
                "nome" => 'JOSÉ BOITEUX',
            ],
            [
                "codigo_ibge" => 4209177,
                "estado_id" => 22,
                "nome" => 'JUPIÁ',
            ],
            [
                "codigo_ibge" => 4209201,
                "estado_id" => 22,
                "nome" => 'LACERDÓPOLIS',
            ],
            [
                "codigo_ibge" => 4209300,
                "estado_id" => 22,
                "nome" => 'LAGES',
            ],
            [
                "codigo_ibge" => 4209409,
                "estado_id" => 22,
                "nome" => 'LAGUNA',
            ],
            [
                "codigo_ibge" => 4209458,
                "estado_id" => 22,
                "nome" => 'LAJEADO GRANDE',
            ],
            [
                "codigo_ibge" => 4209508,
                "estado_id" => 22,
                "nome" => 'LAURENTINO',
            ],
            [
                "codigo_ibge" => 4209607,
                "estado_id" => 22,
                "nome" => 'LAURO MULLER',
            ],
            [
                "codigo_ibge" => 4209706,
                "estado_id" => 22,
                "nome" => 'LEBON RÉGIS',
            ],
            [
                "codigo_ibge" => 4209805,
                "estado_id" => 22,
                "nome" => 'LEOBERTO LEAL',
            ],
            [
                "codigo_ibge" => 4209854,
                "estado_id" => 22,
                "nome" => 'LINDÓIA DO SUL',
            ],
            [
                "codigo_ibge" => 4209904,
                "estado_id" => 22,
                "nome" => 'LONTRAS',
            ],
            [
                "codigo_ibge" => 4210001,
                "estado_id" => 22,
                "nome" => 'LUIZ ALVES',
            ],
            [
                "codigo_ibge" => 4210035,
                "estado_id" => 22,
                "nome" => 'LUZERNA',
            ],
            [
                "codigo_ibge" => 4210050,
                "estado_id" => 22,
                "nome" => 'MACIEIRA',
            ],
            [
                "codigo_ibge" => 4210100,
                "estado_id" => 22,
                "nome" => 'MAFRA',
            ],
            [
                "codigo_ibge" => 4210209,
                "estado_id" => 22,
                "nome" => 'MAJOR GERCINO',
            ],
            [
                "codigo_ibge" => 4210308,
                "estado_id" => 22,
                "nome" => 'MAJOR VIEIRA',
            ],
            [
                "codigo_ibge" => 4210407,
                "estado_id" => 22,
                "nome" => 'MARACAJÁ',
            ],
            [
                "codigo_ibge" => 4210506,
                "estado_id" => 22,
                "nome" => 'MARAVILHA',
            ],
            [
                "codigo_ibge" => 4210555,
                "estado_id" => 22,
                "nome" => 'MAREMA',
            ],
            [
                "codigo_ibge" => 4210605,
                "estado_id" => 22,
                "nome" => 'MASSARANDUBA',
            ],
            [
                "codigo_ibge" => 4210704,
                "estado_id" => 22,
                "nome" => 'MATOS COSTA',
            ],
            [
                "codigo_ibge" => 4210803,
                "estado_id" => 22,
                "nome" => 'MELEIRO',
            ],
            [
                "codigo_ibge" => 4210852,
                "estado_id" => 22,
                "nome" => 'MIRIM DOCE',
            ],
            [
                "codigo_ibge" => 4210902,
                "estado_id" => 22,
                "nome" => 'MODELO',
            ],
            [
                "codigo_ibge" => 4211009,
                "estado_id" => 22,
                "nome" => 'MONDAÍ',
            ],
            [
                "codigo_ibge" => 4211058,
                "estado_id" => 22,
                "nome" => 'MONTE CARLO',
            ],
            [
                "codigo_ibge" => 4211108,
                "estado_id" => 22,
                "nome" => 'MONTE CASTELO',
            ],
            [
                "codigo_ibge" => 4211207,
                "estado_id" => 22,
                "nome" => 'MORRO DA FUMAÇA',
            ],
            [
                "codigo_ibge" => 4211256,
                "estado_id" => 22,
                "nome" => 'MORRO GRANDE',
            ],
            [
                "codigo_ibge" => 4211306,
                "estado_id" => 22,
                "nome" => 'NAVEGANTES',
            ],
            [
                "codigo_ibge" => 4211405,
                "estado_id" => 22,
                "nome" => 'NOVA ERECHIM',
            ],
            [
                "codigo_ibge" => 4211454,
                "estado_id" => 22,
                "nome" => 'NOVA ITABERABA',
            ],
            [
                "codigo_ibge" => 4211504,
                "estado_id" => 22,
                "nome" => 'NOVA TRENTO',
            ],
            [
                "codigo_ibge" => 4211603,
                "estado_id" => 22,
                "nome" => 'NOVA VENEZA',
            ],
            [
                "codigo_ibge" => 4211652,
                "estado_id" => 22,
                "nome" => 'NOVO HORIZONTE',
            ],
            [
                "codigo_ibge" => 4211702,
                "estado_id" => 22,
                "nome" => 'ORLEANS',
            ],
            [
                "codigo_ibge" => 4211751,
                "estado_id" => 22,
                "nome" => 'OTACÍLIO COSTA',
            ],
            [
                "codigo_ibge" => 4211801,
                "estado_id" => 22,
                "nome" => 'OURO',
            ],
            [
                "codigo_ibge" => 4211850,
                "estado_id" => 22,
                "nome" => 'OURO VERDE',
            ],
            [
                "codigo_ibge" => 4211876,
                "estado_id" => 22,
                "nome" => 'PAIAL',
            ],
            [
                "codigo_ibge" => 4211892,
                "estado_id" => 22,
                "nome" => 'PAINEL',
            ],
            [
                "codigo_ibge" => 4211900,
                "estado_id" => 22,
                "nome" => 'PALHOÇA',
            ],
            [
                "codigo_ibge" => 4212007,
                "estado_id" => 22,
                "nome" => 'PALMA SOLA',
            ],
            [
                "codigo_ibge" => 4212056,
                "estado_id" => 22,
                "nome" => 'PALMEIRA',
            ],
            [
                "codigo_ibge" => 4212106,
                "estado_id" => 22,
                "nome" => 'PALMITOS',
            ],
            [
                "codigo_ibge" => 4212205,
                "estado_id" => 22,
                "nome" => 'PAPANDUVA',
            ],
            [
                "codigo_ibge" => 4212239,
                "estado_id" => 22,
                "nome" => 'PARAÍSO',
            ],
            [
                "codigo_ibge" => 4212254,
                "estado_id" => 22,
                "nome" => 'PASSO DE TORRES',
            ],
            [
                "codigo_ibge" => 4212270,
                "estado_id" => 22,
                "nome" => 'PASSOS MAIA',
            ],
            [
                "codigo_ibge" => 4212304,
                "estado_id" => 22,
                "nome" => 'PAULO LOPES',
            ],
            [
                "codigo_ibge" => 4212403,
                "estado_id" => 22,
                "nome" => 'PEDRAS GRANDES',
            ],
            [
                "codigo_ibge" => 4212502,
                "estado_id" => 22,
                "nome" => 'PENHA',
            ],
            [
                "codigo_ibge" => 4212601,
                "estado_id" => 22,
                "nome" => 'PERITIBA',
            ],
            [
                "codigo_ibge" => 4212650,
                "estado_id" => 22,
                "nome" => 'PESCARIA BRAVA',
            ],
            [
                "codigo_ibge" => 4212700,
                "estado_id" => 22,
                "nome" => 'PETROLÂNDIA',
            ],
            [
                "codigo_ibge" => 4212809,
                "estado_id" => 22,
                "nome" => 'BALNEÁRIO PIÇARRAS',
            ],
            [
                "codigo_ibge" => 4212908,
                "estado_id" => 22,
                "nome" => 'PINHALZINHO',
            ],
            [
                "codigo_ibge" => 4213005,
                "estado_id" => 22,
                "nome" => 'PINHEIRO PRETO',
            ],
            [
                "codigo_ibge" => 4213104,
                "estado_id" => 22,
                "nome" => 'PIRATUBA',
            ],
            [
                "codigo_ibge" => 4213153,
                "estado_id" => 22,
                "nome" => 'PLANALTO ALEGRE',
            ],
            [
                "codigo_ibge" => 4213203,
                "estado_id" => 22,
                "nome" => 'POMERODE',
            ],
            [
                "codigo_ibge" => 4213302,
                "estado_id" => 22,
                "nome" => 'PONTE ALTA',
            ],
            [
                "codigo_ibge" => 4213351,
                "estado_id" => 22,
                "nome" => 'PONTE ALTA DO NORTE',
            ],
            [
                "codigo_ibge" => 4213401,
                "estado_id" => 22,
                "nome" => 'PONTE SERRADA',
            ],
            [
                "codigo_ibge" => 4213500,
                "estado_id" => 22,
                "nome" => 'PORTO BELO',
            ],
            [
                "codigo_ibge" => 4213609,
                "estado_id" => 22,
                "nome" => 'PORTO UNIÃO',
            ],
            [
                "codigo_ibge" => 4213708,
                "estado_id" => 22,
                "nome" => 'POUSO REDONDO',
            ],
            [
                "codigo_ibge" => 4213807,
                "estado_id" => 22,
                "nome" => 'PRAIA GRANDE',
            ],
            [
                "codigo_ibge" => 4213906,
                "estado_id" => 22,
                "nome" => 'PRESIDENTE CASTELLO BRANCO',
            ],
            [
                "codigo_ibge" => 4214003,
                "estado_id" => 22,
                "nome" => 'PRESIDENTE GETÚLIO',
            ],
            [
                "codigo_ibge" => 4214102,
                "estado_id" => 22,
                "nome" => 'PRESIDENTE NEREU',
            ],
            [
                "codigo_ibge" => 4214151,
                "estado_id" => 22,
                "nome" => 'PRINCESA',
            ],
            [
                "codigo_ibge" => 4214201,
                "estado_id" => 22,
                "nome" => 'QUILOMBO',
            ],
            [
                "codigo_ibge" => 4214300,
                "estado_id" => 22,
                "nome" => 'RANCHO QUEIMADO',
            ],
            [
                "codigo_ibge" => 4214409,
                "estado_id" => 22,
                "nome" => 'RIO DAS ANTAS',
            ],
            [
                "codigo_ibge" => 4214508,
                "estado_id" => 22,
                "nome" => 'RIO DO CAMPO',
            ],
            [
                "codigo_ibge" => 4214607,
                "estado_id" => 22,
                "nome" => 'RIO DO OESTE',
            ],
            [
                "codigo_ibge" => 4214706,
                "estado_id" => 22,
                "nome" => 'RIO DOS CEDROS',
            ],
            [
                "codigo_ibge" => 4214805,
                "estado_id" => 22,
                "nome" => 'RIO DO SUL',
            ],
            [
                "codigo_ibge" => 4214904,
                "estado_id" => 22,
                "nome" => 'RIO FORTUNA',
            ],
            [
                "codigo_ibge" => 4215000,
                "estado_id" => 22,
                "nome" => 'RIO NEGRINHO',
            ],
            [
                "codigo_ibge" => 4215059,
                "estado_id" => 22,
                "nome" => 'RIO RUFINO',
            ],
            [
                "codigo_ibge" => 4215075,
                "estado_id" => 22,
                "nome" => 'RIQUEZA',
            ],
            [
                "codigo_ibge" => 4215109,
                "estado_id" => 22,
                "nome" => 'RODEIO',
            ],
            [
                "codigo_ibge" => 4215208,
                "estado_id" => 22,
                "nome" => 'ROMELÂNDIA',
            ],
            [
                "codigo_ibge" => 4215307,
                "estado_id" => 22,
                "nome" => 'SALETE',
            ],
            [
                "codigo_ibge" => 4215356,
                "estado_id" => 22,
                "nome" => 'SALTINHO',
            ],
            [
                "codigo_ibge" => 4215406,
                "estado_id" => 22,
                "nome" => 'SALTO VELOSO',
            ],
            [
                "codigo_ibge" => 4215455,
                "estado_id" => 22,
                "nome" => 'SANGÃO',
            ],
            [
                "codigo_ibge" => 4215505,
                "estado_id" => 22,
                "nome" => 'SANTA CECÍLIA',
            ],
            [
                "codigo_ibge" => 4215554,
                "estado_id" => 22,
                "nome" => 'SANTA HELENA',
            ],
            [
                "codigo_ibge" => 4215604,
                "estado_id" => 22,
                "nome" => 'SANTA ROSA DE LIMA',
            ],
            [
                "codigo_ibge" => 4215653,
                "estado_id" => 22,
                "nome" => 'SANTA ROSA DO SUL',
            ],
            [
                "codigo_ibge" => 4215679,
                "estado_id" => 22,
                "nome" => 'SANTA TEREZINHA',
            ],
            [
                "codigo_ibge" => 4215687,
                "estado_id" => 22,
                "nome" => 'SANTA TEREZINHA DO PROGRESSO',
            ],
            [
                "codigo_ibge" => 4215695,
                "estado_id" => 22,
                "nome" => 'SANTIAGO DO SUL',
            ],
            [
                "codigo_ibge" => 4215703,
                "estado_id" => 22,
                "nome" => 'SANTO AMARO DA IMPERATRIZ',
            ],
            [
                "codigo_ibge" => 4215752,
                "estado_id" => 22,
                "nome" => 'SÃO BERNARDINO',
            ],
            [
                "codigo_ibge" => 4215802,
                "estado_id" => 22,
                "nome" => 'SÃO BENTO DO SUL',
            ],
            [
                "codigo_ibge" => 4215901,
                "estado_id" => 22,
                "nome" => 'SÃO BONIFÁCIO',
            ],
            [
                "codigo_ibge" => 4216008,
                "estado_id" => 22,
                "nome" => 'SÃO CARLOS',
            ],
            [
                "codigo_ibge" => 4216057,
                "estado_id" => 22,
                "nome" => 'SÃO CRISTOVÃO DO SUL',
            ],
            [
                "codigo_ibge" => 4216107,
                "estado_id" => 22,
                "nome" => 'SÃO DOMINGOS',
            ],
            [
                "codigo_ibge" => 4216206,
                "estado_id" => 22,
                "nome" => 'SÃO FRANCISCO DO SUL',
            ],
            [
                "codigo_ibge" => 4216255,
                "estado_id" => 22,
                "nome" => 'SÃO JOÃO DO OESTE',
            ],
            [
                "codigo_ibge" => 4216305,
                "estado_id" => 22,
                "nome" => 'SÃO JOÃO BATISTA',
            ],
            [
                "codigo_ibge" => 4216354,
                "estado_id" => 22,
                "nome" => 'SÃO JOÃO DO ITAPERIÚ',
            ],
            [
                "codigo_ibge" => 4216404,
                "estado_id" => 22,
                "nome" => 'SÃO JOÃO DO SUL',
            ],
            [
                "codigo_ibge" => 4216503,
                "estado_id" => 22,
                "nome" => 'SÃO JOAQUIM',
            ],
            [
                "codigo_ibge" => 4216602,
                "estado_id" => 22,
                "nome" => 'SÃO JOSÉ',
            ],
            [
                "codigo_ibge" => 4216701,
                "estado_id" => 22,
                "nome" => 'SÃO JOSÉ DO CEDRO',
            ],
            [
                "codigo_ibge" => 4216800,
                "estado_id" => 22,
                "nome" => 'SÃO JOSÉ DO CERRITO',
            ],
            [
                "codigo_ibge" => 4216909,
                "estado_id" => 22,
                "nome" => 'SÃO LOURENÇO DO OESTE',
            ],
            [
                "codigo_ibge" => 4217006,
                "estado_id" => 22,
                "nome" => 'SÃO LUDGERO',
            ],
            [
                "codigo_ibge" => 4217105,
                "estado_id" => 22,
                "nome" => 'SÃO MARTINHO',
            ],
            [
                "codigo_ibge" => 4217154,
                "estado_id" => 22,
                "nome" => 'SÃO MIGUEL DA BOA VISTA',
            ],
            [
                "codigo_ibge" => 4217204,
                "estado_id" => 22,
                "nome" => 'SÃO MIGUEL DO OESTE',
            ],
            [
                "codigo_ibge" => 4217253,
                "estado_id" => 22,
                "nome" => 'SÃO PEDRO DE ALCÂNTARA',
            ],
            [
                "codigo_ibge" => 4217303,
                "estado_id" => 22,
                "nome" => 'SAUDADES',
            ],
            [
                "codigo_ibge" => 4217402,
                "estado_id" => 22,
                "nome" => 'SCHROEDER',
            ],
            [
                "codigo_ibge" => 4217501,
                "estado_id" => 22,
                "nome" => 'SEARA',
            ],
            [
                "codigo_ibge" => 4217550,
                "estado_id" => 22,
                "nome" => 'SERRA ALTA',
            ],
            [
                "codigo_ibge" => 4217600,
                "estado_id" => 22,
                "nome" => 'SIDERÓPOLIS',
            ],
            [
                "codigo_ibge" => 4217709,
                "estado_id" => 22,
                "nome" => 'SOMBRIO',
            ],
            [
                "codigo_ibge" => 4217758,
                "estado_id" => 22,
                "nome" => 'SUL BRASIL',
            ],
            [
                "codigo_ibge" => 4217808,
                "estado_id" => 22,
                "nome" => 'TAIÓ',
            ],
            [
                "codigo_ibge" => 4217907,
                "estado_id" => 22,
                "nome" => 'TANGARÁ',
            ],
            [
                "codigo_ibge" => 4217956,
                "estado_id" => 22,
                "nome" => 'TIGRINHOS',
            ],
            [
                "codigo_ibge" => 4218004,
                "estado_id" => 22,
                "nome" => 'TIJUCAS',
            ],
            [
                "codigo_ibge" => 4218103,
                "estado_id" => 22,
                "nome" => 'TIMBÉ DO SUL',
            ],
            [
                "codigo_ibge" => 4218202,
                "estado_id" => 22,
                "nome" => 'TIMBÓ',
            ],
            [
                "codigo_ibge" => 4218251,
                "estado_id" => 22,
                "nome" => 'TIMBÓ GRANDE',
            ],
            [
                "codigo_ibge" => 4218301,
                "estado_id" => 22,
                "nome" => 'TRÊS BARRAS',
            ],
            [
                "codigo_ibge" => 4218350,
                "estado_id" => 22,
                "nome" => 'TREVISO',
            ],
            [
                "codigo_ibge" => 4218400,
                "estado_id" => 22,
                "nome" => 'TREZE DE MAIO',
            ],
            [
                "codigo_ibge" => 4218509,
                "estado_id" => 22,
                "nome" => 'TREZE TÍLIAS',
            ],
            [
                "codigo_ibge" => 4218608,
                "estado_id" => 22,
                "nome" => 'TROMBUDO CENTRAL',
            ],
            [
                "codigo_ibge" => 4218707,
                "estado_id" => 22,
                "nome" => 'TUBARÃO',
            ],
            [
                "codigo_ibge" => 4218756,
                "estado_id" => 22,
                "nome" => 'TUNÁPOLIS',
            ],
            [
                "codigo_ibge" => 4218806,
                "estado_id" => 22,
                "nome" => 'TURVO',
            ],
            [
                "codigo_ibge" => 4218855,
                "estado_id" => 22,
                "nome" => 'UNIÃO DO OESTE',
            ],
            [
                "codigo_ibge" => 4218905,
                "estado_id" => 22,
                "nome" => 'URUBICI',
            ],
            [
                "codigo_ibge" => 4218954,
                "estado_id" => 22,
                "nome" => 'URUPEMA',
            ],
            [
                "codigo_ibge" => 4219002,
                "estado_id" => 22,
                "nome" => 'URUSSANGA',
            ],
            [
                "codigo_ibge" => 4219101,
                "estado_id" => 22,
                "nome" => 'VARGEÃO',
            ],
            [
                "codigo_ibge" => 4219150,
                "estado_id" => 22,
                "nome" => 'VARGEM',
            ],
            [
                "codigo_ibge" => 4219176,
                "estado_id" => 22,
                "nome" => 'VARGEM BONITA',
            ],
            [
                "codigo_ibge" => 4219200,
                "estado_id" => 22,
                "nome" => 'VIDAL RAMOS',
            ],
            [
                "codigo_ibge" => 4219309,
                "estado_id" => 22,
                "nome" => 'VIDEIRA',
            ],
            [
                "codigo_ibge" => 4219358,
                "estado_id" => 22,
                "nome" => 'VITOR MEIRELES',
            ],
            [
                "codigo_ibge" => 4219408,
                "estado_id" => 22,
                "nome" => 'WITMARSUM',
            ],
            [
                "codigo_ibge" => 4219507,
                "estado_id" => 22,
                "nome" => 'XANXERÊ',
            ],
            [
                "codigo_ibge" => 4219606,
                "estado_id" => 22,
                "nome" => 'XAVANTINA',
            ],
            [
                "codigo_ibge" => 4219705,
                "estado_id" => 22,
                "nome" => 'XAXIM',
            ],
            [
                "codigo_ibge" => 4219853,
                "estado_id" => 22,
                "nome" => 'ZORTÉA',
            ],
            [
                "codigo_ibge" => 4220000,
                "estado_id" => 22,
                "nome" => 'BALNEÁRIO RINCÃO',
            ],
            [
                "codigo_ibge" => 4300034,
                "estado_id" => 23,
                "nome" => 'ACEGUÁ',
            ],
            [
                "codigo_ibge" => 4300059,
                "estado_id" => 23,
                "nome" => 'ÁGUA SANTA',
            ],
            [
                "codigo_ibge" => 4300109,
                "estado_id" => 23,
                "nome" => 'AGUDO',
            ],
            [
                "codigo_ibge" => 4300208,
                "estado_id" => 23,
                "nome" => 'AJURICABA',
            ],
            [
                "codigo_ibge" => 4300307,
                "estado_id" => 23,
                "nome" => 'ALECRIM',
            ],
            [
                "codigo_ibge" => 4300406,
                "estado_id" => 23,
                "nome" => 'ALEGRETE',
            ],
            [
                "codigo_ibge" => 4300455,
                "estado_id" => 23,
                "nome" => 'ALEGRIA',
            ],
            [
                "codigo_ibge" => 4300471,
                "estado_id" => 23,
                "nome" => 'ALMIRANTE TAMANDARÉ DO SUL',
            ],
            [
                "codigo_ibge" => 4300505,
                "estado_id" => 23,
                "nome" => 'ALPESTRE',
            ],
            [
                "codigo_ibge" => 4300554,
                "estado_id" => 23,
                "nome" => 'ALTO ALEGRE',
            ],
            [
                "codigo_ibge" => 4300570,
                "estado_id" => 23,
                "nome" => 'ALTO FELIZ',
            ],
            [
                "codigo_ibge" => 4300604,
                "estado_id" => 23,
                "nome" => 'ALVORADA',
            ],
            [
                "codigo_ibge" => 4300638,
                "estado_id" => 23,
                "nome" => 'AMARAL FERRADOR',
            ],
            [
                "codigo_ibge" => 4300646,
                "estado_id" => 23,
                "nome" => 'AMETISTA DO SUL',
            ],
            [
                "codigo_ibge" => 4300661,
                "estado_id" => 23,
                "nome" => 'ANDRÉ DA ROCHA',
            ],
            [
                "codigo_ibge" => 4300703,
                "estado_id" => 23,
                "nome" => 'ANTA GORDA',
            ],
            [
                "codigo_ibge" => 4300802,
                "estado_id" => 23,
                "nome" => 'ANTÔNIO PRADO',
            ],
            [
                "codigo_ibge" => 4300851,
                "estado_id" => 23,
                "nome" => 'ARAMBARÉ',
            ],
            [
                "codigo_ibge" => 4300877,
                "estado_id" => 23,
                "nome" => 'ARARICÁ',
            ],
            [
                "codigo_ibge" => 4300901,
                "estado_id" => 23,
                "nome" => 'ARATIBA',
            ],
            [
                "codigo_ibge" => 4301008,
                "estado_id" => 23,
                "nome" => 'ARROIO DO MEIO',
            ],
            [
                "codigo_ibge" => 4301057,
                "estado_id" => 23,
                "nome" => 'ARROIO DO SAL',
            ],
            [
                "codigo_ibge" => 4301073,
                "estado_id" => 23,
                "nome" => 'ARROIO DO PADRE',
            ],
            [
                "codigo_ibge" => 4301107,
                "estado_id" => 23,
                "nome" => 'ARROIO DOS RATOS',
            ],
            [
                "codigo_ibge" => 4301206,
                "estado_id" => 23,
                "nome" => 'ARROIO DO TIGRE',
            ],
            [
                "codigo_ibge" => 4301305,
                "estado_id" => 23,
                "nome" => 'ARROIO GRANDE',
            ],
            [
                "codigo_ibge" => 4301404,
                "estado_id" => 23,
                "nome" => 'ARVOREZINHA',
            ],
            [
                "codigo_ibge" => 4301503,
                "estado_id" => 23,
                "nome" => 'AUGUSTO PESTANA',
            ],
            [
                "codigo_ibge" => 4301552,
                "estado_id" => 23,
                "nome" => 'ÁUREA',
            ],
            [
                "codigo_ibge" => 4301602,
                "estado_id" => 23,
                "nome" => 'BAGÉ',
            ],
            [
                "codigo_ibge" => 4301636,
                "estado_id" => 23,
                "nome" => 'BALNEÁRIO PINHAL',
            ],
            [
                "codigo_ibge" => 4301651,
                "estado_id" => 23,
                "nome" => 'BARÃO',
            ],
            [
                "codigo_ibge" => 4301701,
                "estado_id" => 23,
                "nome" => 'BARÃO DE COTEGIPE',
            ],
            [
                "codigo_ibge" => 4301750,
                "estado_id" => 23,
                "nome" => 'BARÃO DO TRIUNFO',
            ],
            [
                "codigo_ibge" => 4301800,
                "estado_id" => 23,
                "nome" => 'BARRACÃO',
            ],
            [
                "codigo_ibge" => 4301859,
                "estado_id" => 23,
                "nome" => 'BARRA DO GUARITA',
            ],
            [
                "codigo_ibge" => 4301875,
                "estado_id" => 23,
                "nome" => 'BARRA DO QUARAÍ',
            ],
            [
                "codigo_ibge" => 4301909,
                "estado_id" => 23,
                "nome" => 'BARRA DO RIBEIRO',
            ],
            [
                "codigo_ibge" => 4301925,
                "estado_id" => 23,
                "nome" => 'BARRA DO RIO AZUL',
            ],
            [
                "codigo_ibge" => 4301958,
                "estado_id" => 23,
                "nome" => 'BARRA FUNDA',
            ],
            [
                "codigo_ibge" => 4302006,
                "estado_id" => 23,
                "nome" => 'BARROS CASSAL',
            ],
            [
                "codigo_ibge" => 4302055,
                "estado_id" => 23,
                "nome" => 'BENJAMIN CONSTANT DO SUL',
            ],
            [
                "codigo_ibge" => 4302105,
                "estado_id" => 23,
                "nome" => 'BENTO GONÇALVES',
            ],
            [
                "codigo_ibge" => 4302154,
                "estado_id" => 23,
                "nome" => 'BOA VISTA DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4302204,
                "estado_id" => 23,
                "nome" => 'BOA VISTA DO BURICÁ',
            ],
            [
                "codigo_ibge" => 4302220,
                "estado_id" => 23,
                "nome" => 'BOA VISTA DO CADEADO',
            ],
            [
                "codigo_ibge" => 4302238,
                "estado_id" => 23,
                "nome" => 'BOA VISTA DO INCRA',
            ],
            [
                "codigo_ibge" => 4302253,
                "estado_id" => 23,
                "nome" => 'BOA VISTA DO SUL',
            ],
            [
                "codigo_ibge" => 4302303,
                "estado_id" => 23,
                "nome" => 'BOM JESUS',
            ],
            [
                "codigo_ibge" => 4302352,
                "estado_id" => 23,
                "nome" => 'BOM PRINCÍPIO',
            ],
            [
                "codigo_ibge" => 4302378,
                "estado_id" => 23,
                "nome" => 'BOM PROGRESSO',
            ],
            [
                "codigo_ibge" => 4302402,
                "estado_id" => 23,
                "nome" => 'BOM RETIRO DO SUL',
            ],
            [
                "codigo_ibge" => 4302451,
                "estado_id" => 23,
                "nome" => 'BOQUEIRÃO DO LEÃO',
            ],
            [
                "codigo_ibge" => 4302501,
                "estado_id" => 23,
                "nome" => 'BOSSOROCA',
            ],
            [
                "codigo_ibge" => 4302584,
                "estado_id" => 23,
                "nome" => 'BOZANO',
            ],
            [
                "codigo_ibge" => 4302600,
                "estado_id" => 23,
                "nome" => 'BRAGA',
            ],
            [
                "codigo_ibge" => 4302659,
                "estado_id" => 23,
                "nome" => 'BROCHIER',
            ],
            [
                "codigo_ibge" => 4302709,
                "estado_id" => 23,
                "nome" => 'BUTIÁ',
            ],
            [
                "codigo_ibge" => 4302808,
                "estado_id" => 23,
                "nome" => 'CAÇAPAVA DO SUL',
            ],
            [
                "codigo_ibge" => 4302907,
                "estado_id" => 23,
                "nome" => 'CACEQUI',
            ],
            [
                "codigo_ibge" => 4303004,
                "estado_id" => 23,
                "nome" => 'CACHOEIRA DO SUL',
            ],
            [
                "codigo_ibge" => 4303103,
                "estado_id" => 23,
                "nome" => 'CACHOEIRINHA',
            ],
            [
                "codigo_ibge" => 4303202,
                "estado_id" => 23,
                "nome" => 'CACIQUE DOBLE',
            ],
            [
                "codigo_ibge" => 4303301,
                "estado_id" => 23,
                "nome" => 'CAIBATÉ',
            ],
            [
                "codigo_ibge" => 4303400,
                "estado_id" => 23,
                "nome" => 'CAIÇARA',
            ],
            [
                "codigo_ibge" => 4303509,
                "estado_id" => 23,
                "nome" => 'CAMAQUÃ',
            ],
            [
                "codigo_ibge" => 4303558,
                "estado_id" => 23,
                "nome" => 'CAMARGO',
            ],
            [
                "codigo_ibge" => 4303608,
                "estado_id" => 23,
                "nome" => 'CAMBARÁ DO SUL',
            ],
            [
                "codigo_ibge" => 4303673,
                "estado_id" => 23,
                "nome" => 'CAMPESTRE DA SERRA',
            ],
            [
                "codigo_ibge" => 4303707,
                "estado_id" => 23,
                "nome" => 'CAMPINA DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4303806,
                "estado_id" => 23,
                "nome" => 'CAMPINAS DO SUL',
            ],
            [
                "codigo_ibge" => 4303905,
                "estado_id" => 23,
                "nome" => 'CAMPO BOM',
            ],
            [
                "codigo_ibge" => 4304002,
                "estado_id" => 23,
                "nome" => 'CAMPO NOVO',
            ],
            [
                "codigo_ibge" => 4304101,
                "estado_id" => 23,
                "nome" => 'CAMPOS BORGES',
            ],
            [
                "codigo_ibge" => 4304200,
                "estado_id" => 23,
                "nome" => 'CANDELÁRIA',
            ],
            [
                "codigo_ibge" => 4304309,
                "estado_id" => 23,
                "nome" => 'CÂNDIDO GODÓI',
            ],
            [
                "codigo_ibge" => 4304358,
                "estado_id" => 23,
                "nome" => 'CANDIOTA',
            ],
            [
                "codigo_ibge" => 4304408,
                "estado_id" => 23,
                "nome" => 'CANELA',
            ],
            [
                "codigo_ibge" => 4304507,
                "estado_id" => 23,
                "nome" => 'CANGUÇU',
            ],
            [
                "codigo_ibge" => 4304606,
                "estado_id" => 23,
                "nome" => 'CANOAS',
            ],
            [
                "codigo_ibge" => 4304614,
                "estado_id" => 23,
                "nome" => 'CANUDOS DO VALE',
            ],
            [
                "codigo_ibge" => 4304622,
                "estado_id" => 23,
                "nome" => 'CAPÃO BONITO DO SUL',
            ],
            [
                "codigo_ibge" => 4304630,
                "estado_id" => 23,
                "nome" => 'CAPÃO DA CANOA',
            ],
            [
                "codigo_ibge" => 4304655,
                "estado_id" => 23,
                "nome" => 'CAPÃO DO CIPÓ',
            ],
            [
                "codigo_ibge" => 4304663,
                "estado_id" => 23,
                "nome" => 'CAPÃO DO LEÃO',
            ],
            [
                "codigo_ibge" => 4304671,
                "estado_id" => 23,
                "nome" => 'CAPIVARI DO SUL',
            ],
            [
                "codigo_ibge" => 4304689,
                "estado_id" => 23,
                "nome" => 'CAPELA DE SANTANA',
            ],
            [
                "codigo_ibge" => 4304697,
                "estado_id" => 23,
                "nome" => 'CAPITÃO',
            ],
            [
                "codigo_ibge" => 4304705,
                "estado_id" => 23,
                "nome" => 'CARAZINHO',
            ],
            [
                "codigo_ibge" => 4304713,
                "estado_id" => 23,
                "nome" => 'CARAÁ',
            ],
            [
                "codigo_ibge" => 4304804,
                "estado_id" => 23,
                "nome" => 'CARLOS BARBOSA',
            ],
            [
                "codigo_ibge" => 4304853,
                "estado_id" => 23,
                "nome" => 'CARLOS GOMES',
            ],
            [
                "codigo_ibge" => 4304903,
                "estado_id" => 23,
                "nome" => 'CASCA',
            ],
            [
                "codigo_ibge" => 4304952,
                "estado_id" => 23,
                "nome" => 'CASEIROS',
            ],
            [
                "codigo_ibge" => 4305009,
                "estado_id" => 23,
                "nome" => 'CATUÍPE',
            ],
            [
                "codigo_ibge" => 4305108,
                "estado_id" => 23,
                "nome" => 'CAXIAS DO SUL',
            ],
            [
                "codigo_ibge" => 4305116,
                "estado_id" => 23,
                "nome" => 'CENTENÁRIO',
            ],
            [
                "codigo_ibge" => 4305124,
                "estado_id" => 23,
                "nome" => 'CERRITO',
            ],
            [
                "codigo_ibge" => 4305132,
                "estado_id" => 23,
                "nome" => 'CERRO BRANCO',
            ],
            [
                "codigo_ibge" => 4305157,
                "estado_id" => 23,
                "nome" => 'CERRO GRANDE',
            ],
            [
                "codigo_ibge" => 4305173,
                "estado_id" => 23,
                "nome" => 'CERRO GRANDE DO SUL',
            ],
            [
                "codigo_ibge" => 4305207,
                "estado_id" => 23,
                "nome" => 'CERRO LARGO',
            ],
            [
                "codigo_ibge" => 4305306,
                "estado_id" => 23,
                "nome" => 'CHAPADA',
            ],
            [
                "codigo_ibge" => 4305355,
                "estado_id" => 23,
                "nome" => 'CHARQUEADAS',
            ],
            [
                "codigo_ibge" => 4305371,
                "estado_id" => 23,
                "nome" => 'CHARRUA',
            ],
            [
                "codigo_ibge" => 4305405,
                "estado_id" => 23,
                "nome" => 'CHIAPETTA',
            ],
            [
                "codigo_ibge" => 4305439,
                "estado_id" => 23,
                "nome" => 'CHUÍ',
            ],
            [
                "codigo_ibge" => 4305447,
                "estado_id" => 23,
                "nome" => 'CHUVISCA',
            ],
            [
                "codigo_ibge" => 4305454,
                "estado_id" => 23,
                "nome" => 'CIDREIRA',
            ],
            [
                "codigo_ibge" => 4305504,
                "estado_id" => 23,
                "nome" => 'CIRÍACO',
            ],
            [
                "codigo_ibge" => 4305587,
                "estado_id" => 23,
                "nome" => 'COLINAS',
            ],
            [
                "codigo_ibge" => 4305603,
                "estado_id" => 23,
                "nome" => 'COLORADO',
            ],
            [
                "codigo_ibge" => 4305702,
                "estado_id" => 23,
                "nome" => 'CONDOR',
            ],
            [
                "codigo_ibge" => 4305801,
                "estado_id" => 23,
                "nome" => 'CONSTANTINA',
            ],
            [
                "codigo_ibge" => 4305835,
                "estado_id" => 23,
                "nome" => 'COQUEIRO BAIXO',
            ],
            [
                "codigo_ibge" => 4305850,
                "estado_id" => 23,
                "nome" => 'COQUEIROS DO SUL',
            ],
            [
                "codigo_ibge" => 4305871,
                "estado_id" => 23,
                "nome" => 'CORONEL BARROS',
            ],
            [
                "codigo_ibge" => 4305900,
                "estado_id" => 23,
                "nome" => 'CORONEL BICACO',
            ],
            [
                "codigo_ibge" => 4305934,
                "estado_id" => 23,
                "nome" => 'CORONEL PILAR',
            ],
            [
                "codigo_ibge" => 4305959,
                "estado_id" => 23,
                "nome" => 'COTIPORÃ',
            ],
            [
                "codigo_ibge" => 4305975,
                "estado_id" => 23,
                "nome" => 'COXILHA',
            ],
            [
                "codigo_ibge" => 4306007,
                "estado_id" => 23,
                "nome" => 'CRISSIUMAL',
            ],
            [
                "codigo_ibge" => 4306056,
                "estado_id" => 23,
                "nome" => 'CRISTAL',
            ],
            [
                "codigo_ibge" => 4306072,
                "estado_id" => 23,
                "nome" => 'CRISTAL DO SUL',
            ],
            [
                "codigo_ibge" => 4306106,
                "estado_id" => 23,
                "nome" => 'CRUZ ALTA',
            ],
            [
                "codigo_ibge" => 4306130,
                "estado_id" => 23,
                "nome" => 'CRUZALTENSE',
            ],
            [
                "codigo_ibge" => 4306205,
                "estado_id" => 23,
                "nome" => 'CRUZEIRO DO SUL',
            ],
            [
                "codigo_ibge" => 4306304,
                "estado_id" => 23,
                "nome" => 'DAVID CANABARRO',
            ],
            [
                "codigo_ibge" => 4306320,
                "estado_id" => 23,
                "nome" => 'DERRUBADAS',
            ],
            [
                "codigo_ibge" => 4306353,
                "estado_id" => 23,
                "nome" => 'DEZESSEIS DE NOVEMBRO',
            ],
            [
                "codigo_ibge" => 4306379,
                "estado_id" => 23,
                "nome" => 'DILERMANDO DE AGUIAR',
            ],
            [
                "codigo_ibge" => 4306403,
                "estado_id" => 23,
                "nome" => 'DOIS IRMÃOS',
            ],
            [
                "codigo_ibge" => 4306429,
                "estado_id" => 23,
                "nome" => 'DOIS IRMÃOS DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4306452,
                "estado_id" => 23,
                "nome" => 'DOIS LAJEADOS',
            ],
            [
                "codigo_ibge" => 4306502,
                "estado_id" => 23,
                "nome" => 'DOM FELICIANO',
            ],
            [
                "codigo_ibge" => 4306551,
                "estado_id" => 23,
                "nome" => 'DOM PEDRO DE ALCÂNTARA',
            ],
            [
                "codigo_ibge" => 4306601,
                "estado_id" => 23,
                "nome" => 'DOM PEDRITO',
            ],
            [
                "codigo_ibge" => 4306700,
                "estado_id" => 23,
                "nome" => 'DONA FRANCISCA',
            ],
            [
                "codigo_ibge" => 4306734,
                "estado_id" => 23,
                "nome" => 'DOUTOR MAURÍCIO CARDOSO',
            ],
            [
                "codigo_ibge" => 4306759,
                "estado_id" => 23,
                "nome" => 'DOUTOR RICARDO',
            ],
            [
                "codigo_ibge" => 4306767,
                "estado_id" => 23,
                "nome" => 'ELDORADO DO SUL',
            ],
            [
                "codigo_ibge" => 4306809,
                "estado_id" => 23,
                "nome" => 'ENCANTADO',
            ],
            [
                "codigo_ibge" => 4306908,
                "estado_id" => 23,
                "nome" => 'ENCRUZILHADA DO SUL',
            ],
            [
                "codigo_ibge" => 4306924,
                "estado_id" => 23,
                "nome" => 'ENGENHO VELHO',
            ],
            [
                "codigo_ibge" => 4306932,
                "estado_id" => 23,
                "nome" => 'ENTRE-IJUÍS',
            ],
            [
                "codigo_ibge" => 4306957,
                "estado_id" => 23,
                "nome" => 'ENTRE RIOS DO SUL',
            ],
            [
                "codigo_ibge" => 4306973,
                "estado_id" => 23,
                "nome" => 'EREBANGO',
            ],
            [
                "codigo_ibge" => 4307005,
                "estado_id" => 23,
                "nome" => 'ERECHIM',
            ],
            [
                "codigo_ibge" => 4307054,
                "estado_id" => 23,
                "nome" => 'ERNESTINA',
            ],
            [
                "codigo_ibge" => 4307104,
                "estado_id" => 23,
                "nome" => 'HERVAL',
            ],
            [
                "codigo_ibge" => 4307203,
                "estado_id" => 23,
                "nome" => 'ERVAL GRANDE',
            ],
            [
                "codigo_ibge" => 4307302,
                "estado_id" => 23,
                "nome" => 'ERVAL SECO',
            ],
            [
                "codigo_ibge" => 4307401,
                "estado_id" => 23,
                "nome" => 'ESMERALDA',
            ],
            [
                "codigo_ibge" => 4307450,
                "estado_id" => 23,
                "nome" => 'ESPERANÇA DO SUL',
            ],
            [
                "codigo_ibge" => 4307500,
                "estado_id" => 23,
                "nome" => 'ESPUMOSO',
            ],
            [
                "codigo_ibge" => 4307559,
                "estado_id" => 23,
                "nome" => 'ESTAÇÃO',
            ],
            [
                "codigo_ibge" => 4307609,
                "estado_id" => 23,
                "nome" => 'ESTÂNCIA VELHA',
            ],
            [
                "codigo_ibge" => 4307708,
                "estado_id" => 23,
                "nome" => 'ESTEIO',
            ],
            [
                "codigo_ibge" => 4307807,
                "estado_id" => 23,
                "nome" => 'ESTRELA',
            ],
            [
                "codigo_ibge" => 4307815,
                "estado_id" => 23,
                "nome" => 'ESTRELA VELHA',
            ],
            [
                "codigo_ibge" => 4307831,
                "estado_id" => 23,
                "nome" => 'EUGÊNIO DE CASTRO',
            ],
            [
                "codigo_ibge" => 4307864,
                "estado_id" => 23,
                "nome" => 'FAGUNDES VARELA',
            ],
            [
                "codigo_ibge" => 4307906,
                "estado_id" => 23,
                "nome" => 'FARROUPILHA',
            ],
            [
                "codigo_ibge" => 4308003,
                "estado_id" => 23,
                "nome" => 'FAXINAL DO SOTURNO',
            ],
            [
                "codigo_ibge" => 4308052,
                "estado_id" => 23,
                "nome" => 'FAXINALZINHO',
            ],
            [
                "codigo_ibge" => 4308078,
                "estado_id" => 23,
                "nome" => 'FAZENDA VILANOVA',
            ],
            [
                "codigo_ibge" => 4308102,
                "estado_id" => 23,
                "nome" => 'FELIZ',
            ],
            [
                "codigo_ibge" => 4308201,
                "estado_id" => 23,
                "nome" => 'FLORES DA CUNHA',
            ],
            [
                "codigo_ibge" => 4308250,
                "estado_id" => 23,
                "nome" => 'FLORIANO PEIXOTO',
            ],
            [
                "codigo_ibge" => 4308300,
                "estado_id" => 23,
                "nome" => 'FONTOURA XAVIER',
            ],
            [
                "codigo_ibge" => 4308409,
                "estado_id" => 23,
                "nome" => 'FORMIGUEIRO',
            ],
            [
                "codigo_ibge" => 4308433,
                "estado_id" => 23,
                "nome" => 'FORQUETINHA',
            ],
            [
                "codigo_ibge" => 4308458,
                "estado_id" => 23,
                "nome" => 'FORTALEZA DOS VALOS',
            ],
            [
                "codigo_ibge" => 4308508,
                "estado_id" => 23,
                "nome" => 'FREDERICO WESTPHALEN',
            ],
            [
                "codigo_ibge" => 4308607,
                "estado_id" => 23,
                "nome" => 'GARIBALDI',
            ],
            [
                "codigo_ibge" => 4308656,
                "estado_id" => 23,
                "nome" => 'GARRUCHOS',
            ],
            [
                "codigo_ibge" => 4308706,
                "estado_id" => 23,
                "nome" => 'GAURAMA',
            ],
            [
                "codigo_ibge" => 4308805,
                "estado_id" => 23,
                "nome" => 'GENERAL CÂMARA',
            ],
            [
                "codigo_ibge" => 4308854,
                "estado_id" => 23,
                "nome" => 'GENTIL',
            ],
            [
                "codigo_ibge" => 4308904,
                "estado_id" => 23,
                "nome" => 'GETÚLIO VARGAS',
            ],
            [
                "codigo_ibge" => 4309001,
                "estado_id" => 23,
                "nome" => 'GIRUÁ',
            ],
            [
                "codigo_ibge" => 4309050,
                "estado_id" => 23,
                "nome" => 'GLORINHA',
            ],
            [
                "codigo_ibge" => 4309100,
                "estado_id" => 23,
                "nome" => 'GRAMADO',
            ],
            [
                "codigo_ibge" => 4309126,
                "estado_id" => 23,
                "nome" => 'GRAMADO DOS LOUREIROS',
            ],
            [
                "codigo_ibge" => 4309159,
                "estado_id" => 23,
                "nome" => 'GRAMADO XAVIER',
            ],
            [
                "codigo_ibge" => 4309209,
                "estado_id" => 23,
                "nome" => 'GRAVATAÍ',
            ],
            [
                "codigo_ibge" => 4309258,
                "estado_id" => 23,
                "nome" => 'GUABIJU',
            ],
            [
                "codigo_ibge" => 4309308,
                "estado_id" => 23,
                "nome" => 'GUAÍBA',
            ],
            [
                "codigo_ibge" => 4309407,
                "estado_id" => 23,
                "nome" => 'GUAPORÉ',
            ],
            [
                "codigo_ibge" => 4309506,
                "estado_id" => 23,
                "nome" => 'GUARANI DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4309555,
                "estado_id" => 23,
                "nome" => 'HARMONIA',
            ],
            [
                "codigo_ibge" => 4309571,
                "estado_id" => 23,
                "nome" => 'HERVEIRAS',
            ],
            [
                "codigo_ibge" => 4309605,
                "estado_id" => 23,
                "nome" => 'HORIZONTINA',
            ],
            [
                "codigo_ibge" => 4309654,
                "estado_id" => 23,
                "nome" => 'HULHA NEGRA',
            ],
            [
                "codigo_ibge" => 4309704,
                "estado_id" => 23,
                "nome" => 'HUMAITÁ',
            ],
            [
                "codigo_ibge" => 4309753,
                "estado_id" => 23,
                "nome" => 'IBARAMA',
            ],
            [
                "codigo_ibge" => 4309803,
                "estado_id" => 23,
                "nome" => 'IBIAÇÁ',
            ],
            [
                "codigo_ibge" => 4309902,
                "estado_id" => 23,
                "nome" => 'IBIRAIARAS',
            ],
            [
                "codigo_ibge" => 4309951,
                "estado_id" => 23,
                "nome" => 'IBIRAPUITÃ',
            ],
            [
                "codigo_ibge" => 4310009,
                "estado_id" => 23,
                "nome" => 'IBIRUBÁ',
            ],
            [
                "codigo_ibge" => 4310108,
                "estado_id" => 23,
                "nome" => 'IGREJINHA',
            ],
            [
                "codigo_ibge" => 4310207,
                "estado_id" => 23,
                "nome" => 'IJUÍ',
            ],
            [
                "codigo_ibge" => 4310306,
                "estado_id" => 23,
                "nome" => 'ILÓPOLIS',
            ],
            [
                "codigo_ibge" => 4310330,
                "estado_id" => 23,
                "nome" => 'IMBÉ',
            ],
            [
                "codigo_ibge" => 4310363,
                "estado_id" => 23,
                "nome" => 'IMIGRANTE',
            ],
            [
                "codigo_ibge" => 4310405,
                "estado_id" => 23,
                "nome" => 'INDEPENDÊNCIA',
            ],
            [
                "codigo_ibge" => 4310413,
                "estado_id" => 23,
                "nome" => 'INHACORÁ',
            ],
            [
                "codigo_ibge" => 4310439,
                "estado_id" => 23,
                "nome" => 'IPÊ',
            ],
            [
                "codigo_ibge" => 4310462,
                "estado_id" => 23,
                "nome" => 'IPIRANGA DO SUL',
            ],
            [
                "codigo_ibge" => 4310504,
                "estado_id" => 23,
                "nome" => 'IRAÍ',
            ],
            [
                "codigo_ibge" => 4310538,
                "estado_id" => 23,
                "nome" => 'ITAARA',
            ],
            [
                "codigo_ibge" => 4310553,
                "estado_id" => 23,
                "nome" => 'ITACURUBI',
            ],
            [
                "codigo_ibge" => 4310579,
                "estado_id" => 23,
                "nome" => 'ITAPUCA',
            ],
            [
                "codigo_ibge" => 4310603,
                "estado_id" => 23,
                "nome" => 'ITAQUI',
            ],
            [
                "codigo_ibge" => 4310652,
                "estado_id" => 23,
                "nome" => 'ITATI',
            ],
            [
                "codigo_ibge" => 4310702,
                "estado_id" => 23,
                "nome" => 'ITATIBA DO SUL',
            ],
            [
                "codigo_ibge" => 4310751,
                "estado_id" => 23,
                "nome" => 'IVORÁ',
            ],
            [
                "codigo_ibge" => 4310801,
                "estado_id" => 23,
                "nome" => 'IVOTI',
            ],
            [
                "codigo_ibge" => 4310850,
                "estado_id" => 23,
                "nome" => 'JABOTICABA',
            ],
            [
                "codigo_ibge" => 4310876,
                "estado_id" => 23,
                "nome" => 'JACUIZINHO',
            ],
            [
                "codigo_ibge" => 4310900,
                "estado_id" => 23,
                "nome" => 'JACUTINGA',
            ],
            [
                "codigo_ibge" => 4311007,
                "estado_id" => 23,
                "nome" => 'JAGUARÃO',
            ],
            [
                "codigo_ibge" => 4311106,
                "estado_id" => 23,
                "nome" => 'JAGUARI',
            ],
            [
                "codigo_ibge" => 4311122,
                "estado_id" => 23,
                "nome" => 'JAQUIRANA',
            ],
            [
                "codigo_ibge" => 4311130,
                "estado_id" => 23,
                "nome" => 'JARI',
            ],
            [
                "codigo_ibge" => 4311155,
                "estado_id" => 23,
                "nome" => 'JÓIA',
            ],
            [
                "codigo_ibge" => 4311205,
                "estado_id" => 23,
                "nome" => 'JÚLIO DE CASTILHOS',
            ],
            [
                "codigo_ibge" => 4311239,
                "estado_id" => 23,
                "nome" => 'LAGOA BONITA DO SUL',
            ],
            [
                "codigo_ibge" => 4311254,
                "estado_id" => 23,
                "nome" => 'LAGOÃO',
            ],
            [
                "codigo_ibge" => 4311270,
                "estado_id" => 23,
                "nome" => 'LAGOA DOS TRÊS CANTOS',
            ],
            [
                "codigo_ibge" => 4311304,
                "estado_id" => 23,
                "nome" => 'LAGOA VERMELHA',
            ],
            [
                "codigo_ibge" => 4311403,
                "estado_id" => 23,
                "nome" => 'LAJEADO',
            ],
            [
                "codigo_ibge" => 4311429,
                "estado_id" => 23,
                "nome" => 'LAJEADO DO BUGRE',
            ],
            [
                "codigo_ibge" => 4311502,
                "estado_id" => 23,
                "nome" => 'LAVRAS DO SUL',
            ],
            [
                "codigo_ibge" => 4311601,
                "estado_id" => 23,
                "nome" => 'LIBERATO SALZANO',
            ],
            [
                "codigo_ibge" => 4311627,
                "estado_id" => 23,
                "nome" => 'LINDOLFO COLLOR',
            ],
            [
                "codigo_ibge" => 4311643,
                "estado_id" => 23,
                "nome" => 'LINHA NOVA',
            ],
            [
                "codigo_ibge" => 4311700,
                "estado_id" => 23,
                "nome" => 'MACHADINHO',
            ],
            [
                "codigo_ibge" => 4311718,
                "estado_id" => 23,
                "nome" => 'MAÇAMBARA',
            ],
            [
                "codigo_ibge" => 4311734,
                "estado_id" => 23,
                "nome" => 'MAMPITUBA',
            ],
            [
                "codigo_ibge" => 4311759,
                "estado_id" => 23,
                "nome" => 'MANOEL VIANA',
            ],
            [
                "codigo_ibge" => 4311775,
                "estado_id" => 23,
                "nome" => 'MAQUINÉ',
            ],
            [
                "codigo_ibge" => 4311791,
                "estado_id" => 23,
                "nome" => 'MARATÁ',
            ],
            [
                "codigo_ibge" => 4311809,
                "estado_id" => 23,
                "nome" => 'MARAU',
            ],
            [
                "codigo_ibge" => 4311908,
                "estado_id" => 23,
                "nome" => 'MARCELINO RAMOS',
            ],
            [
                "codigo_ibge" => 4311981,
                "estado_id" => 23,
                "nome" => 'MARIANA PIMENTEL',
            ],
            [
                "codigo_ibge" => 4312005,
                "estado_id" => 23,
                "nome" => 'MARIANO MORO',
            ],
            [
                "codigo_ibge" => 4312054,
                "estado_id" => 23,
                "nome" => 'MARQUES DE SOUZA',
            ],
            [
                "codigo_ibge" => 4312104,
                "estado_id" => 23,
                "nome" => 'MATA',
            ],
            [
                "codigo_ibge" => 4312138,
                "estado_id" => 23,
                "nome" => 'MATO CASTELHANO',
            ],
            [
                "codigo_ibge" => 4312153,
                "estado_id" => 23,
                "nome" => 'MATO LEITÃO',
            ],
            [
                "codigo_ibge" => 4312179,
                "estado_id" => 23,
                "nome" => 'MATO QUEIMADO',
            ],
            [
                "codigo_ibge" => 4312203,
                "estado_id" => 23,
                "nome" => 'MAXIMILIANO DE ALMEIDA',
            ],
            [
                "codigo_ibge" => 4312252,
                "estado_id" => 23,
                "nome" => 'MINAS DO LEÃO',
            ],
            [
                "codigo_ibge" => 4312302,
                "estado_id" => 23,
                "nome" => 'MIRAGUAÍ',
            ],
            [
                "codigo_ibge" => 4312351,
                "estado_id" => 23,
                "nome" => 'MONTAURI',
            ],
            [
                "codigo_ibge" => 4312377,
                "estado_id" => 23,
                "nome" => 'MONTE ALEGRE DOS CAMPOS',
            ],
            [
                "codigo_ibge" => 4312385,
                "estado_id" => 23,
                "nome" => 'MONTE BELO DO SUL',
            ],
            [
                "codigo_ibge" => 4312401,
                "estado_id" => 23,
                "nome" => 'MONTENEGRO',
            ],
            [
                "codigo_ibge" => 4312427,
                "estado_id" => 23,
                "nome" => 'MORMAÇO',
            ],
            [
                "codigo_ibge" => 4312443,
                "estado_id" => 23,
                "nome" => 'MORRINHOS DO SUL',
            ],
            [
                "codigo_ibge" => 4312450,
                "estado_id" => 23,
                "nome" => 'MORRO REDONDO',
            ],
            [
                "codigo_ibge" => 4312476,
                "estado_id" => 23,
                "nome" => 'MORRO REUTER',
            ],
            [
                "codigo_ibge" => 4312500,
                "estado_id" => 23,
                "nome" => 'MOSTARDAS',
            ],
            [
                "codigo_ibge" => 4312609,
                "estado_id" => 23,
                "nome" => 'MUÇUM',
            ],
            [
                "codigo_ibge" => 4312617,
                "estado_id" => 23,
                "nome" => 'MUITOS CAPÕES',
            ],
            [
                "codigo_ibge" => 4312625,
                "estado_id" => 23,
                "nome" => 'MULITERNO',
            ],
            [
                "codigo_ibge" => 4312658,
                "estado_id" => 23,
                "nome" => 'NÃO-ME-TOQUE',
            ],
            [
                "codigo_ibge" => 4312674,
                "estado_id" => 23,
                "nome" => 'NICOLAU VERGUEIRO',
            ],
            [
                "codigo_ibge" => 4312708,
                "estado_id" => 23,
                "nome" => 'NONOAI',
            ],
            [
                "codigo_ibge" => 4312757,
                "estado_id" => 23,
                "nome" => 'NOVA ALVORADA',
            ],
            [
                "codigo_ibge" => 4312807,
                "estado_id" => 23,
                "nome" => 'NOVA ARAÇÁ',
            ],
            [
                "codigo_ibge" => 4312906,
                "estado_id" => 23,
                "nome" => 'NOVA BASSANO',
            ],
            [
                "codigo_ibge" => 4312955,
                "estado_id" => 23,
                "nome" => 'NOVA BOA VISTA',
            ],
            [
                "codigo_ibge" => 4313003,
                "estado_id" => 23,
                "nome" => 'NOVA BRÉSCIA',
            ],
            [
                "codigo_ibge" => 4313011,
                "estado_id" => 23,
                "nome" => 'NOVA CANDELÁRIA',
            ],
            [
                "codigo_ibge" => 4313037,
                "estado_id" => 23,
                "nome" => 'NOVA ESPERANÇA DO SUL',
            ],
            [
                "codigo_ibge" => 4313060,
                "estado_id" => 23,
                "nome" => 'NOVA HARTZ',
            ],
            [
                "codigo_ibge" => 4313086,
                "estado_id" => 23,
                "nome" => 'NOVA PÁDUA',
            ],
            [
                "codigo_ibge" => 4313102,
                "estado_id" => 23,
                "nome" => 'NOVA PALMA',
            ],
            [
                "codigo_ibge" => 4313201,
                "estado_id" => 23,
                "nome" => 'NOVA PETRÓPOLIS',
            ],
            [
                "codigo_ibge" => 4313300,
                "estado_id" => 23,
                "nome" => 'NOVA PRATA',
            ],
            [
                "codigo_ibge" => 4313334,
                "estado_id" => 23,
                "nome" => 'NOVA RAMADA',
            ],
            [
                "codigo_ibge" => 4313359,
                "estado_id" => 23,
                "nome" => 'NOVA ROMA DO SUL',
            ],
            [
                "codigo_ibge" => 4313375,
                "estado_id" => 23,
                "nome" => 'NOVA SANTA RITA',
            ],
            [
                "codigo_ibge" => 4313391,
                "estado_id" => 23,
                "nome" => 'NOVO CABRAIS',
            ],
            [
                "codigo_ibge" => 4313409,
                "estado_id" => 23,
                "nome" => 'NOVO HAMBURGO',
            ],
            [
                "codigo_ibge" => 4313425,
                "estado_id" => 23,
                "nome" => 'NOVO MACHADO',
            ],
            [
                "codigo_ibge" => 4313441,
                "estado_id" => 23,
                "nome" => 'NOVO TIRADENTES',
            ],
            [
                "codigo_ibge" => 4313466,
                "estado_id" => 23,
                "nome" => 'NOVO XINGU',
            ],
            [
                "codigo_ibge" => 4313490,
                "estado_id" => 23,
                "nome" => 'NOVO BARREIRO',
            ],
            [
                "codigo_ibge" => 4313508,
                "estado_id" => 23,
                "nome" => 'OSÓRIO',
            ],
            [
                "codigo_ibge" => 4313607,
                "estado_id" => 23,
                "nome" => 'PAIM FILHO',
            ],
            [
                "codigo_ibge" => 4313656,
                "estado_id" => 23,
                "nome" => 'PALMARES DO SUL',
            ],
            [
                "codigo_ibge" => 4313706,
                "estado_id" => 23,
                "nome" => 'PALMEIRA DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4313805,
                "estado_id" => 23,
                "nome" => 'PALMITINHO',
            ],
            [
                "codigo_ibge" => 4313904,
                "estado_id" => 23,
                "nome" => 'PANAMBI',
            ],
            [
                "codigo_ibge" => 4313953,
                "estado_id" => 23,
                "nome" => 'PANTANO GRANDE',
            ],
            [
                "codigo_ibge" => 4314001,
                "estado_id" => 23,
                "nome" => 'PARAÍ',
            ],
            [
                "codigo_ibge" => 4314027,
                "estado_id" => 23,
                "nome" => 'PARAÍSO DO SUL',
            ],
            [
                "codigo_ibge" => 4314035,
                "estado_id" => 23,
                "nome" => 'PARECI NOVO',
            ],
            [
                "codigo_ibge" => 4314050,
                "estado_id" => 23,
                "nome" => 'PAROBÉ',
            ],
            [
                "codigo_ibge" => 4314068,
                "estado_id" => 23,
                "nome" => 'PASSA SETE',
            ],
            [
                "codigo_ibge" => 4314076,
                "estado_id" => 23,
                "nome" => 'PASSO DO SOBRADO',
            ],
            [
                "codigo_ibge" => 4314100,
                "estado_id" => 23,
                "nome" => 'PASSO FUNDO',
            ],
            [
                "codigo_ibge" => 4314134,
                "estado_id" => 23,
                "nome" => 'PAULO BENTO',
            ],
            [
                "codigo_ibge" => 4314159,
                "estado_id" => 23,
                "nome" => 'PAVERAMA',
            ],
            [
                "codigo_ibge" => 4314175,
                "estado_id" => 23,
                "nome" => 'PEDRAS ALTAS',
            ],
            [
                "codigo_ibge" => 4314209,
                "estado_id" => 23,
                "nome" => 'PEDRO OSÓRIO',
            ],
            [
                "codigo_ibge" => 4314308,
                "estado_id" => 23,
                "nome" => 'PEJUÇARA',
            ],
            [
                "codigo_ibge" => 4314407,
                "estado_id" => 23,
                "nome" => 'PELOTAS',
            ],
            [
                "codigo_ibge" => 4314423,
                "estado_id" => 23,
                "nome" => 'PICADA CAFÉ',
            ],
            [
                "codigo_ibge" => 4314456,
                "estado_id" => 23,
                "nome" => 'PINHAL',
            ],
            [
                "codigo_ibge" => 4314464,
                "estado_id" => 23,
                "nome" => 'PINHAL DA SERRA',
            ],
            [
                "codigo_ibge" => 4314472,
                "estado_id" => 23,
                "nome" => 'PINHAL GRANDE',
            ],
            [
                "codigo_ibge" => 4314498,
                "estado_id" => 23,
                "nome" => 'PINHEIRINHO DO VALE',
            ],
            [
                "codigo_ibge" => 4314506,
                "estado_id" => 23,
                "nome" => 'PINHEIRO MACHADO',
            ],
            [
                "codigo_ibge" => 4314548,
                "estado_id" => 23,
                "nome" => 'PINTO BANDEIRA',
            ],
            [
                "codigo_ibge" => 4314555,
                "estado_id" => 23,
                "nome" => 'PIRAPÓ',
            ],
            [
                "codigo_ibge" => 4314605,
                "estado_id" => 23,
                "nome" => 'PIRATINI',
            ],
            [
                "codigo_ibge" => 4314704,
                "estado_id" => 23,
                "nome" => 'PLANALTO',
            ],
            [
                "codigo_ibge" => 4314753,
                "estado_id" => 23,
                "nome" => 'POÇO DAS ANTAS',
            ],
            [
                "codigo_ibge" => 4314779,
                "estado_id" => 23,
                "nome" => 'PONTÃO',
            ],
            [
                "codigo_ibge" => 4314787,
                "estado_id" => 23,
                "nome" => 'PONTE PRETA',
            ],
            [
                "codigo_ibge" => 4314803,
                "estado_id" => 23,
                "nome" => 'PORTÃO',
            ],
            [
                "codigo_ibge" => 4314902,
                "estado_id" => 23,
                "nome" => 'PORTO ALEGRE',
            ],
            [
                "codigo_ibge" => 4315008,
                "estado_id" => 23,
                "nome" => 'PORTO LUCENA',
            ],
            [
                "codigo_ibge" => 4315057,
                "estado_id" => 23,
                "nome" => 'PORTO MAUÁ',
            ],
            [
                "codigo_ibge" => 4315073,
                "estado_id" => 23,
                "nome" => 'PORTO VERA CRUZ',
            ],
            [
                "codigo_ibge" => 4315107,
                "estado_id" => 23,
                "nome" => 'PORTO XAVIER',
            ],
            [
                "codigo_ibge" => 4315131,
                "estado_id" => 23,
                "nome" => 'POUSO NOVO',
            ],
            [
                "codigo_ibge" => 4315149,
                "estado_id" => 23,
                "nome" => 'PRESIDENTE LUCENA',
            ],
            [
                "codigo_ibge" => 4315156,
                "estado_id" => 23,
                "nome" => 'PROGRESSO',
            ],
            [
                "codigo_ibge" => 4315172,
                "estado_id" => 23,
                "nome" => 'PROTÁSIO ALVES',
            ],
            [
                "codigo_ibge" => 4315206,
                "estado_id" => 23,
                "nome" => 'PUTINGA',
            ],
            [
                "codigo_ibge" => 4315305,
                "estado_id" => 23,
                "nome" => 'QUARAÍ',
            ],
            [
                "codigo_ibge" => 4315313,
                "estado_id" => 23,
                "nome" => 'QUATRO IRMÃOS',
            ],
            [
                "codigo_ibge" => 4315321,
                "estado_id" => 23,
                "nome" => 'QUEVEDOS',
            ],
            [
                "codigo_ibge" => 4315354,
                "estado_id" => 23,
                "nome" => 'QUINZE DE NOVEMBRO',
            ],
            [
                "codigo_ibge" => 4315404,
                "estado_id" => 23,
                "nome" => 'REDENTORA',
            ],
            [
                "codigo_ibge" => 4315453,
                "estado_id" => 23,
                "nome" => 'RELVADO',
            ],
            [
                "codigo_ibge" => 4315503,
                "estado_id" => 23,
                "nome" => 'RESTINGA SECA',
            ],
            [
                "codigo_ibge" => 4315552,
                "estado_id" => 23,
                "nome" => 'RIO DOS ÍNDIOS',
            ],
            [
                "codigo_ibge" => 4315602,
                "estado_id" => 23,
                "nome" => 'RIO GRANDE',
            ],
            [
                "codigo_ibge" => 4315701,
                "estado_id" => 23,
                "nome" => 'RIO PARDO',
            ],
            [
                "codigo_ibge" => 4315750,
                "estado_id" => 23,
                "nome" => 'RIOZINHO',
            ],
            [
                "codigo_ibge" => 4315800,
                "estado_id" => 23,
                "nome" => 'ROCA SALES',
            ],
            [
                "codigo_ibge" => 4315909,
                "estado_id" => 23,
                "nome" => 'RODEIO BONITO',
            ],
            [
                "codigo_ibge" => 4315958,
                "estado_id" => 23,
                "nome" => 'ROLADOR',
            ],
            [
                "codigo_ibge" => 4316006,
                "estado_id" => 23,
                "nome" => 'ROLANTE',
            ],
            [
                "codigo_ibge" => 4316105,
                "estado_id" => 23,
                "nome" => 'RONDA ALTA',
            ],
            [
                "codigo_ibge" => 4316204,
                "estado_id" => 23,
                "nome" => 'RONDINHA',
            ],
            [
                "codigo_ibge" => 4316303,
                "estado_id" => 23,
                "nome" => 'ROQUE GONZALES',
            ],
            [
                "codigo_ibge" => 4316402,
                "estado_id" => 23,
                "nome" => 'ROSÁRIO DO SUL',
            ],
            [
                "codigo_ibge" => 4316428,
                "estado_id" => 23,
                "nome" => 'SAGRADA FAMÍLIA',
            ],
            [
                "codigo_ibge" => 4316436,
                "estado_id" => 23,
                "nome" => 'SALDANHA MARINHO',
            ],
            [
                "codigo_ibge" => 4316451,
                "estado_id" => 23,
                "nome" => 'SALTO DO JACUÍ',
            ],
            [
                "codigo_ibge" => 4316477,
                "estado_id" => 23,
                "nome" => 'SALVADOR DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4316501,
                "estado_id" => 23,
                "nome" => 'SALVADOR DO SUL',
            ],
            [
                "codigo_ibge" => 4316600,
                "estado_id" => 23,
                "nome" => 'SANANDUVA',
            ],
            [
                "codigo_ibge" => 4316709,
                "estado_id" => 23,
                "nome" => 'SANTA BÁRBARA DO SUL',
            ],
            [
                "codigo_ibge" => 4316733,
                "estado_id" => 23,
                "nome" => 'SANTA CECÍLIA DO SUL',
            ],
            [
                "codigo_ibge" => 4316758,
                "estado_id" => 23,
                "nome" => 'SANTA CLARA DO SUL',
            ],
            [
                "codigo_ibge" => 4316808,
                "estado_id" => 23,
                "nome" => 'SANTA CRUZ DO SUL',
            ],
            [
                "codigo_ibge" => 4316907,
                "estado_id" => 23,
                "nome" => 'SANTA MARIA',
            ],
            [
                "codigo_ibge" => 4316956,
                "estado_id" => 23,
                "nome" => 'SANTA MARIA DO HERVAL',
            ],
            [
                "codigo_ibge" => 4316972,
                "estado_id" => 23,
                "nome" => 'SANTA MARGARIDA DO SUL',
            ],
            [
                "codigo_ibge" => 4317004,
                "estado_id" => 23,
                "nome" => 'SANTANA DA BOA VISTA',
            ],
            [
                "codigo_ibge" => 4317103,
                "estado_id" => 23,
                "nome" => 'SANTANA DO LIVRAMENTO',
            ],
            [
                "codigo_ibge" => 4317202,
                "estado_id" => 23,
                "nome" => 'SANTA ROSA',
            ],
            [
                "codigo_ibge" => 4317251,
                "estado_id" => 23,
                "nome" => 'SANTA TEREZA',
            ],
            [
                "codigo_ibge" => 4317301,
                "estado_id" => 23,
                "nome" => 'SANTA VITÓRIA DO PALMAR',
            ],
            [
                "codigo_ibge" => 4317400,
                "estado_id" => 23,
                "nome" => 'SANTIAGO',
            ],
            [
                "codigo_ibge" => 4317509,
                "estado_id" => 23,
                "nome" => 'SANTO ÂNGELO',
            ],
            [
                "codigo_ibge" => 4317558,
                "estado_id" => 23,
                "nome" => 'SANTO ANTÔNIO DO PALMA',
            ],
            [
                "codigo_ibge" => 4317608,
                "estado_id" => 23,
                "nome" => 'SANTO ANTÔNIO DA PATRULHA',
            ],
            [
                "codigo_ibge" => 4317707,
                "estado_id" => 23,
                "nome" => 'SANTO ANTÔNIO DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4317756,
                "estado_id" => 23,
                "nome" => 'SANTO ANTÔNIO DO PLANALTO',
            ],
            [
                "codigo_ibge" => 4317806,
                "estado_id" => 23,
                "nome" => 'SANTO AUGUSTO',
            ],
            [
                "codigo_ibge" => 4317905,
                "estado_id" => 23,
                "nome" => 'SANTO CRISTO',
            ],
            [
                "codigo_ibge" => 4317954,
                "estado_id" => 23,
                "nome" => 'SANTO EXPEDITO DO SUL',
            ],
            [
                "codigo_ibge" => 4318002,
                "estado_id" => 23,
                "nome" => 'SÃO BORJA',
            ],
            [
                "codigo_ibge" => 4318051,
                "estado_id" => 23,
                "nome" => 'SÃO DOMINGOS DO SUL',
            ],
            [
                "codigo_ibge" => 4318101,
                "estado_id" => 23,
                "nome" => 'SÃO FRANCISCO DE ASSIS',
            ],
            [
                "codigo_ibge" => 4318200,
                "estado_id" => 23,
                "nome" => 'SÃO FRANCISCO DE PAULA',
            ],
            [
                "codigo_ibge" => 4318309,
                "estado_id" => 23,
                "nome" => 'SÃO GABRIEL',
            ],
            [
                "codigo_ibge" => 4318408,
                "estado_id" => 23,
                "nome" => 'SÃO JERÔNIMO',
            ],
            [
                "codigo_ibge" => 4318424,
                "estado_id" => 23,
                "nome" => 'SÃO JOÃO DA URTIGA',
            ],
            [
                "codigo_ibge" => 4318432,
                "estado_id" => 23,
                "nome" => 'SÃO JOÃO DO POLÊSINE',
            ],
            [
                "codigo_ibge" => 4318440,
                "estado_id" => 23,
                "nome" => 'SÃO JORGE',
            ],
            [
                "codigo_ibge" => 4318457,
                "estado_id" => 23,
                "nome" => 'SÃO JOSÉ DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4318465,
                "estado_id" => 23,
                "nome" => 'SÃO JOSÉ DO HERVAL',
            ],
            [
                "codigo_ibge" => 4318481,
                "estado_id" => 23,
                "nome" => 'SÃO JOSÉ DO HORTÊNCIO',
            ],
            [
                "codigo_ibge" => 4318499,
                "estado_id" => 23,
                "nome" => 'SÃO JOSÉ DO INHACORÁ',
            ],
            [
                "codigo_ibge" => 4318507,
                "estado_id" => 23,
                "nome" => 'SÃO JOSÉ DO NORTE',
            ],
            [
                "codigo_ibge" => 4318606,
                "estado_id" => 23,
                "nome" => 'SÃO JOSÉ DO OURO',
            ],
            [
                "codigo_ibge" => 4318614,
                "estado_id" => 23,
                "nome" => 'SÃO JOSÉ DO SUL',
            ],
            [
                "codigo_ibge" => 4318622,
                "estado_id" => 23,
                "nome" => 'SÃO JOSÉ DOS AUSENTES',
            ],
            [
                "codigo_ibge" => 4318705,
                "estado_id" => 23,
                "nome" => 'SÃO LEOPOLDO',
            ],
            [
                "codigo_ibge" => 4318804,
                "estado_id" => 23,
                "nome" => 'SÃO LOURENÇO DO SUL',
            ],
            [
                "codigo_ibge" => 4318903,
                "estado_id" => 23,
                "nome" => 'SÃO LUIZ GONZAGA',
            ],
            [
                "codigo_ibge" => 4319000,
                "estado_id" => 23,
                "nome" => 'SÃO MARCOS',
            ],
            [
                "codigo_ibge" => 4319109,
                "estado_id" => 23,
                "nome" => 'SÃO MARTINHO',
            ],
            [
                "codigo_ibge" => 4319125,
                "estado_id" => 23,
                "nome" => 'SÃO MARTINHO DA SERRA',
            ],
            [
                "codigo_ibge" => 4319158,
                "estado_id" => 23,
                "nome" => 'SÃO MIGUEL DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4319208,
                "estado_id" => 23,
                "nome" => 'SÃO NICOLAU',
            ],
            [
                "codigo_ibge" => 4319307,
                "estado_id" => 23,
                "nome" => 'SÃO PAULO DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4319356,
                "estado_id" => 23,
                "nome" => 'SÃO PEDRO DA SERRA',
            ],
            [
                "codigo_ibge" => 4319364,
                "estado_id" => 23,
                "nome" => 'SÃO PEDRO DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4319372,
                "estado_id" => 23,
                "nome" => 'SÃO PEDRO DO BUTIÁ',
            ],
            [
                "codigo_ibge" => 4319406,
                "estado_id" => 23,
                "nome" => 'SÃO PEDRO DO SUL',
            ],
            [
                "codigo_ibge" => 4319505,
                "estado_id" => 23,
                "nome" => 'SÃO SEBASTIÃO DO CAÍ',
            ],
            [
                "codigo_ibge" => 4319604,
                "estado_id" => 23,
                "nome" => 'SÃO SEPÉ',
            ],
            [
                "codigo_ibge" => 4319703,
                "estado_id" => 23,
                "nome" => 'SÃO VALENTIM',
            ],
            [
                "codigo_ibge" => 4319711,
                "estado_id" => 23,
                "nome" => 'SÃO VALENTIM DO SUL',
            ],
            [
                "codigo_ibge" => 4319737,
                "estado_id" => 23,
                "nome" => 'SÃO VALÉRIO DO SUL',
            ],
            [
                "codigo_ibge" => 4319752,
                "estado_id" => 23,
                "nome" => 'SÃO VENDELINO',
            ],
            [
                "codigo_ibge" => 4319802,
                "estado_id" => 23,
                "nome" => 'SÃO VICENTE DO SUL',
            ],
            [
                "codigo_ibge" => 4319901,
                "estado_id" => 23,
                "nome" => 'SAPIRANGA',
            ],
            [
                "codigo_ibge" => 4320008,
                "estado_id" => 23,
                "nome" => 'SAPUCAIA DO SUL',
            ],
            [
                "codigo_ibge" => 4320107,
                "estado_id" => 23,
                "nome" => 'SARANDI',
            ],
            [
                "codigo_ibge" => 4320206,
                "estado_id" => 23,
                "nome" => 'SEBERI',
            ],
            [
                "codigo_ibge" => 4320230,
                "estado_id" => 23,
                "nome" => 'SEDE NOVA',
            ],
            [
                "codigo_ibge" => 4320263,
                "estado_id" => 23,
                "nome" => 'SEGREDO',
            ],
            [
                "codigo_ibge" => 4320305,
                "estado_id" => 23,
                "nome" => 'SELBACH',
            ],
            [
                "codigo_ibge" => 4320321,
                "estado_id" => 23,
                "nome" => 'SENADOR SALGADO FILHO',
            ],
            [
                "codigo_ibge" => 4320354,
                "estado_id" => 23,
                "nome" => 'SENTINELA DO SUL',
            ],
            [
                "codigo_ibge" => 4320404,
                "estado_id" => 23,
                "nome" => 'SERAFINA CORRÊA',
            ],
            [
                "codigo_ibge" => 4320453,
                "estado_id" => 23,
                "nome" => 'SÉRIO',
            ],
            [
                "codigo_ibge" => 4320503,
                "estado_id" => 23,
                "nome" => 'SERTÃO',
            ],
            [
                "codigo_ibge" => 4320552,
                "estado_id" => 23,
                "nome" => 'SERTÃO SANTANA',
            ],
            [
                "codigo_ibge" => 4320578,
                "estado_id" => 23,
                "nome" => 'SETE DE SETEMBRO',
            ],
            [
                "codigo_ibge" => 4320602,
                "estado_id" => 23,
                "nome" => 'SEVERIANO DE ALMEIDA',
            ],
            [
                "codigo_ibge" => 4320651,
                "estado_id" => 23,
                "nome" => 'SILVEIRA MARTINS',
            ],
            [
                "codigo_ibge" => 4320677,
                "estado_id" => 23,
                "nome" => 'SINIMBU',
            ],
            [
                "codigo_ibge" => 4320701,
                "estado_id" => 23,
                "nome" => 'SOBRADINHO',
            ],
            [
                "codigo_ibge" => 4320800,
                "estado_id" => 23,
                "nome" => 'SOLEDADE',
            ],
            [
                "codigo_ibge" => 4320859,
                "estado_id" => 23,
                "nome" => 'TABAÍ',
            ],
            [
                "codigo_ibge" => 4320909,
                "estado_id" => 23,
                "nome" => 'TAPEJARA',
            ],
            [
                "codigo_ibge" => 4321006,
                "estado_id" => 23,
                "nome" => 'TAPERA',
            ],
            [
                "codigo_ibge" => 4321105,
                "estado_id" => 23,
                "nome" => 'TAPES',
            ],
            [
                "codigo_ibge" => 4321204,
                "estado_id" => 23,
                "nome" => 'TAQUARA',
            ],
            [
                "codigo_ibge" => 4321303,
                "estado_id" => 23,
                "nome" => 'TAQUARI',
            ],
            [
                "codigo_ibge" => 4321329,
                "estado_id" => 23,
                "nome" => 'TAQUARUÇU DO SUL',
            ],
            [
                "codigo_ibge" => 4321352,
                "estado_id" => 23,
                "nome" => 'TAVARES',
            ],
            [
                "codigo_ibge" => 4321402,
                "estado_id" => 23,
                "nome" => 'TENENTE PORTELA',
            ],
            [
                "codigo_ibge" => 4321436,
                "estado_id" => 23,
                "nome" => 'TERRA DE AREIA',
            ],
            [
                "codigo_ibge" => 4321451,
                "estado_id" => 23,
                "nome" => 'TEUTÔNIA',
            ],
            [
                "codigo_ibge" => 4321469,
                "estado_id" => 23,
                "nome" => 'TIO HUGO',
            ],
            [
                "codigo_ibge" => 4321477,
                "estado_id" => 23,
                "nome" => 'TIRADENTES DO SUL',
            ],
            [
                "codigo_ibge" => 4321493,
                "estado_id" => 23,
                "nome" => 'TOROPI',
            ],
            [
                "codigo_ibge" => 4321501,
                "estado_id" => 23,
                "nome" => 'TORRES',
            ],
            [
                "codigo_ibge" => 4321600,
                "estado_id" => 23,
                "nome" => 'TRAMANDAÍ',
            ],
            [
                "codigo_ibge" => 4321626,
                "estado_id" => 23,
                "nome" => 'TRAVESSEIRO',
            ],
            [
                "codigo_ibge" => 4321634,
                "estado_id" => 23,
                "nome" => 'TRÊS ARROIOS',
            ],
            [
                "codigo_ibge" => 4321667,
                "estado_id" => 23,
                "nome" => 'TRÊS CACHOEIRAS',
            ],
            [
                "codigo_ibge" => 4321709,
                "estado_id" => 23,
                "nome" => 'TRÊS COROAS',
            ],
            [
                "codigo_ibge" => 4321808,
                "estado_id" => 23,
                "nome" => 'TRÊS DE MAIO',
            ],
            [
                "codigo_ibge" => 4321832,
                "estado_id" => 23,
                "nome" => 'TRÊS FORQUILHAS',
            ],
            [
                "codigo_ibge" => 4321857,
                "estado_id" => 23,
                "nome" => 'TRÊS PALMEIRAS',
            ],
            [
                "codigo_ibge" => 4321907,
                "estado_id" => 23,
                "nome" => 'TRÊS PASSOS',
            ],
            [
                "codigo_ibge" => 4321956,
                "estado_id" => 23,
                "nome" => 'TRINDADE DO SUL',
            ],
            [
                "codigo_ibge" => 4322004,
                "estado_id" => 23,
                "nome" => 'TRIUNFO',
            ],
            [
                "codigo_ibge" => 4322103,
                "estado_id" => 23,
                "nome" => 'TUCUNDUVA',
            ],
            [
                "codigo_ibge" => 4322152,
                "estado_id" => 23,
                "nome" => 'TUNAS',
            ],
            [
                "codigo_ibge" => 4322186,
                "estado_id" => 23,
                "nome" => 'TUPANCI DO SUL',
            ],
            [
                "codigo_ibge" => 4322202,
                "estado_id" => 23,
                "nome" => 'TUPANCIRETÃ',
            ],
            [
                "codigo_ibge" => 4322251,
                "estado_id" => 23,
                "nome" => 'TUPANDI',
            ],
            [
                "codigo_ibge" => 4322301,
                "estado_id" => 23,
                "nome" => 'TUPARENDI',
            ],
            [
                "codigo_ibge" => 4322327,
                "estado_id" => 23,
                "nome" => 'TURUÇU',
            ],
            [
                "codigo_ibge" => 4322343,
                "estado_id" => 23,
                "nome" => 'UBIRETAMA',
            ],
            [
                "codigo_ibge" => 4322350,
                "estado_id" => 23,
                "nome" => 'UNIÃO DA SERRA',
            ],
            [
                "codigo_ibge" => 4322376,
                "estado_id" => 23,
                "nome" => 'UNISTALDA',
            ],
            [
                "codigo_ibge" => 4322400,
                "estado_id" => 23,
                "nome" => 'URUGUAIANA',
            ],
            [
                "codigo_ibge" => 4322509,
                "estado_id" => 23,
                "nome" => 'VACARIA',
            ],
            [
                "codigo_ibge" => 4322525,
                "estado_id" => 23,
                "nome" => 'VALE VERDE',
            ],
            [
                "codigo_ibge" => 4322533,
                "estado_id" => 23,
                "nome" => 'VALE DO SOL',
            ],
            [
                "codigo_ibge" => 4322541,
                "estado_id" => 23,
                "nome" => 'VALE REAL',
            ],
            [
                "codigo_ibge" => 4322558,
                "estado_id" => 23,
                "nome" => 'VANINI',
            ],
            [
                "codigo_ibge" => 4322608,
                "estado_id" => 23,
                "nome" => 'VENÂNCIO AIRES',
            ],
            [
                "codigo_ibge" => 4322707,
                "estado_id" => 23,
                "nome" => 'VERA CRUZ',
            ],
            [
                "codigo_ibge" => 4322806,
                "estado_id" => 23,
                "nome" => 'VERANÓPOLIS',
            ],
            [
                "codigo_ibge" => 4322855,
                "estado_id" => 23,
                "nome" => 'VESPASIANO CORREA',
            ],
            [
                "codigo_ibge" => 4322905,
                "estado_id" => 23,
                "nome" => 'VIADUTOS',
            ],
            [
                "codigo_ibge" => 4323002,
                "estado_id" => 23,
                "nome" => 'VIAMÃO',
            ],
            [
                "codigo_ibge" => 4323101,
                "estado_id" => 23,
                "nome" => 'VICENTE DUTRA',
            ],
            [
                "codigo_ibge" => 4323200,
                "estado_id" => 23,
                "nome" => 'VICTOR GRAEFF',
            ],
            [
                "codigo_ibge" => 4323309,
                "estado_id" => 23,
                "nome" => 'VILA FLORES',
            ],
            [
                "codigo_ibge" => 4323358,
                "estado_id" => 23,
                "nome" => 'VILA LÂNGARO',
            ],
            [
                "codigo_ibge" => 4323408,
                "estado_id" => 23,
                "nome" => 'VILA MARIA',
            ],
            [
                "codigo_ibge" => 4323457,
                "estado_id" => 23,
                "nome" => 'VILA NOVA DO SUL',
            ],
            [
                "codigo_ibge" => 4323507,
                "estado_id" => 23,
                "nome" => 'VISTA ALEGRE',
            ],
            [
                "codigo_ibge" => 4323606,
                "estado_id" => 23,
                "nome" => 'VISTA ALEGRE DO PRATA',
            ],
            [
                "codigo_ibge" => 4323705,
                "estado_id" => 23,
                "nome" => 'VISTA GAÚCHA',
            ],
            [
                "codigo_ibge" => 4323754,
                "estado_id" => 23,
                "nome" => 'VITÓRIA DAS MISSÕES',
            ],
            [
                "codigo_ibge" => 4323770,
                "estado_id" => 23,
                "nome" => 'WESTFÁLIA',
            ],
            [
                "codigo_ibge" => 4323804,
                "estado_id" => 23,
                "nome" => 'XANGRI-LÁ',
            ],
            [
                "codigo_ibge" => 5000203,
                "estado_id" => 24,
                "nome" => 'ÁGUA CLARA',
            ],
            [
                "codigo_ibge" => 5000252,
                "estado_id" => 24,
                "nome" => 'ALCINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5000609,
                "estado_id" => 24,
                "nome" => 'AMAMBAI',
            ],
            [
                "codigo_ibge" => 5000708,
                "estado_id" => 24,
                "nome" => 'ANASTÁCIO',
            ],
            [
                "codigo_ibge" => 5000807,
                "estado_id" => 24,
                "nome" => 'ANAURILÂNDIA',
            ],
            [
                "codigo_ibge" => 5000856,
                "estado_id" => 24,
                "nome" => 'ANGÉLICA',
            ],
            [
                "codigo_ibge" => 5000906,
                "estado_id" => 24,
                "nome" => 'ANTÔNIO JOÃO',
            ],
            [
                "codigo_ibge" => 5001003,
                "estado_id" => 24,
                "nome" => 'APARECIDA DO TABOADO',
            ],
            [
                "codigo_ibge" => 5001102,
                "estado_id" => 24,
                "nome" => 'AQUIDAUANA',
            ],
            [
                "codigo_ibge" => 5001243,
                "estado_id" => 24,
                "nome" => 'ARAL MOREIRA',
            ],
            [
                "codigo_ibge" => 5001508,
                "estado_id" => 24,
                "nome" => 'BANDEIRANTES',
            ],
            [
                "codigo_ibge" => 5001904,
                "estado_id" => 24,
                "nome" => 'BATAGUASSU',
            ],
            [
                "codigo_ibge" => 5002001,
                "estado_id" => 24,
                "nome" => 'BATAYPORÃ',
            ],
            [
                "codigo_ibge" => 5002100,
                "estado_id" => 24,
                "nome" => 'BELA VISTA',
            ],
            [
                "codigo_ibge" => 5002159,
                "estado_id" => 24,
                "nome" => 'BODOQUENA',
            ],
            [
                "codigo_ibge" => 5002209,
                "estado_id" => 24,
                "nome" => 'BONITO',
            ],
            [
                "codigo_ibge" => 5002308,
                "estado_id" => 24,
                "nome" => 'BRASILÂNDIA',
            ],
            [
                "codigo_ibge" => 5002407,
                "estado_id" => 24,
                "nome" => 'CAARAPÓ',
            ],
            [
                "codigo_ibge" => 5002605,
                "estado_id" => 24,
                "nome" => 'CAMAPUÃ',
            ],
            [
                "codigo_ibge" => 5002704,
                "estado_id" => 24,
                "nome" => 'CAMPO GRANDE',
            ],
            [
                "codigo_ibge" => 5002803,
                "estado_id" => 24,
                "nome" => 'CARACOL',
            ],
            [
                "codigo_ibge" => 5002902,
                "estado_id" => 24,
                "nome" => 'CASSILÂNDIA',
            ],
            [
                "codigo_ibge" => 5002951,
                "estado_id" => 24,
                "nome" => 'CHAPADÃO DO SUL',
            ],
            [
                "codigo_ibge" => 5003108,
                "estado_id" => 24,
                "nome" => 'CORGUINHO',
            ],
            [
                "codigo_ibge" => 5003157,
                "estado_id" => 24,
                "nome" => 'CORONEL SAPUCAIA',
            ],
            [
                "codigo_ibge" => 5003207,
                "estado_id" => 24,
                "nome" => 'CORUMBÁ',
            ],
            [
                "codigo_ibge" => 5003256,
                "estado_id" => 24,
                "nome" => 'COSTA RICA',
            ],
            [
                "codigo_ibge" => 5003306,
                "estado_id" => 24,
                "nome" => 'COXIM',
            ],
            [
                "codigo_ibge" => 5003454,
                "estado_id" => 24,
                "nome" => 'DEODÁPOLIS',
            ],
            [
                "codigo_ibge" => 5003488,
                "estado_id" => 24,
                "nome" => 'DOIS IRMÃOS DO BURITI',
            ],
            [
                "codigo_ibge" => 5003504,
                "estado_id" => 24,
                "nome" => 'DOURADINA',
            ],
            [
                "codigo_ibge" => 5003702,
                "estado_id" => 24,
                "nome" => 'DOURADOS',
            ],
            [
                "codigo_ibge" => 5003751,
                "estado_id" => 24,
                "nome" => 'ELDORADO',
            ],
            [
                "codigo_ibge" => 5003801,
                "estado_id" => 24,
                "nome" => 'FÁTIMA DO SUL',
            ],
            [
                "codigo_ibge" => 5003900,
                "estado_id" => 24,
                "nome" => 'FIGUEIRÃO',
            ],
            [
                "codigo_ibge" => 5004007,
                "estado_id" => 24,
                "nome" => 'GLÓRIA DE DOURADOS',
            ],
            [
                "codigo_ibge" => 5004106,
                "estado_id" => 24,
                "nome" => 'GUIA LOPES DA LAGUNA',
            ],
            [
                "codigo_ibge" => 5004304,
                "estado_id" => 24,
                "nome" => 'IGUATEMI',
            ],
            [
                "codigo_ibge" => 5004403,
                "estado_id" => 24,
                "nome" => 'INOCÊNCIA',
            ],
            [
                "codigo_ibge" => 5004502,
                "estado_id" => 24,
                "nome" => 'ITAPORÃ',
            ],
            [
                "codigo_ibge" => 5004601,
                "estado_id" => 24,
                "nome" => 'ITAQUIRAÍ',
            ],
            [
                "codigo_ibge" => 5004700,
                "estado_id" => 24,
                "nome" => 'IVINHEMA',
            ],
            [
                "codigo_ibge" => 5004809,
                "estado_id" => 24,
                "nome" => 'JAPORÃ',
            ],
            [
                "codigo_ibge" => 5004908,
                "estado_id" => 24,
                "nome" => 'JARAGUARI',
            ],
            [
                "codigo_ibge" => 5005004,
                "estado_id" => 24,
                "nome" => 'JARDIM',
            ],
            [
                "codigo_ibge" => 5005103,
                "estado_id" => 24,
                "nome" => 'JATEÍ',
            ],
            [
                "codigo_ibge" => 5005152,
                "estado_id" => 24,
                "nome" => 'JUTI',
            ],
            [
                "codigo_ibge" => 5005202,
                "estado_id" => 24,
                "nome" => 'LADÁRIO',
            ],
            [
                "codigo_ibge" => 5005251,
                "estado_id" => 24,
                "nome" => 'LAGUNA CARAPÃ',
            ],
            [
                "codigo_ibge" => 5005400,
                "estado_id" => 24,
                "nome" => 'MARACAJU',
            ],
            [
                "codigo_ibge" => 5005608,
                "estado_id" => 24,
                "nome" => 'MIRANDA',
            ],
            [
                "codigo_ibge" => 5005681,
                "estado_id" => 24,
                "nome" => 'MUNDO NOVO',
            ],
            [
                "codigo_ibge" => 5005707,
                "estado_id" => 24,
                "nome" => 'NAVIRAÍ',
            ],
            [
                "codigo_ibge" => 5005806,
                "estado_id" => 24,
                "nome" => 'NIOAQUE',
            ],
            [
                "codigo_ibge" => 5006002,
                "estado_id" => 24,
                "nome" => 'NOVA ALVORADA DO SUL',
            ],
            [
                "codigo_ibge" => 5006200,
                "estado_id" => 24,
                "nome" => 'NOVA ANDRADINA',
            ],
            [
                "codigo_ibge" => 5006259,
                "estado_id" => 24,
                "nome" => 'NOVO HORIZONTE DO SUL',
            ],
            [
                "codigo_ibge" => 5006275,
                "estado_id" => 24,
                "nome" => 'PARAÍSO DAS ÁGUAS',
            ],
            [
                "codigo_ibge" => 5006309,
                "estado_id" => 24,
                "nome" => 'PARANAÍBA',
            ],
            [
                "codigo_ibge" => 5006358,
                "estado_id" => 24,
                "nome" => 'PARANHOS',
            ],
            [
                "codigo_ibge" => 5006408,
                "estado_id" => 24,
                "nome" => 'PEDRO GOMES',
            ],
            [
                "codigo_ibge" => 5006606,
                "estado_id" => 24,
                "nome" => 'PONTA PORÃ',
            ],
            [
                "codigo_ibge" => 5006903,
                "estado_id" => 24,
                "nome" => 'PORTO MURTINHO',
            ],
            [
                "codigo_ibge" => 5007109,
                "estado_id" => 24,
                "nome" => 'RIBAS DO RIO PARDO',
            ],
            [
                "codigo_ibge" => 5007208,
                "estado_id" => 24,
                "nome" => 'RIO BRILHANTE',
            ],
            [
                "codigo_ibge" => 5007307,
                "estado_id" => 24,
                "nome" => 'RIO NEGRO',
            ],
            [
                "codigo_ibge" => 5007406,
                "estado_id" => 24,
                "nome" => 'RIO VERDE DE MATO GROSSO',
            ],
            [
                "codigo_ibge" => 5007505,
                "estado_id" => 24,
                "nome" => 'ROCHEDO',
            ],
            [
                "codigo_ibge" => 5007554,
                "estado_id" => 24,
                "nome" => 'SANTA RITA DO PARDO',
            ],
            [
                "codigo_ibge" => 5007695,
                "estado_id" => 24,
                "nome" => 'SÃO GABRIEL DO OESTE',
            ],
            [
                "codigo_ibge" => 5007703,
                "estado_id" => 24,
                "nome" => 'SETE QUEDAS',
            ],
            [
                "codigo_ibge" => 5007802,
                "estado_id" => 24,
                "nome" => 'SELVÍRIA',
            ],
            [
                "codigo_ibge" => 5007901,
                "estado_id" => 24,
                "nome" => 'SIDROLÂNDIA',
            ],
            [
                "codigo_ibge" => 5007935,
                "estado_id" => 24,
                "nome" => 'SONORA',
            ],
            [
                "codigo_ibge" => 5007950,
                "estado_id" => 24,
                "nome" => 'TACURU',
            ],
            [
                "codigo_ibge" => 5007976,
                "estado_id" => 24,
                "nome" => 'TAQUARUSSU',
            ],
            [
                "codigo_ibge" => 5008008,
                "estado_id" => 24,
                "nome" => 'TERENOS',
            ],
            [
                "codigo_ibge" => 5008305,
                "estado_id" => 24,
                "nome" => 'TRÊS LAGOAS',
            ],
            [
                "codigo_ibge" => 5008404,
                "estado_id" => 24,
                "nome" => 'VICENTINA',
            ],
            [
                "codigo_ibge" => 5100102,
                "estado_id" => 25,
                "nome" => 'ACORIZAL',
            ],
            [
                "codigo_ibge" => 5100201,
                "estado_id" => 25,
                "nome" => 'ÁGUA BOA',
            ],
            [
                "codigo_ibge" => 5100250,
                "estado_id" => 25,
                "nome" => 'ALTA FLORESTA',
            ],
            [
                "codigo_ibge" => 5100300,
                "estado_id" => 25,
                "nome" => 'ALTO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 5100359,
                "estado_id" => 25,
                "nome" => 'ALTO BOA VISTA',
            ],
            [
                "codigo_ibge" => 5100409,
                "estado_id" => 25,
                "nome" => 'ALTO GARÇAS',
            ],
            [
                "codigo_ibge" => 5100508,
                "estado_id" => 25,
                "nome" => 'ALTO PARAGUAI',
            ],
            [
                "codigo_ibge" => 5100607,
                "estado_id" => 25,
                "nome" => 'ALTO TAQUARI',
            ],
            [
                "codigo_ibge" => 5100805,
                "estado_id" => 25,
                "nome" => 'APIACÁS',
            ],
            [
                "codigo_ibge" => 5101001,
                "estado_id" => 25,
                "nome" => 'ARAGUAIANA',
            ],
            [
                "codigo_ibge" => 5101209,
                "estado_id" => 25,
                "nome" => 'ARAGUAINHA',
            ],
            [
                "codigo_ibge" => 5101258,
                "estado_id" => 25,
                "nome" => 'ARAPUTANGA',
            ],
            [
                "codigo_ibge" => 5101308,
                "estado_id" => 25,
                "nome" => 'ARENÁPOLIS',
            ],
            [
                "codigo_ibge" => 5101407,
                "estado_id" => 25,
                "nome" => 'ARIPUANÃ',
            ],
            [
                "codigo_ibge" => 5101605,
                "estado_id" => 25,
                "nome" => 'BARÃO DE MELGAÇO',
            ],
            [
                "codigo_ibge" => 5101704,
                "estado_id" => 25,
                "nome" => 'BARRA DO BUGRES',
            ],
            [
                "codigo_ibge" => 5101803,
                "estado_id" => 25,
                "nome" => 'BARRA DO GARÇAS',
            ],
            [
                "codigo_ibge" => 5101852,
                "estado_id" => 25,
                "nome" => 'BOM JESUS DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 5101902,
                "estado_id" => 25,
                "nome" => 'BRASNORTE',
            ],
            [
                "codigo_ibge" => 5102504,
                "estado_id" => 25,
                "nome" => 'CÁCERES',
            ],
            [
                "codigo_ibge" => 5102603,
                "estado_id" => 25,
                "nome" => 'CAMPINÁPOLIS',
            ],
            [
                "codigo_ibge" => 5102637,
                "estado_id" => 25,
                "nome" => 'CAMPO NOVO DO PARECIS',
            ],
            [
                "codigo_ibge" => 5102678,
                "estado_id" => 25,
                "nome" => 'CAMPO VERDE',
            ],
            [
                "codigo_ibge" => 5102686,
                "estado_id" => 25,
                "nome" => 'CAMPOS DE JÚLIO',
            ],
            [
                "codigo_ibge" => 5102694,
                "estado_id" => 25,
                "nome" => 'CANABRAVA DO NORTE',
            ],
            [
                "codigo_ibge" => 5102702,
                "estado_id" => 25,
                "nome" => 'CANARANA',
            ],
            [
                "codigo_ibge" => 5102793,
                "estado_id" => 25,
                "nome" => 'CARLINDA',
            ],
            [
                "codigo_ibge" => 5102850,
                "estado_id" => 25,
                "nome" => 'CASTANHEIRA',
            ],
            [
                "codigo_ibge" => 5103007,
                "estado_id" => 25,
                "nome" => 'CHAPADA DOS GUIMARÃES',
            ],
            [
                "codigo_ibge" => 5103056,
                "estado_id" => 25,
                "nome" => 'CLÁUDIA',
            ],
            [
                "codigo_ibge" => 5103106,
                "estado_id" => 25,
                "nome" => 'COCALINHO',
            ],
            [
                "codigo_ibge" => 5103205,
                "estado_id" => 25,
                "nome" => 'COLÍDER',
            ],
            [
                "codigo_ibge" => 5103254,
                "estado_id" => 25,
                "nome" => 'COLNIZA',
            ],
            [
                "codigo_ibge" => 5103304,
                "estado_id" => 25,
                "nome" => 'COMODORO',
            ],
            [
                "codigo_ibge" => 5103353,
                "estado_id" => 25,
                "nome" => 'CONFRESA',
            ],
            [
                "codigo_ibge" => 5103361,
                "estado_id" => 25,
                "nome" => 'CONQUISTA D`OESTE',
            ],
            [
                "codigo_ibge" => 5103379,
                "estado_id" => 25,
                "nome" => 'COTRIGUAÇU',
            ],
            [
                "codigo_ibge" => 5103403,
                "estado_id" => 25,
                "nome" => 'CUIABÁ',
            ],
            [
                "codigo_ibge" => 5103437,
                "estado_id" => 25,
                "nome" => 'CURVELÂNDIA',
            ],
            [
                "codigo_ibge" => 5103452,
                "estado_id" => 25,
                "nome" => 'DENISE',
            ],
            [
                "codigo_ibge" => 5103502,
                "estado_id" => 25,
                "nome" => 'DIAMANTINO',
            ],
            [
                "codigo_ibge" => 5103601,
                "estado_id" => 25,
                "nome" => 'DOM AQUINO',
            ],
            [
                "codigo_ibge" => 5103700,
                "estado_id" => 25,
                "nome" => 'FELIZ NATAL',
            ],
            [
                "codigo_ibge" => 5103809,
                "estado_id" => 25,
                "nome" => 'FIGUEIRÓPOLIS D`OESTE',
            ],
            [
                "codigo_ibge" => 5103858,
                "estado_id" => 25,
                "nome" => 'GAÚCHA DO NORTE',
            ],
            [
                "codigo_ibge" => 5103908,
                "estado_id" => 25,
                "nome" => 'GENERAL CARNEIRO',
            ],
            [
                "codigo_ibge" => 5103957,
                "estado_id" => 25,
                "nome" => 'GLÓRIA D`OESTE',
            ],
            [
                "codigo_ibge" => 5104104,
                "estado_id" => 25,
                "nome" => 'GUARANTÃ DO NORTE',
            ],
            [
                "codigo_ibge" => 5104203,
                "estado_id" => 25,
                "nome" => 'GUIRATINGA',
            ],
            [
                "codigo_ibge" => 5104500,
                "estado_id" => 25,
                "nome" => 'INDIAVAÍ',
            ],
            [
                "codigo_ibge" => 5104526,
                "estado_id" => 25,
                "nome" => 'IPIRANGA DO NORTE',
            ],
            [
                "codigo_ibge" => 5104542,
                "estado_id" => 25,
                "nome" => 'ITANHANGÁ',
            ],
            [
                "codigo_ibge" => 5104559,
                "estado_id" => 25,
                "nome" => 'ITAÚBA',
            ],
            [
                "codigo_ibge" => 5104609,
                "estado_id" => 25,
                "nome" => 'ITIQUIRA',
            ],
            [
                "codigo_ibge" => 5104807,
                "estado_id" => 25,
                "nome" => 'JACIARA',
            ],
            [
                "codigo_ibge" => 5104906,
                "estado_id" => 25,
                "nome" => 'JANGADA',
            ],
            [
                "codigo_ibge" => 5105002,
                "estado_id" => 25,
                "nome" => 'JAURU',
            ],
            [
                "codigo_ibge" => 5105101,
                "estado_id" => 25,
                "nome" => 'JUARA',
            ],
            [
                "codigo_ibge" => 5105150,
                "estado_id" => 25,
                "nome" => 'JUÍNA',
            ],
            [
                "codigo_ibge" => 5105176,
                "estado_id" => 25,
                "nome" => 'JURUENA',
            ],
            [
                "codigo_ibge" => 5105200,
                "estado_id" => 25,
                "nome" => 'JUSCIMEIRA',
            ],
            [
                "codigo_ibge" => 5105234,
                "estado_id" => 25,
                "nome" => 'LAMBARI D`OESTE',
            ],
            [
                "codigo_ibge" => 5105259,
                "estado_id" => 25,
                "nome" => 'LUCAS DO RIO VERDE',
            ],
            [
                "codigo_ibge" => 5105309,
                "estado_id" => 25,
                "nome" => 'LUCIÁRA',
            ],
            [
                "codigo_ibge" => 5105507,
                "estado_id" => 25,
                "nome" => 'VILA BELA DA SANTÍSSIMA TRINDADE',
            ],
            [
                "codigo_ibge" => 5105580,
                "estado_id" => 25,
                "nome" => 'MARCELÂNDIA',
            ],
            [
                "codigo_ibge" => 5105606,
                "estado_id" => 25,
                "nome" => 'MATUPÁ',
            ],
            [
                "codigo_ibge" => 5105622,
                "estado_id" => 25,
                "nome" => 'MIRASSOL D`OESTE',
            ],
            [
                "codigo_ibge" => 5105903,
                "estado_id" => 25,
                "nome" => 'NOBRES',
            ],
            [
                "codigo_ibge" => 5106000,
                "estado_id" => 25,
                "nome" => 'NORTELÂNDIA',
            ],
            [
                "codigo_ibge" => 5106109,
                "estado_id" => 25,
                "nome" => 'NOSSA SENHORA DO LIVRAMENTO',
            ],
            [
                "codigo_ibge" => 5106158,
                "estado_id" => 25,
                "nome" => 'NOVA BANDEIRANTES',
            ],
            [
                "codigo_ibge" => 5106174,
                "estado_id" => 25,
                "nome" => 'NOVA NAZARÉ',
            ],
            [
                "codigo_ibge" => 5106182,
                "estado_id" => 25,
                "nome" => 'NOVA LACERDA',
            ],
            [
                "codigo_ibge" => 5106190,
                "estado_id" => 25,
                "nome" => 'NOVA SANTA HELENA',
            ],
            [
                "codigo_ibge" => 5106208,
                "estado_id" => 25,
                "nome" => 'NOVA BRASILÂNDIA',
            ],
            [
                "codigo_ibge" => 5106216,
                "estado_id" => 25,
                "nome" => 'NOVA CANAÃ DO NORTE',
            ],
            [
                "codigo_ibge" => 5106224,
                "estado_id" => 25,
                "nome" => 'NOVA MUTUM',
            ],
            [
                "codigo_ibge" => 5106232,
                "estado_id" => 25,
                "nome" => 'NOVA OLÍMPIA',
            ],
            [
                "codigo_ibge" => 5106240,
                "estado_id" => 25,
                "nome" => 'NOVA UBIRATÃ',
            ],
            [
                "codigo_ibge" => 5106257,
                "estado_id" => 25,
                "nome" => 'NOVA XAVANTINA',
            ],
            [
                "codigo_ibge" => 5106265,
                "estado_id" => 25,
                "nome" => 'NOVO MUNDO',
            ],
            [
                "codigo_ibge" => 5106273,
                "estado_id" => 25,
                "nome" => 'NOVO HORIZONTE DO NORTE',
            ],
            [
                "codigo_ibge" => 5106281,
                "estado_id" => 25,
                "nome" => 'NOVO SÃO JOAQUIM',
            ],
            [
                "codigo_ibge" => 5106299,
                "estado_id" => 25,
                "nome" => 'PARANAÍTA',
            ],
            [
                "codigo_ibge" => 5106307,
                "estado_id" => 25,
                "nome" => 'PARANATINGA',
            ],
            [
                "codigo_ibge" => 5106315,
                "estado_id" => 25,
                "nome" => 'NOVO SANTO ANTÔNIO',
            ],
            [
                "codigo_ibge" => 5106372,
                "estado_id" => 25,
                "nome" => 'PEDRA PRETA',
            ],
            [
                "codigo_ibge" => 5106422,
                "estado_id" => 25,
                "nome" => 'PEIXOTO DE AZEVEDO',
            ],
            [
                "codigo_ibge" => 5106455,
                "estado_id" => 25,
                "nome" => 'PLANALTO DA SERRA',
            ],
            [
                "codigo_ibge" => 5106505,
                "estado_id" => 25,
                "nome" => 'POCONÉ',
            ],
            [
                "codigo_ibge" => 5106653,
                "estado_id" => 25,
                "nome" => 'PONTAL DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 5106703,
                "estado_id" => 25,
                "nome" => 'PONTE BRANCA',
            ],
            [
                "codigo_ibge" => 5106752,
                "estado_id" => 25,
                "nome" => 'PONTES E LACERDA',
            ],
            [
                "codigo_ibge" => 5106778,
                "estado_id" => 25,
                "nome" => 'PORTO ALEGRE DO NORTE',
            ],
            [
                "codigo_ibge" => 5106802,
                "estado_id" => 25,
                "nome" => 'PORTO DOS GAÚCHOS',
            ],
            [
                "codigo_ibge" => 5106828,
                "estado_id" => 25,
                "nome" => 'PORTO ESPERIDIÃO',
            ],
            [
                "codigo_ibge" => 5106851,
                "estado_id" => 25,
                "nome" => 'PORTO ESTRELA',
            ],
            [
                "codigo_ibge" => 5107008,
                "estado_id" => 25,
                "nome" => 'POXORÉO',
            ],
            [
                "codigo_ibge" => 5107040,
                "estado_id" => 25,
                "nome" => 'PRIMAVERA DO LESTE',
            ],
            [
                "codigo_ibge" => 5107065,
                "estado_id" => 25,
                "nome" => 'QUERÊNCIA',
            ],
            [
                "codigo_ibge" => 5107107,
                "estado_id" => 25,
                "nome" => 'SÃO JOSÉ DOS QUATRO MARCOS',
            ],
            [
                "codigo_ibge" => 5107156,
                "estado_id" => 25,
                "nome" => 'RESERVA DO CABAÇAL',
            ],
            [
                "codigo_ibge" => 5107180,
                "estado_id" => 25,
                "nome" => 'RIBEIRÃO CASCALHEIRA',
            ],
            [
                "codigo_ibge" => 5107198,
                "estado_id" => 25,
                "nome" => 'RIBEIRÃOZINHO',
            ],
            [
                "codigo_ibge" => 5107206,
                "estado_id" => 25,
                "nome" => 'RIO BRANCO',
            ],
            [
                "codigo_ibge" => 5107248,
                "estado_id" => 25,
                "nome" => 'SANTA CARMEM',
            ],
            [
                "codigo_ibge" => 5107263,
                "estado_id" => 25,
                "nome" => 'SANTO AFONSO',
            ],
            [
                "codigo_ibge" => 5107297,
                "estado_id" => 25,
                "nome" => 'SÃO JOSÉ DO POVO',
            ],
            [
                "codigo_ibge" => 5107305,
                "estado_id" => 25,
                "nome" => 'SÃO JOSÉ DO RIO CLARO',
            ],
            [
                "codigo_ibge" => 5107354,
                "estado_id" => 25,
                "nome" => 'SÃO JOSÉ DO XINGU',
            ],
            [
                "codigo_ibge" => 5107404,
                "estado_id" => 25,
                "nome" => 'SÃO PEDRO DA CIPA',
            ],
            [
                "codigo_ibge" => 5107578,
                "estado_id" => 25,
                "nome" => 'RONDOLÂNDIA',
            ],
            [
                "codigo_ibge" => 5107602,
                "estado_id" => 25,
                "nome" => 'RONDONÓPOLIS',
            ],
            [
                "codigo_ibge" => 5107701,
                "estado_id" => 25,
                "nome" => 'ROSÁRIO OESTE',
            ],
            [
                "codigo_ibge" => 5107743,
                "estado_id" => 25,
                "nome" => 'SANTA CRUZ DO XINGU',
            ],
            [
                "codigo_ibge" => 5107750,
                "estado_id" => 25,
                "nome" => 'SALTO DO CÉU',
            ],
            [
                "codigo_ibge" => 5107768,
                "estado_id" => 25,
                "nome" => 'SANTA RITA DO TRIVELATO',
            ],
            [
                "codigo_ibge" => 5107776,
                "estado_id" => 25,
                "nome" => 'SANTA TEREZINHA',
            ],
            [
                "codigo_ibge" => 5107792,
                "estado_id" => 25,
                "nome" => 'SANTO ANTÔNIO DO LESTE',
            ],
            [
                "codigo_ibge" => 5107800,
                "estado_id" => 25,
                "nome" => 'SANTO ANTÔNIO DO LEVERGER',
            ],
            [
                "codigo_ibge" => 5107859,
                "estado_id" => 25,
                "nome" => 'SÃO FÉLIX DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 5107875,
                "estado_id" => 25,
                "nome" => 'SAPEZAL',
            ],
            [
                "codigo_ibge" => 5107883,
                "estado_id" => 25,
                "nome" => 'SERRA NOVA DOURADA',
            ],
            [
                "codigo_ibge" => 5107909,
                "estado_id" => 25,
                "nome" => 'SINOP',
            ],
            [
                "codigo_ibge" => 5107925,
                "estado_id" => 25,
                "nome" => 'SORRISO',
            ],
            [
                "codigo_ibge" => 5107941,
                "estado_id" => 25,
                "nome" => 'TABAPORÃ',
            ],
            [
                "codigo_ibge" => 5107958,
                "estado_id" => 25,
                "nome" => 'TANGARÁ DA SERRA',
            ],
            [
                "codigo_ibge" => 5108006,
                "estado_id" => 25,
                "nome" => 'TAPURAH',
            ],
            [
                "codigo_ibge" => 5108055,
                "estado_id" => 25,
                "nome" => 'TERRA NOVA DO NORTE',
            ],
            [
                "codigo_ibge" => 5108105,
                "estado_id" => 25,
                "nome" => 'TESOURO',
            ],
            [
                "codigo_ibge" => 5108204,
                "estado_id" => 25,
                "nome" => 'TORIXORÉU',
            ],
            [
                "codigo_ibge" => 5108303,
                "estado_id" => 25,
                "nome" => 'UNIÃO DO SUL',
            ],
            [
                "codigo_ibge" => 5108352,
                "estado_id" => 25,
                "nome" => 'VALE DE SÃO DOMINGOS',
            ],
            [
                "codigo_ibge" => 5108402,
                "estado_id" => 25,
                "nome" => 'VÁRZEA GRANDE',
            ],
            [
                "codigo_ibge" => 5108501,
                "estado_id" => 25,
                "nome" => 'VERA',
            ],
            [
                "codigo_ibge" => 5108600,
                "estado_id" => 25,
                "nome" => 'VILA RICA',
            ],
            [
                "codigo_ibge" => 5108808,
                "estado_id" => 25,
                "nome" => 'NOVA GUARITA',
            ],
            [
                "codigo_ibge" => 5108857,
                "estado_id" => 25,
                "nome" => 'NOVA MARILÂNDIA',
            ],
            [
                "codigo_ibge" => 5108907,
                "estado_id" => 25,
                "nome" => 'NOVA MARINGÁ',
            ],
            [
                "codigo_ibge" => 5108956,
                "estado_id" => 25,
                "nome" => 'NOVA MONTE VERDE',
            ],
            [
                "codigo_ibge" => 5200050,
                "estado_id" => 26,
                "nome" => 'ABADIA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5200100,
                "estado_id" => 26,
                "nome" => 'ABADIÂNIA',
            ],
            [
                "codigo_ibge" => 5200134,
                "estado_id" => 26,
                "nome" => 'ACREÚNA',
            ],
            [
                "codigo_ibge" => 5200159,
                "estado_id" => 26,
                "nome" => 'ADELÂNDIA',
            ],
            [
                "codigo_ibge" => 5200175,
                "estado_id" => 26,
                "nome" => 'ÁGUA FRIA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5200209,
                "estado_id" => 26,
                "nome" => 'ÁGUA LIMPA',
            ],
            [
                "codigo_ibge" => 5200258,
                "estado_id" => 26,
                "nome" => 'ÁGUAS LINDAS DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5200308,
                "estado_id" => 26,
                "nome" => 'ALEXÂNIA',
            ],
            [
                "codigo_ibge" => 5200506,
                "estado_id" => 26,
                "nome" => 'ALOÂNDIA',
            ],
            [
                "codigo_ibge" => 5200555,
                "estado_id" => 26,
                "nome" => 'ALTO HORIZONTE',
            ],
            [
                "codigo_ibge" => 5200605,
                "estado_id" => 26,
                "nome" => 'ALTO PARAÍSO DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5200803,
                "estado_id" => 26,
                "nome" => 'ALVORADA DO NORTE',
            ],
            [
                "codigo_ibge" => 5200829,
                "estado_id" => 26,
                "nome" => 'AMARALINA',
            ],
            [
                "codigo_ibge" => 5200852,
                "estado_id" => 26,
                "nome" => 'AMERICANO DO BRASIL',
            ],
            [
                "codigo_ibge" => 5200902,
                "estado_id" => 26,
                "nome" => 'AMORINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5201108,
                "estado_id" => 26,
                "nome" => 'ANÁPOLIS',
            ],
            [
                "codigo_ibge" => 5201207,
                "estado_id" => 26,
                "nome" => 'ANHANGUERA',
            ],
            [
                "codigo_ibge" => 5201306,
                "estado_id" => 26,
                "nome" => 'ANICUNS',
            ],
            [
                "codigo_ibge" => 5201405,
                "estado_id" => 26,
                "nome" => 'APARECIDA DE GOIÂNIA',
            ],
            [
                "codigo_ibge" => 5201454,
                "estado_id" => 26,
                "nome" => 'APARECIDA DO RIO DOCE',
            ],
            [
                "codigo_ibge" => 5201504,
                "estado_id" => 26,
                "nome" => 'APORÉ',
            ],
            [
                "codigo_ibge" => 5201603,
                "estado_id" => 26,
                "nome" => 'ARAÇU',
            ],
            [
                "codigo_ibge" => 5201702,
                "estado_id" => 26,
                "nome" => 'ARAGARÇAS',
            ],
            [
                "codigo_ibge" => 5201801,
                "estado_id" => 26,
                "nome" => 'ARAGOIÂNIA',
            ],
            [
                "codigo_ibge" => 5202155,
                "estado_id" => 26,
                "nome" => 'ARAGUAPAZ',
            ],
            [
                "codigo_ibge" => 5202353,
                "estado_id" => 26,
                "nome" => 'ARENÓPOLIS',
            ],
            [
                "codigo_ibge" => 5202502,
                "estado_id" => 26,
                "nome" => 'ARUANÃ',
            ],
            [
                "codigo_ibge" => 5202601,
                "estado_id" => 26,
                "nome" => 'AURILÂNDIA',
            ],
            [
                "codigo_ibge" => 5202809,
                "estado_id" => 26,
                "nome" => 'AVELINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5203104,
                "estado_id" => 26,
                "nome" => 'BALIZA',
            ],
            [
                "codigo_ibge" => 5203203,
                "estado_id" => 26,
                "nome" => 'BARRO ALTO',
            ],
            [
                "codigo_ibge" => 5203302,
                "estado_id" => 26,
                "nome" => 'BELA VISTA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5203401,
                "estado_id" => 26,
                "nome" => 'BOM JARDIM DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5203500,
                "estado_id" => 26,
                "nome" => 'BOM JESUS DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5203559,
                "estado_id" => 26,
                "nome" => 'BONFINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5203575,
                "estado_id" => 26,
                "nome" => 'BONÓPOLIS',
            ],
            [
                "codigo_ibge" => 5203609,
                "estado_id" => 26,
                "nome" => 'BRAZABRANTES',
            ],
            [
                "codigo_ibge" => 5203807,
                "estado_id" => 26,
                "nome" => 'BRITÂNIA',
            ],
            [
                "codigo_ibge" => 5203906,
                "estado_id" => 26,
                "nome" => 'BURITI ALEGRE',
            ],
            [
                "codigo_ibge" => 5203939,
                "estado_id" => 26,
                "nome" => 'BURITI DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5203962,
                "estado_id" => 26,
                "nome" => 'BURITINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5204003,
                "estado_id" => 26,
                "nome" => 'CABECEIRAS',
            ],
            [
                "codigo_ibge" => 5204102,
                "estado_id" => 26,
                "nome" => 'CACHOEIRA ALTA',
            ],
            [
                "codigo_ibge" => 5204201,
                "estado_id" => 26,
                "nome" => 'CACHOEIRA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5204250,
                "estado_id" => 26,
                "nome" => 'CACHOEIRA DOURADA',
            ],
            [
                "codigo_ibge" => 5204300,
                "estado_id" => 26,
                "nome" => 'CAÇU',
            ],
            [
                "codigo_ibge" => 5204409,
                "estado_id" => 26,
                "nome" => 'CAIAPÔNIA',
            ],
            [
                "codigo_ibge" => 5204508,
                "estado_id" => 26,
                "nome" => 'CALDAS NOVAS',
            ],
            [
                "codigo_ibge" => 5204557,
                "estado_id" => 26,
                "nome" => 'CALDAZINHA',
            ],
            [
                "codigo_ibge" => 5204607,
                "estado_id" => 26,
                "nome" => 'CAMPESTRE DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5204656,
                "estado_id" => 26,
                "nome" => 'CAMPINAÇU',
            ],
            [
                "codigo_ibge" => 5204706,
                "estado_id" => 26,
                "nome" => 'CAMPINORTE',
            ],
            [
                "codigo_ibge" => 5204805,
                "estado_id" => 26,
                "nome" => 'CAMPO ALEGRE DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5204854,
                "estado_id" => 26,
                "nome" => 'CAMPO LIMPO DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5204904,
                "estado_id" => 26,
                "nome" => 'CAMPOS BELOS',
            ],
            [
                "codigo_ibge" => 5204953,
                "estado_id" => 26,
                "nome" => 'CAMPOS VERDES',
            ],
            [
                "codigo_ibge" => 5205000,
                "estado_id" => 26,
                "nome" => 'CARMO DO RIO VERDE',
            ],
            [
                "codigo_ibge" => 5205059,
                "estado_id" => 26,
                "nome" => 'CASTELÂNDIA',
            ],
            [
                "codigo_ibge" => 5205109,
                "estado_id" => 26,
                "nome" => 'CATALÃO',
            ],
            [
                "codigo_ibge" => 5205208,
                "estado_id" => 26,
                "nome" => 'CATURAÍ',
            ],
            [
                "codigo_ibge" => 5205307,
                "estado_id" => 26,
                "nome" => 'CAVALCANTE',
            ],
            [
                "codigo_ibge" => 5205406,
                "estado_id" => 26,
                "nome" => 'CERES',
            ],
            [
                "codigo_ibge" => 5205455,
                "estado_id" => 26,
                "nome" => 'CEZARINA',
            ],
            [
                "codigo_ibge" => 5205471,
                "estado_id" => 26,
                "nome" => 'CHAPADÃO DO CÉU',
            ],
            [
                "codigo_ibge" => 5205497,
                "estado_id" => 26,
                "nome" => 'CIDADE OCIDENTAL',
            ],
            [
                "codigo_ibge" => 5205513,
                "estado_id" => 26,
                "nome" => 'COCALZINHO DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5205521,
                "estado_id" => 26,
                "nome" => 'COLINAS DO SUL',
            ],
            [
                "codigo_ibge" => 5205703,
                "estado_id" => 26,
                "nome" => 'CÓRREGO DO OURO',
            ],
            [
                "codigo_ibge" => 5205802,
                "estado_id" => 26,
                "nome" => 'CORUMBÁ DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5205901,
                "estado_id" => 26,
                "nome" => 'CORUMBAÍBA',
            ],
            [
                "codigo_ibge" => 5206206,
                "estado_id" => 26,
                "nome" => 'CRISTALINA',
            ],
            [
                "codigo_ibge" => 5206305,
                "estado_id" => 26,
                "nome" => 'CRISTIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 5206404,
                "estado_id" => 26,
                "nome" => 'CRIXÁS',
            ],
            [
                "codigo_ibge" => 5206503,
                "estado_id" => 26,
                "nome" => 'CROMÍNIA',
            ],
            [
                "codigo_ibge" => 5206602,
                "estado_id" => 26,
                "nome" => 'CUMARI',
            ],
            [
                "codigo_ibge" => 5206701,
                "estado_id" => 26,
                "nome" => 'DAMIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 5206800,
                "estado_id" => 26,
                "nome" => 'DAMOLÂNDIA',
            ],
            [
                "codigo_ibge" => 5206909,
                "estado_id" => 26,
                "nome" => 'DAVINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5207105,
                "estado_id" => 26,
                "nome" => 'DIORAMA',
            ],
            [
                "codigo_ibge" => 5207253,
                "estado_id" => 26,
                "nome" => 'DOVERLÂNDIA',
            ],
            [
                "codigo_ibge" => 5207352,
                "estado_id" => 26,
                "nome" => 'EDEALINA',
            ],
            [
                "codigo_ibge" => 5207402,
                "estado_id" => 26,
                "nome" => 'EDÉIA',
            ],
            [
                "codigo_ibge" => 5207501,
                "estado_id" => 26,
                "nome" => 'ESTRELA DO NORTE',
            ],
            [
                "codigo_ibge" => 5207535,
                "estado_id" => 26,
                "nome" => 'FAINA',
            ],
            [
                "codigo_ibge" => 5207600,
                "estado_id" => 26,
                "nome" => 'FAZENDA NOVA',
            ],
            [
                "codigo_ibge" => 5207808,
                "estado_id" => 26,
                "nome" => 'FIRMINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5207907,
                "estado_id" => 26,
                "nome" => 'FLORES DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5208004,
                "estado_id" => 26,
                "nome" => 'FORMOSA',
            ],
            [
                "codigo_ibge" => 5208103,
                "estado_id" => 26,
                "nome" => 'FORMOSO',
            ],
            [
                "codigo_ibge" => 5208152,
                "estado_id" => 26,
                "nome" => 'GAMELEIRA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5208301,
                "estado_id" => 26,
                "nome" => 'DIVINÓPOLIS DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5208400,
                "estado_id" => 26,
                "nome" => 'GOIANÁPOLIS',
            ],
            [
                "codigo_ibge" => 5208509,
                "estado_id" => 26,
                "nome" => 'GOIANDIRA',
            ],
            [
                "codigo_ibge" => 5208608,
                "estado_id" => 26,
                "nome" => 'GOIANÉSIA',
            ],
            [
                "codigo_ibge" => 5208707,
                "estado_id" => 26,
                "nome" => 'GOIÂNIA',
            ],
            [
                "codigo_ibge" => 5208806,
                "estado_id" => 26,
                "nome" => 'GOIANIRA',
            ],
            [
                "codigo_ibge" => 5208905,
                "estado_id" => 26,
                "nome" => 'GOIÁS',
            ],
            [
                "codigo_ibge" => 5209101,
                "estado_id" => 26,
                "nome" => 'GOIATUBA',
            ],
            [
                "codigo_ibge" => 5209150,
                "estado_id" => 26,
                "nome" => 'GOUVELÂNDIA',
            ],
            [
                "codigo_ibge" => 5209200,
                "estado_id" => 26,
                "nome" => 'GUAPÓ',
            ],
            [
                "codigo_ibge" => 5209291,
                "estado_id" => 26,
                "nome" => 'GUARAÍTA',
            ],
            [
                "codigo_ibge" => 5209408,
                "estado_id" => 26,
                "nome" => 'GUARANI DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5209457,
                "estado_id" => 26,
                "nome" => 'GUARINOS',
            ],
            [
                "codigo_ibge" => 5209606,
                "estado_id" => 26,
                "nome" => 'HEITORAÍ',
            ],
            [
                "codigo_ibge" => 5209705,
                "estado_id" => 26,
                "nome" => 'HIDROLÂNDIA',
            ],
            [
                "codigo_ibge" => 5209804,
                "estado_id" => 26,
                "nome" => 'HIDROLINA',
            ],
            [
                "codigo_ibge" => 5209903,
                "estado_id" => 26,
                "nome" => 'IACIARA',
            ],
            [
                "codigo_ibge" => 5209937,
                "estado_id" => 26,
                "nome" => 'INACIOLÂNDIA',
            ],
            [
                "codigo_ibge" => 5209952,
                "estado_id" => 26,
                "nome" => 'INDIARA',
            ],
            [
                "codigo_ibge" => 5210000,
                "estado_id" => 26,
                "nome" => 'INHUMAS',
            ],
            [
                "codigo_ibge" => 5210109,
                "estado_id" => 26,
                "nome" => 'IPAMERI',
            ],
            [
                "codigo_ibge" => 5210158,
                "estado_id" => 26,
                "nome" => 'IPIRANGA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5210208,
                "estado_id" => 26,
                "nome" => 'IPORÁ',
            ],
            [
                "codigo_ibge" => 5210307,
                "estado_id" => 26,
                "nome" => 'ISRAELÂNDIA',
            ],
            [
                "codigo_ibge" => 5210406,
                "estado_id" => 26,
                "nome" => 'ITABERAÍ',
            ],
            [
                "codigo_ibge" => 5210562,
                "estado_id" => 26,
                "nome" => 'ITAGUARI',
            ],
            [
                "codigo_ibge" => 5210604,
                "estado_id" => 26,
                "nome" => 'ITAGUARU',
            ],
            [
                "codigo_ibge" => 5210802,
                "estado_id" => 26,
                "nome" => 'ITAJÁ',
            ],
            [
                "codigo_ibge" => 5210901,
                "estado_id" => 26,
                "nome" => 'ITAPACI',
            ],
            [
                "codigo_ibge" => 5211008,
                "estado_id" => 26,
                "nome" => 'ITAPIRAPUÃ',
            ],
            [
                "codigo_ibge" => 5211206,
                "estado_id" => 26,
                "nome" => 'ITAPURANGA',
            ],
            [
                "codigo_ibge" => 5211305,
                "estado_id" => 26,
                "nome" => 'ITARUMÃ',
            ],
            [
                "codigo_ibge" => 5211404,
                "estado_id" => 26,
                "nome" => 'ITAUÇU',
            ],
            [
                "codigo_ibge" => 5211503,
                "estado_id" => 26,
                "nome" => 'ITUMBIARA',
            ],
            [
                "codigo_ibge" => 5211602,
                "estado_id" => 26,
                "nome" => 'IVOLÂNDIA',
            ],
            [
                "codigo_ibge" => 5211701,
                "estado_id" => 26,
                "nome" => 'JANDAIA',
            ],
            [
                "codigo_ibge" => 5211800,
                "estado_id" => 26,
                "nome" => 'JARAGUÁ',
            ],
            [
                "codigo_ibge" => 5211909,
                "estado_id" => 26,
                "nome" => 'JATAÍ',
            ],
            [
                "codigo_ibge" => 5212006,
                "estado_id" => 26,
                "nome" => 'JAUPACI',
            ],
            [
                "codigo_ibge" => 5212055,
                "estado_id" => 26,
                "nome" => 'JESÚPOLIS',
            ],
            [
                "codigo_ibge" => 5212105,
                "estado_id" => 26,
                "nome" => 'JOVIÂNIA',
            ],
            [
                "codigo_ibge" => 5212204,
                "estado_id" => 26,
                "nome" => 'JUSSARA',
            ],
            [
                "codigo_ibge" => 5212253,
                "estado_id" => 26,
                "nome" => 'LAGOA SANTA',
            ],
            [
                "codigo_ibge" => 5212303,
                "estado_id" => 26,
                "nome" => 'LEOPOLDO DE BULHÕES',
            ],
            [
                "codigo_ibge" => 5212501,
                "estado_id" => 26,
                "nome" => 'LUZIÂNIA',
            ],
            [
                "codigo_ibge" => 5212600,
                "estado_id" => 26,
                "nome" => 'MAIRIPOTABA',
            ],
            [
                "codigo_ibge" => 5212709,
                "estado_id" => 26,
                "nome" => 'MAMBAÍ',
            ],
            [
                "codigo_ibge" => 5212808,
                "estado_id" => 26,
                "nome" => 'MARA ROSA',
            ],
            [
                "codigo_ibge" => 5212907,
                "estado_id" => 26,
                "nome" => 'MARZAGÃO',
            ],
            [
                "codigo_ibge" => 5212956,
                "estado_id" => 26,
                "nome" => 'MATRINCHÃ',
            ],
            [
                "codigo_ibge" => 5213004,
                "estado_id" => 26,
                "nome" => 'MAURILÂNDIA',
            ],
            [
                "codigo_ibge" => 5213053,
                "estado_id" => 26,
                "nome" => 'MIMOSO DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5213087,
                "estado_id" => 26,
                "nome" => 'MINAÇU',
            ],
            [
                "codigo_ibge" => 5213103,
                "estado_id" => 26,
                "nome" => 'MINEIROS',
            ],
            [
                "codigo_ibge" => 5213400,
                "estado_id" => 26,
                "nome" => 'MOIPORÁ',
            ],
            [
                "codigo_ibge" => 5213509,
                "estado_id" => 26,
                "nome" => 'MONTE ALEGRE DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5213707,
                "estado_id" => 26,
                "nome" => 'MONTES CLAROS DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5213756,
                "estado_id" => 26,
                "nome" => 'MONTIVIDIU',
            ],
            [
                "codigo_ibge" => 5213772,
                "estado_id" => 26,
                "nome" => 'MONTIVIDIU DO NORTE',
            ],
            [
                "codigo_ibge" => 5213806,
                "estado_id" => 26,
                "nome" => 'MORRINHOS',
            ],
            [
                "codigo_ibge" => 5213855,
                "estado_id" => 26,
                "nome" => 'MORRO AGUDO DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5213905,
                "estado_id" => 26,
                "nome" => 'MOSSÂMEDES',
            ],
            [
                "codigo_ibge" => 5214002,
                "estado_id" => 26,
                "nome" => 'MOZARLÂNDIA',
            ],
            [
                "codigo_ibge" => 5214051,
                "estado_id" => 26,
                "nome" => 'MUNDO NOVO',
            ],
            [
                "codigo_ibge" => 5214101,
                "estado_id" => 26,
                "nome" => 'MUTUNÓPOLIS',
            ],
            [
                "codigo_ibge" => 5214408,
                "estado_id" => 26,
                "nome" => 'NAZÁRIO',
            ],
            [
                "codigo_ibge" => 5214507,
                "estado_id" => 26,
                "nome" => 'NERÓPOLIS',
            ],
            [
                "codigo_ibge" => 5214606,
                "estado_id" => 26,
                "nome" => 'NIQUELÂNDIA',
            ],
            [
                "codigo_ibge" => 5214705,
                "estado_id" => 26,
                "nome" => 'NOVA AMÉRICA',
            ],
            [
                "codigo_ibge" => 5214804,
                "estado_id" => 26,
                "nome" => 'NOVA AURORA',
            ],
            [
                "codigo_ibge" => 5214838,
                "estado_id" => 26,
                "nome" => 'NOVA CRIXÁS',
            ],
            [
                "codigo_ibge" => 5214861,
                "estado_id" => 26,
                "nome" => 'NOVA GLÓRIA',
            ],
            [
                "codigo_ibge" => 5214879,
                "estado_id" => 26,
                "nome" => 'NOVA IGUAÇU DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5214903,
                "estado_id" => 26,
                "nome" => 'NOVA ROMA',
            ],
            [
                "codigo_ibge" => 5215009,
                "estado_id" => 26,
                "nome" => 'NOVA VENEZA',
            ],
            [
                "codigo_ibge" => 5215207,
                "estado_id" => 26,
                "nome" => 'NOVO BRASIL',
            ],
            [
                "codigo_ibge" => 5215231,
                "estado_id" => 26,
                "nome" => 'NOVO GAMA',
            ],
            [
                "codigo_ibge" => 5215256,
                "estado_id" => 26,
                "nome" => 'NOVO PLANALTO',
            ],
            [
                "codigo_ibge" => 5215306,
                "estado_id" => 26,
                "nome" => 'ORIZONA',
            ],
            [
                "codigo_ibge" => 5215405,
                "estado_id" => 26,
                "nome" => 'OURO VERDE DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5215504,
                "estado_id" => 26,
                "nome" => 'OUVIDOR',
            ],
            [
                "codigo_ibge" => 5215603,
                "estado_id" => 26,
                "nome" => 'PADRE BERNARDO',
            ],
            [
                "codigo_ibge" => 5215652,
                "estado_id" => 26,
                "nome" => 'PALESTINA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5215702,
                "estado_id" => 26,
                "nome" => 'PALMEIRAS DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5215801,
                "estado_id" => 26,
                "nome" => 'PALMELO',
            ],
            [
                "codigo_ibge" => 5215900,
                "estado_id" => 26,
                "nome" => 'PALMINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5216007,
                "estado_id" => 26,
                "nome" => 'PANAMÁ',
            ],
            [
                "codigo_ibge" => 5216304,
                "estado_id" => 26,
                "nome" => 'PARANAIGUARA',
            ],
            [
                "codigo_ibge" => 5216403,
                "estado_id" => 26,
                "nome" => 'PARAÚNA',
            ],
            [
                "codigo_ibge" => 5216452,
                "estado_id" => 26,
                "nome" => 'PEROLÂNDIA',
            ],
            [
                "codigo_ibge" => 5216809,
                "estado_id" => 26,
                "nome" => 'PETROLINA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5216908,
                "estado_id" => 26,
                "nome" => 'PILAR DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5217104,
                "estado_id" => 26,
                "nome" => 'PIRACANJUBA',
            ],
            [
                "codigo_ibge" => 5217203,
                "estado_id" => 26,
                "nome" => 'PIRANHAS',
            ],
            [
                "codigo_ibge" => 5217302,
                "estado_id" => 26,
                "nome" => 'PIRENÓPOLIS',
            ],
            [
                "codigo_ibge" => 5217401,
                "estado_id" => 26,
                "nome" => 'PIRES DO RIO',
            ],
            [
                "codigo_ibge" => 5217609,
                "estado_id" => 26,
                "nome" => 'PLANALTINA',
            ],
            [
                "codigo_ibge" => 5217708,
                "estado_id" => 26,
                "nome" => 'PONTALINA',
            ],
            [
                "codigo_ibge" => 5218003,
                "estado_id" => 26,
                "nome" => 'PORANGATU',
            ],
            [
                "codigo_ibge" => 5218052,
                "estado_id" => 26,
                "nome" => 'PORTEIRÃO',
            ],
            [
                "codigo_ibge" => 5218102,
                "estado_id" => 26,
                "nome" => 'PORTELÂNDIA',
            ],
            [
                "codigo_ibge" => 5218300,
                "estado_id" => 26,
                "nome" => 'POSSE',
            ],
            [
                "codigo_ibge" => 5218391,
                "estado_id" => 26,
                "nome" => 'PROFESSOR JAMIL',
            ],
            [
                "codigo_ibge" => 5218508,
                "estado_id" => 26,
                "nome" => 'QUIRINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5218607,
                "estado_id" => 26,
                "nome" => 'RIALMA',
            ],
            [
                "codigo_ibge" => 5218706,
                "estado_id" => 26,
                "nome" => 'RIANÁPOLIS',
            ],
            [
                "codigo_ibge" => 5218789,
                "estado_id" => 26,
                "nome" => 'RIO QUENTE',
            ],
            [
                "codigo_ibge" => 5218805,
                "estado_id" => 26,
                "nome" => 'RIO VERDE',
            ],
            [
                "codigo_ibge" => 5218904,
                "estado_id" => 26,
                "nome" => 'RUBIATABA',
            ],
            [
                "codigo_ibge" => 5219001,
                "estado_id" => 26,
                "nome" => 'SANCLERLÂNDIA',
            ],
            [
                "codigo_ibge" => 5219100,
                "estado_id" => 26,
                "nome" => 'SANTA BÁRBARA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5219209,
                "estado_id" => 26,
                "nome" => 'SANTA CRUZ DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5219258,
                "estado_id" => 26,
                "nome" => 'SANTA FÉ DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5219308,
                "estado_id" => 26,
                "nome" => 'SANTA HELENA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5219357,
                "estado_id" => 26,
                "nome" => 'SANTA ISABEL',
            ],
            [
                "codigo_ibge" => 5219407,
                "estado_id" => 26,
                "nome" => 'SANTA RITA DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 5219456,
                "estado_id" => 26,
                "nome" => 'SANTA RITA DO NOVO DESTINO',
            ],
            [
                "codigo_ibge" => 5219506,
                "estado_id" => 26,
                "nome" => 'SANTA ROSA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5219605,
                "estado_id" => 26,
                "nome" => 'SANTA TEREZA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5219704,
                "estado_id" => 26,
                "nome" => 'SANTA TEREZINHA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5219712,
                "estado_id" => 26,
                "nome" => 'SANTO ANTÔNIO DA BARRA',
            ],
            [
                "codigo_ibge" => 5219738,
                "estado_id" => 26,
                "nome" => 'SANTO ANTÔNIO DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5219753,
                "estado_id" => 26,
                "nome" => 'SANTO ANTÔNIO DO DESCOBERTO',
            ],
            [
                "codigo_ibge" => 5219803,
                "estado_id" => 26,
                "nome" => 'SÃO DOMINGOS',
            ],
            [
                "codigo_ibge" => 5219902,
                "estado_id" => 26,
                "nome" => 'SÃO FRANCISCO DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5220009,
                "estado_id" => 26,
                "nome" => 'SÃO JOÃO D`ALIANÇA',
            ],
            [
                "codigo_ibge" => 5220058,
                "estado_id" => 26,
                "nome" => 'SÃO JOÃO DA PARAÚNA',
            ],
            [
                "codigo_ibge" => 5220108,
                "estado_id" => 26,
                "nome" => 'SÃO LUÍS DE MONTES BELOS',
            ],
            [
                "codigo_ibge" => 5220157,
                "estado_id" => 26,
                "nome" => 'SÃO LUÍZ DO NORTE',
            ],
            [
                "codigo_ibge" => 5220207,
                "estado_id" => 26,
                "nome" => 'SÃO MIGUEL DO ARAGUAIA',
            ],
            [
                "codigo_ibge" => 5220264,
                "estado_id" => 26,
                "nome" => 'SÃO MIGUEL DO PASSA QUATRO',
            ],
            [
                "codigo_ibge" => 5220280,
                "estado_id" => 26,
                "nome" => 'SÃO PATRÍCIO',
            ],
            [
                "codigo_ibge" => 5220405,
                "estado_id" => 26,
                "nome" => 'SÃO SIMÃO',
            ],
            [
                "codigo_ibge" => 5220454,
                "estado_id" => 26,
                "nome" => 'SENADOR CANEDO',
            ],
            [
                "codigo_ibge" => 5220504,
                "estado_id" => 26,
                "nome" => 'SERRANÓPOLIS',
            ],
            [
                "codigo_ibge" => 5220603,
                "estado_id" => 26,
                "nome" => 'SILVÂNIA',
            ],
            [
                "codigo_ibge" => 5220686,
                "estado_id" => 26,
                "nome" => 'SIMOLÂNDIA',
            ],
            [
                "codigo_ibge" => 5220702,
                "estado_id" => 26,
                "nome" => 'SÍTIO D`ABADIA',
            ],
            [
                "codigo_ibge" => 5221007,
                "estado_id" => 26,
                "nome" => 'TAQUARAL DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5221080,
                "estado_id" => 26,
                "nome" => 'TERESINA DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5221197,
                "estado_id" => 26,
                "nome" => 'TEREZÓPOLIS DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5221304,
                "estado_id" => 26,
                "nome" => 'TRÊS RANCHOS',
            ],
            [
                "codigo_ibge" => 5221403,
                "estado_id" => 26,
                "nome" => 'TRINDADE',
            ],
            [
                "codigo_ibge" => 5221452,
                "estado_id" => 26,
                "nome" => 'TROMBAS',
            ],
            [
                "codigo_ibge" => 5221502,
                "estado_id" => 26,
                "nome" => 'TURVÂNIA',
            ],
            [
                "codigo_ibge" => 5221551,
                "estado_id" => 26,
                "nome" => 'TURVELÂNDIA',
            ],
            [
                "codigo_ibge" => 5221577,
                "estado_id" => 26,
                "nome" => 'UIRAPURU',
            ],
            [
                "codigo_ibge" => 5221601,
                "estado_id" => 26,
                "nome" => 'URUAÇU',
            ],
            [
                "codigo_ibge" => 5221700,
                "estado_id" => 26,
                "nome" => 'URUANA',
            ],
            [
                "codigo_ibge" => 5221809,
                "estado_id" => 26,
                "nome" => 'URUTAÍ',
            ],
            [
                "codigo_ibge" => 5221858,
                "estado_id" => 26,
                "nome" => 'VALPARAÍSO DE GOIÁS',
            ],
            [
                "codigo_ibge" => 5221908,
                "estado_id" => 26,
                "nome" => 'VARJÃO',
            ],
            [
                "codigo_ibge" => 5222005,
                "estado_id" => 26,
                "nome" => 'VIANÓPOLIS',
            ],
            [
                "codigo_ibge" => 5222054,
                "estado_id" => 26,
                "nome" => 'VICENTINÓPOLIS',
            ],
            [
                "codigo_ibge" => 5222203,
                "estado_id" => 26,
                "nome" => 'VILA BOA',
            ],
            [
                "codigo_ibge" => 5222302,
                "estado_id" => 26,
                "nome" => 'VILA PROPÍCIO',
            ],
            [
                "codigo_ibge" => 5300108,
                "estado_id" => 27,
                "nome" => 'BRASÍLIA',
            ],
        ];

        Cidade::insert($cidades);
    }
}
