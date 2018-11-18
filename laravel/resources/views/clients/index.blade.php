@extends('layouts.app')

@section('content');
<div class="container">
    @forelse ($clients as $client)
        <p>ID cliente: {{ $client->id }} </p>
        <p>Nome cliente: {{ $client->name }} </p>
        <p>Email cliente: {{ $client->email }} </p>
        <p>Idade cliente: {{ $client->age }} </p>
    @empty
        <p>Nenhum cliente cadastrado!</p>
    @endforelse
</div>
@endsection

