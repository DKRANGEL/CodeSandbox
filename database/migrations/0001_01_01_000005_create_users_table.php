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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('global_id')->unique();
            $table->string('nome');
            $table->string('cpf', 14)->unique();
            $table->string('rg', 20)->nullable();
            $table->boolean('status')->comment('true = ATIVO, false = INATIVO');
            $table->enum('genero', ['M', 'F']);
            $table->string('email')->unique();
            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20);
            $table->date('data_nasc')->nullable();
            $table->string('cargo', 50);
            $table->string('password');
            $table->date('admissao')->nullable();
            $table->date('demissao')->nullable();
            $table->decimal('desconto', 10,2)->nullable()->comment('desconto maximo permitido');
            $table->enum('comissao', ['desconto', 'margem', 'null'])->comment('tipo de comissão');
            $table->decimal('meta', 10,2)->nullable();
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->string('end_num', 20)->nullable();
            $table->string('complemento', 50)->nullable();
            $table->string('obs')->nullable();
            $table->unsignedBigInteger('farmacia_popular_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('endereco_id')->references('id')->on('enderecos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('farmacia_popular_id')->references('id')->on('farmacia_popular')->onUpdate('cascade')->onDelete('set null');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
