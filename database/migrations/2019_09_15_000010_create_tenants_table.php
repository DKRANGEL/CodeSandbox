<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id')->primary()->comment('o id será sempre o cnpj da empresa');
            $table->unsignedBigInteger('tenant_representante_id')->nullable();
            $table->string('razao_social', 100)->unique()->comment('razão social');
            $table->string('fantasia', 100)->unique()->comment('nome fantasia');
            $table->string('proprietario',50)->nullable();
            $table->string('gerente',50)->nullable();
            $table->boolean('status')->default(false)->comment('true = ATIVA, false = INATIVA');
            $table->boolean('integrada')->default(false);
            $table->boolean('matriz')->default(false);
            $table->string('telefone',20)->nullable();
            $table->string('celular',20)->nullable();
            $table->string('email')->unique();
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->string('end_num',20)->nullable();
            $table->string('complemento',50)->nullable();
            $table->string('inscricao_estadual',30)->nullable();
            $table->string('inscricao_municipal',50)->nullable();
            $table->boolean('abastecer_preco')->default(false);
            $table->unsignedBigInteger('farmacia_popular_id')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();

            $table->foreign('tenant_representante_id')->references('id')->on('tenant_representantes')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('farmacia_popular_id')->references('id')->on('farmacia_popular')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
}
