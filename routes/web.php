<?php

use Illuminate\Support\Facades\Route;

//main home page
Route::get('/', function () {
    return view('Games/home');
});


//****************************************GAMES****************************************

//Tic Tac Toe
Route::group(['prefix' => 'games/TTT/'], function () {
    Route::get('index/{route?}/{id?}', 'TTTController@index');
});

//Quiz
Route::get('games/quiz/index', 'QuizController@index');

