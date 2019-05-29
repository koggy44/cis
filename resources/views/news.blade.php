@extends('layout.app')

@section('content')
<div class="container">

    <div class="col-lg-8">

        <h1 class="mt-5">{{$news->title}}</h1>

        <hr>

        <p>Posted on {{$news->created_at}}</p>
    </div>
        <hr>
    
    <div style="width: 850px;">
        <h4>{{$news->full_news}}</h4>
    </div>
    
</div>
    
@endsection