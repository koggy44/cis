@extends('layout.app')

@section('content')
<div class="container">
         <div class="col-lg-8">
            <h1 class="mt-5">Add news</h1>
        </div>
        <hr>
        <form method="POST" action="/news">
        @csrf
            <div class="form-group">
                <label for="title">Add Title</label><br>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" >
            </div>
            <div class="form-group">
                <label for="briefing">Briefing</label>
                <textarea name="briefing" id="briefing" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="full_news">Full story</label>
                <textarea name="full_news" class="form-control" id="full_news" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group col-md-2" id="sendbutton">
                <button type="submit" class="btn btn-primary btn-block">Send</button>
            </div>
        </form>
</div>
@endsection