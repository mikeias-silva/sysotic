@extends('layouts.app')
@section('content')
    <div class="">
        <form action="{{ route('cliente.store') }}" method="post">
            <div class="card">
                <div class="card-header text-bg-primary">
                    <h3>Cadastro Cliente</h3>
                </div>
                <div class="card-body">
                    @include('cliente.form')
                </div>
            </div>
        </form>
    </div>
@endsection
