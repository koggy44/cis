@extends('layout2.app')

@section('content')
    <div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Incident type</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($types as $type)
    <tr>
        <th scope="row">{{$type->id}}</th>
        <td>{{$type->inct_type}}</td>
        <td><button class="btn btn-danger">Delete</button></td>
    </tr>
    @endforeach
  </tbody>
        </table>
    </div>
@endsection