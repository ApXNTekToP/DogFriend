<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('title')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="author" content="@yield('author')"/>
    <meta name="copyright" content="(c)">
    <meta http-equiv="Reply-to" content="">
    <meta http-equiv="msthemecompatible" content="no"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="home-template">
<noscript class="no_script_message">
    У вас отключен JavaScript. Сайт может отображаться некорректно. Рекомендуем включить JavaScript.
</noscript>
<header>
    <div class="header container">
        @yield('header')
    </div>
</header>
<main class="wrapper d-flex min-vh-100 flex-column">
    <div class="content container">
        @yield('content')
    </div>
</main>
<footer>
    <div class="footer container">
        @yield('footer')
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
