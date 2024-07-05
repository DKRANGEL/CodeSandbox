<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motoqueiros', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->nullable();
            $table->string('cpf', 20)->nullable();
            $table->string('rg', 20)->nullable();
            $table->string('empresa', 100)->nullable();
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->string('end_num', 20)->nullable();
            $table->string('complemento', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->date('data_nasc')->nullable();
            $table->string('placa', 10)->nullable();
            $table->decimal('comissao', 10,2)->nullable()->default(0);
            $table->decimal('salario', 10,2)->nullable()->default(0);
            $table->decimal('taxa_entrega', 10,2)->nullable()->default(0);
            $table->string('obs')->nullable();
            $table->timestamps();

            $table->foreign('endereco_id')->references('id')->on('enderecos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motoqueiros');
    }
};
