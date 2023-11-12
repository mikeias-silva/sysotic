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
            $table->integer('numero_ordem_servico');
            $table->date('data_emissao');
            $table->string('usuario_oculos');
            $table->enum('usuario_cv', ['principal', 'anexa']);
            $table->string('observacao_os');
            $table->float('desconto_produto');
            $table->date('data_entrega');
            $table->boolean('tipo_pagamento');
            $table->integer('numero_parcelas');
            $table->float('valor_antecipado');

            $table->float('valor_total');
            $table->float('esferico_perto_dir');
            $table->float('esferico_perto_esq');
            $table->float('esferico_longe_dir');
            $table->float('esferico_longe_esq');
            $table->float('adicao');
            $table->float('ponte');
            $table->float('md');
            $table->float('medida_a');
            $table->float('medida_b');
            $table->float('cilindrico_perto_dir');
            $table->float('cilindrico_perto_esq');
            $table->float('cilindrico_longe_dir');
            $table->float('cilindrico_longe_esq');
            $table->integer('eixo_perto_dir');
            $table->integer('eixo_perto_esq');
            $table->integer('eixo_longe_dir');
            $table->integer('eixo_longe_esq');
            $table->integer('dnp_perto_dir');
            $table->integer('dnp_perto_esq');
            $table->integer('dnp_longe_dir');
            $table->integer('dnp_longe_esq');
            $table->integer('co_longe_dir');
            $table->integer('co_longe_esq');
            $table->integer('co_perto_dir');
            $table->integer('co_perto_esq');
            $table->float('saldo_a_pagar');
            $table->enum('situacao_os', ['orcamento', 'aprovada', 'rejeitada', 'em andamento', 'concluida', 'garantia']);
            $table->string('obervacao_caixa');



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
