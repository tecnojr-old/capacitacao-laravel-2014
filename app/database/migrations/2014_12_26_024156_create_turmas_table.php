<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTurmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turmas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('professor_id')->unsigned()->nullable()->index('`professores_turmas_idx`');
			$table->integer('disciplina_id')->unsigned()->index('`disciplinas_turmas_idx`');
			$table->string('codigo', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('turmas');
	}

}
