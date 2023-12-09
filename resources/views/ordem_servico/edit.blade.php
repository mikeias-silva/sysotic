@extends('layouts.app')
@section('content')
    <form action="{{ route('ordem-servico.update', [$ordemServico->id]) }}" method="post">
        @method('PUT')
        @include('ordem_servico.form')
    </form>
@endsection
