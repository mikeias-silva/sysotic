@extends('layouts.app')
@section('content')
    <div class="">
        <form action="{{ route('cliente.update', [$cliente->id]) }}" method="POST">
            @method('PATCH')
            <div class="card">
                <div class="card-header text-bg-primary">
                    <h3>Editar Cliente</h3>
                </div>
                <div class="card-body">
                    @include('cliente.form')
                </div>
            </div>
        </form>
    </div>
@endsection
