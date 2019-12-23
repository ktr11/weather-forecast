<?php

use Illuminate\Http\Request;
use App\Services\ApiUtil;

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
        # DBから天気予報の情報を取得
        $records = App\DailyWeather::where('area_id', $id)->where('forecast_date', date('Ymd'))->get();
        if (count($records) <= 0) {
            # 取得できなければ、APIを呼びだして取得する。
            $res_json =  ApiUtil::getWeatherData($id);
            $result = json_decode($res_json, true);
            $name = $result['name'];
            $icon = $result['weather'][0]['icon'];
            $main = $result['main'];
            $max_temp = $main['temp_max'];
            $min_temp = $main['temp_min'];
            # DB登録
            $record = App\DailyWeather::create(
                [
                    'area_id' => $id,
                    'name' => $name,
                    'icon' => $icon,
                    'forecast_date' => date('Ymd'),
                    'max_temp' => $max_temp,
                    'min_temp' => $min_temp
               ]
            );
        } else {
            $record = $records[0];
        }
        return json_encode($record);
    });
});
