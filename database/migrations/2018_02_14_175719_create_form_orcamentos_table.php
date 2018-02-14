<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormOrcamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('form_orcamentos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tit1', 100)->nullable();
			$table->text('col1', 65535)->nullable();
			$table->string('tab_lang', 4)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('form_orcamentos');
	}

}
