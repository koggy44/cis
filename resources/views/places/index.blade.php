@extends('layout2.app')

@section('content')
    <div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">places of residence</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($places as $place)
    <tr>
        <th scope="row">{{$place->id}}</th>
        <td>{{$place->place}}</td>
        <td>
          <form action="/places/{{$place->id}}" method="POST">
            {{method_field('DELETE')}}
            @csrf
          <button class="btn btn-danger">Delete</button>
          </form>
        </td>
    </tr>
    @endforeach
  </tbody>
        </table>
    </div>
@endsection