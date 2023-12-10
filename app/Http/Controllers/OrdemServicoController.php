<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Medico;
use App\Models\OrdemServico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdemServicoController extends Controller
{

    public function index()
    {
        $ordemServico = OrdemServico::orderBy('data_emissao', 'desc')->get();
//        dd($ordemServico);
        return view('ordem_servico.index', compact('ordemServico'));
    }


    public function create()
    {
        $clientes = Cliente::orderBy('nome', 'desc')->get();
        $medicos = Medico::orderBy('nome_medico', 'desc')->get();

        return view('ordem_servico.create', compact('clientes', 'medicos'));
    }


    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),
        [
            'id_cliente' => 'required',
            'ponte' => 'required',
            'adicao' => 'required',

        ],
        [
            'required' => 'Esse campo é obrigatório'
        ]);

        if($validate->fails()){
            return redirect()->route('ordem-servico.index')->withErrors($validate->errors());
        }

        $user = \Auth::user(); // Retorna o modelo de usuário autenticado

        $usuario_oculos = Cliente::where('id', $request->id_cliente)->first(['nome']);

        try {
            $data =
            $request->except('_token') +
            [

            'ponte'=> '9.2',
            'md'=>'8.2',
            'medida_a'=>'8.2',
            'medida_b'=>'8.2',

            'cilindrico_perto_dir'=>$request->colindrico_perto_dir,
            'cilindrico_perto_esq'=>$request->cilindrido_perto_esq,

            'id_user'=>$user->id,
            'usuario_oculos'=>$usuario_oculos->nome];

            OrdemServico::create($data);

        } catch (\Exception $exception) {

            return redirect()->route('ordem-servico.index')->withErrors(['error'=>'Erro inesperado ao salvar, entre em contato com suporte!']);
        }
        return redirect()->route('ordem-servico.index')->with('success', 'Cadastrado com sucesso');
    }

    public function show(OrdemServico $ordemServico)
    {

    }


    public function edit(OrdemServico $ordemServico)
    {
        $medicos = Medico::orderBy('nome_medico', 'desc')->get();
        $clientes = Cliente::orderBy('nome', 'desc')->get();
//        dd($ordemServico);
        return view('ordem_servico.edit', compact('ordemServico', 'medicos', 'clientes'));
    }

    public function update(Request $request, OrdemServico $ordemServico)
    {
        try {

            $ordemServico->update($request->all());
            return redirect()->route('ordem-servico.index')->with('success', 'Editado com sucesso');

        } catch (\Exception $exception) {
            return redirect()->route('ordem-servico.index')->withErrors(['error'=>'Erro ao editar dados, entre em contato com o suporte!']);
        }
    }


    public function destroy(OrdemServico $ordemServico)
    {
        $ordemServico->delete();
        return view('ordem_servico.index');
    }

    public function pagamento(OrdemServico $ordemServico){
        return view('pagamento.pagamento', compact('ordemServico'));
    }

    public function salvarPagamento(Request $request, OrdemServico $ordemServico)
    {
        try {
            $data = $request->all() + ['situacao_os' => 'aprovada'];

            $ordemServico->update($data);

            return redirect()->route('ordem-servico.index')->with('success', 'Salvo com sucesso');
        }catch (\Exception $exception){
            return redirect()->route('ordem-servico.index')->withErrors(['error'=>'Erro inesperado ao salvar pagamento, entre em contato com o suporte!']);
        }

    }

    public function relatorio()
    {
//        dd('o');
        $ordensServico = OrdemServico::all();
        return view('ordem_servico.relatorio', compact('ordensServico'));
    }
}
