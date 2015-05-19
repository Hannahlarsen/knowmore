@extends('app')

@section('content')

<h1>The list of news</h1>

	@foreach ($news as $new) 

		<a href="/news/{{ $new->id }}">	<h2>{{ $new->title }}</h2> </a>

		<p>
			{{ $new->content }}
		</p>


	@endforeach

@stop


@section('footer')

<div class="container">

<a href="/news/create">Click here to make a new news post</a>

</div>

@stop