@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('cliente.create') }}" class="btn btn-primary">Adicionar</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>CEP</th>
            <th>E-mail</th>
            <th>Opção</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $item)
            <tr>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->cep }}</td>
                <td>{{ $item->email }}</td>
                <td> <a class=" btn btn-warning" href="{{ route('cliente.edit', [$item->id]) }}">Editar</a>
                    <!-- Formulário de Deletar -->
                    <form action="{{ route('cliente.destroy', $item->id) }}" method="POST" style="display:inline">
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
