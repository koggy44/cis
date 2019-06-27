@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8" style="background-color:#5cdb95; color:white; margin-top: 2px; margin-bottom:10px; min-height:700px;">
            <div class="col-lg-8">
                <h1 class="mt-5">{{$news->title}}</h1>
                <hr>
                <p>Posted on {{$news->created_at}}</p>
            </div>
            <hr>
    
            <div>
                <h4>{{$news->full_news}}</h4>
            </div>
        </div>
        <div class="col-4">
            {{-- <div align="center">
                <h1 class="mt-5">Also</h1>
                    @foreach ($allnews as $allnews)
                        <div class="card">
                            <div class="card-body">
                                <a href="/{{$news->id}}"><h4>{{$allnews->title}}</h4></a>
                            </div>
                        </div>
                    @endforeach
            </div> --}}
            <div class="col-md">
                <div class="wrapper">
                    <a href="/view"><img src="{{url('images/play-btn.png')}}" height="50px" width="50px">
                        View all
                    </a>
                </div>
            </div>
        </div>
    
    </div>
</div>
  @include('inc.footer2')  
@endsection