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
		$professor = Professor::findOrNew($id);

		$professor->nome = Input::get("nome");
		$professor->matricula = Input::get("matricula");

		if($professor->save()){
			Session::flash("success", "Os dados do professor foram salvos com sucesso!");

			return Redirect::to("/professores");
		}
		else{
			Session::flash("error", "Erro ao salvar os dados do professor, verifique no formulário!");

			return Redirect::back()->withInput()->withErrors($professor->getErrors());
		}
	}

	public function getDelete($id){
		if(Professor::find($id)->delete()){
			Session::flash("success", "Professor removido com sucesso!");
		}

		return Redirect::to("professores");
	}

}