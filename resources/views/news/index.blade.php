@extends('layout.app')

@section('content')
    <div class="container">
        <div class="col-lg-8">
            <h1 class="mt-5">Posted News</h1>
        </div>
        <hr style="weight:10;">
        @if (count($news)>0)
            @foreach ($news as $news) 
                <div class="table tab">
                    <h3><a href="/news/{{$news->id}}">{{$news->title}}</a></h3>
                    <small>Added on {{$news->created_at}}</small>
                    <div style="float:right">
                        <a href="/news/{{$news->id}}/edit" class="btn btn-lg btn-danger" style="margin-top:-20px">Edit</a>
                    </div>
                </div>
                <hr>
            @endforeach
        @else
            <div class="wrapper">
            </div>
        @endif
    </div>
@endsection