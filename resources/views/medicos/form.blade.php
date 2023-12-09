@csrf
<div class="row">
    <label for="nome_medico" class="form-label">Nome Medico*</label>
    <div class="col-6">

        <input type="text" name="nome_medico" id="" class="form-control"
               value="{{ $medico->nome_medico ?? '' }}" required/>
    </div>
</div>
<div class="row">
    <label for="" class="form-label">CRM*</label>
    <div class="col-3">

        <input type="text" name="crm" id="" class="form-control"
               value="{{ $medico->crm ?? '' }}" required/>
    </div>
</div>
<div class="mt-3">
    <a class="btn btn-outline-secondary" href="{{ route('medico.index') }}">Cancelar</a>
    <button type="submit" class="btn btn-primary">Confirmar</button>
</div>
