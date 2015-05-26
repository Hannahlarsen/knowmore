@extends('app')

@section('content')

@include('/mails/_mail_header', ['selector' => 'create'])

<h1> Contact {{ $receiver->name }} </h1>

{!! Form::open(['url' => 'mails/create' ]) !!}

{!! Form::hidden('receiver_id', '{{ $receiver->id }}' ) !!}

<div class="form-group">

 {!! Form::label('receiver_name', 'To:') !!}
 {!! Form::text('receiver_name', $receiver->name , ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('headline', 'Headline:') !!}
 {!! Form::text('headline', null , ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('content', 'Mail content:') !!}
 {!! Form::textarea('content', null , ['class' =>  'form-control']) !!}

</div>

 {!! Form::submit('Send', ['class' => 'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}

@include('errors.formError')


@stop