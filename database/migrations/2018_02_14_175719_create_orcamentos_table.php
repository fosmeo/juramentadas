<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrcamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orcamentos', function(Blueprint $table)
		{
			$table->integer('orcamentos_id', true);
			$table->string('orcamentos_pfpj', 15);
			$table->string('orcamentos_nome', 170);
			$table->string('orcamentos_cidade', 150);
			$table->string('orcamentos_est', 40);
			$table->string('orcamentos_tel', 20);
			$table->string('orcamentos_email', 60);
			$table->text('orcamentos_obs', 65535);
			$table->string('orcamentos_file', 60);
			$table->timestamp('hora')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orcamentos');
	}

}
