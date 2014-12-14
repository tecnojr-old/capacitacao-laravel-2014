<?php

class TurmasController extends BaseController{
	
	public function getIndex(){
		$turmas = Turma::all();

		return View::make("turmas.table")->withTurmas($turmas);
	}

	public function getAlunos($id){
		return View::make("turmas.alunos", ["alunos" => Turma::find($id)->alunos ]);
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
			Session::flash("success", "Os dados da turam foram salvos com sucesso!");
			return Redirect::to("turmas");
		}
		else{
			Session::flash("error", "Erro ao salvar os dados da turma, verifique no formulário!");

			return Redirect::back()->withInput()->withErrors($turma->getErrors());
		}
	}

	public function getDelete($id){
		Turma::find($id)->delete();

		return Redirect::to("turmas");
	}
}