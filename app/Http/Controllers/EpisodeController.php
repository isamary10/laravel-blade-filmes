<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episode;

class EpisodeController extends Controller
{
    public function index() {
        //Método estático
        
        //Esse comando trás todos os registros da tabela
        //Episode::all();
        
        //$episodes = Episode::all();

        //Para encontrar somente um registro pelo id
        //$episodes = Episode::find(2);

        //Para encontrar vários registros / get sempre retorna um array e o fist (sempre model) sempre o primeiro que encontrar na consulta)
        //$episodes_com_query = Episode::query()->whereIn('id', [1, 2])->get();

        // Faz a mesma coisa que o print_r. O toArray converte parfa array somente o que eu quero ver
        //dd($episodes_com_query->toArray());
        //dd($episodes);


        //CRIANDO ALGO NOVO NA TABELA
        //Iniciando um model
        //$episode = new Episode();
        //Preenchendo os valores da model
        //$episode->title = "Friends";
        //$episode->number = "456";
        //$episode->rating = "10";
        //$episode->release_date = "2020-03-06 00:00:00";
        //Salvando os preenchimentos
        //$episode->save();

        //Encontrando uma a model preenchida
        //$episode = Episode::find(58);
        //dd($episode);

        //EDITANDO O QUE FOI CRIADO NO MODEL
        //Buscando o model
        $episode = Episode::find(1);
        //Alterando o model
        $episode->title = "GOT - Não Presta!";
        $episode->save();
        dd($episode);

        //DELETANDO O QUE FOI CRIADO NO MODEL
        $episode = Episode::find(1);
        $episode->delete();

    }
}
