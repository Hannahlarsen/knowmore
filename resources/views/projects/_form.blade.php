

<!-- temp -->

<div class="form-group">

 {!! Form::label('title', 'Title:') !!}
 {!! Form::text('title', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('subtitle', 'Subtitle:') !!}
 {!! Form::text('subtitle', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('description', 'Description of project:') !!}
 {!! Form::textarea('description', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('type', 'Type of project:') !!}
 {!! Form::textarea('type', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('scope', 'Scope and limitations:') !!}
 {!! Form::textarea('scope', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('pricerange', 'Expected price per hour range:') !!}
 {!! Form::text('pricerange', null, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('starttime', 'Expected start time:') !!}
 {!! Form::input('date', 'starttime', date('Y-m-d') , ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('endtime', 'Expected end time:') !!}
 {!! Form::input('date', 'endtime', date('Y-m-d') , ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::submit($submitBtnName, ['class' => 'btn btn-primary form-control']) !!}

</div>