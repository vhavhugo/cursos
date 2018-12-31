@extends('layouts.app')

@section('titulo-pagina')
    <h1>Lista de tasks</h1>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th>Descição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}">
                                    {{ $task->subject }}
                                </a>
                            </td>
                            <td>{{ $task->made ? 'Sim' : 'Não' }}</td>
                            <td>{{ $task->description }}</td>
                            <td>
                                
                                <a class="btn btn-success" href="{{ route('tasks.edit', $task->id) }}">Editar</a>
                                <form style="display: inline" action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Tem certeza que deseja remover o task?')">
                                        Deletar
                                    </button>
                                </form>
                            </td>
                        </tr>   
                    @empty
                    <tr>
                        <td>Nenhum task cadastrado!</td>
                    </tr>
                    @endforelse                    
                </tbody>
            </table>
            <div class="row text-center">
                {{ $tasks->links() }}
            </div>
            <a href="{{ route('tasks.create') }}">Criar task</a>
        </div>
    </div>
@endsection

