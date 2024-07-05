<?php

namespace Database\Seeders;

use App\Models\Central\Pais;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Pais::truncate();
        Schema::enableForeignKeyConstraints();

        $paises = [
            [
                "nome" => 'AFEGANISTÃO',
                "codigo_bacen" => 132,
                "sigla" => 'AF',
            ],
            [
                "nome" => 'ÁFRICA DO SUL',
                "codigo_bacen" => 7560,
                "sigla" => 'ZA',
            ],
            [
                "nome" => 'ALBÂNIA',
                "codigo_bacen" => 175,
                "sigla" => 'AL',
            ],
            [
                "nome" => 'ALEMANHA',
                "codigo_bacen" => 230,
                "sigla" => 'DE',
            ],
            [
                "nome" => 'ANDORRA',
                "codigo_bacen" => 370,
                "sigla" => 'AD',
            ],
            [
                "nome" => 'ANGOLA',
                "codigo_bacen" => 400,
                "sigla" => 'AO',
            ],
            [
                "nome" => 'ANGUILA',
                "codigo_bacen" => 418,
                "sigla" => 'AI',
            ],
            [
                "nome" => 'ANTÁRTICA',
                "codigo_bacen" => null,
                "sigla" => 'AQ',
            ],
            [
                "nome" => 'ANTÍGUA E BARBUDA',
                "codigo_bacen" => 434,
                "sigla" => 'AG',
            ],
            [
                "nome" => 'ARÁBIA SAUDITA',
                "codigo_bacen" => 531,
                "sigla" => 'SA',
            ],
            [
                "nome" => 'ARGÉLIA',
                "codigo_bacen" => 590,
                "sigla" => 'DZ',
            ],
            [
                "nome" => 'ARGENTINA',
                "codigo_bacen" => 639,
                "sigla" => 'AR',
            ],
            [
                "nome" => 'ARMÊNIA',
                "codigo_bacen" => 647,
                "sigla" => 'AM',
            ],
            [
                "nome" => 'ARUBA',
                "codigo_bacen" => 655,
                "sigla" => 'AW',
            ],
            [
                "nome" => 'AUSTRÁLIA',
                "codigo_bacen" => 698,
                "sigla" => 'AU',
            ],
            [
                "nome" => 'ÁUSTRIA',
                "codigo_bacen" => 728,
                "sigla" => 'AT',
            ],
            [
                "nome" => 'AZERBAIJÃO',
                "codigo_bacen" => 736,
                "sigla" => 'AZ',
            ],
            [
                "nome" => 'BAHAMAS',
                "codigo_bacen" => 779,
                "sigla" => 'BS',
            ],
            [
                "nome" => 'BAHREIN',
                "codigo_bacen" => 809,
                "sigla" => 'BH',
            ],
            [
                "nome" => 'BANGLADESH',
                "codigo_bacen" => 817,
                "sigla" => 'BD',
            ],
            [
                "nome" => 'BARBADOS',
                "codigo_bacen" => 833,
                "sigla" => 'BB',
            ],
            [
                "nome" => 'BELARUS',
                "codigo_bacen" => 850,
                "sigla" => 'BY',
            ],
            [
                "nome" => 'BÉLGICA',
                "codigo_bacen" => 876,
                "sigla" => 'BE',
            ],
            [
                "nome" => 'BELIZE',
                "codigo_bacen" => 884,
                "sigla" => 'BZ',
            ],
            [
                "nome" => 'BENIN',
                "codigo_bacen" => 2291,
                "sigla" => 'BJ',
            ],
            [
                "nome" => 'BERMUDAS',
                "codigo_bacen" => 906,
                "sigla" => 'BM',
            ],
            [
                "nome" => 'BOLÍVIA',
                "codigo_bacen" => 973,
                "sigla" => 'BO',
            ],
            [
                "nome" => 'BÓSNIA E HERZEGOVINA',
                "codigo_bacen" => 981,
                "sigla" => 'BA',
            ],
            [
                "nome" => 'BOTSUANA',
                "codigo_bacen" => 1015,
                "sigla" => 'BW',
            ],
            [
                "nome" => 'BRASIL',
                "codigo_bacen" => 1058,
                "sigla" => 'BR',
            ],
            [
                "nome" => 'BRUNEI',
                "codigo_bacen" => 1082,
                "sigla" => 'BN',
            ],
            [
                "nome" => 'BULGÁRIA',
                "codigo_bacen" => 1112,
                "sigla" => 'BG',
            ],
            [
                "nome" => 'BURKINA FASO',
                "codigo_bacen" => 310,
                "sigla" => 'BF',
            ],
            [
                "nome" => 'BURUNDI',
                "codigo_bacen" => 1155,
                "sigla" => 'BI',
            ],
            [
                "nome" => 'BUTÃO',
                "codigo_bacen" => 1198,
                "sigla" => 'BT',
            ],
            [
                "nome" => 'CABO VERDE',
                "codigo_bacen" => 1279,
                "sigla" => 'CV',
            ],
            [
                "nome" => 'CAMARÕES',
                "codigo_bacen" => 1457,
                "sigla" => 'CM',
            ],
            [
                "nome" => 'CAMBOJA',
                "codigo_bacen" => 1414,
                "sigla" => 'KH',
            ],
            [
                "nome" => 'CANADÁ',
                "codigo_bacen" => 1490,
                "sigla" => 'CA',
            ],
            [
                "nome" => 'CAZAQUISTÃO',
                "codigo_bacen" => 1538,
                "sigla" => 'KZ',
            ],
            [
                "nome" => 'CHADE',
                "codigo_bacen" => 7889,
                "sigla" => 'TD',
            ],
            [
                "nome" => 'CHILE',
                "codigo_bacen" => 1589,
                "sigla" => 'CL',
            ],
            [
                "nome" => 'CHINA',
                "codigo_bacen" => 1600,
                "sigla" => 'CN',
            ],
            [
                "nome" => 'CHIPRE',
                "codigo_bacen" => 1635,
                "sigla" => 'CY',
            ],
            [
                "nome" => 'CIDADE DO VATICANO',
                "codigo_bacen" => null,
                "sigla" => 'VA',
            ],
            [
                "nome" => 'CINGAPURA',
                "codigo_bacen" => 7412,
                "sigla" => 'SG',
            ],
            [
                "nome" => 'COLÔMBIA',
                "codigo_bacen" => 1694,
                "sigla" => 'CO',
            ],
            [
                "nome" => 'COMORES',
                "codigo_bacen" => 1732,
                "sigla" => 'KM',
            ],
            [
                "nome" => 'CORÉIA DO NORTE',
                "codigo_bacen" => 1872,
                "sigla" => 'KP',
            ],
            [
                "nome" => 'CORÉIA DO SUL',
                "codigo_bacen" => 1902,
                "sigla" => 'KR',
            ],
            [
                "nome" => 'COSTA DO MARFIM',
                "codigo_bacen" => 1937,
                "sigla" => 'CI',
            ],
            [
                "nome" => 'COSTA RICA',
                "codigo_bacen" => 1961,
                "sigla" => 'CR',
            ],
            [
                "nome" => 'CROÁCIA',
                "codigo_bacen" => 1953,
                "sigla" => 'HR',
            ],
            [
                "nome" => 'CUBA',
                "codigo_bacen" => 1996,
                "sigla" => 'CU',
            ],
            [
                "nome" => 'CURAÇÃO',
                "codigo_bacen" => null,
                "sigla" => 'CW',
            ],
            [
                "nome" => 'DINAMARCA',
                "codigo_bacen" => 2321,
                "sigla" => 'DK',
            ],
            [
                "nome" => 'DJIBOUTI',
                "codigo_bacen" => 7838,
                "sigla" => 'DJ',
            ],
            [
                "nome" => 'DOMINICA',
                "codigo_bacen" => 2356,
                "sigla" => 'DM',
            ],
            [
                "nome" => 'EGITO',
                "codigo_bacen" => 2402,
                "sigla" => 'EG',
            ],
            [
                "nome" => 'EL SALVADOR',
                "codigo_bacen" => 6874,
                "sigla" => 'SV',
            ],
            [
                "nome" => 'EMIRADOS ÁRABES UNIDOS',
                "codigo_bacen" => 2445,
                "sigla" => 'AE',
            ],
            [
                "nome" => 'EQUADOR',
                "codigo_bacen" => 2399,
                "sigla" => 'EC',
            ],
            [
                "nome" => 'ERITREIA',
                "codigo_bacen" => 2437,
                "sigla" => 'ER',
            ],
            [
                "nome" => 'ESLOVÁQUIA',
                "codigo_bacen" => 2470,
                "sigla" => 'SK',
            ],
            [
                "nome" => 'ESLOVÊNIA',
                "codigo_bacen" => 2461,
                "sigla" => 'SI',
            ],
            [
                "nome" => 'ESPANHA',
                "codigo_bacen" => 2453,
                "sigla" => 'ES',
            ],
            [
                "nome" => 'ESTADOS FEDERADOS DA MICRONÉSIA',
                "codigo_bacen" => null,
                "sigla" => 'FM',
            ],
            [
                "nome" => 'ESTADOS UNIDOS DA AMÉRICA',
                "codigo_bacen" => 2496,
                "sigla" => 'US',
            ],
            [
                "nome" => 'ESTÔNIA',
                "codigo_bacen" => 2518,
                "sigla" => 'EE',
            ],
            [
                "nome" => 'ESWATINI',
                "codigo_bacen" => null,
                "sigla" => 'SZ',
            ],
            [
                "nome" => 'ETIÓPIA',
                "codigo_bacen" => 2534,
                "sigla" => 'ET',
            ],
            [
                "nome" => 'FIJI',
                "codigo_bacen" => 8702,
                "sigla" => 'FJ',
            ],
            [
                "nome" => 'FILIPINAS',
                "codigo_bacen" => 2674,
                "sigla" => 'PH',
            ],
            [
                "nome" => 'FINLÂNDIA',
                "codigo_bacen" => 2712,
                "sigla" => 'FI',
            ],
            [
                "nome" => 'FRANÇA',
                "codigo_bacen" => 2755,
                "sigla" => 'FR',
            ],
            [
                "nome" => 'GABÃO',
                "codigo_bacen" => 2810,
                "sigla" => 'GA',
            ],
            [
                "nome" => 'GÂMBIA',
                "codigo_bacen" => 2852,
                "sigla" => 'GM',
            ],
            [
                "nome" => 'GANA',
                "codigo_bacen" => 2895,
                "sigla" => 'GH',
            ],
            [
                "nome" => 'GEÓRGIA',
                "codigo_bacen" => 2917,
                "sigla" => 'GE',
            ],
            [
                "nome" => 'GEÓRGIA DO SUL E AS ILHAS SANDWICH DO SUL',
                "codigo_bacen" => null,
                "sigla" => 'GS',
            ],
            [
                "nome" => 'GIBRALTAR',
                "codigo_bacen" => 2933,
                "sigla" => 'GI',
            ],
            [
                "nome" => 'GRÉCIA',
                "codigo_bacen" => 3018,
                "sigla" => 'GR',
            ],
            [
                "nome" => 'GRENADA',
                "codigo_bacen" => 2976,
                "sigla" => 'GD',
            ],
            [
                "nome" => 'GROENLÂNDIA',
                "codigo_bacen" => 3050,
                "sigla" => 'GL',
            ],
            [
                "nome" => 'GUADALUPE',
                "codigo_bacen" => 3093,
                "sigla" => 'GP',
            ],
            [
                "nome" => 'GUAM',
                "codigo_bacen" => 3131,
                "sigla" => 'GU',
            ],
            [
                "nome" => 'GUATEMALA',
                "codigo_bacen" => 3174,
                "sigla" => 'GT',
            ],
            [
                "nome" => 'GUERNSEY',
                "codigo_bacen" => 1504,
                "sigla" => 'GG',
            ],
            [
                "nome" => 'GUIANA',
                "codigo_bacen" => 3379,
                "sigla" => 'GY',
            ],
            [
                "nome" => 'GUIANA FRANCESA',
                "codigo_bacen" => 3255,
                "sigla" => 'GF',
            ],
            [
                "nome" => 'GUINÉ',
                "codigo_bacen" => 3298,
                "sigla" => 'GN',
            ],
            [
                "nome" => 'GUINÉ EQUATORIAL',
                "codigo_bacen" => 3310,
                "sigla" => 'GQ',
            ],
            [
                "nome" => 'GUINÉ-BISSAU',
                "codigo_bacen" => 3344,
                "sigla" => 'GW',
            ],
            [
                "nome" => 'HAITI',
                "codigo_bacen" => 3417,
                "sigla" => 'HT',
            ],
            [
                "nome" => 'HONDURAS',
                "codigo_bacen" => 3450,
                "sigla" => 'HN',
            ],
            [
                "nome" => 'HONG KONG',
                "codigo_bacen" => 3514,
                "sigla" => 'HK',
            ],
            [
                "nome" => 'HUNGRIA',
                "codigo_bacen" => 3557,
                "sigla" => 'HU',
            ],
            [
                "nome" => 'IÊMEN',
                "codigo_bacen" => 3573,
                "sigla" => 'YE',
            ],
            [
                "nome" => 'ILHA BOUVET',
                "codigo_bacen" => null,
                "sigla" => 'BV',
            ],
            [
                "nome" => 'ILHA DA REUNIÃO',
                "codigo_bacen" => null,
                "sigla" => 'RE',
            ],
            [
                "nome" => 'ILHA DE MAN',
                "codigo_bacen" => null,
                "sigla" => 'IM',
            ],
            [
                "nome" => 'ILHA DE NATAL',
                "codigo_bacen" => null,
                "sigla" => 'CX',
            ],
            [
                "nome" => 'ILHA NORFOLK',
                "codigo_bacen" => null,
                "sigla" => 'NF',
            ],
            [
                "nome" => 'ILHAS ÅLAND',
                "codigo_bacen" => null,
                "sigla" => 'AX',
            ],
            [
                "nome" => 'ILHAS CAYMAN',
                "codigo_bacen" => null,
                "sigla" => 'KY',
            ],
            [
                "nome" => 'ILHAS COCOS',
                "codigo_bacen" => null,
                "sigla" => 'CC',
            ],
            [
                "nome" => 'ILHAS COOK',
                "codigo_bacen" => null,
                "sigla" => 'CK',
            ],
            [
                "nome" => 'ILHAS FAROE',
                "codigo_bacen" => null,
                "sigla" => 'FO',
            ],
            [
                "nome" => 'ILHAS MALVINAS',
                "codigo_bacen" => null,
                "sigla" => 'FK',
            ],
            [
                "nome" => 'ILHAS MARIANAS DO NORTE',
                "codigo_bacen" => null,
                "sigla" => 'MP',
            ],
            [
                "nome" => 'ILHAS MARSHALL',
                "codigo_bacen" => null,
                "sigla" => 'MH',
            ],
            [
                "nome" => 'ILHAS MENORES DISTANTES DOS ESTADOS UNIDOS',
                "codigo_bacen" => null,
                "sigla" => 'UM',
            ],
            [
                "nome" => 'ILHAS PITCAIRN',
                "codigo_bacen" => null,
                "sigla" => 'PN',
            ],
            [
                "nome" => 'ILHAS SALOMÃO',
                "codigo_bacen" => null,
                "sigla" => 'SB',
            ],
            [
                "nome" => 'ILHAS TURCAS E CAICOS',
                "codigo_bacen" => null,
                "sigla" => 'TC',
            ],
            [
                "nome" => 'ILHAS VIRGENS (REINO UNIDO)',
                "codigo_bacen" => null,
                "sigla" => 'VG',
            ],
            [
                "nome" => 'ILHAS VIRGENS DOS ESTADOS UNIDOS',
                "codigo_bacen" => null,
                "sigla" => 'VI',
            ],
            [
                "nome" => 'ÍNDIA',
                "codigo_bacen" => 3611,
                "sigla" => 'IN',
            ],
            [
                "nome" => 'INDONÉSIA',
                "codigo_bacen" => 3654,
                "sigla" => 'ID',
            ],
            [
                "nome" => 'IRÃ',
                "codigo_bacen" => 3727,
                "sigla" => 'IR',
            ],
            [
                "nome" => 'IRAQUE',
                "codigo_bacen" => 3697,
                "sigla" => 'IQ',
            ],
            [
                "nome" => 'IRLANDA',
                "codigo_bacen" => 3751,
                "sigla" => 'IE',
            ],
            [
                "nome" => 'ISLÂNDIA',
                "codigo_bacen" => 3794,
                "sigla" => 'IS',
            ],
            [
                "nome" => 'ISRAEL',
                "codigo_bacen" => 3832,
                "sigla" => 'IL',
            ],
            [
                "nome" => 'ITÁLIA',
                "codigo_bacen" => 3867,
                "sigla" => 'IT',
            ],
            [
                "nome" => 'JAMAICA',
                "codigo_bacen" => 3913,
                "sigla" => 'JM',
            ],
            [
                "nome" => 'JAPÃO',
                "codigo_bacen" => 3999,
                "sigla" => 'JP',
            ],
            [
                "nome" => 'JERSEY',
                "codigo_bacen" => 1508,
                "sigla" => 'JE',
            ],
            [
                "nome" => 'JORDÂNIA',
                "codigo_bacen" => 4030,
                "sigla" => 'JO',
            ],
            [
                "nome" => 'KIRIBATI',
                "codigo_bacen" => 4111,
                "sigla" => 'KI',
            ],
            [
                "nome" => 'KOSOVO',
                "codigo_bacen" => null,
                "sigla" => 'XK',
            ],
            [
                "nome" => 'KUWAIT',
                "codigo_bacen" => null,
                "sigla" => 'KW',
            ],
            [
                "nome" => 'LAOS',
                "codigo_bacen" => 4200,
                "sigla" => 'LA',
            ],
            [
                "nome" => 'LESOTHO',
                "codigo_bacen" => 4260,
                "sigla" => 'LS',
            ],
            [
                "nome" => 'LETÔNIA',
                "codigo_bacen" => 4278,
                "sigla" => 'LV',
            ],
            [
                "nome" => 'LÍBANO',
                "codigo_bacen" => 4316,
                "sigla" => 'LB',
            ],
            [
                "nome" => 'LIBÉRIA',
                "codigo_bacen" => 4340,
                "sigla" => 'LR',
            ],
            [
                "nome" => 'LÍBIA',
                "codigo_bacen" => 4383,
                "sigla" => 'LY',
            ],
            [
                "nome" => 'LIECHTENSTEIN',
                "codigo_bacen" => 4405,
                "sigla" => 'LI',
            ],
            [
                "nome" => 'LITUÂNIA',
                "codigo_bacen" => 4421,
                "sigla" => 'LT',
            ],
            [
                "nome" => 'LUXEMBURGO',
                "codigo_bacen" => 4456,
                "sigla" => 'LU',
            ],
            [
                "nome" => 'MACAU',
                "codigo_bacen" => 4472,
                "sigla" => 'MO',
            ],
            [
                "nome" => 'MADAGASCAR',
                "codigo_bacen" => 4472,
                "sigla" => 'MG',
            ],
            [
                "nome" => 'MALÁSIA',
                "codigo_bacen" => 4553,
                "sigla" => 'MY',
            ],
            [
                "nome" => 'MALAUÍ',
                "codigo_bacen" => null,
                "sigla" => 'MW',
            ],
            [
                "nome" => 'MALDIVAS',
                "codigo_bacen" => 4618,
                "sigla" => 'MV',
            ],
            [
                "nome" => 'MALI',
                "codigo_bacen" => 4642,
                "sigla" => 'ML',
            ],
            [
                "nome" => 'MALTA',
                "codigo_bacen" => 4677,
                "sigla" => 'MT',
            ],
            [
                "nome" => 'MARROCOS',
                "codigo_bacen" => 4740,
                "sigla" => 'MA',
            ],
            [
                "nome" => 'MARTINICA',
                "codigo_bacen" => 4774,
                "sigla" => 'MQ',
            ],
            [
                "nome" => 'MAURÍCIO',
                "codigo_bacen" => 4855,
                "sigla" => 'MU',
            ],
            [
                "nome" => 'MAURITÂNIA',
                "codigo_bacen" => 4880,
                "sigla" => 'MR',
            ],
            [
                "nome" => 'MAYOTTE',
                "codigo_bacen" => 4885,
                "sigla" => 'YT',
            ],
            [
                "nome" => 'MÉXICO',
                "codigo_bacen" => 4936,
                "sigla" => 'MX',
            ],
            [
                "nome" => 'MIANMAR',
                "codigo_bacen" => 930,
                "sigla" => 'MM',
            ],
            [
                "nome" => 'MOÇAMBIQUE',
                "codigo_bacen" => 5053,
                "sigla" => 'MZ',
            ],
            [
                "nome" => 'MOLDÁVIA',
                "codigo_bacen" => 4944,
                "sigla" => 'MD',
            ],
            [
                "nome" => 'MONGÓLIA',
                "codigo_bacen" => 4979,
                "sigla" => 'MN',
            ],
            [
                "nome" => 'MONTENEGRO',
                "codigo_bacen" => 4985,
                "sigla" => 'ME',
            ],
            [
                "nome" => 'MONTSERRAT',
                "codigo_bacen" => 5010,
                "sigla" => 'MS',
            ],
            [
                "nome" => 'NAMÍBIA',
                "codigo_bacen" => 5070,
                "sigla" => 'NA',
            ],
            [
                "nome" => 'NAURU',
                "codigo_bacen" => 5088,
                "sigla" => 'NR',
            ],
            [
                "nome" => 'NEPAL',
                "codigo_bacen" => 5177,
                "sigla" => 'NP',
            ],
            [
                "nome" => 'NICARÁGUA',
                "codigo_bacen" => 5215,
                "sigla" => 'NI',
            ],
            [
                "nome" => 'NÍGER',
                "codigo_bacen" => 5258,
                "sigla" => 'NE',
            ],
            [
                "nome" => 'NIGÉRIA',
                "codigo_bacen" => 5282,
                "sigla" => 'NG',
            ],
            [
                "nome" => 'NIUE',
                "codigo_bacen" => 5312,
                "sigla" => 'NU',
            ],
            [
                "nome" => 'NORTE DA MACEDÔNIA',
                "codigo_bacen" => null,
                "sigla" => 'MK',
            ],
            [
                "nome" => 'NORUEGA',
                "codigo_bacen" => 5380,
                "sigla" => 'NO',
            ],
            [
                "nome" => 'NOVA CALEDÔNIA',
                "codigo_bacen" => 5428,
                "sigla" => 'NC',
            ],
            [
                "nome" => 'NOVA ZELÂNDIA',
                "codigo_bacen" => 5487,
                "sigla" => 'NZ',
            ],
            [
                "nome" => 'OMÃ',
                "codigo_bacen" => 5568,
                "sigla" => 'OM',
            ],
            [
                "nome" => 'OUVIDO E ILHAS MCDONALD',
                "codigo_bacen" => null,
                "sigla" => 'HM',
            ],
            [
                "nome" => 'PAÍSES BAIXOS',
                "codigo_bacen" => 5738,
                "sigla" => 'NL',
            ],
            [
                "nome" => 'PAÍSES BAIXOS CARIBENHOS',
                "codigo_bacen" => null,
                "sigla" => 'BQ',
            ],
            [
                "nome" => 'PALAU',
                "codigo_bacen" => 5754,
                "sigla" => 'PW',
            ],
            [
                "nome" => 'PALESTINA',
                "codigo_bacen" => 5780,
                "sigla" => 'PS',
            ],
            [
                "nome" => 'PANAMÁ',
                "codigo_bacen" => 5800,
                "sigla" => 'PA',
            ],
            [
                "nome" => 'PAPUA NOVA GUINÉ',
                "codigo_bacen" => 5452,
                "sigla" => 'PG',
            ],
            [
                "nome" => 'PAQUISTÃO',
                "codigo_bacen" => 5762,
                "sigla" => 'PK',
            ],
            [
                "nome" => 'PARAGUAI',
                "codigo_bacen" => 5860,
                "sigla" => 'PY',
            ],
            [
                "nome" => 'PERU',
                "codigo_bacen" => 5894,
                "sigla" => 'PE',
            ],
            [
                "nome" => 'POLINÉSIA FRANCESA',
                "codigo_bacen" => 5991,
                "sigla" => 'PF',
            ],
            [
                "nome" => 'POLÔNIA',
                "codigo_bacen" => 6033,
                "sigla" => 'PL',
            ],
            [
                "nome" => 'PORTO RICO',
                "codigo_bacen" => 6114,
                "sigla" => 'PR',
            ],
            [
                "nome" => 'PORTUGAL',
                "codigo_bacen" => 6076,
                "sigla" => 'PT',
            ],
            [
                "nome" => 'PRINCIPADO DE MÔNACO',
                "codigo_bacen" => null,
                "sigla" => 'MC',
            ],
            [
                "nome" => 'QATAR',
                "codigo_bacen" => null,
                "sigla" => 'QA',
            ],
            [
                "nome" => 'QUÊNIA',
                "codigo_bacen" => 6238,
                "sigla" => 'KE',
            ],
            [
                "nome" => 'QUIRGUIZISTÃO',
                "codigo_bacen" => null,
                "sigla" => 'KG',
            ],
            [
                "nome" => 'REINO UNIDO',
                "codigo_bacen" => 6289,
                "sigla" => 'GB',
            ],
            [
                "nome" => 'REPÚBLICA CENTRO-AFRICANA',
                "codigo_bacen" => 6408,
                "sigla" => 'CF',
            ],
            [
                "nome" => 'REPÚBLICA DEMOCRÁTICA DO CONGO',
                "codigo_bacen" => null,
                "sigla" => 'CD',
            ],
            [
                "nome" => 'REPÚBLICA DO CONGO',
                "codigo_bacen" => null,
                "sigla" => 'CG',
            ],
            [
                "nome" => 'REPÚBLICA DOMINICANA',
                "codigo_bacen" => 6475,
                "sigla" => 'DO',
            ],
            [
                "nome" => 'ROMÊNIA',
                "codigo_bacen" => 6700,
                "sigla" => 'RO',
            ],
            [
                "nome" => 'RUANDA',
                "codigo_bacen" => 6750,
                "sigla" => 'RW',
            ],
            [
                "nome" => 'RÚSSIA',
                "codigo_bacen" => 6769,
                "sigla" => 'RU',
            ],
            [
                "nome" => 'SAARA OCIDENTAL',
                "codigo_bacen" => 6858,
                "sigla" => 'EH',
            ],
            [
                "nome" => 'SAMOA',
                "codigo_bacen" => 6904,
                "sigla" => 'WS',
            ],
            [
                "nome" => 'SAMOA AMERICANA',
                "codigo_bacen" => 6912,
                "sigla" => 'AS',
            ],
            [
                "nome" => 'SANTA HELENA, ASCENSÃO E TRISTÃO DA CUNHA',
                "codigo_bacen" => 7102,
                "sigla" => 'SH',
            ],
            [
                "nome" => 'SANTA LÚCIA',
                "codigo_bacen" => 7153,
                "sigla" => 'LC',
            ],
            [
                "nome" => 'SANTO BARTOLOMEU',
                "codigo_bacen" => null,
                "sigla" => 'BL',
            ],
            [
                "nome" => 'SÃO MARINO',
                "codigo_bacen" => 6971,
                "sigla" => 'SM',
            ],
            [
                "nome" => 'SÃO MARTINHO',
                "codigo_bacen" => null,
                "sigla" => 'MF',
            ],
            [
                "nome" => 'SÃO PEDRO E MIQUELON',
                "codigo_bacen" => 7005,
                "sigla" => 'PM',
            ],
            [
                "nome" => 'SÃO TOMÉ E PRÍNCIPE',
                "codigo_bacen" => 7200,
                "sigla" => 'ST',
            ],
            [
                "nome" => 'SÃO VICENTE E AS GRANADINAS',
                "codigo_bacen" => 7056,
                "sigla" => 'VC',
            ],
            [
                "nome" => 'SENEGAL',
                "codigo_bacen" => 7285,
                "sigla" => 'SN',
            ],
            [
                "nome" => 'SERRA LEOA',
                "codigo_bacen" => 7358,
                "sigla" => 'SL',
            ],
            [
                "nome" => 'SÉRVIA',
                "codigo_bacen" => 7370,
                "sigla" => 'RS',
            ],
            [
                "nome" => 'SEYCHELLES',
                "codigo_bacen" => 7315,
                "sigla" => 'SC',
            ],
            [
                "nome" => 'SINT MAARTEN',
                "codigo_bacen" => null,
                "sigla" => 'SX',
            ],
            [
                "nome" => 'SÍRIA',
                "codigo_bacen" => 7447,
                "sigla" => 'SY',
            ],
            [
                "nome" => 'SOMÁLIA',
                "codigo_bacen" => 7480,
                "sigla" => 'SO',
            ],
            [
                "nome" => 'SRI LANKA',
                "codigo_bacen" => 7501,
                "sigla" => 'LK',
            ],
            [
                "nome" => 'ST. KITTS E NEVIS',
                "codigo_bacen" => null,
                "sigla" => 'KN',
            ],
            [
                "nome" => 'SUDÃO',
                "codigo_bacen" => 7595,
                "sigla" => 'SD',
            ],
            [
                "nome" => 'SUDÃO DO SUL',
                "codigo_bacen" => 7600,
                "sigla" => 'SS',
            ],
            [
                "nome" => 'SUÉCIA',
                "codigo_bacen" => 7641,
                "sigla" => 'SE',
            ],
            [
                "nome" => 'SUÍÇA',
                "codigo_bacen" => 7676,
                "sigla" => 'CH',
            ],
            [
                "nome" => 'SURINAME',
                "codigo_bacen" => 7706,
                "sigla" => 'SR',
            ],
            [
                "nome" => 'SVALBARD E JAN MAYEN',
                "codigo_bacen" => null,
                "sigla" => 'SJ',
            ],
            [
                "nome" => 'TAILÂNDIA',
                "codigo_bacen" => 7765,
                "sigla" => 'TH',
            ],
            [
                "nome" => 'TAIWAN',
                "codigo_bacen" => null,
                "sigla" => 'TW',
            ],
            [
                "nome" => 'TAJIQUISTÃO',
                "codigo_bacen" => 7722,
                "sigla" => 'TJ',
            ],
            [
                "nome" => 'TANZÂNIA',
                "codigo_bacen" => 7803,
                "sigla" => 'TZ',
            ],
            [
                "nome" => 'TCHECA',
                "codigo_bacen" => 7919,
                "sigla" => 'CZ',
            ],
            [
                "nome" => 'TERRITÓRIO BRITÂNICO DO OCEANO ÍNDICO',
                "codigo_bacen" => null,
                "sigla" => 'IO',
            ],
            [
                "nome" => 'TERRITÓRIOS FRANCESES DO SUL E ANTÁRTICO',
                "codigo_bacen" => null,
                "sigla" => 'TF',
            ],
            [
                "nome" => 'TIMOR LESTE',
                "codigo_bacen" => 7951,
                "sigla" => 'TL',
            ],
            [
                "nome" => 'TOGO',
                "codigo_bacen" => 8001,
                "sigla" => 'TG',
            ],
            [
                "nome" => 'TOKELAU',
                "codigo_bacen" => 8109,
                "sigla" => 'TK',
            ],
            [
                "nome" => 'TONGA',
                "codigo_bacen" => 8052,
                "sigla" => 'TO',
            ],
            [
                "nome" => 'TRINIDAD E TOBAGO',
                "codigo_bacen" => 8150,
                "sigla" => 'TT',
            ],
            [
                "nome" => 'TUNÍSIA',
                "codigo_bacen" => 8206,
                "sigla" => 'TN',
            ],
            [
                "nome" => 'TURCOMENISTÃO',
                "codigo_bacen" => 8249,
                "sigla" => 'TM',
            ],
            [
                "nome" => 'TURQUIA',
                "codigo_bacen" => 8273,
                "sigla" => 'TR',
            ],
            [
                "nome" => 'TUVALU',
                "codigo_bacen" => 8281,
                "sigla" => 'TV',
            ],
            [
                "nome" => 'UCRÂNIA',
                "codigo_bacen" => 8311,
                "sigla" => 'UA',
            ],
            [
                "nome" => 'UGANDA',
                "codigo_bacen" => 8338,
                "sigla" => 'UG',
            ],
            [
                "nome" => 'URUGUAI',
                "codigo_bacen" => 8451,
                "sigla" => 'UY',
            ],
            [
                "nome" => 'UZBEQUISTÃO',
                "codigo_bacen" => 8478,
                "sigla" => 'UZ',
            ],
            [
                "nome" => 'VANUATU',
                "codigo_bacen" => 5517,
                "sigla" => 'VU',
            ],
            [
                "nome" => 'VENEZUELA',
                "codigo_bacen" => 8508,
                "sigla" => 'VE',
            ],
            [
                "nome" => 'VIETNÃ',
                "codigo_bacen" => 8583,
                "sigla" => 'VN',
            ],
            [
                "nome" => 'WALLIS E FUTUNA',
                "codigo_bacen" => null,
                "sigla" => 'WF',
            ],
            [
                "nome" => 'ZÂMBIA',
                "codigo_bacen" => 8907,
                "sigla" => 'ZM',
            ],
            [
                "nome" => 'ZIMBÁBUE',
                "codigo_bacen" => 6653,
                "sigla" => 'ZW',
            ],
        
        ];

        Pais::insert($paises);
    }
}
