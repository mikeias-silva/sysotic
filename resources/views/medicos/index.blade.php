@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('medico.create') }}" class="btn btn-primary">Adicionar</a>
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
