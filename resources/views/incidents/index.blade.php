@extends('layout2.app')

@section('content')

    <div class="row">
        <div class="col-10">
            @if(count($reports)>0)
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
            
                    @foreach($reports as $report)
                    <tbody>
                        <tr >
                            <td>{{$report->created_at}}</td>
                            <td>
                            <a href="/user/profile/{{$report->user_id}}">{{$report->regno}}</a> 
                            </td>
                            <td>{{$report->incident_type->inct_type}}</td>
                            <td>{{$report->inct_place}}</td>
                            <td>{{$report->time_slot}}</td>
                            <td>{{$report->description}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            @else
            <div class="wrapper">
                <h1>No incidents reported yet</h1>
            </div>
            @endif
        </div>
        
        <div class="col-2">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">All Categories</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                    </tr>
                </tbody>
           </table>
        </div>
    </div>
    
@endsection