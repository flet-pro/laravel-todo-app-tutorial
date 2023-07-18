<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TODO | SAKURA Tempesta</title>

    <!-- Scripts -->
    @yield('js')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bulma.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>
<body>
<section class="hero">
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                TODOアプリ
            </p>
            <p class="subtitle">
                ソフト部門夏期講習会
            </p>
        </div>
    </section>
</section>
@yield('content')
</body>
</html>
