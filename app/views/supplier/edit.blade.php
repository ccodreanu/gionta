@extends('layouts.master')

@section('page-title')
	Modifica fornitore
@stop

@section('content')
{{ Form::model($supplier, ['route' => ['supplier.update', $supplier->id], 'method' => 'put']) }}

<div class="row">
	<div class="col-md-8">
		<input class="form-control" type="text" name="ragione_sociale" value="{{ $supplier->ragione_sociale }}" placeholder="Ragione sociale / Nome"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="codice_fiscale" value="{{ $supplier->codice_fiscale }}" placeholder="P. IVA / CF"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<input class="form-control" type="text" name="indirizzo" value="{{ $supplier->indirizzo }}" placeholder="Indirizzo"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="cap" value="{{ $supplier->cap }}" placeholder="CAP"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="comune" value="{{ $supplier->comune }}" placeholder="Comune"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="provincia" value="{{ $supplier->provincia }}" placeholder="Provincia"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<input class="form-control" type="text" name="telefono" value="{{ $supplier->telefono }}" placeholder="Telefono"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="fax" value="{{ $supplier->fax }}" placeholder="Fax"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="email" value="{{ $supplier->email }}" placeholder="Email"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-2 col-md-offset-10">
		<button type="submit" class="btn btn-warning btn-block">Modifica fornitore</button>
	</div>
</div>
{{ Form::close() }}
@stop