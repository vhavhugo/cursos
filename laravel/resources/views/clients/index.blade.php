@extends('layout')

@section('titulo')
<h1>Lista de clientes</h1> 
@endsection

@section('barra-lateral')
    <h3>Meu valor personalizado</h3>
@endsection

@section('conteudo');
{{ Route::current()->uri }}
<br>
{{ Route::currentRouteName() }}
<br>
{{-- '<script>alert("Ola mundo")</script>' --}}

{{--  @{{ cliente }}  --}}
<br>
{{--  {{ $cliente }} - {{ $group }}  --}}
<br>
@if($group == 'Restaurante')
    <p>O grupo é Restaurante</p>
@elseif ($group == 'Atacado')
    <p>O grupo é Atacado</p>
@else
    <p>O grupo não é Restaurante
@endif

@for ($i = 0; $i < 10; $i++)
<p>O número é {{ $i }}</p>
@endfor

@forelse ($clients as $client)
    <p>Nome cliente: {{ $client }} </p>
@empty
    <p>Nenhum cliente</p>
@endforelse
        
@endsection

