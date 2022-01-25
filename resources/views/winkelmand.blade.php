<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Winkel mandje</title>
    </head>
    <body>
        {{$order->id}}
        {{$order->name}}
            @foreach($order->pizzas as $pizza)

             <p> Pizza:  {{$pizza->name}}
                Aantal: {{$pizza->pivot->qty}}
                Prijs P/S: {{$pizza->price}} </p><br>

            @endforeach
    </body>
</html>
