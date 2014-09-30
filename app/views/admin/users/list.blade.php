@extends ('admin.layout.layout')

@section ('title') Lista de Usuarios @stop

@section ('content')
	<fieldset>
	<legend>Lista de Usuarios</legend>
	<p>
    <a href="{{route('admin.users.create') }}" class="button">Crear un nuevo usuario</a>
  </p>
	<table>
	  <thead>
	    <tr>
	      <th>Nombres</th>
	      <th>Apellidos</th>
        <th>Email</th>
        <th>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
			@foreach ($users as $user)
			<tr>
			    <td>{{ $user->firstname}}</td>
			    <td>{{ $user->lastname}}</td>
			    <td>{{ $user->email }}</td>
			    <td>
          <a href="{{ route('admin.users.show', $user->id) }}" class="button tiny">
              Ver
          </a>
          <a href="{{ route('admin.users.edit', $user->id) }}" class="button tiny success">
            	Editar
          </a>
          <a href="#" data-id="{{ $user->id }}" class="button tiny alert btn-delete">
              Eliminar
          </a>
        </td>
			</tr>
			@endforeach
	  </tbody>
	</table>
	{{ $users->links() }}
	</fieldset>
	{{ Form::open(array('route' => array('admin.users.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
	{{ Form::close() }}
@stop