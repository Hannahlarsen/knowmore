@extends('app')

@section('content')

<h1>This the list of active advisors in the system </h1>

<ul>

	@foreach ($users as $user)

		@if ($user->active === "on")

		<a href="/advisors/{{ $user->id }}">
			<h3>{{ $user->name }}</h3>
		</a>
		<p>{{ $user->description }}</p>

		@endif
		
	@endforeach

</ul>


@stop