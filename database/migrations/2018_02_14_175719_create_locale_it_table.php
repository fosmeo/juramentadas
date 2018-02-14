<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocaleItTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locale_it', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('textos_posicao')->nullable();
			$table->string('textos_titulo1', 100)->nullable();
			$table->string('textos_titulo2', 100)->nullable();
			$table->string('textos_subtitulo')->nullable();
			$table->text('textos_texto', 65535)->nullable();
			$table->string('textos_botao', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locale_it');
	}

}
