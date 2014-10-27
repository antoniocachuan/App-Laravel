<div class="large-12 columns">
<fieldset>
  <legend>Nuevo Usuario</legend>
  {{ Form::open(array('route'=>'user.store'))}}
    @include('user.partials._messageerrors')
    {{ Form::label('firstname', 'Nombres') }}
    {{ Form::text('firstname', Input::old('firstname'), array('placeholder'=>'Nombres')) }}
    {{ Form::label('lastname', 'Apellidos') }}
    {{ Form::text('lastname', Input::old('lastname'), array('placeholder'=>'Apellidos')) }}
    {{ Form::label('username', 'Usuario') }}
    {{ Form::text('username', Input::old('username'), array('placeholder'=>'Usuario')) }}
    {{ Form::label('email', 'Correo') }}
    {{ Form::text('email', Input::old('email'), array('placeholder'=>'Correo')) }}
    {{ Form::label('password', 'Contraseña') }}
    {{ Form::password('password', array('placeholder'=>'Contraseña')) }}
    {{ Form::submit('Registrar', array('class'=>'button success right')) }}
  {{ Form::close() }}
  </fieldset>
 </div>
