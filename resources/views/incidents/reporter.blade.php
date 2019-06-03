@extends('layout2.app')

@section('content')
    <div class="card">

        <div id="formContent">
        <h5>Full Name: {{$user->first_name}} {{$user->last_name}}</h5><br>
        <h5>Registration Number: {{$user->reg_number}} </h5><br>
        <p>Phone Number: {{$user->phone_number}}</p><br>
        <p>Email Address: {{$user->email}}</p><br>
        <p>Place of residence: {{$user->residence}}</p>
  	 
  	    </div>
    </div>
@endsection