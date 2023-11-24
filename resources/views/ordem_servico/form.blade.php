@csrf
<div>
    <label for="" class="form-label">Cliente</label>

    <select name="id_cliente" class="form-select">
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
        @endforeach
    </select>
</div>
<div>
    <span>Dados ordem de serviço</span>
    <label for="" class="form-label">Armação</label>
    <input type="text" name="" id="" class="form-control"/>
</div>
<div class="">
    <label for="" class="form-label">Lentes</label>
    <input type="text" name="" id="" class="form-control">
</div>
<div>
    <label class="form-label">Tratamentos</label>
    <input type="text" name="" id="" class="form-control">
</div>
<div>
    <label class="form-label">Medico</label>
    <input type="text" name="medico" id="" class="form-control">
</div>
<div class="">
    <span>Lente para longe</span>
    <span>Olho direito (OD)</span>
    <label class="form-label">esférico</label>
    <input type="text" name="esferico_longe_dir" id="" class="form-control">
    <label class="form-label">Cilíndrico</label>
    <input type="text" name="cilindrico_longe_dir" id="" class="form-control">
    <label class="form-label">Eixo</label>
    <input type="text" name="eixo_longe_dir" id="" class="form-control">
    <label class="form-label">DNP</label>
    <input type="text" name="dnp_longe_dir" id="" class="form-control">
    <label class="form-label">C.O/Película</label>
    <input type="text" name="co_longe_dir" id="" class="form-control">
    <label class="form-label">Adição</label>
    <input type="text" name="adicao" id="" class="form-control">
    <label class="form-label">Ponte</label>
    <input type="text" name="ponte" id="" class="form-control">
    <label class="form-label">Diâmetro</label>
    <input type="text" name="" id="" class="form-control">
</div>
<div class="">
    <span>Olho Esquerdo (OE)</span>
    <label class="form-label">esférico</label>
    <input type="text" name="esferico_longe_esq" id="" class="form-control">
    <label class="form-label">Cilíndrico</label>
    <input type="text" name="cilindrico_longe_esq" id="" class="form-control">
    <label class="form-label">Eixo</label>
    <input type="text" name="eixo_longe_esq" id="" class="form-control">
    <label class="form-label">DNP</label>
    <input type="text" name="dnp_longe_esq" id="" class="form-control">
    <label class="form-label">C.O/Película</label>
    <input type="text" name="co_longe_esq" id="" class="form-control">
    <label class="form-label">Adição</label>
    <input type="text" name="" id="" class="form-control">
    <label class="form-label">Diâmetro</label>
    <input type="text" name="" id="" class="form-control">
</div>
<div class="">
    <span>Lente para Perto</span>
    <span>Olho direito (OD)</span>
    <label class="form-label">esférico</label>
    <input type="text" name="esferico_perto_dir" id="" class="form-control">
    <label class="form-label">Cilíndrico</label>
    <input type="text" name="cilindrico_perto_dir" id="" class="form-control">
    <label class="form-label">Eixo</label>
    <input type="text" name="eixo_perto_dir" id="" class="form-control">
    <label class="form-label">DNP</label>
    <input type="text" name="dnp_perto_dir" id="" class="form-control">
    <label class="form-label">C.O/Película</label>
    <input type="text" name="co_perto_dir" id="" class="form-control">
    <label class="form-label">Adição</label>
    <input type="text" name="" id="" class="form-control">
    <label class="form-label">Diâmetro</label>
    <input type="text" name="" id="" class="form-control">
</div>
<div class="">
    <span>Olho Esquerdo (OE)</span>
    <label class="form-label">esférico</label>
    <input type="text" name="esferico_perto_esq" id="" class="form-control">
    <label class="form-label">Cilíndrico</label>
    <input type="text" name="cilindrico_perto_esq" id="" class="form-control">
    <label class="form-label">Eixo</label>
    <input type="text" name="eixo_perto_esq" id="" class="form-control">
    <label class="form-label">DNP</label>
    <input type="text" name="dnp_perto_esq" id="" class="form-control">
    <label class="form-label">C.O/Película</label>
    <input type="text" name="co_perto_esq" id="" class="form-control">
    <label class="form-label">Adição</label>
    <input type="text" name="" id="" class="form-control">
    <label class="form-label">Diâmetro</label>
    <input type="text" name="" id="" class="form-control">
</div>
<div>
    <label class="form-label">Data de entrega</label>
    <input type="date" name="data_entrega" id="" class="form-control"/>
</div>
<div>
    <label class="form-label">Observação</label>
    <input type="text" name="observacao_os" id="" class="form-control">
</div>
<div class="mt-3">
    <button type="submit" class="btn btn-primary">Confirmar</button>
    <button class="btn btn-outline-secondary">Cancelar</button>
</div>
