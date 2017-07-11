<?php

class Site extends \LaravelBook\Ardent\Ardent {
	protected $table = 'sites';

	public static $rules = [
		'nome' => 'required',
		'indirizzo' => 'required',
		'cap' => 'required',
		'comune' => 'required',
		'provincia' => 'required',
		'telefono' => 'required'
	];

	public function client() {
		return $this->belongsTo('Client');
	}
}