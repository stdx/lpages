@extends('layout')

@section('content')
    <h2>Create new User</h2>
    {{ Form::model($user, array('route' => array('user.update', $user->id))) }}
      <table>
        <tr>
          <td>{{Form::label('email', 'EMail:');}}</td>
          <td>{{Form::email('email', $value = null, $attributes = array());}}</td>
        </tr>
        <tr>
          <td>{{Form::label('first_name', 'Vorname:');}}</td>
          <td>{{Form::text('first_name');}}</td>
        </tr>
        <tr>
          <td>{{Form::label('last_name', 'Nachname:');}}</td>
          <td>{{Form::text('last_name');}}</td>
        </tr>
        <tr>
          <td>{{Form::label('birthday', 'Geburtstag:');}}</td>
          <td>{{Form::text('birthday', '', array('class' => 'form-control','data-datepicker' => 'datepicker')) }}</td>
        </tr>
      </table>
      {{Form::submit('Save'); }}
    {{ Form::close(); }}
@stop