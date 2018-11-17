<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('cliente','treinaweb/clients',301);

Route::prefix('treinaweb/clients')->group(function(){

    Route::get('/', function(){
        return '<h1>Lista de clientes</h1> <br>' 
        . Route::current()->uri
        . "<br>" . Route::currentRouteName();
    })->name('clients.list');
    
    Route::get('create/new', function(){
        $html = '<h1>Criar Cliente</h1>';

        $html .= '<br>
            <form action="' . route('clients.save') . '" method="POST">
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                Nome: <input type="text" name="name"><br>
                Idade: <input type="text" name="age"><br>
                <input type="submit" value="Salvar">
            </form>
            ';
        $html .= '<br><a href="' . route('clients.list') . '">Lista de Clientes</a>';
        return $html;
    });
    
    Route::match(['post','put'], 'save', function(){
        return 'Cliente criado com sucesso!';
    })->name('clients.save');

    // Route::get('{name}/{age?}', function($name, $age='não definido'){
    //     $html = "Detalhes do cliente {$name} ele tem {$age} anos";
    //     $html .= '<br><a href="' . route('clients.list') . '">Lista de Clientes</a>';
    //     return $html;
    // })->where(['age' => '[0-9]+', 'name' => '[A-Za-z]+']);
    
});

