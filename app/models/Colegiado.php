<?php

/**
 * Colegiado
 *
 * @property integer $id
 * @property string $descricao
 * @property integer $departamento_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Departamento $departamento
 * @method static \Illuminate\Database\Query\Builder|\Colegiado whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Colegiado whereDescricao($value) 
 * @method static \Illuminate\Database\Query\Builder|\Colegiado whereDepartamentoId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Colegiado whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Colegiado whereUpdatedAt($value) 
 */
class Colegiado extends Eloquent{
	use ValidationTrait;


	protected $rules = array(
  	"descricao" => "required|unique",
  	"departamento_id" => "required|exists:departamentos,id"
  );


	public function departamento(){
		return $this->belongsTo("Departamento");
	}

	public function turmas(){
		return $this->belongsToMant("Turma");
	}
}