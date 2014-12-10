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

}