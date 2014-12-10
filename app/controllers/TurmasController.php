<?php

class TurmasController extends BaseController{
	
	public function getList(){
		return View::make("turmas.table")->withTurmas(Turma::all());
	}

	public function getAdd(){
		return View::make("turmas.form");
	}

	public function postAdd(){
		$turma = new Turma();

		$turma->professor_id = Input::get("professor_id");
		$turma->disciplina_id = Input::get("disciplina_id");
		$turma->codigo = Input::get("codigo");

		if($turma->save()){
			return Redirect::to("turmas/list");
		}
		else{
			dd("ERROR");
		}

	}
}