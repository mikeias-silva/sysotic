@extends('layouts.app')
@section('content')
    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        ajuda
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Interface de dashboard, com informações detalhadas das ordens de serviços.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h2>Dashboard</h2>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="card col-3 me-4 border-primary">
            <div class="card-body ">
                <h4>Total Ordens Emitidas</h4>
                <h3>{{ $ordensServico->count() }}</h3>
            </div>
        </div>
        <div class="card col-3 border-success">
            <div class="card-body">
                <h4>Total vendas</h4>
                <h3>R$ {{ $ordensServico->sum('saldo_a_pagar') }}</h3>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <h5>Historico Ordens de Serviço</h5>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Valor R$</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ordensServico as $item)
                <tr>
                    <td>{{ $item->usuario_oculos }}</td>
                    <td>R$ {{ $item->saldo_a_pagar }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
