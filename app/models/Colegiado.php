<?php

class Colegiado extends Eloquent{
	

	public function departamento(){
		return $this->belongsTo("Departamento");
	}

	public function turmas(){
		return $this->belongsToMant("Turma");
	}
}