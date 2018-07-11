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

//HangMan
Route::group(['prefix' => 'games/hangman/'], function () {
    Route::get('index/{route?}/{id?}', 'HangmanController@index');
});


//Quiz
Route::get('games/quiz/index', 'QuizController@index');


Auth::routes();

Route::get('/logout','Auth\loginController@logout');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
   Route::get('/',function (){
       return view('admin.index');
   })->name('admin.index') ;
});