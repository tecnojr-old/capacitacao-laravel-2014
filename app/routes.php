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


Route::get("/alunos/edit/{id}/turmas", "AlunosController@getTurmas");
Route::post("/alunos/edit/{id}/turmas", "AlunosController@postTurmas");

Route::controller("/alunos", "AlunosController");

Route::controller("/disciplinas","DisciplinasController");
Route::get("/turmas/{id}/alunos", "TurmasController@getAlunos");

Route::controller("/turmas", "TurmasController");

Route::controller("/professores", "ProfessoresController");