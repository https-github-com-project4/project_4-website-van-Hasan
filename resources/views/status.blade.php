<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="images/favicon.ico">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Order Status</title>
    </head>
    <body class="status_body">
<div class="statusDiv">
    <h1>Bedankt voor uw bestelling bij ons!</h1>

</div>
        <table class="status_table">
        <tr>
            <th>Naam</th>
            <th>Producten</th>
            <th>Status</th>
        </tr>
        <tr class="status_tr">
            <td>{{$order->name}}</td>
            <td>  @foreach($order->pizzas as $pizza)
                    {{$pizza->name}}
                @endforeach</td>
            <td>{{$order->status->name}}</td>
        </tr>
        </table>

{{--        @foreach($order->states as $states)--}}
{{--            {{$states->status}}--}}
{{--        @endforeach--}}
    </body>
</html>
