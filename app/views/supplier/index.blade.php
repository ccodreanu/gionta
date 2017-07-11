@extends('layouts.master')

@section('page-title')
	Cerca fornitore
@stop

@section('content')
	<div class="row">
		{{ Form::open(['route' => 'supplier.index', 'method' => 'get']) }}
		<div class="col-md-10">
			<input class="form-control" type="text" name="ragione_sociale" placeholder="Ragione sociale"></input>
		</div>
		<div class="col-md-2">
			<button type="submit" class="btn btn-success btn-block">Cerca fornitore</button>
		</div>
		{{ Form::close() }}
	</div>

	@if (isset($suppliers))
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
					@foreach ($suppliers as $supplier)
						<tr>
							<td>{{ $supplier->id }}</td>
							<td><a href="{{ route('supplier.show', $supplier->id) }}">{{ $supplier->ragione_sociale }}</a></td>
							<td>{{ $supplier->codice_fiscale }}</td>
							<td>{{ $supplier->telefono }}</td>
							<td>{{ $supplier->email }}</td>
							<td><a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-xs btn-primary">Modifica</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endif
@stop