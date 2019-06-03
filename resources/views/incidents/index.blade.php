@extends('layout2.app')

@section('content')
    <div class="container">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Reported on</th>
                    <th>Reporters No.</th>
                    <th>Incident type</th>
                    <th>Incident place</th>
                    <th>Time slot</th>
                    <th>Description</th>
                </tr>
            </thead>
            @if(count($reports)>0)
            @foreach($reports as $reports)
            <tbody>
                <tr >
                    <td>{{$reports->created_at}}</td>
                    <td>
                    <a href="/user/profile/{{$reports->user_id}}">{{$reports->regno}}</a> 
                    </td>
                    <td>{{$reports->inct_type}}</td>
                    
                    <td>{{$reports->inct_place}}</td>
                    <td>{{$reports->time_slot}}</td>
                    <td>{{$reports->description}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        @else
        <div class="wrapper">
                <h1>No incidents reported yet</h1>
            </div>
        @endif

    </div>
@endsection