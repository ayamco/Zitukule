
@extends('layouts.app')

@section('header')
<h1>Create Post</h1>
@endsection


@section('content')

    {!! Form::open(['action' => 'ProductController@store','method'=>'POST']) !!}
        <div>
            {{Form::label('name','Name:')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'name'])}}
        </div>
<br/>
          <div>
            {{Form::label('price','Price:')}}
            {{Form::text('price','',['class'=>'form-control','placeholder'=>'price'])}}
        </div>
        
        <br>
        <div>
        {{Form::submit('submit',['class'=>'btn btn-success'])}}
        </div>
    {!! Form::close() !!}

@endsection
