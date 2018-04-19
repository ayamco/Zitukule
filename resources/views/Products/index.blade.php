@extends('layout.app')

@section('content')
    @foreach($products as $product)
        <h1>{{$product->name}}</h1>
        <h1>{{$product->price}}</h1>
        <br/>
    @endforeach
@endsection