@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('ordem-servico.create') }}" class="btn btn-primary">Adicionar</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>OS</th>
            <th>Cliente</th>
{{--            <th>Produto</th>--}}
            <th>Data Entrega</th>
            <th>Situação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ordemServico as $item)
            <tr>
                <td>{{ $item->numero_ordem_servico }}</td>
                <td>{{ $item->usuario_oculos }}</td>
{{--                <td>{{ $item->produto->nome_produto }}</td>--}}
                <td>{{ $item->data_entrega }}</td>
                <td>{{ $item->situacao_os }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
