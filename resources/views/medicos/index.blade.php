@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('medico.create') }}" class="btn btn-primary">Adicionar</a>
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
                        Interface de Lista de Médicos você pode criar um novo clicando em "Adicionar"
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
            <th>Medico</th>
            <th>CRM</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($medicos as $medico)
            <tr>
                <td>{{ $medico->nome_medico }}</td>
                <td>{{ $medico->crm }}</td>
                <td> <a class="btn btn-warning" href="{{ route('medico.edit', [$medico->id]) }}">Editar</a>
                    <!-- Formulário de Deletar -->
                    <form action="{{ route('medico.destroy', $medico->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
