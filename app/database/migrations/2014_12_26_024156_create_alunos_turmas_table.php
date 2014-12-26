<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlunosTurmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alunos_turmas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('turma_id')->unsigned()->index('`aluno_turma_fk_idx`');
			$table->integer('aluno_id')->unsigned()->index('`alunos_alunos_turma_fk_idx`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alunos_turmas');
	}

}
