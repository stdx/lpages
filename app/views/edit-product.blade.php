@extends('layout')

@section('content')
    <h2>Create new Product</h2>
    {{ Form::model($product, array('route' => array('product.store'))) }}
      <table>
        <tr>
          <td>{{Form::label('title', 'Title:');}}</td>
          <td>{{Form::text('title');}}</td>
        </tr>
        <tr>
          <td>{{Form::label('model', 'Model:');}}</td>
          <td>{{Form::text('model');}}</td>
        </tr>
        <tr>
          <td>{{Form::label('description', 'Description:');}}</td>
          <td>{{Form::text('description');}}</td>
        </tr>
      </table>
      {{Form::submit('Save'); }}
    {{ Form::close(); }}
@stop