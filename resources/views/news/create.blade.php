@extends('app')

@section('content')

<h1>This is a test of the make section</h1>

{!! Form::open(['url' => 'news']) !!}

@include('news._form', ['submitBtnName' => 'Create News'])

{!! Form::close() !!}

@include('errors.formError')


@stop