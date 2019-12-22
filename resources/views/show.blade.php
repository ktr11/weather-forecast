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
    <table>
        <tr>
            <th>date</th>
            <td>{{ date('Y/m/d') }}</td>
        </tr>
        <tr>
            <th>name</th>
            <td>{{ $record->name }}</td>
        </tr>
        <tr>
            <td colspan="2"><img src="{{ url('img/icon') . '/' .  $record->icon . '.png' }}"></td>
        </tr>
        <tr>
            <th>max&nbsp;temp</th>
            <td>{{ $record->max_temp }}</td>
        </tr>
        <tr>
            <th>min&nbsp;temp</th>
            <td>{{ $record->min_temp }}</td>
        </tr>
    </table>
</body>

</html>