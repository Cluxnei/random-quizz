<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/random/question', 'QuestionController@random')->name('random.question');

Route::get('/random/questions/{number}', 'QuestionController@randomQuestions')->name('random.questions');

Route::post('/answer/{id}', 'AnwerController@check')->name('check.answer');

Route::get('/success', 'HomeController@success')->name('success');

Route::get('/game-over', 'HomeController@gameover')->name('game.over');

Route::post('/user', 'UserController@store')->name('user.store');

Route::post('/increment-score', 'UserController@increment')->name('score.increment');

Route::post('/check-win', 'UserController@checkWin')->name('check.win');

Route::get('/ranking', 'RankingController@index')->name('ranking');
