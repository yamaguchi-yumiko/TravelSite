<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('HOTEL_NUMBER');
            $table->string('HOTEL_NAME', 191);
            $table->string('HOTEL_NAME_KANA', 191);
            $table->string('HOTEL_STATION', 191);
            $table->string('HOTEL_URL', 191);
            $table->integer('HOTEL_ROOM');
            $table->string('HOTEL_KEY', 191);
            $table->integer('HOTEL_PRICE');
            $table->string('HOTEL_IMG', 191);
            $table->string('HOTEL_POST', 191);
            $table->string('HOTEL_PREF', 191);
            $table->string('HOTEL_CITY', 191);
            $table->string('HOTEL_STREET', 191);
            $table->string('HOTEL_BUILD', 191);
            $table->string('HOTEL_PHONE', 191);
            $table->boolean('HOTEL_DEL')->nullable();
            $table->string('HOTEL_LOCATION_INFO', 191)->nullable();
            $table->timestamp('HOTEL_SIGNUP_DATE')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('HOTEL_UPDATE_DATE')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
