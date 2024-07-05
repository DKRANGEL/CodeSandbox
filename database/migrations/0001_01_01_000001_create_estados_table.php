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
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pais_id');
            $table->string('nome', 50);
            $table->string('sigla', 2);
            $table->decimal('valor_maximo_venda', 20,2)->nullable()->default(0);
            $table->string('codigo_ibge')->nullable();
            $table->string('ddd', 3)->nullable();
            $table->timestamps();

            $table->foreign('pais_id')->references('id')->on('paises')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
