<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="/js/script.js"></script>
    <title>Order</title>
</head>
<body>

<ul class="flex">
    <li class="flex-1 mr-2">
        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-red-500 hover:bg-yellow-500 text-white" href="/">Home</a>
    </li>

    <li class="flex-1 mr-2">
        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/">About us</a>
    </li>

    <li class="flex-1 mr-2">
        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/">Contact</a>
    </li>

    <li class="flex-1 mr-2">
        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/">Log in</a>
    </li>

    <li class="flex-1 mr-2">
        <a class="text-center block border border-green-500 rounded py-2 px-4 bg-green-500 hover:bg-yellow-500 text-white" href="/songs">
            1
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
        </a>
    </li>
</ul>
<header>
    <img  class="header-img" src="/images/pizza2.jpg" alt="">
    <h1 class="centered">Welkom op de pagina van pizza Stonks </h1>
</header>
<div class="container_order">
    <h2>Vul uw gegevens in de onderstaande formulier om verder te gaan!</h2>
    <form action="{{route('order.store')}}" method="Post">

        @csrf

        <table>
            <tr>
                <td>
                    <label name="name">Naam:</label>
                </td>
                <td>
                    <input type="text" name="name" ></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label name="emailadres">Emailadres:</label>
                </td>
                <td>
                    <input type="text" name="emailadres" ></input>
                </td>

            </tr>
            <tr>
                <td>
                    <label name="phone">Telefoonnummer:</label>
                </td>
                <td>
                    <input type="number" name="phone"></input>
                </td>

            </tr>
            <tr>
                <td>
                    <label name="address">Adres:</label>
                </td>
                <td>
                    <input type="text" name="address" ></input>
                </td>

            </tr>
            <tr>
                <td>
                    <label name="zipcode">Postcode:</label>
                </td>
                <td>
                    <input type="text" name="zipcode" ></input>
                </td>
            </tr>
        </table>
        <input type="submit" value="Volgende stap">
    </form>
</div>
</body>
</html>
