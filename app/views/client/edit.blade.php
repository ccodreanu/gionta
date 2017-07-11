@extends('layouts.master')

@section('page-title')
	Modifica cliente
@stop

@section('content')
{{ Form::model($client, ['route' => ['client.update', $client->id], 'method' => 'put']) }}

<div class="row">
	<div class="col-md-8">
		<input class="form-control" type="text" name="ragione_sociale" value="{{ $client->ragione_sociale }}" placeholder="Ragione sociale"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="codice_fiscale" value="{{ $client->codice_fiscale }}" placeholder="P. IVA / CF"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<input class="form-control" type="text" name="indirizzo" value="{{ $client->indirizzo }}" placeholder="Indirizzo"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="cap" value="{{ $client->cap }}" placeholder="CAP"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="comune" value="{{ $client->comune }}" placeholder="Comune"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="provincia" value="{{ $client->provincia }}" placeholder="Provincia"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<input class="form-control" type="text" name="telefono" value="{{ $client->telefono }}" placeholder="Telefono"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="fax" value="{{ $client->fax }}" placeholder="Fax"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="email" value="{{ $client->email }}" placeholder="Email"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-2 col-md-offset-10">
		<button type="submit" class="btn btn-warning btn-block">Modifica cliente</button>
	</div>
</div>
{{ Form::close() }}
@stop