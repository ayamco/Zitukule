@extends('layouts.app')

@section('header')
    <h1>Posts Index</h1>
@endsection

@section('content')
    @if (count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a> </h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        <br/>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection