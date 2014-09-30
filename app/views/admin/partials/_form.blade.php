<div class="row">
    <div class="large-4 columns">
      {{ Form::label('email', 'Dirección de E-mail') }}
      {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
    </div>
    <div class="large-4 columns">
      {{ Form::label('firstname', 'Nombre completo') }}
      {{ Form::text('firstname', null, array('placeholder' => 'Introduce tus nombres', 'class' => 'form-control')) }}        
    </div>
    <div class="large-4 columns">
    </div>
  </div>
  <div class="row">
    <div class="large-4 columns">
      {{ Form::label('password', 'Contraseña') }}
      {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="large-4 columns">
      {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
    </div>
    <div class="large-4 columns">
    </div>
  </div>