<?php
namespace App\Services;

use GuzzleHttp\Client;

class ApiUtil
{
    
    /**
     * OpenWeatherのAPIを叩いて天気を取得
     */
    public static function getWeatherData($id)
    {
        $client = new Client();
        $res = $client->request(
            'GET',
            config('app.ow_url'),
            [
                'query' => [
                    'id' => $id,
                    'appid' => config('app.ow_api_key'),
                    'units' => 'metric'
                ]
            ]
        );
        $result = $res->getBody();
        return $result;
    }
}
