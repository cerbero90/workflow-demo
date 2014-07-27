@extends('layout')

@section('content')
	@if(Auth::guest())
	<h1>Welcome guest</h1>
	@else
	<h1>Welcome back {{Auth::user()->name}}!</h1>
	@endif

	<div class="jumbotron">
		<p>This is a sample Laravel application, its purpose is to show the advantages of using the <strong>Workflow</strong> package.</p>
		<a href="https://github.com/cerbero90/Workflow" target="_blank">
			<button class="btn btn-lg btn-primary">Go to Workflow</button>
		</a>
	</div>
@stop