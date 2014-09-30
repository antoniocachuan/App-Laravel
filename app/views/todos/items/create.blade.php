@extends('layouts.main')
@section('content')
	{{ Form::model($id_task, array('route'=>['todos.items.store', $id_task]))}}
		@include('todos.partials._itemsform')
	{{ Form::close() }}
@stop