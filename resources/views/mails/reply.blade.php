@extends('app')

@section('content')

@include('/mails/_mail_header', ['selector' => 'create'])

<h1> Reply to the mail from '{{ $mail->sender_name }}' </h1>

{!! Form::open(['url' => 'mails/create' ]) !!}

{!! Form::hidden('receiver_id', '{{ $mail->sender_id }}' ) !!}

<div class="form-group">

 {!! Form::label('receiver_name', 'To:') !!}
 {!! Form::text('receiver_name', $mail->sender_name , ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('headline', 'Headline:') !!}
 {!! Form::text('headline', 'Re: ' . $mail->headline , ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('content', 'Mail content:') !!}
 {!! Form::textarea('content', '__________________________________'. $mail->content , ['class' =>  'form-control']) !!}

</div>

 {!! Form::submit('Send', ['class' => 'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}

@include('errors.formError')


@stop