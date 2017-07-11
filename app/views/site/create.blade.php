@extends('layouts.master')

@section('page-title')
	Aggiungi cantiere
@stop

@section('content')

@if (isset($client))
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Questo cantiere verrà associato al cliente <a href="{{ route('client.show', $client->id) }}">{{ $client->ragione_sociale }}</a>!
		</div>
	</div>
</div>
@endif

{{ Form::open(['route' => 'site.store']) }}
{{ Form::hidden('client_id', $client->id) }}
<div class="row">
	<div class="col-md-12">
		<input class="form-control" type="text" name="nome" value="{{ Input::old('nome') }}" placeholder="Nome"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<input class="form-control" type="text" name="indirizzo" value="{{ Input::old('indirizzo') }}" placeholder="Indirizzo"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="cap" value="{{ Input::old('cap') }}" placeholder="CAP"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="comune" value="{{ Input::old('comune') }}" placeholder="Comune"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="provincia" value="{{ Input::old('provincia') }}" placeholder="Provincia"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<input class="form-control" type="text" name="telefono" value="{{ Input::old('telefono') }}" placeholder="Telefono"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="fax" value="{{ Input::old('fax') }}" placeholder="Fax"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="email" value="{{ Input::old('email') }}" placeholder="Email"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-2 col-md-offset-10">
		<button type="submit" class="btn btn-success btn-block">Aggiungi cantiere</button>
	</div>
</div>
{{ Form::close() }}
@stop