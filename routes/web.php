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

// rota sem parametro
Route::get('/hello',function(){
    echo 'Hello World!';
});

// rota com parametro
Route::get('saudacoes/{nome}', function($nome){
    echo 'Olá ' . $nome;
});

// rota com parametro opcional 
// usa ? para dizer q parametro é opcional
Route::get('/multiplicacao/{numero1}/{numero2?}', function($numero1,$numero2 = null){
    if($numero2 != null){
        echo $numero1 * $numero2;
    }else{
        echo 'Faltou o segundo número';
    }
});

// rota que redireciona para view
Route::get('/view',function(){
    return view('minhaPrimeira');
});

Route::get('/view-parametro/{nome}',function($nome){
    return view('minhaSegunda')->with('nomeBlade', $nome);
});

Route::get('/desafio/{idade}', function($idade){
    if($idade >= 18){
        return view('PossoEntrar')->with('nomeBlade', 'Bem vindo!');
    }else{
        return view('PossoEntrar')->with('nomeBlade', 'Você não tem idade para entrar.');

        };
});
// controller fica na pasta app/Http/Controllers
// fazer uma rota pra cada função.
Route::get('/filmes', 'FilmesController@exibirTodos');

