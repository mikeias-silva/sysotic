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
            <th>Data Emissão</th>
            <th>Situação</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ordemServico as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->usuario_oculos }}</td>
{{--                <td>{{ $item->produto->nome_produto }}</td>--}}
                <td>{{ $item->data_emissao }}</td>
                <td>{{ $item->data_entrega }}</td>
                <td>{{ $item->situacao_os }}</td>
                <td>
                    <a href="{{ route('ordem-servico.edit', [$item->id]) }}" class="btn btn-info">Editar</a>
                    <a  href="{{ route('ordem-servico.pagamento', [$item->id]) }}" class="nav-fill btn btn-primary">Pagamento</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
