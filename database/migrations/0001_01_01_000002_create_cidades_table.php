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
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estado_id');
            $table->string('nome', 100);
            $table->integer('codigo_ibge')->nullable()->default(0);
            $table->integer('codigo_tom')->nullable()->default(0)->comment('Código TOM (SEFAZ)');
            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidades');
    }
};
