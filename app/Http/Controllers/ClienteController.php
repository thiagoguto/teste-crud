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
        return view('pagina.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
