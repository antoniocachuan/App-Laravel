@extends('layouts.main')
@section('content')
	{{ Form::open(array('route'=>'todos.store'))}}
		//@include('todos._form') ver si funciona con alguna de las dos
		@include('todos.partials._form')
	{{ Form::close() }}
@stop