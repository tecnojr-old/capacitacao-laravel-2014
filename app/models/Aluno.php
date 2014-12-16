<?php

/**
 * Aluno
 *
 * @property integer $id
 * @property string $nome
 * @property string $matricula
 * @property \Carbon\Carbon $data_nasc
 * @property-read \Illuminate\Database\Eloquent\Collection|\Turma[] $turmas
 * @method static \Illuminate\Database\Query\Builder|\Aluno whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Aluno whereNome($value) 
 * @method static \Illuminate\Database\Query\Builder|\Aluno whereMatricula($value) 
 * @method static \Illuminate\Database\Query\Builder|\Aluno whereDataNasc($value) 
 */
class Aluno extends Eloquent{
	use ValidationTrait;	

	protected $table = "alunos";

	protected $rules = [
		'nome' 			=> 'required|min:3',
		'matricula' =>'required|digits:9|unique',
		'data_nasc' => 'required|date|date_format:Y-m-d H:i:s|after:1950-01-01|before:2004-01-01'
	];

	protected $messages = [
		'nome.min' 			=> "O campo nome deve ter ao menos :min caracteres.",
		'nome.required' => "Por favor, não deixe o campo de nome em branco.",
		
		'matricula.digits' 		=> "O campo matricula deve conter exatamente :digits digitos.",
		'matricula.required' 	=> "Por favor, digite a matrícula do aluno.",
		'matricula.unique'		=> "Já existe um aluno cadastrado com essa matrícula.",

		'data_nasc.after' 			=> "A data de nascimento deve ser após :date.",
		'data_nasc.before' 			=> "A data de nascimento deve ser anterior a :date.",
		'data_nasc.date' 				=> "Formato de data inválido.",
		'data_nasc.date_format' => "Formato de data inválido.",
		'data_nasc.required' 		=> "A data de nascimento é obrigatória.",
	];

	public $timestamps = false;

	protected $dates = ["data_nasc"];

	public static function boot(){
		parent::boot();

		static::deleting(function($model){
			if($model->turmas()->count()){
				Session::flash("error", "Não é possível remover o aluno {$model->noem}, você deve primeiro desassociá-lo das turmas.");
				return false;
			}
		});
	}


	public function turmas(){
		return $this->belongsToMany("Turma", "alunos_turmas");
	}

}