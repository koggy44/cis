@extends('layout.app')

@section('content')
<div style="margin-top:10px" class="container">
    <div class="row">
    <div class="col">
        <!-- /.card -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Previous Reported Incidents</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                     <thead>
                    <tr>
                        <th>Reported on</th>
                        <th>Incident type</th>
                        <th>Incident place</th>
                        <th>Time slot</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    @if(count($reports)>0)
                    <tbody>
                    @foreach($reports as $reports)
                        <tr >
                            <td>{{$reports->created_at}}</td>
                            <td>{{$reports->category->name}}</td>
                            <td>{{$reports->inct_place}}</td>
                            <td>{{$reports->time_slot}}</td>
                            <td>{{$reports->description}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    @else
                    <div style="margin-top:20px">
                        <h4><strong>No incidents reported yet</strong></h4>
                    </div>

                    @endif    
                </table>
            </div>
        </div>
    </div>
    </div>
    <div style="margin-top:20px">
        <a href="/home" class="btn btn-primary btn-lg">Go Home</a>
    </div>

</div>
    
@endsection