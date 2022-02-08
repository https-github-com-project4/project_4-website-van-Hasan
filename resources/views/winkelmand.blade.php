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
    <table class="winkelmandTable">
        <tr>
            <th>Product</th>
            <th>Aantal</th>
            <th>Prijs P/S</th>
            <th>verwijderen</th>
        </tr>
            @foreach($order->pizzas as $pizza)
            <tr>
                <td>{{$pizza->name}}</td>
                <td>{{$pizza->pivot->qty}}</td>
                <td>€ {{$pizza->price}}</td>
           <td>
                <form action="{{route('order_pizzas.destroy', ['pizzaid' => $pizza->id, 'orderid'=>$order->id])}}" method="POST">
                    @csrf
                    <input type="submit" value="verwijderen"  class="input_bestel bg-red-500 hover:bg-yellow-500" >
                    <hr>
                </form>
           </td>
            @endforeach
            </tr>
                <tr> <td>  <h1>totaal Prijs: €{{$order->totalPrice()}}</h1> </td></tr>
    </table>

    <div class="afrondenDiv">
        <form action="{{route('winkelmand-status.update', [$order->id])}}" method="post">
        @csrf
        @method('put')
            <input id="afronden" type="submit" value="Afronden" class="input_bestel bg-green-500 hover:bg-yellow-500">
        </form>

    </div>
        <a href="/order/{{$order->id}}/pizzas">  <input id="terugNaarMenu" type="button" value="Terug naar het menu!" class="input_bestel bg-green-500 hover:bg-yellow-500"/> </a>
    </body>
</html>
