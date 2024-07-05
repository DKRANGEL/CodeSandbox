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
        Schema::create('acao_acesso_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acesso_user_id');
            $table->unsignedBigInteger('tela_id');
            $table->unsignedBigInteger('acao_id');

            $table->foreign('acesso_user_id')->references('id')->on('acesso_user')->onDelete('cascade');
            $table->foreign('tela_id')->references('id')->on('telas')->onDelete('cascade');
            $table->foreign('acao_id')->references('id')->on('acoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acao_acesso_user');
    }
};
