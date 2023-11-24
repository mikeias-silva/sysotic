<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Medico;
use App\Models\OrdemServico;
use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{

    public function index()
    {
        $ordemServico = OrdemServico::all();
        return view('ordem_servico.index', compact('ordemServico'));
    }


    public function create()
    {
        $clientes = Cliente::all();
        $medicos = Medico::all();
        return view('ordem_servico.create', compact('clientes', 'medicos'));
    }


    public function store(Request $request)
    {
        $user = \Auth::user(); // Retorna o modelo de usuário autenticado

        $usuario_oculos = Cliente::where('id', $request->id_cliente)->first(['nome']);

        try {
            $data = $request->except('_token') + ['ponte'=> '9.2', 'md'=>'8.2', 'medida_a'=>'8.2',
                    'medida_b'=>'8.2', 'cilindrico_perto_dir'=>$request->colindrico_perto_dir,
                    'cilindrico_perto_esq'=>$request->cilindrido_perto_esq, 'id_user'=>$user->id,
                    'usuario_oculos'=>$usuario_oculos->nome];
            OrdemServico::create($data);
        } catch (\Exception $exception) {
//            dd($exception);
            return redirect()->route('ordem-servico.index')->with('error', $exception->getMessage());
        }
        return redirect()->route('ordem-servico.index')->with('success', 'Cadastrado com sucesso');
    }

    public function show(OrdemServico $ordemServico)
    {

    }


    public function edit(OrdemServico $ordemServico)
    {
        return view('ordem_servico.edit', compact('ordemServico'));
    }

    public function update(Request $request, OrdemServico $ordemServico)
    {
        try {
            $ordemServico->update($request->all());
        } catch (\Exception $exception) {
            return view('ordem_servico.index')->with('error', $exception->getMessage());
        }
        return view('ordem_servico.index');
    }


    public function destroy(OrdemServico $ordemServico)
    {
        $ordemServico->delete();
        return view('ordem_servico.index');
    }
}
