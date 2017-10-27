@extends('app')
@section('content')
  {!! Form::open(
                    array(
                    'url' => 'home',
                    'method' => 'post',
                    'class' => 'form',  
                    'files' => true)) 
        !!}

  {!! Form::label('tags', 'Tags:') !!}
  {!! Form::select('tag[]', $tags, null, ['multiple' => true, 'class' => 'form-control margin', 'required']) !!}
  

  {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

@endsection