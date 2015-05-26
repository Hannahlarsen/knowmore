@extends('app')

@section('content')

	<h1>{{ $project['title'] }}</h1>
	<p>{{ $project['description'] }}</p>

@if ($edit === 1)
	<a href="/projects/{{ $project->id }}/edit">Edit your project</a>
	<a href="/projects/{{ $project->id }}/destroy">Delete your project</a>
@endif


@stop