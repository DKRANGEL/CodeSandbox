<?php

namespace Database\Seeders;

use App\Models\Central\PermissaoEspecial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PermissaoEspecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        PermissaoEspecial::truncate();
        Schema::enableForeignKeyConstraints();

        $permissoes = [
            [
                'descricao' => "ALTERAR BLOQUEIO PARA CLIENTES EM ATRASO",
            ],
            [
                'descricao' => "ALTERAR CAMPO DE COMISSÃO DOS PRODUTOS",
            ],
            [
                'descricao' => "ALTERAR GRUPOS DE PRODUTOS",
            ],
            [
                'descricao' => "ALTERAR MULTAS, JUROS E DESCONTOS EM FECHAMENTO DE CRÉDITO",
            ],
            [
                'descricao' => "ALTERAR PREÇOS DE FÁBRICA/CONSUMIDOR E FRAÇÕES",
            ],
            [
                'descricao' => "ALTERAR SALDO DE ESTOQUE",
            ],
            [
                'descricao' => "AUTORIZAR VENDA PARA CLIENTES EM ATRASO",
            ],
            [
                'descricao' => "AUTORIZAR VENDA PARA CLIENTES SEM CRÉDITO",
            ],
            [
                'descricao' => "EXCLUIR/CANCELAR CONTAS A RECEBER",
            ],
            [
                'descricao' => "EXCLUIR/CANCELAR PRÉ-VENDA OU ALTERAR LIMITES",
            ],
            [
                'descricao' => "GERENCIAR PERMISSÕES ESPECIAIS",
            ],
            [
                'descricao' => "LIBERAR VENDAS COM ESTOQUE ZERADO/NEGATIVO",
            ],
            [
                'descricao' => "RECEBER PAGAMENTOS VIA CRÉDITO OU CONVÊNIO",
            ],
            [
                'descricao' => "VISUALIZAR VALORES NO FECHAMENTO DO CAIXA",
            ],
        ];        

        PermissaoEspecial::insert($permissoes);
    }
}
