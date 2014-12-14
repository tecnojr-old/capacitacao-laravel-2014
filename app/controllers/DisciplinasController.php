<?php

class DisciplinasController extends BaseController{
	
	public function getIndex(){
		$disciplinas=disciplina::all();
		
		return View::make("disciplinas.table")->withDisciplinas($disciplinas);
	}

	protected function formView($id=null){
		$disciplina = Disciplina::findOrNew($id);

		return View::make("disciplinas.form")->withDisciplina($disciplina);
	}

	public function store($id=null){
		$disciplina = Disciplina::findOrNew($id);

		$disciplina->descricao = Input::get("descricao");
		$disciplina->codigo = Input::get("codigo");

		if($disciplina->save()){
			Session::flash("success", "Os dados disciplina foram salvos com sucesso!");
			
			return Redirect::to("disciplinas");
		}
		else{
			Session::flash("error", "Erro ao salvar os dados da disciplina, verifique no formulário!");

			return Redirect::back()->withInput()->withErrors($disciplina->getErrors());
		}
	}

	public function getDelete($id){
		Disciplina::find($id)->delete();

		return Redirect::to("disciplinas"); 
	}

	
}