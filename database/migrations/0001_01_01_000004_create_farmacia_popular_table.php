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
        Schema::create('farmacia_popular', function (Blueprint $table) {
            $table->id();
            $table->string('usuario',50)->comment('usuário da farmácia popular');
            $table->string('senha')->comment('senha do usuário da farmácia popular');
            $table->boolean('producao')->nullable()->comment('ambiente produção da famácia popular');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmacia_popular');
    }
};
