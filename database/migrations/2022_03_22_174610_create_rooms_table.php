<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('ROOM_NUMBER');
            $table->unsignedBigInteger('hotel_HOTEL_NUMBER');
            $table->string('ROOM_NAME', 191);
            $table->string('ROOM_TYPE', 191);
            $table->string('ROOM_FOOD', 191);
            $table->string('ROOM_STICK', 191);
            $table->string('ROOM_IMG', 191);
            $table->boolean('ROOM_RESERVE')->nullable();
            $table->string('ROOM_PAYMENT', 191);
            $table->integer('ROOM_PRICE');
            $table->boolean('ROOM_DEL')->nullable();
            $table->timestamp('ROOM_SIGNUP_DATE')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('ROOM_UPDATE_DATE')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table
                ->foreign('hotel_HOTEL_NUMBER')
                ->references('HOTEL_NUMBER')
                ->on('hotels')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
