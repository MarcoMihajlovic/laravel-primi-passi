<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'LSAPP')}}</title>
    </head>
    <body>
        <h1>Welcome to test</h1>
        <p>Questa è la sezione Dove effettueremo un po' di test</p>

        <h1>TEST</h1>
        @for ($i=1; $i <= $numero_di_prova; $i++)
            @if ($i%2 == 0)
                <p>{{$i}} è pari</p>
            @else 
                <p>{{$i}} è dispari</p>
            @endif
        @endfor

    </body>
</html>