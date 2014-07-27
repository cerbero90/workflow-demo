@extends('layout')

@section('content')

	<h1>Login</h1>

	{{Form::open(['role' => 'form'])}}

	<div class="well">
	  {{$errors->first(null, '<div class="alert alert-danger" role="alert">:message</div>')}}
	  <div class="form-group">
	    {{Form::label('email', 'Email address')}}
	    {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
	  </div>
	  <div class="form-group">
	    {{Form::label('password', 'Password')}}
	    {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
	  </div>

	  {{Form::submit('Login', ['class' => 'btn btn-lg btn-primary'])}}
	</div>

	{{Form::close()}}

@stop