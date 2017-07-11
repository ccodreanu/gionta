<?php

class Client extends \LaravelBook\Ardent\Ardent {
	protected $table = 'clients';

	public static $rules = [
		'ragione_sociale' => 'required|unique:clients',
		'codice_fiscale' => 'required',
		'indirizzo' => 'required',
		'cap' => 'required',
		'comune' => 'required',
		'provincia' => 'required',
		'telefono' => 'required'
	];

	public function sites() {
		return $this->hasMany('Site');
	}
}