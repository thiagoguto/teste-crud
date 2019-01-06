@extends('assets.app')
@section('content')
    <h1>Lista de Clientes</h1>
    <table class="table table-striped table-inverse table-responsive ">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Tipo Pessoa</th>
                <th>Ativo</th>
                <th>Cliente desde</th>
                <th>CPF</th>
                <th>CNPJ</th>
                <th>Criado em</th>
                <th>Atualizado em</th>
                <th>Editar/Excluir</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nome }}</td>
                    <td>{{ $c->idade }}</td>
                    <td>{{ $c->tipo }}</td>
                    <td>{{ $c->ativo }}</td>
                    <td>{{ $c->created_at->format('d/m/y') }}</td>
                    <td>{{ $c->cpf }}</td>
                    <td>{{ $c->cnpj }}</td>
                    <td>{{ $c->created_at->format('d/m/y') }}</td>
                    <td>{{ $c->updated_at->format('d/m/y') }}</td>
                    <td><a class="btn btn-primary btn-sm" href="cliente/{{ $c->id }}/editar" >editar</a><a class="btn btn-danger btn-sm" href="" >excluir</a></td>
                </tr>
                @endforeach
            </tbody>
    </table>
@endsection