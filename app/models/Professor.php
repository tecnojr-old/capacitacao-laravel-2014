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

		protected $table = "professores";
		public $timestamps = false;

		protected  $rules = [
			"nome" => "required|min:6",
			"matricula"=> "required|digits:10|unique"
		];

}