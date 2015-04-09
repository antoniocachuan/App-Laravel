
<div class="jumbotron jumbotron-sm">
          
  <div class="row">
      <div class="large-12 small-12 columns">
          <h1 class="h1">
              Actualizar Datos
          </h1>
      </div>
  </div>

</div>
<div class="row bordes">
	{{ Form::model($user, array('route'=>['user.update', $user->id], 'method' => 'PUT'))}}
		@include('admin.partials._form')
		{{ Form::button('Actualizar', array('type' => 'submit', 'class' => 'button success right')) }} 
{{ Form::close() }}
</div>
{{HTML::script('js/updateUser.js')}}