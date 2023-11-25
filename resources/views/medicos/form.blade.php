@csrf
<div>
    <label for="nome_medico" class="form-label">Nome Medico</label>
    <label>
        <input type="text" name="nome_medico" id="" class="form-control" value="{{ $medico->nome_medico ?? '' }}">
    </label>
</div>
<div>
    <label for="" class="form-label">CRM</label>
    <label>
        <input type="text" name="crm" id="" class="form-control" value="{{ $medico->crm ?? '' }}">
    </label>
</div>
<div class="mt-3">
    <button class="btn btn-outline-secondary">Cancelar</button>
    <button type="submit" class="btn btn-primary">Confirmar</button>
</div>
