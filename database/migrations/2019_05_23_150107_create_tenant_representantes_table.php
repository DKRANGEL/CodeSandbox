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
        Schema::create('tenant_representantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf', 14);
            $table->string('rg', 20);
            $table->string('profissao', 50)->nullable();
            $table->enum('estado_civil', ['Solteiro', 'Casado', 'Divorciado', 'Separado', 'Viuvo']);
            $table->date('data_nasc')->nullable();
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->string('end_num',20)->nullable();
            $table->string('complemento',50)->nullable();
            $table->decimal('valor_instalacao', 10,2)->nullable();
            $table->timestamps();

            $table->foreign('endereco_id')->references('id')->on('enderecos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_representantes');
    }
};
