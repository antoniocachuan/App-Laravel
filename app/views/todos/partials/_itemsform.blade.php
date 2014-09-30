{{ Form::label('content', 'Item Title')}}
{{ Form::text('content')}}
{{ $errors->first('content', '<small class="error">:message</small>')}}
{{ Form::submit('OK', array('class'=>'button'))}}