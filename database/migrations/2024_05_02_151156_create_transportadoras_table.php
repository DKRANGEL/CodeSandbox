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
        Schema::create('transportadoras', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj', 20)->nullable();
            $table->string('nome', 100);
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->string('end_num', 20)->nullable();
            $table->string('complemento', 50)->nullable();
            $table->string('contato', 100)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('inscricao_estadual', 20)->nullable();
            $table->timestamps();

            $table->foreign('endereco_id')->references('id')->on('enderecos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportadoras');
    }
};
