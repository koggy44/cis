@extends('layout.app')

@section('content')
      <div class="container">  
        <div align="center" style="background-color:#5cdb95; backround-image: url('{{ asset('images/egerton2.jpg') }}')" class="homediv">
    
            <div align="center" style=" color:white">
                <h1>_</h1><br>
                <img src="{{url('images/Security-Bell-icon_2.png')}}">
                <h1  style = "font-family:Courier New, Courier;font-size:50px; font-weight:800;">
                 CAMPUS INCIDENT SYSTEM</h1>
            </div>
            <div class="card" style=" background-color:black; margin-top:150px; height:100px">
                <div style="width:500px; margin:auto">
                    <div style="float:right"><a href="/reports/create" class="btn btn-outline-danger">Report incident</a></div>
                    
                    <div style="float:left"><a href="/reports" class="btn btn-outline-primary">Previous incident</a></div>
                </div>
                    
            </div>
            
        </div>
        <div style="background-color:#edf5e1; height:500px">
        <div  class="card" style="margin-top:10px; height:70px; width: 250px; background-color:#05386b;">
            <div class="card-body">
                <h1 style="color:white">Latest News</h1>
            </div>
         </div>
        @if (count($news) >0)
         <div class="row" style="height:250px; margin-top: 20px; margin-bottom:20px; margin-left:20px">
            @foreach ($news as $news)
               
            <div class="col-md">
                <h1>{{$news->title}}</h1><br>
                <h4>{{$news->briefing}}</h4>
            <a href="/{{$news->id}}">
                <input type="button" class="btn btn-primary btn-sm" value="Read More">
            </a>
            </div>
 
            @endforeach
            <div class="col-md">
                <div class="wrapper">
                    <a href="/view"><img src="{{url('images/play-btn.png')}}" height="50px" width="50px">
                        View all
                    </a>
                </div>
            </div>
            <div>

            </div>
        </div>
            
        @else
        <div class="wrapper">
            <h3>No news</h3>  
        </div>  
        @endif
        
        </div>
      </div>
      @include('inc.footer')
@endsection
