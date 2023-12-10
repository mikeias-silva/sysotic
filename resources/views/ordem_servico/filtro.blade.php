@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            Filtro
        </div>
        <div class="card-body">
            <form action="{{ route('ordem-servico.relatorio') }}" method="post">
                @csrf
                <label for="">Nome</label>
                <input type="text" name="nome" id="" class="form-control"/>
                <div class="row">
                    <h6>Periodo de entrega</h6>
                    <div class="col-3">
                        <label>Data Inicio</label>
                        <input class="form-control" type="date" name="data_inicio"/>
                    </div>
                    <div class="col-3">
                        <label for="">Data Fim</label>
                        <input type="date" class="form-control" name="data_fim">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Confirmar</button>
            </form>
        </div>
    </div>
@endsection
