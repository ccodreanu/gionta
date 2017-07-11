<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sites', function($table)
		{
			$table->increments('id');

			$table->string('nome');
			$table->string('indirizzo');
			$table->string('cap');
			$table->string('comune');
			$table->string('provincia');
			$table->string('telefono');
			$table->string('fax');
			$table->string('email');

			$table->integer('client_id')->unsigned();
			$table->foreign('client_id')->references('id')->on('clients');

			$table->unique(['nome', 'client_id']);
			
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
		Schema::drop('sites');
	}

}
