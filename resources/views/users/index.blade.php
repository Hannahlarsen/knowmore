@extends('app')

@section('content')

<h1>This the list users in the system </h1>

<ul>

	@foreach ($users as $user)

		<a href="/users/ {{ $user->id }}">
			<h3>{{ $user->name }}</h3>
		</a>
		<p>{{ $user->description }}</p>
		<a href="/users/{{ $user->id }}/contact"><button >Contact</button></a>


	@endforeach

</ul>


@stop