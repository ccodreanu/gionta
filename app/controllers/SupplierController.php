<?php

class SupplierController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Input::has('ragione_sociale')) {
			return View::make('supplier.index')->with('suppliers', [Supplier::find(1)]);
		}
		return View::make('supplier.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('supplier.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$supplier = new Supplier;

		$supplier->ragione_sociale = Input::get('ragione_sociale');
		$supplier->codice_fiscale = Input::get('codice_fiscale');

		$supplier->indirizzo = Input::get('indirizzo');
		$supplier->cap = Input::get('cap');
		$supplier->comune = Input::get('comune');
		$supplier->provincia = Input::get('provincia');

		$supplier->telefono = Input::get('telefono');
		$supplier->fax = Input::get('fax');
		$supplier->email = Input::get('email');

		$state = $supplier->save();

		if (false === $state)
			return Redirect::back()->withErrors($supplier->errors()->all());
		
		return Redirect::route('supplier.show', [$supplier->id]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('supplier.show')->with('supplier', Supplier::findOrFail($id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$supplier = Supplier::findOrFail($id);
		return View::make('supplier.edit')->with('supplier', $supplier);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$supplier = Supplier::findOrFail($id);

		$supplier->ragione_sociale = Input::get('ragione_sociale');
		$supplier->codice_fiscale = Input::get('codice_fiscale');

		$supplier->indirizzo = Input::get('indirizzo');
		$supplier->cap = Input::get('cap');
		$supplier->comune = Input::get('comune');
		$supplier->provincia = Input::get('provincia');

		$supplier->telefono = Input::get('telefono');
		$supplier->fax = Input::get('fax');
		$supplier->email = Input::get('email');

		$state = $supplier->updateUniques();

		if (false === $state)
			return Redirect::back()->withErrors($supplier->errors()->all());
		
		return Redirect::route('supplier.show', [$supplier->id]);
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
