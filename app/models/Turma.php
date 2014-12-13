<?php

class Turma extends Eloquent{
	protected $table = "turmas";
	public $timestamps = false;


	public function disciplina(){
		return $this->belongsTo("Disciplina");
	}

	public function professor(){
		return $this->belongsTo("Professor");
	}

	public function alunos(){
		return $this->belongsToMany("Aluno", "alunos_turmas");
	}

	public function getDescricaoAttribute(){
		return $this->disciplina->codigo." - ".$this->disciplina->descricao." ".$this->codigo;
	}

}