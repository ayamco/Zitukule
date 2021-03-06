<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
                    .main {
                margin-top: 50px;
                margin-bottom: 50px;
                margin-right: 25px;
                margin-left: 25px;
            }
        </style>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body class="main">
    <div id="app">
            @include('inc.navbar')
            @include('inc.messages')
            <div class="container">
                @yield('header')
                @yield('content')
                @yield('footer')
            </div>
    
    </div>
        
      
    </body>
</html>
