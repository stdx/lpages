@extends('layout')

@section('content')
    <h2>Details of Product</h2>
    <p>{{ $product->title}}</p>
    <p>{{ $product->model }}</p>
    <p>{{ $product->description}}</p>
@stop