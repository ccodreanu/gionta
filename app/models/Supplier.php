<?php

class Supplier extends \LaravelBook\Ardent\Ardent {
	protected $table = 'suppliers';

	public static $rules = [
		'ragione_sociale' => 'required|unique:suppliers',
		'codice_fiscale' => 'required',
		'indirizzo' => 'required',
		'cap' => 'required',
		'comune' => 'required',
		'provincia' => 'required',
		'telefono' => 'required'
	];
}