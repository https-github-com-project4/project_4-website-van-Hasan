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
            <script type="text/javascript" src="/js/script.js"></script>

            <title>pizza's</title>
        </head>
        <body>
        <ul class="flex">
            <li class="flex-1 mr-2">
                <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white"
                   href="/">Home</a>
            </li>

            <li class="flex-1 mr-2">
                <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white"
                   href="/">About us</a>
            </li>

            <li class="flex-1 mr-2">
                <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white"
                   href="/">Contact</a>
            </li>


            <li class="flex-1 mr-2">
                <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white"
                   href="/winkelmand/{{$order->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart"
                         viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                </a>
            </li>
        </ul>



        <div class="user">
            <p>{{$order->id}}</p>
            <p>{{$order->name}}</p>
            <p>{{$order->emailadrs}}</p>
            <p>{{$order->phone}}</p>
            <p>{{$order->address}}</p>
            <p>{{$order->zipcode}}</p>
        </div>
        <hr>
        <br><br>



{{--        <div id="app_message">--}}
{{--            @include('flash-message')--}}

{{--            @yield('content')--}}
{{--        </div>--}}
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="/js/app.js"></script>

        @include('flash-message')
        <div class="flex-container-pizzas">


            @foreach($pizzas as $pizza)

                <div class="grid-pizza">
                    <img class="width300px" src="/images/Salami.png" alt="">
                    <div class="details">
                        <p>{{$pizza->name}}</p>

                        <h2>Toppings:</h2>
                        <ul>
                            @foreach($pizza->ingredients as $ingredient)
                                <li>{{$ingredient->name}}</li>
                            @endforeach
                        </ul>


                          <a herf="/pizza/{{$pizza->id}}/bewerken">  <input class="input_bestel bg-green-500 hover:bg-yellow-500" type="submit" value="Bewerken"> </a>

                        <form action="{{route('order_pizzas.store', ['orderid'=>$order->id, 'pizzaid'=>$pizza->id])}}"
                              method="post">
                            @csrf
                            <input type="number" name="qty" value="1">
                            <input type="submit"
                                   value="Bestellen"
                                   class="input_bestel bg-green-500 hover:bg-yellow-500">
                        </form>
                    </div>
                </div>

            @endforeach


        </div>
<img src="/images/pizza_background.jpg" alt="samenstellen">
<button style="border: black 2px solid; background: green" onclick="hide()">een pizza samenstellen</button>

<div id="samenstellen" hidden>


    <div class="containersplitsen">
        <div class="vlees container">
            <p class="soort">vlees</p>

            <table class="center">
                {{--@foreach($ingredients as $ingredients)--}}

                <tr>
                    <td>
                        <p class="small">spek</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>
                    <td><p class="small">prijs</p></td>
                </tr>
                {{--                                    @endforeach--}}

                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p class="small">salami</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>


                <tr>
                    <td>
                        <p class="small">ham</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
            </table>
        </div>

        <div class="kaas container">
            <p class="soort"> kaas</p>
            <table class="center">

                <tr>
                    <td>
                        <p class="small">kaas</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">mozzerela</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">schimmelkaas</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
            </table>

        </div>

        <div class="groete_fruit container">
            <p class="soort">groente / fruit</p>
            <table class="center">

                <tr>
                    <td>
                        <p class="small">ui</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">paprika</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">Ananas</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
            </table>
        </div>

        <div class="vis container">
            <p class="soort">vis</p>
            <table class="center">

                <tr>
                    <td>
                        <p class="small">Tonijn</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        <p class="small">Sardines</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>


                </tr>

                <tr>
                    <td>
                        <p class="small">garnaal</p>
                    </td>

                    <td>
                        <button id="min" onclick="mini()">-</button>
                    </td>
                    <td class="p" id="getal">
                        0
                    </td>
                    <td>
                        <button id="plus" onclick="plus()">+</button>
                    </td>

                </tr>
            </table>
        </div>
    </div>
    <aside>
        <img src="/images/ingredienten.jpg" alt="ingredienten" class="width80">
    </aside>
    <button onclick="hide()" class="verwijder">verwijder</button>
</div>

</body>
</html>

