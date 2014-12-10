<?php

class ProfessoresController extends BaseController{
	

	public function getIndex(){
		$professores=Professor::all();
		return View::make("professores.table")->with("professores", $professores);
	}

	public function getAdd(){
		return View::make("professores.form");
	}


	public function postAdd(){
		$p = new Professor;

		$p->nome = Input::get("nome");
		$p->matricula = Input::get("matricula");

		if($p->save()){
			return Redirect::to("/professores");
		}
		else{
			dd("Erro ao salvar o professor!");
		}
	}

	public function getEdit($id){
		$professor = Professor::find($id);
		return View::make("professores.form")->with("professor", $professor);
	}

	public function postEdit($id){
		$p = Professor::find($id);

		$p->nome = Input::get("nome");
		$p->matricula = Input::get("matricula");

		if($p->save()){
			return Redirect::to("/professores");
		}
		else{
			dd("Erro ao editar o professor!");
		}

	}

	public function getDelete($id){
		Professor::find($id)->delete();

		return Redirect::to("professores");
	}

}