<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{

    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        try {
            Medico::create($request->except('_token'));
            return redirect()->route('medico.index')->with('success', 'Inserido com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->route('medico.index')->withErrors(['error' => $exception->getMessage()]);
        }
    }

    public function show(Medico $medico)
    {
        //
    }

    public function edit(Medico $medico)
    {
        return view('medicos.edit', compact('medico'));
    }

    public function update(Request $request, Medico $medico)
    {
        try {
            $medico->update($request->all());
            return redirect()->route('medico.index')->with('success', 'Editado com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->route('medico.index')->withErrors(['error' => $exception->getMessage()]);
        }
    }

    public function destroy(Medico $medico)
    {
        try {
            $medico->delete();
            return redirect()->route('medico.index')->with('success', 'Deletado com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->route('medico.index')->withErrors(['error' => $exception->getMessage()]);
        }
    }
}
