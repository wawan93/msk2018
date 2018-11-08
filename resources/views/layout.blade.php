<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
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

<script src="/js/app.js?time={{ date('His') }}"></script>
@yield("scripts")

</body>
</html>
