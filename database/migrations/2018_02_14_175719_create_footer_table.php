<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFooterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('footer', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('col1', 65535)->nullable();
			$table->text('col2', 65535)->nullable();
			$table->text('col3', 65535)->nullable();
			$table->text('col4', 65535)->nullable();
			$table->string('tab_lang', 5)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('footer');
	}

}
