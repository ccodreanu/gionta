@extends('layouts.master')

@section('page-title')
	Modifica cantiere
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Questo cantiere è associato al cliente <a href="{{ route('client.show', $site->client->id) }}">{{ $site->client->ragione_sociale }}</a>!
		</div>
	</div>
</div>

{{ Form::model($site, ['route' => ['site.update', $site->id], 'method' => 'put']) }}
{{ Form::hidden('client_id', $site->client_id) }}
<div class="row">
	<div class="col-md-12">
		<input class="form-control" type="text" name="nome" value="{{ $site->nome }}" placeholder="Nome"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<input class="form-control" type="text" name="indirizzo" value="{{ $site->indirizzo }}" placeholder="Indirizzo"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="cap" value="{{ $site->cap }}" placeholder="CAP"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="comune" value="{{ $site->comune }}" placeholder="Comune"></input>
	</div>
	<div class="col-md-2">
		<input class="form-control" type="text" name="provincia" value="{{ $site->provincia }}" placeholder="Provincia"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<input class="form-control" type="text" name="telefono" value="{{ $site->telefono }}" placeholder="Telefono"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="fax" value="{{ $site->fax }}" placeholder="Fax"></input>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" name="email" value="{{ $site->email }}" placeholder="Email"></input>
	</div>
</div>

<div class="row">
	<div class="col-md-2 col-md-offset-10">
		<button type="submit" class="btn btn-warning btn-block">Modifica cantiere</button>
	</div>
</div>
{{ Form::close() }}
@stop