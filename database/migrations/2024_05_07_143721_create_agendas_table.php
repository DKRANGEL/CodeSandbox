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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->string('nome', 100);
            $table->string('apelido', 50)->nullable();
            $table->date('data_nasc')->nullable();
            $table->string('empresa', 100)->nullable();
            $table->string('end_num', 20)->nullable();
            $table->string('complemento', 50)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->string ('email', 100)->nullable();
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
        Schema::dropIfExists('agendas');
    }
};
