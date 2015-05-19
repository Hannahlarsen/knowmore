@extends('app')

@section('content')

<h1> {{ $user->name }} , this is your profile page</h1>

<p>Profile picture:</p>
<img src="http://lorempixel.com/400/200/">

<p>Description:</p>
<p>{{ $user->description }}</p>

<p>Skills:</p>
<p>{{ $user->skills }}</p>

<p>Country:</p>
<p>{{ $user->country }}</p>

<p>Active:</p>
<p>{{ $user->active }}</p>

<a href="/profile/edit">Click here to update your profile</a>

@stop