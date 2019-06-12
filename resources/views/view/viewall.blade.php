@extends('layout.app')

@section('content')
    <div class="container">
        
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ALL NEWS</th>
                    </tr>
            </thead>
            @foreach ($news as $news)
        <tbody>
        <tr>
            <td>{{$news->title}}</td>
            <td><a href="/{{$news->id}}"><button class="btn bt-primary">Read More</button></a></td>
        </tr>
        </tbody>
        @endforeach
            </table>
    </div>
@endsection