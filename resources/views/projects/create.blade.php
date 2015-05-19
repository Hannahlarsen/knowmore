@extends('app')

@section('content')

<h1> Create a new project below </h1>

{!! Form::open(['url' => 'projects']) !!}

@include('projects._form', ['submitBtnName' => 'Create Project'])

{!! Form::close() !!}

@include('errors.formError')


@stop