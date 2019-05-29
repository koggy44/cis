<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        <link rel="stylesheet" href="{{asset("css/material.light.min.css")}}">
        <link rel="stylesheet" href="{{asset("css/styles.css")}}">



        
        <title> {{config('app.name','cis')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
    </head>
    <body style="background-color:#ececec;">
        @include('inc.navbar1')
        @include('inc.message')
            <main class="mdl-layout__content mdl-color--grey-100">
                @yield('content')
           </main>
        </div>

        
           
        
        
        <script src="{{asset("js/app.js")}}"></script>
        <script src="{{asset("js/material.min.js")}}"></script>
        <script src="{{asset("js/main.js")}}"></script>
        
    </body>
</html>