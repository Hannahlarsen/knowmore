

<div class="form-group">

 {!! Form::label('receiver_name', 'To:') !!}
 {!! Form::text('receiver_name', , ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('headline', 'Headline:') !!}
 {!! Form::text('headline', $mail_headline, ['class' =>  'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('content', 'Mail content:') !!}
 {!! Form::textarea('content', null, ['class' =>  'form-control']) !!}

</div>

 {!! Form::submit('Send', ['class' => 'btn btn-primary form-control']) !!}

</div>