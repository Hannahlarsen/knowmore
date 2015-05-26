@extends('app')

@section('content')

@include('/mails/_mail_header', ['selector' => 'inbox'])


	 @foreach ($inbox as $post)

		@if ($post->receiver_read === "1") <div class="email_read">
		@endif
		@if ($post->receiver_read === "0") <div>
		@endif


			<img src="http://lorempixel.com/output/city-q-g-50-50-6.jpg">
			<a href="/mails/{{ $post->id }}">
				<p>{{ $post->headline }} from {{ $post->sender_name }}</p>
			</a>
			<a class="btn btn-default" href="/mails/{{ $post->id }}/delete" role="button">Delete</a>
			<a class="btn btn-default" href="/mails/{{ $post->id }}/reply" role="button">Reply</a>

		</div>

	 @endforeach

<a href="/mails/create">Write a new mail</a>

<br>

<a href="/mails/sent">Outgoing emails</a>


@stop