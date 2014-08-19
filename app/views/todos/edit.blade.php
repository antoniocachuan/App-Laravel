@extends('layouts.main')
@section('content')
	{{ Form::model($list, array('route'=>['todos.update', $list->id], 'method' => 'PUT'))}}
		@include('todos.partials._form')
	{{ Form::close() }}
@stop