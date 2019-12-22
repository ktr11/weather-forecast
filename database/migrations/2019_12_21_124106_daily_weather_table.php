<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DailyWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_weather', function (Blueprint $table) {
            $table->integer('area_id');
            $table->char('forecast_date', 8);
            $table->string('name');
            $table->char('icon', 3);
            $table->double('max_temp', 9, 3);
            $table->double('min_temp', 9, 3);
            $table->timestamps();
            $table->primary(['area_id', 'forecast_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_weather');
    }
}
