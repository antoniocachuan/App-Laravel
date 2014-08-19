{{ Form::label('name', 'List title')}}
{{ Form::text('name')}}
{{ $errors->first('name', '<small class="error">:message</small>')}}
{{ Form::submit('OK', array('class'=>'button'))}}