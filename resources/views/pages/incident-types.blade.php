@extends('layout2.app')

@section('content')
<div class="container">
   <div class="wrapper">
       <form action="/pages" method="POST">
        @csrf
            <div class="card w-100">
            <div class="card-body">
            <h5 class="card-title">Add Incident type</h5>
            <input type="text" name="type">
        <button class="btn btn-secondary">Add</button>
    </div>
    </div>
        </form>
   </div>
   </div>
@endsection