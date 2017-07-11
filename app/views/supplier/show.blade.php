@extends('layouts.master')

@section('page-title')
	{{ $supplier->ragione_sociale }}
@stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<p>{{ $supplier->indirizzo }}, {{ $supplier->cap }} {{ $supplier->comune }} ({{ $supplier->provincia }})</p>
			<p>Tel: {{ $supplier->telefono }} Fax: {{ $supplier->fax }}</p>
			<p>Email: {{ $supplier->email }}</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2 col-md-offset-10">
			<a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-success btn-block">Modifica fornitore</a>
		</div>
	</div>
@stop