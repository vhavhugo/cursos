@extends('layouts.app')

@section('titulo-pagina')
    <h1>Detalhes do Projeto</h1>
@endsection

@section('content');
    <div class="row">
        <div class="col-md-12">
            <p>O id do projeto é {{ $project->id }}</p>
            <p>O nome do projeto é {{ $project->name }}</p>
            <p>O email do projeto é {{ $project->email }}</p>
            <p>A idade do projeto é {{ $project->age }}</p>
            <p>Foto do Projeto: </p>
            <img src="{{ asset('storage/' . str_after($project->photo, 'public/'))  }}"
                 alt="" width="600">
            
            <br>
            
            {{--  <p>
            Projetos do cliente:

            @forelse($client->projects as $project)
                <p>{{ $project->name }}</p>
            @empty
                <p>Não tem projeto</p>   
            @endforelse
            </p>  --}}

            <a href="{{ route('projects.index')}}">Voltar para a lista de projetos</a>
        </div>
    </div>
@endsection

