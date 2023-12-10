@csrf
<div>
    <label class="form-label" for="nome">Nome*</label>
    <input type="text" class="form-control" name="nome" value="{{ $cliente->nome ?? '' }}" required/>
</div>
<div class="row">
    <div class="col-3">
        <label class="form-label" for="nome">Sexo*</label>
        <select name="sexo" id="" class="form-select" required>
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select>
    </div>
    <div class="col-3">
        <label class="form-label">CPF*</label>
        <input type="text" class="form-control" name="doc_identificacao"
               value="{{ $cliente->doc_identificacao ?? '' }}" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" maxlength="14" placeholder="000.000.000-00" required/>
        <input type="hidden" name="tipo_documento" value="cpf">
    </div>
    <div class="col-3">
        <label class="form-label">Data Nascimento*</label>
        <input type="date" name="data_nascimento" id="" class="form-control"
               value="{{ $cliente->data_nascimento ?? '' }}" required>
    </div>
    <div class="col-3">
        <label class="form-label">Telefone*</label>
        <input class="form-control" name="telefone" value="{{ $cliente->telefone ?? '' }}" required>
    </div>
</div>

<div class="row">
    <div class="col-3">
        <label class="form-label">CEP*</label>
        <input class="form-control" name="cep" value="{{ $cliente->cep ?? '' }}" pattern="\d{8}" maxlength="8" required/>
    </div>
    <div class="col-6">
        <label class="form-label">Rua*</label>
        <input class="form-control" name="logradouro" value="{{ $cliente->logradouro ?? '' }}" required/>
    </div>
    <div class="col-3">
        <label class="form-label">Numero*</label>
        <input class="form-control" name="numero" value="{{ $cliente->numero ?? '' }}" required/>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <label class="form-label">E-mail*</label>
        <input class="form-control" type="email" name="email" value="{{ $cliente->email ?? '' }}" required/>
    </div>
</div>
<div class="row">
    <label class="form-label">Observação cliente</label>
    <input class="form-control" name="observacao_cliente" value="{{ $cliente->observacao_cliente ?? '' }}"/>
</div>
<div class="mt-3">
    <button class="btn btn-outline-secondary">Cancelar</button>
    <button type="submit" class="btn btn-primary">Confirmar</button>
</div>
