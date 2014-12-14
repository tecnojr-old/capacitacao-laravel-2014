<?php

/**
 * Disciplina
 *
 * @property integer $id
 * @property string $descricao
 * @property string $codigo
 * @method static \Illuminate\Database\Query\Builder|\Disciplina whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Disciplina whereDescricao($value) 
 * @method static \Illuminate\Database\Query\Builder|\Disciplina whereCodigo($value) 
 */
class Disciplina extends Eloquent{
	use ValidationTrait;

	protected $table="disciplinas";
	public $timestamps=false;

	protected $rules = [
		"descricao" => "required|min:10",
		"codigo" 		=> "required|min:6|unique"
	];

	protected $messages = [
		"descricao.required" 	=> "A descrição da disciplia é obrigatória.",
		"descricao.min" 			=> "A descrição da disciplina deve conter ao menos :min caracteres.",
		"codigo.required"			=> "O código da disciplina é obrigatório.",
		"codigo.min" 					=> "O código da disciplina deve conter ao menos :min caracteres.",
		"codigo.unique"				=> "Já existe uma disciplina cadastrada com esse código."
	];
}