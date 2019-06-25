<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <title>{{config('app.name','cis')}}</title>
    </head>
    <body>
        <div class="container">
            <h1 class="title">CIS REPORTS</h1>
            <hr>
            <hr>

            <h4>Number of registered users : <u>{{$users->count()}} people</u></h4>
            <hr>
                <h4>Total Number of incidents reported : {{$incidents->count()}}</h4>
            <hr>
            <div class="wrapper">
            <table class="table">
                <thead>
                    <tr><th>Incident occurence</th></tr>
                </thead>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Incident category</th>
                    <th scope="col">Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->reports->count()}}</td>
                </tr> 
                @endforeach
                
            </tbody>
            </table>
            </div>

            <!--place reports-->
            <div style="margin-top:30px">
            <table class="table">
                <thead>
                    <tr><th>Vulnarable places</th></tr>
                </thead>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Place</th>
                    <th scope="col">Numbers of incidents occured</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>cbd</td>
                    <td>52</td>
                </tr>
                <tr>
                    <td>buruburu</td>
                    <td>32</td>
                </tr>
                <tr>
                    <td>gate</td>
                    <td>62</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </body>
</html>
