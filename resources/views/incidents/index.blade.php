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
                            <th>Status</th>
                        </tr>
                    </thead>
            
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

                            @if($report->completed == 1)
                                <td> <input type="checkbox"  checked disabled></td>
                            @endif
                            @if($report->completed == 0)
                            <td>
                            <form method="POST" action="/updateincident">
                           
                                @csrf

                            <input type="hidden" name="report_id" value="{{$report->id}}" />
                            <label class="checkbox" for="checkbox">

                                <input type="checkbox" name="completed" onchange="this.form.submit()">
                            </label>
                            </form>
                            </td>
                            @endif
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