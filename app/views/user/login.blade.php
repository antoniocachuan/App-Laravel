{{HTML::style('css/login.css', array('media' => 'screen')) }}
<div class="large-12 columns">
  <fieldset>
    <legend>Iniciar Sesión</legend>
    <div class="row login-local">
      {{ Form::open()}}
        {{ $errors->first('password','<small class="error">:message</small>')}}
        {{ Form::label('username', 'Usuario') }}
        {{ Form::text('username', Input::old('username'), array('placeholder'=>'Correo o Usuario')) }}
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::password('password', array('placeholder'=>'Contraseña')) }}
        {{ Form::submit('Ingresar', array('class'=>'button small large-6 small-12 success right')) }}
      {{ Form::close() }}
    </div>
    <div class="row">
      <div class="large-2 small-2 columns linea">
      </div>
      <div class="large-8 small-8 columns texto-separador">
        Conectarse con
      </div>
      <div class="large-2 small-2 columns linea">
      </div>
    </div>
    <div class="login-remote">
      <div class="row">
          <a class="button small large-12 small-12 rojo" href="{{ URL::route('google') }}">
            <i class="fi-social-google-plus"></i>
            <span> Google </span>
          </a>
      </div>
      <div class="row">
          <a class="button small large-12 small-12 azul" href="{{ URL::route('facebook') }}">
            <i class="fi-social-facebook"></i>
            <span> Facebook </span>
          </a>
      </div>
      <div class="row">
          <a class="button small large-12 small-12 celeste" href="{{ URL::route('twitter') }}">
            <i class="fi-social-twitter"></i>
            <span> Twitter </span>
          </a>
      </div>
      <div class="row">
          <a href="{{ URL::route('user.create') }}" data-reveal-id="registro" class="small large-12 small-12 button success" data-reveal-ajax="true">Nuevo Usuario</a>
      </div>
    </div>
  </fieldset>
 </div>
 <div class="reveal-modal tiny login" id="registro" data-reveal>
 </div>