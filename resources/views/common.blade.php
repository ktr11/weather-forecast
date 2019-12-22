<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Weather Forecast</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ url('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Weather Forecast</h1>
    @yield('contents') 
</body>

</html>