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
            ->with('filmes', $filmes);//with('variavel', conteudo) variavel(dentro da view) = conteudo
    }

    public function exibirDetalhes($id){
        $filme = Filme::find($id); // find() procura obrigatoriamente pelo id PK

        return view('filmes-detalhes')
        ->with('filme',$filme);
    }

    public function adicionarFilme(){
        return view('filme-adicionar');
    }

    public function salvarFilme(Request $request) {
        $request->validate([
            'title' => 'required|max:20|unique:movies'
        ]);

        $filme = new Filme; //criandoo novo filme
        $filme->title =$request->input('title'); // alimentando o nome na memoria
        $filme->rating = 1; // rating é obrigatorio, forçando para facilitar
        $filme->release_date = now();
        $filme->save(); // salvar no banco de dados.

        return redirect('/filmes');// redirect é uma rota não uma view
    }
}
