<?php

class ProfessoresController extends BaseController{

	public function getIndex(){
		$professores=Professor::all();

		return View::make("professores.table")->withProfessores($professores);
	}

	protected function formView($id=null){
		$professor = Professor::findOrNew($id);
		return View::make("professores.form")->withProfessor($professor);
	}

	protected function store($id=null){
		$p = Professor::findOrNew($id);

		$p->nome = Input::get("nome");
		$p->matricula = Input::get("matricula");

		if($p->save()){
			return Redirect::to("/professores");
		}
		else{
			dd("Erro ao salvar o professor!");
		}
	}

	public function getDelete($id){
		Professor::find($id)->delete();

		return Redirect::to("professores");
	}

}