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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('sexo', 1);
            $table->string('doc_identificacao');
            $table->enum('tipo_documento', ['cpf', 'cnpj', 'estrangeiro']);
            $table->date('data_nascimento');
            $table->string('observacao_cliente');
            $table->string('numero');
            $table->string('logradouro');
            $table->string('cep');
            $table->string('telefone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
