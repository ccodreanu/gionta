@extends('layouts.master')

@section('page-title')
	Cerca cliente
@stop

@section('content')
	<div class="row">
		{{ Form::open(['route' => 'client.index', 'method' => 'get']) }}
		<div class="col-md-10">
			<input class="form-control" type="text" name="search" placeholder="Ragione sociale"></input>
		</div>
		<div class="col-md-2">
			<button type="submit" class="btn btn-success btn-block">Cerca cliente</button>
		</div>
		{{ Form::close() }}
	</div>

	@if (isset($clients))
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Ragione sociale</th>
						<th>P. IVA / CF</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Azioni</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($clients as $client)
						<tr>
							<td>{{ $client->id }}</td>
							<td><a href="{{ route('client.show', $client->id) }}">{{ $client->ragione_sociale }}</a></td>
							<td>{{ $client->codice_fiscale }}</td>
							<td>{{ $client->telefono }}</td>
							<td>{{ $client->email }}</td>
							<td><a href="{{ route('client.edit', $client->id) }}" class="btn btn-xs btn-primary">Modifica</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endif
@stop