<h1>Lista de clientes</h1> 
<br> 
{{ Route::current()->uri }}
<br>
{{ Route::currentRouteName() }}
<br>
{{-- '<script>alert("Ola mundo")</script>' --}}

@{{ cliente }}
<br>
{{ $cliente }} - {{ $group }}