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
    <link href="{{ url('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Weather Forecast</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ url('/weather/show') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-sm-1 control-label">area:</label>
            <div class="col-sm-4">
                <select name="area" class="form-control">
                    <option value="">please select</option>
                    <option value="2130037">Hokkaidō</option>
                    <option value="1850147">Tokyo</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <input type="submit" class="btn btn-default" value="send">
            </div>
        </div>
    </form>
</body>

</html>