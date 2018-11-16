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

Route::get('clients', function(){
    return '<h1>Lista de clientes</h1>';
});

Route::get('clients/create/new', function(){
    return '<h1>Criar Cliente</h1>';
});

Route::get('clients/{name}/{age?}', function($name, $age='não definido'){
    return "Detalhes do cliente {$name} ele tem {$age} anos";
})->where(['age' => '[0-9]+', 'name' => '[A-Za-z]+']);
