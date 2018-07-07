<?php
use Illuminate\Support\Facades\Route;
//main home page
Route::get('/', function () {
    return view('Games/home');
});

Route::get('games/quiz/index','QuizController@index');