<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmesController extends Controller
{
    public function exibirTodos(){
        // $filmes = Filme::all(); all não precisa de get, os outros precisam
        // $filmes = Filme::orderBy('title','DESC')->get();
        // $filmes = Filme::where('title','like','A%')->get();
        // $filmes = Filme::where('title','like','%A')
        // ->where('rating','>',2)
        // ->orderBy('rating','DESC')
        // ->orderBy('title','DESC')
        // ->get();

        $filmes = Filme::paginate(5); // habilita a funçao link no blade


        return view('filmes-todos')
            ->with('filmes', $filmes);//with('variavel', conteudo) variavel = conteudo
    }
}
