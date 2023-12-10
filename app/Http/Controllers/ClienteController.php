<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $validate = Validator::make($request->all(), [
            'nome'=> 'required',
            'sexo'=> 'required',
            'data_nascimento'=>'required',
            'telefone'=>'required',
            'cep'=>'required',
            'logradouro'=>'required',
            'numero'=>'required',
            'email'=>'required',
            'doc_identificacao' => ['required', 'regex:/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/'],
        ], [
            'required' => 'Esse campo é obrigatório',
            'regex' => 'O CPF é inválido',
        ]);

        $validate->after(function ($validator) use ($request) {
            if (!$this->validarCpf($request->doc_identificacao)) {
                $validator->errors()->add('doc_identificacao', 'O CPF é inválido');
            }
        });

        if ($validate->fails()) {
            return redirect()->route('cliente.index')->withErrors($validate->errors());
        }

        try {
            Cliente::create($request->except('_token'));
            return redirect()->route('cliente.index')->with('success', 'Cadastrado com sucesso!');
        } catch (Exception $exception) {
            return redirect()->route('cliente.index')->withErrors(['errors' => 'Erro inesperado!']);
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

    private function validarCpf($cpf)
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        // Verifica se o CPF tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se todos os dígitos são iguais, o que é considerado inválido
        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        // Algoritmo de validação do CPF
        for ($i = 0; $i < 2; $i++) {
            $digitoVerificador = 0;

            // Calcula o dígito verificador
            for ($j = 0; $j < 9 + $i; $j++) {
                $digitoVerificador += $cpf[$j] * (10 + $i - $j);
            }

            $digitoVerificador = 11 - ($digitoVerificador % 11);
            $digitoVerificador = ($digitoVerificador >= 10) ? 0 : $digitoVerificador;

            // Verifica se o dígito verificador calculado é igual ao informado
            if ($digitoVerificador != $cpf[9 + $i]) {
                return false;
            }
        }

        return true; // Retorna true apenas se a validação for bem-sucedida
    }
}
