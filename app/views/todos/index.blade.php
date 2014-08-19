@extends('layouts.main')
@section('content')
	<h1>All Todo Lists</h1>
	@foreach ($todo_lists as $list)
		<h4> {{ link_to_route('todos.show', $list->name, [$list->id] ) }}</h4>
		<ul class="no-bullet button-group">
			<li>
				{{link_to_route('todos.edit', 'Edit', [$list->id], ['class'=>'tiny button'])}}		
			</li>
			<li>
				{{ Form::model($list, ['route' => ['todos.destroy', $list->id], 'method' => 'delete'])}}
					{{ Form::button('destroy', ['type'=>'submit', 'class'=>'tiny alert button'])}}
				{{Form::close()}}
			</li>
		</ul>
	@endforeach
	{{link_to_route('todos.create', 'Create new list', null, ['class'=>'success button'])}}
@stop