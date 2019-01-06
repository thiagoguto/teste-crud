@extends('assets.app')
@section('content')
    <h1>Novo Cliente</h1>
    <form action="/" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" >
    </div>
    <div class="form-group">
        <label for="idade">Idade</label>
        <input type="number" name="idade" class="form-control" placeholder="Digite sua idade" >
    </div>
    <div class="form-group">
        <label for="tipo">Tipo de Pessoa</label>
        <select type="text" name="tipo" class="form-control" placeholder="Digite seu nome" >
            <option value=''>--</option>
            <option value='Física'>Física</option>
            <option value='Jurídica'>Jurídica</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ativo">Ativo</label>
        <select type="text" name="ativo" class="form-control" placeholder="Digite seu nome" >
            <option value=''>--</option>
            <option value='Sim'>Sim</option>
            <option value='Não'>Não</option>
        </select>
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="number" name="cpf" class="form-control" placeholder="Digite seu CPF" >
    </div>
    <div class="form-group">
        <label for="cpf">CNPJ</label>
        <input type="number" name="cnpj" class="form-control" placeholder="Digite seu CNPJ" >
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
@endsection