<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
    </head>
    <body class="antialiased">
            <h1>View 1</h1>
            <a href="{{url('/view2')}}">view2</a>
            <a href="{{url('/view3')}}">view3</a>
    </body>
</html>
