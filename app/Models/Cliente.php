<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sexo',
    'doc_identificacao', 'tipo_documento', 'data_nascimento',
            'observacao_cliente', 'numero', 'logradouro', 'cep', 'telefone', 'email'];

}
