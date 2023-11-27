@extends('layouts.app')
@section('content')
    <div>
        <div class="card">
            <div class="card-header">
                <h3>Pagamento</h3>
            </div>
            <div class="card-body">
                <label for="" class="form-label">Cliente</label>
                <input type="text" name="" id="" readonly value="{{ $ordemServico->cliente->nome }}"
                       class="form-control">

                <label for="" class="form-label">Medico</label>
                <input type="text" readonly value="{{ $ordemServico->medico->nome_medico }}" class="form-control"/>

                <label for="" class="form-label">Lente</label>
                <input type="text" name="" id="" value="{{ $ordemServico->lente }}" class="form-control"/>

            </div>
        </div>
    </div>
    <form action="{{ route('ordem-servico.pagamento', [$ordemServico->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <h5>Como será o pagamento?</h5>
            <label class="form-label">Método de pagamento</label>
            <select name="tipo_pagamento" id="" class="form-select">
                <option value="dinheiro">Dinheiro</option>
                <option value="cartao">Cartão</option>
                <option value="pix">Pix</option>
            </select>

            <label for="">Quantas Vezes?</label>
            <select name="numero_parcelas" id="" class="form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div>
            <label for="">Valor total do serviço</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">R$</span>
                <input name="saldo_a_pagar" type="text" class="form-control" placeholder="Valor total"
                       aria-label="valor a pagar" aria-describedby="basic-addon1">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
            <button class="btn btn-outline-secondary">Cancelar</button>
        </div>
    </form>
@endsection
