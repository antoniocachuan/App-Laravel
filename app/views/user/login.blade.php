@extends("layouts.main")
@section("content")
<div class="large-6 columns">
<fieldset>
    <legend>Iniciar Sesión</legend>
  {{ Form::open()}}
    {{ $errors->first('password','<small class="error">:message</small>')}}
    {{ Form::label('username', 'Usuario') }}
    {{ Form::text('username', Input::old('username'), array('placeholder'=>'Correo o Usuario')) }}
    {{ Form::label('password', 'Contraseña') }}
    {{ Form::password('password', array('placeholder'=>'Contraseña')) }}
    <p> {{ link_to_route('user.create', 'Crear Usuario')}}</p>
    {{ Form::submit('Ingresar', array('class'=>'button success right')) }}
  {{ Form::close() }}
  </fieldset>
 </div>
@stop