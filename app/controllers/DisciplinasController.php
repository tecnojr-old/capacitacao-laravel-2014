<?php

class DisciplinasController extends BaseController{
	
	public function getAdd(){
		return View::make("disciplinas.form");
	}

	public function postAdd(){
		$p = new Disciplina;

		$p->descricao = Input::get("descricao");
		$p->codigo = Input::get("codigo");

		if($p->save()){
			return Redirect::to("/disciplinas");
		}
		else{
			dd("Erro ao salvar a disciplina!");
		}
	}

	public function getIndex(){
		$disciplinas=disciplina::all();
		return View::make("disciplinas.table")->with("disciplinas", $disciplinas);
	}
}