@extends('layout2.app')

@section('content')
<div class="container">

    <div class="col-lg-8">

        <h3 class="mt-5">{{$news->title}}</h3>

        <hr>

        <p style="color:blue">Posted on {{$news->created_at}}</p>
    </div>
    <hr>
    <div style="width: 850px;">
        <h4 style="color:orange">In summary</h4>
        <h5>{{$news->briefing}}</h5>
    </div>
    <hr><br>
    <div style="width: 850px;">
        <h6>{{$news->full_news}}</h6>
    </div>
    <div>
    <div style="width:100px">
        <a href="/news/{{$news->id}}/edit" class="btn btn-lg btn-danger">Edit</a>
    </div>
    <div style="margin-right:0px float:right">
        <form action="/news/{{$news->id}}" method="POST">
            {{method_field('DELETE')}}
            @csrf
            <button type="submit" class="btn btn-primary btn-danger">Delete</button>
        </form>
    </div>
    </div>
    
</div>
    
@endsection