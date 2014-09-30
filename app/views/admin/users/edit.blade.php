@extends ('admin.layout.layout')

@section ('title') Editar Usuario @stop

@section ('content')
<fieldset>
<legend>Editar Usuario</legend>
	<p>
    <a href="{{route('admin.users.index') }}" class="button tiny">Todos los usuario</a>
  </p>
  {{ Form::model($user, array('route' => array('admin.users.destroy', $user->id), 'method' => 'DELETE', 'role' => 'form')) }}
  <div class="row">
    <div class="large-4 columns">
        {{ Form::submit('Eliminar usuario', array('class' => 'button tiny alert')) }}
    </div>
  </div>
	{{ Form::close() }}
{{ Form::model($user, array('route'=>['admin.users.update', $user->id], 'method' => 'PUT'))}}
		@include ('admin.errors', array('errors' => $errors))
		@include('admin.partials._form')
		{{ Form::button('Actualizar', array('type' => 'submit', 'class' => 'button success')) }} 
{{ Form::close() }}
</fieldset>
@stop