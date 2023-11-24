<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Mockery\Exception;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        try {
            Cliente::create($request->except('_token'));
            return redirect()->route('cliente.index')->with('success', 'Cadastrado com sucesso!');
        } catch (Exception $exception) {
            dd($exception->getMessage());
            return redirect()->route('cliente.index')->withErrors(['errors' => $exception->getMessage()]);
        }
    }

    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        try {
            $cliente->update($request->except('_token'));
            return redirect()->route('cliente.index')->with('success', 'Editado com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->route('cliente.index')->withErrors(['error' => $exception->getMessage()]);
        }
    }

    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();
            return redirect()->route('cliente.index')->with('success', 'Deletado com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->route('cliente.index')->withErrors(['error' => $exception->getMessage()]);
        }
    }
}
