@extends('layouts.app')
@section('content')
    <form action="{{ route('medico.store') }}" method="post">
        <div class="card">
            <div class="card-header text-bg-primary">
                <h2>Cadastro Médicos</h2>
            </div>
            <div class="card-body">
                @include('medicos.form')

            </div>
        </div>
    </form>
@endsection
