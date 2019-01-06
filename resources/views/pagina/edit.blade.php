@extends('assets.app')
@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('updateCliente', $cliente->id) }}" method="POST">
            {{ csrf_field() }}
            <h2>{{ $cliente->id }}</h2>
    <div class="form-group">
      <label for="nome">Nome</label>
      <input value="{{ $cliente->nome }}" type="text" name="nome" class="form-control" placeholder="Digite seu nome" >
    </div>
    <div class="form-group">
        <label for="idade">Idade</label>
        <input value="{{ $cliente->idade }}" type="number" name="idade" class="form-control" placeholder="Digite sua idade" >
    </div>
    <div class="form-group">
        <label for="tipo">Tipo de Pessoa</label>
        <select type="text" name="tipo" class="form-control" placeholder="Digite seu nome" >
            @if ($cliente->tipo == 'Física')
            <option value="{{ $cliente->tipo }}">{{ $cliente->tipo }}</option>
            <option value='Jurídica'>Jurídica</option>
            @else
            <option value='Física'>Física</option>                
            <option value="{{ $cliente->tipo }}">{{ $cliente->tipo }}</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="ativo">Ativo</label>
        <select type="text" name="ativo" class="form-control" placeholder="Digite seu nome" >
            @if ($cliente->ativo == "Sim")
                <option value="{{ $cliente->ativo }}">{{ $cliente->ativo }}</option>
                <option value='Não'>Não</option>
            @else
                <option value='Sim'>Sim</option>
                <option value='Não'>Não</option>                
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input value="{{ $cliente->cpf }}" type="number" name="cpf" class="form-control" placeholder="Digite seu CPF" >
    </div>
    <div class="form-group">
        <label for="cpf">CNPJ</label>
        <input value="{{ $cliente->cnpj }}" type="number" name="cnpj" class="form-control" placeholder="Digite seu CNPJ" >
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
@endsection