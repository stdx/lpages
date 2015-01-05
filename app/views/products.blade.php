@extends('layout')

@section('content')
    <h2>List of Products</h2>
    @foreach($products as $product)
        <p>{{ $product->title}} {{$product->model}} {{$product->description}}</p>
    @endforeach
@stop