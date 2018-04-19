@extends('layouts.app')

@section('header')
    <h1>Post</h1>
@endsection

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>

<div>
    {{$post->body}}
</div>

<hr>
<small>Written on {{$post->created_at}}</small>
@endsection