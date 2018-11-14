<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:title" content="Дебатный турнир" />
    <meta property="og:image" content="/safe_image.jpeg" />


    <title>@yield('title')</title>

    <!-- Custom styles for this template -->
    <link href="/css/app.css?time={{ date('His') }}" rel="stylesheet">
    @yield("styles")
</head>

<body>

<div id="app">
<header>
    <div class="navbar navbar-dark bg-white shadow-sm">
        <div class="container">
            <a href="/">
                <img src="/deb_logo.png" height="50">
            </a>
        </div>
    </div>
</header>

<main role="main">
    @include("partials.jumbotron")
    @include("partials.nav")
    @yield("content")
</main>
</div>

<footer class="footer navigation">
    <div class="container">
        <p class="float-right">
            <a href="#">наверх</a>
        </p>
        <p>
            © 2018 |
            <a href="/info/organizators">Оргкомитет дебатов</a> |
            <a href="https://drive.google.com/file/d/1JxuDW-KwRufUXsIQ8WFrHgxHgbYsCGfL/view?usp=sharing">Регламент</a>
        </p>
    </div>
</footer>

<script src="/js/app.js?time={{ date('His') }}"></script>
@yield("scripts")

</body>
</html>
