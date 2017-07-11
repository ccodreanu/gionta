<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suppliers', function($table)
		{
			$table->increments('id');

			$table->string('ragione_sociale')->unique();
			$table->string('codice_fiscale')->unique();
			$table->string('indirizzo');
			$table->string('cap');
			$table->string('comune');
			$table->string('provincia');
			$table->string('telefono');
			$table->string('fax');
			$table->string('email');
			
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
		Schema::drop('suppliers');
	}

}
