<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomdetails', function (Blueprint $table) {
            $table->id('ROOM_DETAIL_NUMBER');
            $table->unsignedBigInteger('room_ROOM_NUMBER');
            $table->string('ROOM_FACILITY', 191);
            $table->string('ROOM_AMENITIES', 191);
            $table->string('ROOM_SIZE', 191);
            $table->timestamp('ROOM_DETAIL_SIGNUP_DATE')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('ROOM_DETAIL_UPDATE_DATE')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table
                ->foreign('room_ROOM_NUMBER')
                ->references('ROOM_NUMBER')
                ->on('rooms')
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
        Schema::dropIfExists('roomdetails');
    }
}
