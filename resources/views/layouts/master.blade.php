<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project Name</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" rel="stylesheet">
	@yield('styles')
	<style>
		body {
			padding-top: 70px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="{{ route('home') }}">CRUD App</a>
	        </div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				@if (Auth::check())
					<ul class="nav navbar-nav navbar-left">
						<li><a href="{{ route('house.index') }}">House</a></li>
						<li><a href="{{ route('accounttype.index') }}">Account Type</a></li>
						<li><a href="{{ route('bank.index') }}">Bank</a></li>
						<li><a href="{{ route('saving.index') }}">Saving</a></li>
						<li><a href="{{ route('insurance.index') }}">Insurance</a></li>
						<li><a href="{{ route('blocktype.index') }}">Block Type</a></li>
						<li><a href="{{ route('block.index') }}">Block</a></li>
						<li><a href="{{ route('persontype.index') }}">Person Type</a></li>
						<li><a href="{{ route('person.index') }}">Person</a></li>
					</ul>
				@endif
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
					@else
						<li><a href="{{ route('user.index') }}">{{ Auth::user()->name }}</a></li>
						<li><a href="{{ route('logout') }}">Logout</a></li>
					@endif
				</ul>
			</div>

	    </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		@include('partials/messages')
		@yield('content')
	</div>

	<hr/>

	<div class="container-fluid text-center">
	    &copy; {{ date('Y') }}</a>
	    <br/>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
	@yield('scripts')
</body>
</html>