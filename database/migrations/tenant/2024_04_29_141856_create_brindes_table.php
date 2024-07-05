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
        Schema::create('brindes', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 100);
            $table->double('pontos')->default(0);
            $table->double('estoque')->default(0);
            $table->boolean('status')->default(false);
            $table->string('obs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brindes');
    }
};
