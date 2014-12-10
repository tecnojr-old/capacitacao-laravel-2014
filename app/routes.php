<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::controller("/user", 'UsersController');

Route::get('/contact', 'FeedbackController@getContact');
Route::post('/contact', 'FeedbackController@postContact');

Route::controller("/alunos", "AlunosController");
Route::controller("/disciplinas","DisciplinasController");
Route::controller("/turmas", "TurmasController");

Route::get("/professores", "ProfessoresController@getIndex");
Route::controller("/professores", "ProfessoresController");