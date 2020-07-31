<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{--    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">--}}
    {{--    <link rel="icon" type="image/png" href="../assets/img/favicon.png">--}}
    <title>PUSH-HER • Сервис push - уведомлений</title>

    <link href="/css/fontawesome.css" rel="stylesheet">
    <link href="/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/css/black-dashboard.css" rel="stylesheet" />
    <link href="{{ asset('/css/ptsans.css') }}" rel="stylesheet" />

</head>
<body>
<div class="wrapper wrapper-full-page">
    <div class="full-page lock-page">
        <div class="" data="blue">
            <div>Хуй</div>
            <div id="app">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
