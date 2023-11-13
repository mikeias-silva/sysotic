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
        Schema::create('itensos', function (Blueprint $table) {
            $table->id();
            $table->string('quantidade');
            $table->decimal('preco_venda_unitario', 6,2);
            $table->decimal('valor_total_item', 6,2);
            $table->unsignedBigInteger('id_ordem_servico');
            $table->unsignedBigInteger('id_produto');
            $table->timestamps();

            $table->foreign('id_ordem_servico')->on('ordem_servicos')->references('id');
            $table->foreign('id_produto')->on('produtos')->references('id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itensos');
    }
};
