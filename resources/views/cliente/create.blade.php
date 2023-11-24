@extends('layouts.app')
@section('content')
    <div class="">
        <form action="{{ route('cliente.store') }}" method="post">
           @include('cliente.form')
        </form>
    </div>
@endsection
