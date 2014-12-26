<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColegiadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colegiados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descricao');
			$table->integer('departamento_id')->unsigned()->index('`colegiados_departamento_id_foreign`');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colegiados');
	}

}
