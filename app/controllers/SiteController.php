<?php

class SiteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($data)
	{
		$client = Client::findOrFail($data);
		return View::make('site.create')->with('client', $client);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$client = Client::findOrFail(Input::get('client_id'));
		$site = new Site;

		$site->nome = Input::get('nome');

		$site->indirizzo = Input::get('indirizzo');
		$site->cap = Input::get('cap');
		$site->comune = Input::get('comune');
		$site->provincia = Input::get('provincia');

		$site->telefono = Input::get('telefono');
		$site->fax = Input::get('fax');
		$site->email = Input::get('email');

		$site->client_id = $client->id;

		$state = $site->save();

		if (false === $state)
			return Redirect::back()->withErrors($site->errors()->all());
		
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$site = Site::findOrFail($id);
		return View::make('site.edit')->with('site', $site);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$site = Site::findOrFail($id);

		$site->nome = Input::get('nome');

		$site->indirizzo = Input::get('indirizzo');
		$site->cap = Input::get('cap');
		$site->comune = Input::get('comune');
		$site->provincia = Input::get('provincia');

		$site->telefono = Input::get('telefono');
		$site->fax = Input::get('fax');
		$site->email = Input::get('email');

		$state = $site->updateUniques();

		if (false === $state)
			return Redirect::back()->withErrors($site->errors()->all());
		
		return Redirect::route('client.show', [$site->client_id]);
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
