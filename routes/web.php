<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use GuzzleHttp\Promise\Create;

Route::get('/', function () {
    //return view('welcome');
    return "Bienvenidos al curso de laravel";
});

Route::get('/games', [GamesController::class,'index'] )->name('games');
Route::get('/games/create', [GamesController::class, 'create'])->name('gamesCreate');
Route::get('/games/{name_game}/{categoria?}', [GamesController::class, 'help']);
Route::POST('games/storevideogame', [GamesController::class, 'storeVideogame'])->name('createVideogame');
Route::get('/view/{game_id}', [GamesController::class, 'view'])->name('viewGame');
Route::POST('/games/updateVideogame', [GamesController::class, 'updateVideogame'])->name('updateVideogame');
