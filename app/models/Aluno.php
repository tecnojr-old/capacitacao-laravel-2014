<?php

class Aluno extends Eloquent{
	
	protected $table = "alunos";
	public $timestamps = false;

	protected $dates = ["data_nasc"];

	public function turmas(){
		return $this->belongsToMany("Turma", "alunos_turmas");
	}
	
}