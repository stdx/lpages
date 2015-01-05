@extends('layout')

@section('content')
    <p>{{$message}}</p>
    <h2>List of Users</h2>
    @foreach($users as $user)
        <p>{{ $user->first_name}} {{$user->last_name}} {{$user->email}} {{$user->birthday}}</p>
    @endforeach
@stop