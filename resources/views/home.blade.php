@extends ('layout.master')
@section ('content')
<h1>Bienvenido </h1>

@if (Auth::check())
	{{Auth::user()->name}}
@endif <br> 

<a href="auth/logout"> Cerrar los Ojos </a> <br> 

@endsection