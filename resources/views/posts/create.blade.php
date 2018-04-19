@extends('layouts.app')

@section('header')
    <h1>Posts Create</h1>
@endsection

@section('content')
    {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
            <div>
                {{Form::label('title','Title:')}}
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'name'])}}
            </div>
    <br/>
            <div>
                {{Form::label('body','Body:')}}
                {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'body'])}}
            </div>
            
            <br>
            <div>
            {{Form::submit('submit',['class'=>'btn btn-success'])}}
            </div>
        {!! Form::close() !!}
@endsection