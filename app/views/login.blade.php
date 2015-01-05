@extends('layout')

@section('content')
    <h2>Login</h2>
    {{ Form::open(array('url' => 'auth')) }}
      <table>
        <tr>
          <td>{{Form::label('email', 'EMail:');}}</td>
          <td>{{Form::email('email', $value = null, $attributes = array());}}</td>
        </tr>
        <tr>
          <td>{{Form::label('password', 'Password:');}}</td>
          <td>{{Form::password('password');}}</td>
        </tr>
      </table>
      {{Form::submit('Anmelden'); }}
    {{ Form::close(); }}
@stop