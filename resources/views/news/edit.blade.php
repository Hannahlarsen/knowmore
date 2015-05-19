@extends('app')

@section('content')

<h1>Edit: {!! $news->title !!}</h1>

{!! Form::model($news, ['method' => 'PATCH', 'url' => 'news/' . $news->id]) !!}

@include('news._form',['submitBtnName' => 'Update News'])

{!! Form::close() !!}

@include('errors.formError')

@stop