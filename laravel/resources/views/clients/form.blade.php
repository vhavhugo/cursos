@extends('layout')

@section('titulo')
<h1>Criar Cliente</h1>
@endsection

@section('barra-lateral')
    <h3>Meu valor personalizado 2</h3>
@endsection

@section('conteudo');

    <form action="<?= route('clients.save') ?>" method="POST">
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        Nome: <input type="text" name="name"><br>
        Idade: <input type="text" name="age"><br>
        <input type="submit" value="Salvar">
    </form>
    <a href="<?= route('clients.list') ?>">Lista de Clientes</a>        
@endsection

