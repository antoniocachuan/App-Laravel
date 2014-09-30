<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>@yield('title', 'HAG Admin Console')</title>
	{{HTML::style('css/foundation.css', array('media' => 'screen')) }}
	{{HTML::style('css/foundation-icons.css', array('media' => 'screen'))}}
	{{HTML::style('css/health.css', array('media' => 'screen'))}}
	{{HTML::script('js/vendor/modernizr.js')}}
</head>
<body>
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1>
					<a href="#"> 
						<i class="fi-home"></i>
						Health App - Admin
					</a>
				</h1>
			</li>	
		</ul>
	</nav>
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
					<p>Aplicacion realizada por : Antonio Cachuan</p>
				</div>
			</div>
		</div>	
	</footer>
	{{ HTML::script('js/vendor/jquery.js')}}
	{{ HTML::script('js/foundation.min.js')}}
	{{ HTML::script('js/app.js')}}
	{{ HTML::script('js/admin.js') }}
	<script>
		$(document).foundation();
	</script>
</body>
</html>