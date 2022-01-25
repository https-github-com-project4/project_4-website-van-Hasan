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

        <input type="submit"
               value="Verder gaan"
               class="input_verder bg-green-500 hover:bg-yellow-500">
    </form>
</div>
</body>
</html>
