<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'LSAPP')}}</title>
    </head>
    <body>
        <h1>Welcome to Laravel</h1>
        <p>Questa è l'applicazione Laravel</p>
        <a href="/about">About</a>
        <a href="/test">Test</a>
        <a href="/services">Services</a>
        <a href="/welcome">Hub</a>
    </body>
</html>