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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 3)->unique();
            $table->string('descricao', 100)->unique();
            $table->unsignedBigInteger('tipo_id');
            $table->decimal('desconto', 10,2)->nullable();
            $table->decimal('margem', 10,2)->nullable();
            $table->decimal('meta', 10,2)->nullable()->default(0);
            $table->boolean('abastecer_preco')->default(false);
            $table->decimal('curva_a', 10,2)->nullable()->default(0);
            $table->decimal('curva_b', 10,2)->nullable()->default(0);
            $table->string('rgb', 20)->nullable();
            $table->timestamps();

            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
