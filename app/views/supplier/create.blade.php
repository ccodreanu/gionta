@extends('layouts.master')

@section('page-title')
	Aggiungi fornitore
@stop

@section('content')
{{ Form::open(['route' => 'supplier.store']) }}
<div class="row">
	<div class="col-md-8">
		<input class="form-control" type="text" name="ragione_sociale" value="{{ Input::old('ragione_sociale') }}" placeholder="Ragione sociale / Nome"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="codice_fiscale" value="{{ Input::old('codice_fiscale') }}" placeholder="P. IVA / CF"></input>
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
		<button type="submit" class="btn btn-success btn-block">Aggiungi fornitore</button>
	</div>
</div>
{{ Form::close() }}
@stop