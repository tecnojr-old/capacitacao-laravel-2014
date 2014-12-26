<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->string("descricao");

			$table->unsignedInteger("departamento_id");

			$table->foreign("departamento_id")->on("departamentos")->references("id");

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
