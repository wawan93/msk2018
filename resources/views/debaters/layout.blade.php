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

<header>
    <div class="collapse bg-white" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-white box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="/yabloko_logo.png" height="50">
            </a>
        </div>
    </div>
</header>

<main role="main">
    @yield("jumbotron")
    @yield("content")
</main>

<footer class="text-muted">
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

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/app.js"></script>
@yield("scripts")
</body>
</html>
