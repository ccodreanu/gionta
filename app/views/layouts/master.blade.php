<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">

	<title>Gestionale</title>

	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-theme.min.css') }}
	{{ HTML::style('css/style.css') }}
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ route('dashboard') }}">Gestionale</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ route('dashboard') }}" class="active">Dashboard</span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clienti <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ route('client.index') }}">Cerca</a></li>
						<li class="divider"></li>
						<li><a href="{{ route('client.create') }}">Aggiungi</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fornitori <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ route('supplier.index') }}">Cerca</a></li>
						<li class="divider"></li>
						<li><a href="{{ route('supplier.create') }}">Aggiungi</a></li>
					</ul>
				</li>
				<!--
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Risorse <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Cerca</a></li>
					</ul>
				</li>
				-->
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Configurazione</a></li>
				<li><a href="#">Esci</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12"><h2>@yield('page-title')</h2></div>
		</div>
		@if (!$errors->isEmpty())
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					{{ $errors->first() }}
				</div>
			</div>
		</div>
		@endif
		@yield('content')
	</div>

	{{ HTML::script('js/jquery-2.1.3.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/application.js') }}
</body>
</html>