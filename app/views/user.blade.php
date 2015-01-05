@extends('layout')

@section('content')
    <h2>Details of User</h2>
    <span>{{ $user->email}}</span>
    <span>{{ $user->first_name}} {{$user->last_name}}</span>
    <span>{{ $user->birthday}}</span>
@stop