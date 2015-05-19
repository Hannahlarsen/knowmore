@extends('app')

@section('content')

<h1>{!! $user->name !!}, update your profile date below</h1>

{!! Form::model($user, ['method' => 'PATCH', 'url' => 'profile/edit']) !!}

<div class="form-group">

 {!! Form::label('name', 'Title:') !!}
 {!! Form::text('name', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('description', 'Profile description:') !!}
 {!! Form::textarea('description', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('skills', 'List of your skills:') !!}
 {!! Form::textarea('skills', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('country', 'Your current country of residence:') !!}
 {!! Form::text('country', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('picture', 'Link to your profile picture:') !!}
 {!! Form::text('picture', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('active', 'Are you currently an active advisor:') !!}
 {!! Form::checkbox('active', null) !!}

</div>

<div class="form-group">

 {!! Form::submit('Update profile', ['class' => 'btn btn-primary form-control']) !!}

</div>

{!! Form::close() !!}

@include('errors.formError')

@stop