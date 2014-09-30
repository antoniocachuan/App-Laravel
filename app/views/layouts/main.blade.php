<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>@yield('title', 'Health App Game')</title>
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
						Health App
					</a>
				</h1>
			</li>	
		</ul>
		<section class="top-bar-section">
			<ul class="right">
				@if (Auth::check())
				 <li class="has-dropdown">
			        <a href="#"><i class="fi-list-thumbnails"></i></a>
			        <ul class="dropdown">
						<li class="#">
							<a href="{{ URL::route("user/profile") }}">
							<i class="fi-torso"></i>
				          	Mi perfil
				        	</a>
			 			</li>
			 			<li class="active">
			       	 		<a href="{{ URL::route("user/logout") }}">
			          		<i class="fi-power"></i>
			          		Salir
			        		</a>
						</li> 
			        </ul>
			     </li>
				@else
			    <li class="active">
			        <a href="{{ URL::route("user/login") }}">
			           <i class="fi-torso"></i>
			          	Iniciar Sesión
			        </a>
			    </li>
			 	@endif	
			</ul>
		</section>
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
					<p>Aplicacion realizada por : Antonio Cachuan</p>
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