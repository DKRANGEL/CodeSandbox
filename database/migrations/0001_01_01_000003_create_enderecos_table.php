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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('cep', 10)->nullable();
            $table->string('logradouro', 100)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->unsignedBigInteger('cidade_id')->nullable();
            $table->timestamps();

            $table->foreign('cidade_id')->references('id')->on('cidades')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
