<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\FilmeRequest;


class ApiFilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Movie::all(); //Responsável por listar todos os filmes que temos no banco de dados
        return Movie::paginate(); // Mostra todos os métodos que tem em uma paginação
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Criando um novo filme
        $data = $request->all();
        //dd($data);
        $novoFilme = new Movie();
        $novoFilme->release_date = "$request->ano-$request->mes-$request->dia 00:00:00";
        $novoFilme->fill($data);
        $novoFilme->save();
        
        return $novoFilme;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) //Vai exibir um json mostrando o objeto solicitado na URL
    {   
        $movie = Movie::findOrFail($id);
        return $movie;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Trazendo a model com os valores do request
        $movie = Movie::findOrFail($id);
        //Preenchendo a model com os valores do request e persistindo o novo model no banco
        $movie->fill($request->all())->save();
        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Busquei o registro no banco
        $movie = Movie::findOrFail($id);
        //Deletando o que foi criado na model
        $movie->delete();
    }
}
