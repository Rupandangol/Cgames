<?php

use Illuminate\Support\Facades\Route;

//main home page
Route::get('/', function () {
    return view('Games/home');
});


//****************************************GAMES****************************************

//Tic Tac Toe
Route::get('games/TTT/index', 'TTTController@index');
//Quiz
Route::get('games/quiz/index','QuizController@index');


Auth::routes();

Route::get('/logout','Auth\loginController@logout');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
   Route::get('/',function (){
       return view('admin.index');
   })->name('admin.index') ;
});