
<!-- temp -->

{!! Form::hidden('user_id', 1) !!}

<div class="form-group">

 {!! Form::label('title', 'Title:') !!}
 {!! Form::text('title', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('name', 'Name:') !!}
 {!! Form::text('name', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('content', 'Content:') !!}
 {!! Form::textarea('content', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('published', 'Data is should be published:') !!}
 {!! Form::input('date', 'published', date('Y-m-d') , ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::submit($submitBtnName, ['class' => 'btn btn-primary form-control']) !!}

</div>