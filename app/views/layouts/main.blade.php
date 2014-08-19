<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Aplicacion con Laravel</title>
	<link rel="stylesheet" href=" {{ asset('css/foundation.css') }}" />
	<script scr=" {{ asset('js/vendor/modernizr.js') }}"></script>
</head>
<body>
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1>
					<a href="#">ODOT</a>
				</h1>
			</li>
		</ul>
	</nav>
	
	</div>
	@if(Session::has('message'))
		<div class="alert-box success">
			{{{Session::get('message')}}}
		</div>
	@endif
	<div class="row">
		<div class="large-12">
			@yield('content')
		</div>
	</div>

	<footer class="row">
		<div class="large-12 columns">
			<hr/>
			<div class="row">
				<div class="large-6 columns">
					<p>Antonio Cachuan</p>
				</div>
			</div>
		</div>	
	</footer>
	{{ HTML::script('js/vendor/jquery.js')}}
	{{ HTML::script('js/foundation.min.js')}}
	{{ HTML::script('js/app.js')}}
	<script>
		$(document).foundation();
	</script>
</body>
</html>