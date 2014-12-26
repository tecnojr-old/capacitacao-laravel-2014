<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToColegiadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('colegiados', function(Blueprint $table)
		{
			$table->foreign('departamento_id', 'colegiados_departamento_id_foreign')->references('id')->on('departamentos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('colegiados', function(Blueprint $table)
		{
			$table->dropForeign('colegiados_departamento_id_foreign');
		});
	}

}
