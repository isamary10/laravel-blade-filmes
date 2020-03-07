<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function procurarFilmeId($id) {
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];
        //code here
        return "O filme escolhido foi: $filmes[$id]";
    }

    public function procurarFilmeNome($nome) {
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];

        foreach($filmes as $filme) {
            if (strtolower($filme) == strtolower($nome)) {
                return $filme;
            }
        }
    }

    public function listar() {
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];
        return view('filmes', ['filmes' => $filmes]);
    }

    public function adicionarFilme() {
        return view('adicionar_filme');
    }

    public function adicionarFilmePost() {
        return redirect('/filmes')->with('mensagem', 'Formulario salvo!');
    }
}
