@extends('app')

@section('content')

@include('/mails/_mail_header', ['selector' => 'sent'])

	@foreach ($sent as $post)

		<div>
			<img src="http://lorempixel.com/output/city-q-g-50-50-6.jpg">
			<a href="/mail/{{ $post->id }}">
				<p>{{ $post->headline }} to {{ $post->receiver_name }}</p>
			</a>
			<a class="btn btn-default" href="/mails/{{ $post->id }}/delete/sender" role="button">Delete</a>
			<a class="btn btn-default" href="/mails/{{ $post->id }}/reply" role="button">Reply</a>

		</div>

	 @endforeach

<a href="/mails/create">Write a new mail</a>

<br>

<a href="/mails/">Go to inbox</a>


@stop