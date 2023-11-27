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
        Schema::create('ordem_servicos', function (Blueprint $table) {
            $table->id();
            $table->date('data_emissao')->default(now());
            $table->string('usuario_oculos');
            $table->enum('usuario_cv', ['principal', 'anexa']);
            $table->string('observacao_os')->nullable();
            $table->float('desconto_produto')->nullable();
            $table->date('data_entrega')->nullable();
            $table->string('tipo_pagamento')->nullable();
            $table->integer('numero_parcelas')->nullable();
            $table->float('valor_antecipado')->nullable();

            $table->float('valor_total')->nullable();
            $table->float('esferico_perto_dir')->nullable();
            $table->float('esferico_perto_esq')->nullable();
            $table->float('esferico_longe_dir')->nullable();
            $table->float('esferico_longe_esq')->nullable();
            $table->float('adicao');
            $table->float('ponte');
            $table->float('md');
            $table->float('medida_a');
            $table->float('medida_b');
            $table->float('cilindrico_perto_dir')->nullable();
            $table->float('cilindrico_perto_esq')->nullable();
            $table->float('cilindrico_longe_dir')->nullable();
            $table->float('cilindrico_longe_esq')->nullable();
            $table->integer('eixo_perto_dir')->nullable();
            $table->integer('eixo_perto_esq')->nullable();
            $table->integer('eixo_longe_dir')->nullable();
            $table->integer('eixo_longe_esq')->nullable();
            $table->integer('dnp_perto_dir')->nullable();
            $table->integer('dnp_perto_esq')->nullable();
            $table->integer('dnp_longe_dir')->nullable();
            $table->integer('dnp_longe_esq')->nullable();
            $table->integer('co_longe_dir')->nullable();
            $table->integer('co_longe_esq')->nullable();
            $table->integer('co_perto_dir')->nullable();
            $table->integer('co_perto_esq')->nullable();
            $table->float('saldo_a_pagar')->nullable();
            $table->enum('situacao_os', ['orcamento', 'aprovada', 'rejeitada', 'em andamento', 'concluida', 'garantia']);
            $table->string('obervacao_caixa')->nullable();
            $table->unsignedBigInteger('id_medico')->nullable();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_produto')->nullable();



            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_produto')->references('id')->on('produtos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordem_servicos');
    }
};
