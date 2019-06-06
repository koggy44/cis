<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        
        <title> {{config('app.name','cis')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
    </head>
    <body style="background-color:#ececec;">
        <script src="{{asset("js/app.js")}}"></script>
        @include('inc.navbar3')
        
            @include('inc.message')
        @yield('content')
        
        
    </body>
</html>