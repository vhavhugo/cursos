@extends('layouts.app')

@section('titulo-pagina')
    <h1>Editar task</h1>
@endsection

@section('content');
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('tasks.update', $task->id) }}">
                    {{ csrf_field()}}
                    {{ method_field('PUT') }}
                    @include('tasks.form');
                </form>    
            <a href="{{ route('tasks.index')}}">Voltar para a lista de tasks</a>
        </div>
    </div>
@endsection

