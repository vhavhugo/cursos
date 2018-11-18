@extends('layouts.app')

@section('content');
<div class="container">
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
    
</div>

