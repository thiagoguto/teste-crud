<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('pagina.index');
    }


    public function create()
    {
        return view('pagina.create');
    }

    public function store(Request $request)
    {
        //
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