<form action="{{ route('cliente.store') }}" method="post">
    @csrf
    <h3>Cadastrar Cliente</h3>
    <div>
        <label class="form-label">Nome</label>
        <input type="text" class="form-control">
        <label class="form-label">CPF</label>
        <input type="text" class="form-control">
    </div>
    <div>
        <label class="form-label">Data Nascimento</label>
        <input type="date" name="" id="" class="form-control">
        <label class="form-label">Telefone</label>
        <input class="form-control">
    </div>
    <div>
        <label class="form-label">CEP</label>
        <input class="form-control">
        <label class="form-label">Cidade</label>
        <input class="form-control">
    </div>
    <div>
        <label class="form-label">Rua</label>
        <input class="form-control">
        <label class="form-label">Numero</label>
        <input class="form-control">
    </div>
    <div>
        <label class="form-label">Bairro</label>
        <input class="form-control">
        <label class="form-label">E-mail</label>
        <input class="form-control">
    </div>
</form>
