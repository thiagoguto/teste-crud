<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('pagina.index',['clientes' => $clientes]);
    }


    public function create()
    {
        return view('pagina.create');
    }

    public function store(Request $request)
    {
        $dadosForm = $request->all();
        $cliente = new Cliente($dadosForm);
        $cliente->save();

        return redirect('/') ;
    }

    public function show($id)
    {
        return view('pagina.show');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('pagina.edit',['cliente' => $cliente]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nome = $request->get('nome');
        $cliente->idade = $request->get('idade');
        $cliente->tipo = $request->get('tipo');
        $cliente->ativo = $request->get('ativo');
        $cliente->cpf = $request->get('cpf');
        $cliente->cnpj = $request->get('cnpj');
        
        $cliente->push($id);
        return redirect('/')->with('editado','O cliente ' . $cliente->nome . ' foi alterado com sucesso.');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        
        return redirect('/');
    }
}
