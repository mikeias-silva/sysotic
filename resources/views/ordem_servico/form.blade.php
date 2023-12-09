@csrf

<div class="card mt-3">
    <div class="card-header">
        <h3>Dados ordem de serviço</h3>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-5">
                <label for="" class="form-label">Cliente</label>
                <select name="id_cliente" class="form-select">
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">

            <div class="col-3">
                <label for="" class="form-label">Armação</label>
                <input type="text" name="armacao" id="" class="form-control"
                       value="{{ old('armacao') ?? $ordemServico->armacao ?? '' }}"/>
            </div>
            <div class="col-3">
                <label for="" class="form-label">Lentes</label>
                <input type="text" name="lentes" id="" class="form-control"
                       value="{{ old('lentes') ?? $ordemServico->lentes ?? '' }}">
            </div>
            <div class="col-3">
                <label class="form-label">Tratamentos</label>
                <input type="text" name="tratamento" id="" class="form-control"
                       value="{{ old('tratamento') ?? $ordemServico->tratamento ?? '' }}">
            </div>
            <div class="col-3">
                <label class="form-label">Medico</label>
                <select name="id_medico" class="form-select">
                    @foreach($medicos as $medico)
                        <option value="{{ $medico->id }}">{{ $medico->nome_medico }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
        <h3>Lente para longe</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <h4>Olho direito (OD)</h4>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">esférico</label>
                        <input type="text" name="esferico_longe_dir" id="" class="form-control"
                               value="{{ old('esferico_longe_dir') ?? $ordemServico->esferico_longe_dir ?? '' }}">

                        <label class="form-label">Cilíndrico</label>
                        <input type="text" name="cilindrico_longe_dir" id="" class="form-control"
                               value="{{ old('cilindrico_longe_dir') ?? $ordemServico->cilindrico_longe_dir ?? '' }}">
                    </div>
                    <div class="col-2">
                        <label class="form-label">Eixo</label>
                        <input type="text" name="eixo_longe_dir" id="" class="form-control"
                               value="{{ old('eixo_longe_dir') ?? $ordemServico->eixo_longe_dir ?? '' }}">

                        <label class="form-label">DNP</label>
                        <input type="text" name="dnp_longe_dir" id="" class="form-control"
                               value="{{ old('dnp_longe_dir') ?? $ordemServico->dnp_longe_dir ?? '' }}">
                    </div>
                    <div class="col-2">
                        <label class="form-label">C.O/Película</label>
                        <input type="text" name="co_longe_dir" id="" class="form-control"
                               value="{{ old('co_longe_dir') ?? $ordemServico->co_longe_dir ?? '' }}">

                        <label class="form-label">Adição</label>
                        <input type="text" name="adicao" id="" class="form-control"
                               value="{{ old('adicao') ?? $ordemServico->adicao ?? '' }}">
                    </div>
                    <div class="col-2">
                        <label class="form-label">Ponte</label>
                        <input type="text" name="ponte" id="" class="form-control"
                               value="{{ old('ponte') ?? $ordemServico->ponte ?? '' }}">

                        <label class="form-label">Diâmetro</label>
                        <input type="text" name="diametro" id="" class="form-control"
                               value="{{ old('diametro') ?? $ordemServico->diametro ?? '' }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-2">
                <h4>Olho Esquerdo (OE)</h4>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">esférico</label>
                        <input type="text" name="esferico_longe_esq" id="" class="form-control"
                               value="{{ old('esferico_longe_esq') ?? $ordemServico->esferico_longe_esq ?? '' }}">

                        <label class="form-label">Cilíndrico</label>
                        <input type="text" name="cilindrico_longe_esq" id="" class="form-control"
                               value="{{ old('cilindrico_longe_esq') ?? $ordemServico->cilindrico_longe_esq ?? '' }}">
                    </div>
                    <div class="col-2">
                        <label class="form-label">Eixo</label>
                        <input type="text" name="eixo_longe_esq" id="" class="form-control"
                               value="{{ old('eixo_longe_esq') ?? $ordemServico->eixo_longe_esq ?? '' }}">

                        <label class="form-label">DNP</label>
                        <input type="text" name="dnp_longe_esq" id="" class="form-control"
                               value="{{ old('dnp_longe_esq') ?? $ordemServico->dnp_longe_esq ?? '' }}">
                    </div>
                    <div class="col-2">
                        <label class="form-label">C.O/Película</label>
                        <input type="text" name="co_longe_esq" id="" class="form-control"
                               value="{{ old('co_longe_esq') ?? $ordemServico->co_longe_esq ?? '' }}">

                        <label class="form-label">Adição</label>
                        <input type="text" name="" id="" class="form-control"
                           >
                    </div>
                    <div class="col-2">
                        <label class="form-label">Diâmetro</label>
                        <input type="text" name="diametro" id="" class="form-control"
                               value="{{ old('diametro') ?? $ordemServico->diametro ?? '' }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-header">
        <h3>Lente para Perto</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <h4>Olho direito (OD)</h4>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">esférico</label>
                        <input type="text" name="esferico_perto_dir" id="" class="form-control"
                               value="{{ old('esferico_perto_dir') ?? $ordemServico->esferico_longe_dir ?? '' }}">
                        <label class="form-label">Cilíndrico</label>
                        <input type="text" name="cilindrico_perto_dir" id="" class="form-control"
                               value="{{ old('cilindrico_perto_dir') ?? $ordemServico->cilindrico_perto_dir ?? '' }}">
                    </div>
                    <div class="col-2">
                        <label class="form-label">Eixo</label>
                        <input type="text" name="eixo_perto_dir" id="" class="form-control"
                               value="{{ old('eixo_perto_dir') ?? $ordemServico->eixo_perto_dir ?? '' }}"/>
                        <label class="form-label">DNP</label>
                        <input type="text" name="dnp_perto_dir" id="" class="form-control"
                               value="{{ old('dnp_perto_dir') ?? $ordemServico->dnp_perto_dir ?? '' }}"/>
                    </div>
                    <div class="col-2">
                        <label class="form-label">C.O/Película</label>
                        <input type="text" name="co_perto_dir" id="" class="form-control"
                               value="{{ old('co_perto_dir') ?? $ordemServico->co_perto_dir ?? '' }}"/>
                        <label class="form-label">Adição</label>
                        <input type="text" name="" id="" class="form-control"/>
                    </div>
                    <div class="col-2">
                        <label class="form-label">Diâmetro</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <h4>Olho Esquerdo (OE)</h4>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">esférico</label>
                        <input type="text" name="esferico_perto_esq" id="" class="form-control"
                               value="{{ old('esferico_perto_esq') ?? $ordemServico->esferico_perto_esq ?? '' }}">
                        <label class="form-label">Cilíndrico</label>
                        <input type="text" name="cilindrico_perto_esq" id="" class="form-control"
                               value="{{ old('cilindrico_perto_esq') ?? $ordemServico->cilindrico_perto_esq ?? '' }}">
                    </div>
                    <div class="col-2">
                        <label class="form-label">Eixo</label>
                        <input type="text" name="eixo_perto_esq" id="" class="form-control"
                               value="{{ old('eixo_perto_esq') ?? $ordemServico->eixo_perto_esq ?? '' }}"/>
                        <label class="form-label">DNP</label>
                        <input type="text" name="dnp_perto_esq" id="" class="form-control"
                               value="{{ old('dnp_perto_esq') ?? $ordemServico->dnp_perto_esq ?? '' }}"/>
                    </div>
                    <div class="col-2">
                        <label class="form-label">C.O/Película</label>
                        <input type="text" name="co_perto_esq" id="" class="form-control"
                               value="{{ old('co_perto_esq') ??$ordemServico->co_perto_esq ?? '' }}"/>
                        <label class="form-label">Adição</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-2">
                        <label class="form-label">Diâmetro</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-2 mt-3">
    <label class="form-label">Data de entrega</label>
    <input type="date" name="data_entrega" id="" class="form-control" min="@php echo date('Y-m-d'); @endphp"
           value="{{ old('data_entrega') ?? $ordemServico->data_entrega ?? '' }}"/>
</div>
<div>
    <label class="form-label">Observação</label>
    <input type="text" name="observacao_os" id="" class="form-control"
           value="{{ old('observacao_os') ?? $ordemServico->observacao_os ?? '' }}"/>
</div>
<div class="mt-3">
    <button type="submit" class="btn btn-primary">Confirmar</button>
    <button class="btn btn-outline-secondary">Cancelar</button>
</div>
