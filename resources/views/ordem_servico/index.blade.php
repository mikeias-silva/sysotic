@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('ordem-servico.create') }}" class="btn btn-primary">Adicionar</a>
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
                        Interface de Lista de Ordem de Serviço você pode criar um novo clicando em "Adicionar"
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
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
                <td>{{ $item->data_entrega }}</td>
                <td>{{ $item->data_emissao }}</td>
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
