<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="images/logo.png">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Stonks pizza's</title>
    </head>
    <body>

    {{$order->id}} <br>
    {{$order->name}}<br>
    {{$order->emailadrs}}<br>
    {{$order->phone}}<br>
    {{$order->address}}
    {{$order->zipcode}}<br><br>


                <div class="grid-pizza">
                        @foreach($pizzas as $pizza)

                            <img class="width300px" src="/images/Salami.png" alt="pizza image">
                            <form action="{{route('order_pizzas.store', ['orderid'=>$order->id, 'pizzaid'=>$pizza->id])}}" method="post">
                                @csrf
                                <input type="submit"  class="bg-red-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"></input>
                            </form>
                            <p>{{$pizza->name}}</p>
                            <h2>Toppings:</h2>
                            <ul>
                                @foreach($pizza->ingredients as $ingredient)
                                    <li>{{$ingredient->name}}</li>
                                @endforeach
                            </ul>
                        @endforeach
u               </div>


    </body>
</html>

{{--    <!doctype html>--}}
{{--<html lang="nl">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="icon" type="image/png" href="images/logo.png">--}}
{{--    <link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <script type="text/javascript" src="/js/script.js" >--}}

{{--        <title>Stonks pizza's</title>--}}
{{--        </head>--}}
{{--        <script>--}}

{{--    </script>--}}
{{--<body>--}}


{{--<ul class="flex">--}}
{{--    <li class="flex-1 mr-2">--}}
{{--        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/">Home</a>--}}
{{--    </li>--}}

{{--    <li class="flex-1 mr-2">--}}
{{--        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/">About us</a>--}}
{{--    </li>--}}

{{--    <li class="flex-1 mr-2">--}}
{{--        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/">Contact</a>--}}
{{--    </li>--}}

{{--    <li class="flex-1 mr-2">--}}
{{--        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/">Log in</a>--}}
{{--    </li>--}}

{{--    <li class="flex-1 mr-2">--}}
{{--        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/songs">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">--}}
{{--                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--</ul>--}}


{{--        <div class="h-24 bg-gradient-to-r from-green-400 via-red-500 to-green-500"> </div>--}}


{{--    <nav class="nav">--}}
{{--        <a class="item-nav" href="#">home</a>--}}
{{--        <a class="item-nav" href="#">about us</a>--}}
{{--        <a class="item-nav" href="#">Contact</a>--}}
{{--        <a  class="item-nav" href="#">login</a>--}}
{{--        <a class="item-nav" href=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">--}}
{{--                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--            </svg></a>--}}

{{--    </nav>--}}

{{--<header>--}}
{{--    <img class="header-img" src="/images/a3e06c8f7b389ecacdbcd59f2b29fc17.jpg" alt="">--}}
{{--</header>--}}

{{--<div class="flex-container-pizzas">--}}





{{--    @foreach($pizzas as $pizza)--}}
{{--        <form action="">--}}
{{--            <div class="grid-pizza">--}}
{{--                <img class="width300px" src="/images/Salami.png" alt="">--}}
{{--                <p>{{$pizza->name}}</p>--}}
{{--                <p>size:</p>--}}


{{--                <select name="" id="">--}}

{{--                    @foreach($sizes as $size)--}}
{{--                        <option value="25 cm">{{$size->size}} cm, &nbsp;&nbsp;&nbsp;     €{{$size->price}}</option>--}}

{{--                    @endforeach--}}

{{--                </select>--}}
{{--                @foreach($sizes as $size)--}}




{{--                @endforeach--}}

{{--                <input type="submit" value="Wijzigen">--}}
{{--                <input type="submit" value="Bestellen">--}}
{{--            </div></form>--}}
{{--    @endforeach--}}


{{--</div>--}}
{{--<img src="/images/pizza_background.jpg" alt="samenstellen">--}}
{{--<button style="border: black 2px solid; background: green"   onclick="hide()">een pizza samenstellen</button>--}}


{{--<div id="samenstellen" hidden>--}}


{{--    <div class="containersplitsen">--}}
{{--        <div class="vlees container">--}}
{{--            <p class="soort">vlees</p>--}}

{{--            <table class="center">--}}
{{--                --}}{{--                    @foreach($ingredients as $ingredients)--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">spek</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}
{{--                    <td>  <p class="small">prijs</p>  </td>--}}
{{--                </tr>--}}
{{--                --}}{{--                    @endforeach--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">salami</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}


{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">ham</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--            </table>--}}
{{--        </div>--}}

{{--        <div class="kaas container">--}}
{{--            <p class="soort"> kaas</p>--}}
{{--            <table class="center">--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">kaas</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">mozzerela</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">schimmelkaas</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--            </table>--}}

{{--        </div>--}}

{{--        <div class="groete_fruit container">--}}
{{--            <p class="soort">groente / fruit</p>--}}
{{--            <table class="center">--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">ui</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">paprika</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">Ananas</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--            </table>--}}
{{--        </div>--}}

{{--        <div class="vis container">--}}
{{--            <p class="soort">vis</p>--}}
{{--            <table class="center">--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">Tonijn</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">Sardines</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}


{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <p class="small">garnaal</p>--}}
{{--                    </td>--}}

{{--                    <td>--}}
{{--                        <button id="min" onclick="mini()">-</button>--}}
{{--                    </td>--}}
{{--                    <td class="p" id="getal">--}}
{{--                        0--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <button id="plus" onclick="plus()">+</button>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <aside>--}}
{{--        <img src="/images/ingredienten.jpg" alt="ingredienten" class="width80">--}}
{{--    </aside>--}}
{{--    <button onclick="hide()" class="verwijder">verwijder</button>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}

