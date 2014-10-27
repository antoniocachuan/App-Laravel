
@extends ('admin.layout.layout')

@section ('title') Crear Usuarios @stop

@section ('content')
<fieldset>
<legend>Crear Usuarios</legend>
	<p>
    <a href="{{route('admin.users.index') }}" class="button tiny">Todos los usuario</a>
  </p>
  {{ Form::model($user, array('route' => 'admin.users.store', 'method' => 'POST'), array('role' => 'form')) }}
    @include ('admin.errors', array('errors' => $errors))
    @include('admin.partials._form')
  {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'button success')) }}    
{{ Form::close() }}
 </fieldset>
@stop