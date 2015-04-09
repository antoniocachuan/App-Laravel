<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>@yield('title', 'Health App Game')</title>
	{{HTML::style('css/foundation.css', array('media' => 'screen')) }}
	{{HTML::style('css/foundation-icons.css', array('media' => 'screen'))}}
	{{HTML::style('css/health.css', array('media' => 'screen'))}}
	{{HTML::style('css/font-awesome.css', array('media' => 'screen')) }}
	{{HTML::script('js/vendor/modernizr.js')}}

</head>
<body>
	<div class="containt-to-grid sticky">
		<nav class="top-bar main-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1>
						<a href="#"> 
							<i class="fi-home"></i>
							Health App
						</a>
					</h1>
				</li>
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span>
					</a>
				</li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					@if (Auth::check())    
									<li>
										<a href="{{ URL::route("user/profile") }}" class="pastel-profile">
										<i class="fi-torso"></i>
							          Mi perfil
							       </a>
						 			</li>
						 			<li>
						       	 	<a href="{{ URL::route("user/logout") }}" class="pastel-out">
						          	<i class="fi-power"></i>
						          	Salir
						        	</a>
									</li> 
					@else
				    <li class="active">
				        <a href="{{ URL::route('user/login') }}" data-reveal-id="Signup" data-reveal-ajax="true" class="pastel-profile">
				           <i class="fi-torso"></i>
				          	Iniciar Sesión
				        </a>
				    </li>
				 	@endif	
				</ul>
			</section>
		</nav>
	</div>
	</div>
	@include ('admin.errors', array('errors' => $errors))
	@include ('user.mensaje')
	<div class="row contenido">
		<div class="large-12 columns">
			@yield('content')
		</div>
	</div>
	<footer>
      <div class="row">
        <div class="large-6 small-12 columns">
          <p>© Copyright 2015, by Antonio Cachuán.</p>
        </div>
        <div class="large-6 small-12 columns">
          <ul class="inline-list right">
            <li><a href="#">Acerca del Autor</a></li>
          </ul>
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