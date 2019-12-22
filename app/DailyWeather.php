<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyWeather extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'daily_weather';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'area_id', 'forecast_date','name', 'icon','max_temp','min_temp'
    ];

}
