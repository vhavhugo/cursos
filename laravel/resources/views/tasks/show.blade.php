@extends('layouts.app')

@section('titulo-pagina')
    <h1>Detalhes do task</h1>
@endsection

@section('content');
    <div class="row">
        <div class="col-md-12">
            <p>O id do task é {{ $task->id }}</p>
            <p>O nome do task é {{ $task->name }}</p>
            <p>O email do task é {{ $task->email }}</p>
            <p>A idade do task é {{ $task->age }}</p>
            <p>Foto do task: </p>
            <img src="{{ asset('storage/' . str_after($task->photo, 'public/'))  }}"
                 alt="" width="600">
<br>
            <a href="{{ route('tasks.index')}}">Voltar para a lista de tasks</a>
        </div>
    </div>
@endsection

