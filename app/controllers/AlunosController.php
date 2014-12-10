<?php

class AlunosController extends BaseController{
	
	public function getList(){
		return View::make("alunos.table")->with("alunos", Aluno::all());
	}

	public function getAdd(){
		return View::make("alunos.form");
	}

	public function postAdd(){
		$aluno = new Aluno; 

		$aluno->nome = Input::get("nome");
		$aluno->matricula= Input::get("matricula");
		$aluno->data_nasc= Input::get("data_nasc");

		if($aluno->save()){
			return Redirect::to("alunos/list");			
		} 
		else{
			dd("Erro!");
		}
	}

}