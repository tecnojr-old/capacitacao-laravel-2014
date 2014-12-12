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
		$p = Disciplina::findOrNew($id);

		$p->descricao = Input::get("descricao");
		$p->codigo = Input::get("codigo");

		if($p->save()){
			return Redirect::to("disciplinas");
		}
		else{
			dd("Erro ao salvar a disciplina!");
		}
	}

	public function getDelete($id){
		Disciplina::find($id)->delete();

		return Redirect::to("disciplinas"); 
	}

	
}