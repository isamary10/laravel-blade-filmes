<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/collection', function () {
    //$movies = App\Movie::query()->where('title', 'Avatar')->first();
    
    //$movies = App\Movie::all();
    //dd($movies->where('title', 'Avatar'));

    //$episode = App\Episode::find(1);
    //dd($episode->actors);

    //$winter_is_coming = App\Episode::find(1);
    //dd($winter_is_coming->actors->find('first_name', 'Peter'));

    //$actor = App\Actor::find(33);
    //dd($actor->episodes->pluck('title'));

    $actor = App\Actor::find(1);
    dd($actor->first_name, $actor->favorite_movie);

});

Route::get('/episodes', 'EpisodeController@index');
Route::get('/filmes/{id}', 'FilmeController@procurarFilmeId');
Route::get('/filmes/procurar/{nome}', 'FilmeController@procurarFilmeNome');
Route::get('/filmes', 'FilmeController@listar');
Route::get('/adicionar-filme', 'FilmeController@adicionarFilme');
Route::post('/adicionar-filme', 'FilmeController@adicionarFilmePost');

Route::get('/adicionar-usuario', 'UserController@create');
Route::post('/adicionar-usuario', 'UserController@store');

// middleware serve para ver se o usuário esta autorizado
Route::get('/usuarios', 'UserController@index');//->middleware('auth'); 

//Route::auth();

Route::resource('/api/filmes', 'ApiFilmeController');