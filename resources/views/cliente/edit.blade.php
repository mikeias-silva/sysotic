@extends('layouts.app')
@section('content')
    <div class="">
        <form action="{{ route('cliente.update', [$cliente->id]) }}" method="POST">
            @method('PATCH')
            @include('cliente.form')
        </form>
    </div>
@endsection
