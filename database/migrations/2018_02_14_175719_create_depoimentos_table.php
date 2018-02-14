<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepoimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('depoimentos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tab_lang', 50)->nullable();
			$table->integer('textos_posicao')->nullable();
			$table->text('col1', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('depoimentos');
	}

}
