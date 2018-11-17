@extends('layouts.app')

@section('content');

    <div class="container">
        <form action="<?= route('clients.save') ?>" method="POST">
            <input type="hidden" name="_token" value="<?= csrf_token() ?>">
            Nome: <input type="text" name="name"><br>
            Idade: <input type="text" name="age"><br>
            <input type="submit" value="Salvar">
        </form>
        <a href="<?= route('clients.list') ?>">Lista de Clientes</a>
    </div>
            
@endsection

