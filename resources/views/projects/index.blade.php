@extends('app')

@section('content')

<h1>This is the list of current projects</h1>

	@foreach ($projects as $project)
	 	
	 	<a href="projects/{{ $project->id }}">
			
			<h2>{{ $project->title }}</h2>

		</a>

		<h3>{{ $project->subtitle }}</h3>


	@endforeach

<a href="/projects/create">Add a new project</a>

@stop