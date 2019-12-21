<?php

namespace App\Http\Controllers\Weather;

use App\Services\ApiUtil;
use App\Http\Controllers\Controller;
use Request;

class WeatherController extends Controller
{
    /**
     * 天気予報を表示
     */
    public function show()
    {
        $prefecture = Request::input('prefecture');
        $res_json =  ApiUtil::getWeatherData($prefecture);
        $result = json_decode($res_json, true);
        return view('show', ['result' =>$res_json]);
    }
}
