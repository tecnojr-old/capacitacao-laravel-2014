<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlunosTurmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alunos_turmas', function(Blueprint $table)
		{
			$table->foreign('aluno_id', 'alunos_alunos_turma_fk')->references('id')->on('alunos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('turma_id', 'aluno_turma_fk')->references('id')->on('turmas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alunos_turmas', function(Blueprint $table)
		{
			$table->dropForeign('alunos_alunos_turma_fk');
			$table->dropForeign('aluno_turma_fk');
		});
	}

}
