@extends("layouts.main")
@section("content")
  <h2>Bienvenido {{ Auth::user()->username }}</h2>
  <h4>Tu correo es: {{ Auth::user()->email }}</h4>
  <p>Empieza tu aventura con salud.</p>
@stop