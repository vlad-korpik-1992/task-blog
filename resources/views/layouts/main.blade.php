<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Личный кабинет</title>
</head>
<body>
<section class="manager">
    <div class="wrapper">
        <div class="manager__box">
            @include('includes.sidebar')
            @yield('content')
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
