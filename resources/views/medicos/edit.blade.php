@extends('layouts.app')
@section('content')
    <form action="{{ route('medico.update', [$medico->id]) }}" method="post">
        @method('PATCH')
        @include('medicos.form')
    </form>
@endsection
