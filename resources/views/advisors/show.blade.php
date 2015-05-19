@extends('app')

@section('content')

<h1>{{ $user->name }} </h1>

<p>{{ $user->description }} </p>

<p>{{ $user->skills }} </p>


<a href="/users/">Back to list of all users</a>


@stop