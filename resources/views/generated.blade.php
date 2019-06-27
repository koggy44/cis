<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        <link rel="stylesheet" href="{{asset("css/print.css")}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <title>{{config('app.name','cis')}}</title>
    </head>
    <body id="body">
        <div class="container print-only">
            <h1 class="title">CIS REPORTS</h1>
            <hr>
            <hr>

            <h4>Number of registered users : <u>{{$users->count()}} people</u></h4>
            
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

                 <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>{{$incidents->count()}}</strong></td>
                </tr> 
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
                @foreach ($places as $place)
                <tr>
                <td>{{$place->name}}</td>
                    <td>{{$place->total}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
        <div class="w3-right footer">
            <button id="print" class="w3-button w3-blue">PRINT REPORT</button>
        </div>
        <script src="{{asset("js/app.js")}}"></script>
        <script>
            $('#print').click(function(){

                window.print();
                return false;
            });

            $(window).on('load', function(){
                console.log('loaded');
                window.print();
            });

        </script>
    </body>
</html>
