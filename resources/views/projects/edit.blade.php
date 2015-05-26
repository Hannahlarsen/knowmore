@extends('app')

@section('content')

<h1>Edit: {!! $project->title !!}</h1>

{!! Form::model($project, ['method' => 'PATCH', 'url' => '/projects/' . $project->id]) !!}

@include('projects._form',['submitBtnName' => 'Update Project'])

{!! Form::close() !!}

@include('errors.formError')

@stop