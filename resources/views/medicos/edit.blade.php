@extends('layouts.app')
@section('content')
    <form action="{{ route('medico.update', [$medico->id]) }}" method="post">
        @method('PATCH')
        <div class="card">
            <div class="card-header text-bg-primary">
                <h2>Editar Médicos</h2>
            </div>
            <div class="card-body">
                @include('medicos.form')

            </div>
        </div>
    </form>
@endsection
