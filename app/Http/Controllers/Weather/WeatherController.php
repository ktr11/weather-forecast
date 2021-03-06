<?php

namespace App\Http\Controllers\Weather;

use App\Services\ApiUtil;
use App\Http\Controllers\Controller;
use Request;
use App;

class WeatherController extends Controller
{
    /**
     * 天気予報を表示
     */
    public function show(Request $request)
    {
        # validation
        $validatedData = Request::validate([
            'area' => 'required'
        ]);
        $area_id = Request::input('area');
        # DBから天気予報の情報を取得
        $records = App\DailyWeather::where('area_id', $area_id)->where('forecast_date', date('Ymd'))->get();
        if (count($records) <= 0) {
            # 取得できなければ、APIを呼びだして取得する。
            $res_json =  ApiUtil::getWeatherData($id);
            $result = json_decode($res_json, true);
            $main = $result['main'];
            # DB登録
            $record = App\DailyWeather::create(
                [
                    'area_id' => $id,
                    'name' => $result['name'],
                    'icon' => $result['weather'][0]['icon'],
                    'forecast_date' => date('Ymd'),
                    'max_temp' => $main['temp_max'],
                    'min_temp' => $main['temp_min']
               ]
            );
        } else {
            $record = $records[0];
        }
        return view(
            'show',
            compact('record')
        );
    }
}
