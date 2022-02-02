<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/favicon.ico">
        <title>Winkel mandje</title>
    </head>
    <body class="winkelmand" >

    <hr>
            @foreach($order->pizzas as $pizza)
                <ul>
                   <h3>  Pizza:  {{$pizza->name}} </h3>
                   <li> Aantal: {{$pizza->pivot->qty}} </li>
                   <li> Prijs P/S: € {{$pizza->price}}  </li>
                </ul>
                <form action="{{route('order_pizzas.destroy', ['pizzaid' => $pizza->id, 'orderid'=>$order->id])}}" method="POST">
                    @csrf
                    <input type="submit" value="verwijderen"  class="input_bestel bg-green-500 hover:bg-yellow-500" >
                    <hr>
                </form>


            @endforeach

        <form action="{{route('winkelmand-status.update', [$order->id])}}" method="post">
        @csrf
        @method('put')
            <input type="submit" value="Afronden" class="input_bestel bg-green-500 hover:bg-yellow-500">
        </form>


        <a href="/order/{{$order->id}}/pizzas">  <input type="button" value="Terug naar het menu!" class="input_bestel bg-green-500 hover:bg-yellow-500"/> </a>



    </body>
</html>
