@extends('app')

@section('content')

<h1> {{ $user->name }} , this is your profile page</h1>

<p>Profile picture:</p>
<!-- <img src="{{URL::asset('/public/uploads')}}/{{$user->picture }}"> -->

@if (empty($user->picture))
	
	<img src="{{ asset('uploads/unknown.png') }}" />
	
@endif

@if (!empty($user->picture))

	<img src="{{ asset('uploads/')}}/{{ $user->picture  }}" />

@endif

<p>Description:</p>
<p>{{ $user->description }}</p>

<p>Skills:</p>
<p>{{ $user->skills }}</p>

<p>Country:</p>
<p>{{ $user->country }}</p>

<p>Active:</p>
<p>{{ $user->active }}</p>

<a href="/profile/edit">Click here to update your profile</a>


<h3>Your current projects</h3>

<ul>

@foreach ($projects as $project)

	<li>

		@include('/projects/_project')
		<a href="/projects/{{ $project->id }}/edit">Edit your project</a>
		<a href="/projects/{{ $project->id }}/destroy">Delete your project</a>

	</li>

@endforeach

</ul>

@stop