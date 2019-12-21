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
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>
    <h1>Weather Forecast</h1>
    <form method="post" action="{{ url('/weather/show') }}">
        {{ csrf_field() }}
        <select name="prefecture">
            <option value="">please select</option>
            <option value="2130037">Hokkaidō</option>
            <option value="1850147">Tokyo</option>
        </select>
        <input type="submit" value="送信">
    </form>
</body>

</html>