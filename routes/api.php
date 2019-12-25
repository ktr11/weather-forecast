<?php

use App\Services\ApiUtil;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function () {
    Route::post('/weather/{id}', function ($id) {
        $ret_obj = array();
        // DBか天気予報の情報を取得
        $records = App\DailyWeather::where('area_id', $id)->where('forecast_date', date('Ymd'))->get();
        if (count($records) <= 0) {
            // 取得できなければ、APIを呼びだして取得する。
            $res_json = ApiUtil::getWeatherData($id);
            $result = json_decode($res_json, true);
            $main = $result['main'];
            // DB登録
            $record = App\DailyWeather::create(
                [
                    'area_id' => $id,
                    'name' => $result['name'],
                    'icon' => $result['weather'][0]['icon'],
                    'forecast_date' => date('Ymd'),
                    'max_temp' => $main['temp_max'],
                    'min_temp' => $main['temp_min'],
                ]
            );
        } else {
            $record = $records[0];
        }
        array_push($ret_obj,
            ['ret_obj' => [
                'today' => date('Y/m/d'),
                'name' => $record['name'],
                'icon' => $record['icon'],
                'max_temp' => $record['max_temp'],
                'min_temp' => $record['min_temp'],
            ]]
        );
        // array_push($ret_obj,
        //     [
        //         'today' => date('Y/m/d'),
        //         'name' => $record['name'],
        //         'icon' => $record['icon'],
        //         'max_temp' => $record['max_temp'],
        //         'min_temp' => $record['min_temp'],
        //     ]
        // );
        return json_encode($ret_obj);
    });
});
