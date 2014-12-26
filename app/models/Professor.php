<?php

/**
 * Professor
 *
 * @property integer $id
 * @property string $nome
 * @property string $matricula
 * @method static \Illuminate\Database\Query\Builder|\Professor whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Professor whereNome($value)
 * @method static \Illuminate\Database\Query\Builder|\Professor whereMatricula($value)
 */
class Professor extends Eloquent{
		use ValidationTrait;
		use SoftDeletingTrait;

		protected $table = "professores";
		public $timestamps = false;

		protected  $rules = [
			"nome" => "required|min:6",
			"matricula"=> "required|digits:9|unique|unique:alunos,matricula,NULL,id,deleted_at,NULL"
		];

		protected $messages = [
			"nome.required" 			=> "O nome do professor é obrigatório.",
			"nome.min" 						=> "O nome do professor deve conter ao menos :min caracteres.",
			"matricula.required" 	=> "A matrícula do professor é obrigatória.",
			"matricula.digits" 		=> "A matricula deve conter ao menos :digits dígitos.",
			"matricula.unique" 		=> "Esse número de matrícula já está em uso."
		];

}