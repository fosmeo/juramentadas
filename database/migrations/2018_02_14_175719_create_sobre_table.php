<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSobreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sobre', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('texto_posicao')->nullable();
			$table->text('col1', 65535)->nullable();
			$table->string('tab_lang', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sobre');
	}

}
