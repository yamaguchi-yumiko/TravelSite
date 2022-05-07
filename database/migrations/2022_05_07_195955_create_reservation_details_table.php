<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_ROOM_NUMBER');//外部キー制約
            $table->string('reservation_details_room_number', 64)->nullable(false)->comment('部屋NO');
            $table->string('room_last_name', 64)->nullable(false)->comment('部屋_性');
            $table->string('room_first_name', 64)->nullable(false)->comment('部屋_名');
            $table->integer('adults_price')->nullable(false)->comment('大人単価');
            $table->integer('adults_number')->nullable(false)->comment('大人人数');
            $table->integer('child_price')->nullable(false)->comment('こども単価');
            $table->integer('child_number')->nullable(false)->comment('こども人数');
            $table->integer('sub_price')->nullable(false)->comment('小計');
            $table->boolean('del_flg')->nullable(false)->comment('削除フラグ');
            $table->timestamp('ins_date')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->string('ins_prg', 64)->nullable(false)->comment('登録プログラム');
            $table->timestamp('upd_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->string('upd_prg', 64)->nullable(false)->comment('更新プログラム');
            $table
            ->foreign('room_ROOM_NUMBER')
            ->references('ROOM_NUMBER')
            ->on('rooms')
            ->onDelete('cascade');
        });
            //ALTER 文を実行しテーブルにコメントを設定
            DB::statement("ALTER TABLE reservation_details COMMENT '予約詳細'");
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_details');
    }
}
