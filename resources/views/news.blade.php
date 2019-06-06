@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
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
            <div align="center">
                <h1 class="mt-5">Also</h1>
        
            </div>
        </div>
    
    </div>
</div>
    
@endsection