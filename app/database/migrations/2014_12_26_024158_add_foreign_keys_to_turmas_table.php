<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTurmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('turmas', function(Blueprint $table)
		{
			$table->foreign('disciplina_id', 'disciplinas_turmas')->references('id')->on('disciplinas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('professor_id', 'professores_turmas')->references('id')->on('professores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('turmas', function(Blueprint $table)
		{
			$table->dropForeign('disciplinas_turmas');
			$table->dropForeign('professores_turmas');
		});
	}

}
