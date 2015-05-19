@extends('app')

@section('content')

@include('/mails/_mail_header', ['selector' => 'none'])

<h2>{{ $mail->headline }}</h2>
<p>{{ $mail->sender_name }}</p>
<p>{{ $mail->content }}</p>

<a class="btn btn-default" href="/mails/{{ $mail->id }}/delete" role="button">Delete</a>
<a class="btn btn-default" href="/mails/{{ $mail->id }}/reply" role="button">Reply</a>

@stop