@extends('layout')

@section('content')

	<h1>Registration</h1>

	{{Form::open(['role' => 'form'])}}

	<div class="well">
	  <div class="form-group">
	    {{Form::label('name', 'Name')}}
	    {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name'])}}
	    {{$errors->first('name', '<p class="text-danger">:message</p>')}}
	  </div>
	  <div class="form-group">
	    {{Form::label('email', 'Email address')}}
	    {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
	    {{$errors->first('email', '<p class="text-danger">:message</p>')}}
	  </div>
	  <div class="form-group">
	    {{Form::label('password', 'Password')}}
	    {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
	    {{$errors->first('password', '<p class="text-danger">:message</p>')}}
	  </div>
	  <div class="form-group">
	    {{Form::label('password_confirmation', 'Repeat password')}}
	    {{Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password'])}}
	    {{$errors->first('password_confirmation', '<p class="text-danger">:message</p>')}}
	  </div>

	  {{Form::submit('Register', ['class' => 'btn btn-lg btn-primary'])}}
	</div>

	{{Form::close()}}

@stop