@csrf
<div>
    <label class="form-label" for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" value="{{ $cliente->nome ?? '' }}" />
    <label class="form-label" for="nome">Sexo</label>
    <select name="sexo" id="" class="form-select">
        <option value="m">Masculino</option>
        <option value="f">Feminino</option>
    </select>
    <label class="form-label">CPF</label>
    <input type="text" class="form-control" name="doc_identificacao" value="{{ $cliente->doc_identificacao ?? '' }}"/>
    <input type="hidden" name="tipo_documento" value="cpf">
</div>
<div>
    <label class="form-label">Data Nascimento</label>
    <input type="date" name="data_nascimento" id="" class="form-control" value="{{ $cliente->data_nascimento ?? '' }}">
    <label class="form-label">Telefone</label>
    <input class="form-control" name="telefone" value="{{ $cliente->telefone ?? '' }}">
</div>
<div>
    <label class="form-label">CEP</label>
    <input class="form-control" name="cep" value="{{ $cliente->cep ?? '' }}">
</div>
<div>
    <label class="form-label">Rua</label>
    <input class="form-control" name="logradouro" value="{{ $cliente->logradouro ?? '' }}">
    <label class="form-label">Numero</label>
    <input class="form-control" name="numero" value="{{ $cliente->numero ?? '' }}">
</div>
<div>
    <label class="form-label">E-mail</label>
    <input class="form-control" name="email" value="{{ $cliente->email ?? '' }}">
</div>
<div>
    <label class="form-label">Observação cliente</label>
    <input class="form-control" name="observacao_cliente" value="{{ $cliente->observacao_cliente ?? '' }}">
</div>
<div class="mt-3">
    <button class="btn btn-outline-secondary">Cancelar</button>
    <button type="submit" class="btn btn-primary">Confirmar</button>
</div>
