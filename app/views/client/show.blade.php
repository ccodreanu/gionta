@extends('layouts.master')

@section('page-title')
	{{ $client->ragione_sociale }}
@stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<p>{{ $client->indirizzo }}, {{ $client->cap }} {{ $client->comune }} ({{ $client->provincia }})</p>
			<p>Tel: {{ $client->telefono }} Fax: {{ $client->fax }}</p>
			<p>Email: {{ $client->email }}</p>
		</div>
	</div>

	@if (!$client->sites->isEmpty())
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Indirizzo</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Azioni</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($client->sites as $site)
						<tr>
							<td><a href="{{ route('site.show', $site->id) }}">{{ $site->nome }}</a></td>
							<td>{{ $site->indirizzo }}, {{ $site->cap }} {{ $site->comune }}, {{ $site->provincia }}</td>
							<td>{{ $site->telefono }}</td>
							<td>{{ $site->email }}</td>
							<td><a href="{{ route('site.edit', $site->id) }}" class="btn btn-xs btn-primary">Modifica</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endif

	<div class="row">
		<div class="col-md-2 col-md-offset-8">
			<a href="{{ route('site.create_data', $client->id) }}" class="btn btn-success btn-block">Aggiungi cantiere</a>
		</div>
		<div class="col-md-2">
			<a href="{{ route('client.edit', $client->id) }}" class="btn btn-warning btn-block">Modifica cliente</a>
		</div>
	</div>
@stop