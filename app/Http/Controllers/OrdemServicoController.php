<?php

namespace App\Http\Controllers;

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
        return view('ordem_servico.create');
    }


    public function store(Request $request)
    {
        try {
            OrdemServico::create($request->all());
        } catch (\Exception $exception) {
            return view('ordem_servico.index')->with('error', $exception->getMessage());
        }
        return view('ordem_servico.index');
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
