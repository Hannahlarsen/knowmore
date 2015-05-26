@extends('app')

@section('content')

<h1>This the list of active advisors in the system </h1>

<ul>

	@foreach ($users as $user)

		@if ($user->active === "on")

			@include('/advisors/_advisors')

		@endif
		
	@endforeach

</ul>


@stop