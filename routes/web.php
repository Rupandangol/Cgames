<?php

use Illuminate\Support\Facades\Route;

//main home page
Route::get('/', function () {
    return view('Games/home');
});


//****************************************GAMES****************************************

//Tic Tac Toe
Route::get('games/TTT/index', 'TTTController@index');