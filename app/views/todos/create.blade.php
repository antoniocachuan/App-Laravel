@extends('layouts.main')
@section('content')
	{{ Form::open(array('route'=>'todos.store'))}}
		@include('todos.partials._form')
	{{ Form::close() }}
@stop