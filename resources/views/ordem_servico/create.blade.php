@extends('layouts.app')
@section('content')
    <form action="{{ route('ordem-servico.store') }}" method="post">
        @include('ordem_servico.form')
    </form>
@endsection
