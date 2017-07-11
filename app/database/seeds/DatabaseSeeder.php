<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ClientTableSeeder');
		$this->call('SiteTableSeeder');
		$this->call('SupplierTableSeeder');
	}
}

class ClientTableSeeder extends Seeder {
	public function run()
	{
		DB::table('clients')->delete();

		Client::create([
			'ragione_sociale' => 'Services For Companies Srl',
			'codice_fiscale' => '01234567890',
			'indirizzo' => 'Strada Fantasia 28',
			'cap' => '10040',
			'comune' => 'Leinì',
			'provincia' => 'Torino',
			'telefono' => '011 200 6000',
			'fax' => '011 200 6001',
			'email' => 'amministrazione@sfcsrl.it'
		]);
	}
}

class SiteTableSeeder extends Seeder {
	public function run()
	{
		DB::table('sites')->delete();

		Site::create([
			'nome' => 'Sede Centrale',
			'indirizzo' => 'Strada Fantasia 28',
			'cap' => '10040',
			'comune' => 'Leinì',
			'provincia' => 'Torino',
			'telefono' => '011 200 6000',
			'fax' => '011 200 6001',
			'email' => 'amministrazione@sfcsrl.it',
			'client_id' => 5
		]);
	}
}

class SupplierTableSeeder extends Seeder {
	public function run()
	{
		DB::table('suppliers')->delete();

		Supplier::create([
			'ragione_sociale' => 'Services For Companies Srl',
			'codice_fiscale' => '01234567890',
			'indirizzo' => 'Strada Fantasia 28',
			'cap' => '10040',
			'comune' => 'Leinì',
			'provincia' => 'Torino',
			'telefono' => '011 200 6000',
			'fax' => '011 200 6001',
			'email' => 'amministrazione@sfcsrl.it'
		]);
	}
}