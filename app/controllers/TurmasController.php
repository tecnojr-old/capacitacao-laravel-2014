<?php

class TurmasController extends BaseController{
	
	public function getIndex(){
		$turmas = Turma::remember(2)->get();

		return View::make("turmas.table")->withTurmas($turmas);
	}

	protected function formView($id=null){
		$turma = Turma::findOrNew($id);

		return View::make("turmas.form")->withTurma($turma);
	}

	protected function store($id=null){
		$turma = Turma::findOrNew($id);

		$turma->professor_id = Input::get("professor_id")?:null;
		$turma->disciplina_id = Input::get("disciplina_id")?:null;
		$turma->codigo = Input::get("codigo");

		if($turma->save()){
			return Redirect::to("turmas");
		}
		else{
			dd("ERROR");
		}
	}

	public function getDelete($id){
		Turma::find($id)->delete();

		return Redirect::to("turmas");
	}
}