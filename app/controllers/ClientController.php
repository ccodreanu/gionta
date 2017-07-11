<?php

class ClientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Input::has('search') && strlen(Input::get('search')) >= 3) {
			$clients = DB::table('clients')->where('ragione_sociale', 'like', '%'.Input::get('search').'%')->get();

			if (count($clients) > 0) {
				return View::make('client.index')->with('clients', $clients);
			}
		}

		return View::make('client.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('client.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$client = new Client;

		$client->ragione_sociale = Input::get('ragione_sociale');
		$client->codice_fiscale = Input::get('codice_fiscale');

		$client->indirizzo = Input::get('indirizzo');
		$client->cap = Input::get('cap');
		$client->comune = Input::get('comune');
		$client->provincia = Input::get('provincia');

		$client->telefono = Input::get('telefono');
		$client->fax = Input::get('fax');
		$client->email = Input::get('email');

		$state = $client->save();

		if (false === $state)
			return Redirect::back()->withErrors($client->errors()->all());
		
		return Redirect::route('client.show', [$client->id]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('client.show')->with('client', Client::findOrFail($id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::findOrFail($id);
		return View::make('client.edit')->with('client', $client);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$client = Client::findOrFail($id);

		$client->ragione_sociale = Input::get('ragione_sociale');
		$client->codice_fiscale = Input::get('codice_fiscale');

		$client->indirizzo = Input::get('indirizzo');
		$client->cap = Input::get('cap');
		$client->comune = Input::get('comune');
		$client->provincia = Input::get('provincia');

		$client->telefono = Input::get('telefono');
		$client->fax = Input::get('fax');
		$client->email = Input::get('email');

		$state = $client->updateUniques();

		if (false === $state)
			return Redirect::back()->withErrors($client->errors()->all());
		
		return Redirect::route('client.show', [$client->id]);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
