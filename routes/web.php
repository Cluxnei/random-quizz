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

Route::post('/anwer/{question}', 'AnwerController@check')->name('check.anwer');

Route::get('/success', 'HomeController@success')->name('success');
