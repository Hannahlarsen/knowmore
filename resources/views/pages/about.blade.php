@extends('app')

@section('content')

	<h1>
		The heading
	</h1>

	<p>
		Here goes a lot of text
		{{ $first }} and then {{ $last }}
	</p>

@stop