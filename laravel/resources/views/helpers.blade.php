@extends('layouts.app')



@section('content')

    <div class="container">

        {{ route('clients.edit', ['id' => 20, 'name' => 'Hugo']) }}
        <br>
        {{ str_after('Treinaweb cursos', 'Treinaweb') }}
        <br>
        {{ app_path('Http/Controllers/Controller.php') }}
        <br>
        {{ array_random(['Maria','João','Pedro'])}}
    </div>

@endsection


