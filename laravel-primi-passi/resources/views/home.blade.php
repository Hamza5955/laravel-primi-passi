<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primi passi con Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>



    <body>
        <header>
            <a href="{{  route('home') }}">Home</a>
            <a href="{{  route('contact') }}">Contact</a>
            <a href="{{  route('plan') }}">plan</a>
            <a href="{{  route('services') }}">services</a>
            <a href="{{  route('about') }}">about</a>
            <a href="{{  route('shop') }}">shop</a>
        </header>
        {{$message}}
    </body>
</html>