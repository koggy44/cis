@extends('layout2.app')

@section('content')
 <div class="row">
        <div class="col-10">
            
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
                    @foreach($reports as $report)
                    <tbody>
                        <tr >
                            <td>{{$report->created_at}}</td>
                            <td>
                            <a href="/user/profile/{{$report->user_id}}">{{$report->regno}}</a> 
                            </td>
                            <td>{{$report->category->name}}</td>
                            <td>{{$report->inct_place}}</td>
                            <td>{{$report->time_slot}}</td>
                            <td>{{$report->description}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    @else
                    <tbody>
                        <tr>
                            <td colspan="6">no inidents reported</td>
                        <tr>
                    </tbody>
                    @endif
                </table>
            </div>
           
        </div>
        
        <div class="col-2">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">All Categories</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td><a href="/pages/{{$category->id}}">{{$category->name}}</a></td>
                        <td>{{$category->reports->count()}}</td>
                    </tr>
                        
                    @endforeach
                </tbody>
           </table>
        </div>
    </div>

@endsection