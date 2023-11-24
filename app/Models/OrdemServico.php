<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $fillable = ['numero_ordem_servico', 'data_emissao', 'usuario_oculos', 'usuario_cv', 'observacao_os',
        'desconto_produto', 'data_entrega', 'tipo_pagamento',
        'numero_parcelas', 'valor_antecipado', 'valor_total',
        'esferico_perto_dir', 'esferico_perto_esq', 'esferico_longe_dir',
        'esferico_longe_esq', 'adicao', 'md', 'ponte', 'medida_a', 'medida_b',
        'cilindrico_perto_dir', 'cilindrico_perto_esq', 'cilindrico_longe_dir', 'cilindrico_longe_esq',
        'eixo_perto_dir', 'eixo_perto_esq', 'eixo_longe_dir', 'eixo_longe_esq',
        'dnp_perto_dir', 'dnp_perto_esq', 'co_longe_dir', 'co_longe_esq', 'co_perto_dir', 'co_perto_esq',
        'saldo_a_pagar', 'situacao_os', 'observacao_caixa', 'id_cliente', 'id_medico', 'id_produto', 'id_user', 'dnp_longe_dir',
        'dnp_longe_esq', 'obervacao_caixa'
        ];

    public function produto()
    {
        return $this->hasOne(Produto::class, 'id', 'id_produto');
    }

}
