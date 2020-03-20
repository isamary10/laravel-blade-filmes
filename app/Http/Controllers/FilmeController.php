<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie; 
use App\Http\Requests\FilmeRequest;
use App\Genre;

class FilmeController extends Controller
{
    public function procurarFilmeId($id) {
        $filmes = Movie::find($id); 
        return "O filme escolhido foi: $filmes[title]";
    }

    public function procurarFilmeNome($nome) {
        $filmes = Movie::query()->where('title', $nome)->first();
        return($filmes->title);
    }

    public function listar() {
        $filmes = Movie::query()->paginate(); //vincular no filmes.blade.php
        return view('filmes', ['filmes' => $filmes]);
    }

    public function adicionarFilme() {
        $genres = Genre::all();
        return view('adicionar_filme',['genres' => $genres]);
    }

    public function adicionarFilmePost(FilmeRequest $request) {
            
        //dd($request->all());

        //$filmeNovo = new Movie();
        //$filmeNovo->title = $request->titulo;
        //$filmeNovo->rating = $request->classificacao;
        //$filmeNovo->awards = $request->premios;
        //$filmeNovo->length = $request->duracao;
        //$filmeNovo->release_date = "$request->ano-$request->mes-$request->dia 00:00:00";
        //$filmeNovo->genre_id = $request->genre_id;
        //$filmeNovo->save();

        $data = $request->all();
        $filmeNovo = new Movie();
        $filmeNovo->release_date = "$request->ano-$request->mes-$request->dia 00:00:00";
        $filmeNovo->fill($request->all())->save();
        //$filmeNovo->fill($data)->save();
        //O retorno foi um redirect para a página filmes
        return redirect('/filmes')->with('mensagem', 'Formulario salvo!');
    }
}
