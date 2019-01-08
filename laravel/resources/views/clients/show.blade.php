@extends('layouts.app')

@section('titulo-pagina')
    <h1>Detalhes do Cliente</h1>
@endsection

@section('content');
    <div class="row">
        <div class="col-md-12">
            <p>O id do cliente é {{ $client->id }}</p>
            <p>O nome do cliente é {{ $client->name }}</p>
            <p>O email do cliente é {{ $client->email }}</p>
            <p>A idade do cliente é {{ $client->age }}</p>
            <p>Foto do Cliente: <a href="{{ route('clients.photo_download', $client) }}">Baixar imagem</a></p>
            <img src="{{ asset('storage/' . str_after($client->photo, 'public/'))  }}"
                 alt="" width="600">
<br>
            <a href="{{ route('clients.index')}}">Voltar para a lista de clientes</a>
        </div>
    </div>
@endsection

