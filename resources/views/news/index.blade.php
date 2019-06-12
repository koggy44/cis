@extends('layout2.app')

@section('content')
    <div class="container">
        <div class="col-lg-8">
            <h3 class="mt-5">Posted News</h3>
        </div>
        <hr style="weight:10;">
        @if (count($news)>0)
            @foreach ($news as $news) 
                <div class="table tab">
                    <h5><a href="/news/{{$news->id}}">{{$news->title}}</a></h5>
                    <small>Added on {{$news->created_at}}</small>
                    <div style="float:right">
                        <a href="/news/{{$news->id}}/edit" class="btn btn-lg btn-danger" style="margin-top:-20px">Edit</a>
                    </div>
                </div>
                <hr>
            @endforeach
        @else
            <div class="wrapper">
                <h4>no news</h4>
            </div>
        @endif
    </div>
@endsection