@extends('layouts.app')
@section('content')
    <form action="{{ route('medico.store') }}" method="post">
        @include('medicos.form')
    </form>
@endsection
