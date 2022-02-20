<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->unsignedBigInteger('user_id')->comment('会員ID');
            $table->foreignId('user_id')->constrained('users');//外部キー制約
            $table->string('reservation_detail_id')->comment('予約詳細ID');
            $table->foreignId('reservation_detail_id')->constrained('reservation_details');//外部キー制約
            $table->date('reservation_date')->nullable(false)->comment('予約日');
            $table->date('stay_date')->nullable(false)->comment('宿泊日');
            $table->integer('stay_number')->nullable(false)->comment('泊数');
            $table->integer('guest_number')->nullable(false)->comment('人数');
            $table->integer('rooms_number')->nullable(false)->comment('室数');
            $table->integer('say_total_price')->nullable(false)->comment('宿泊料金合計');
            $table->integer('total_price')->nullable(false)->comment('合計');
            $table->string('check_time', 5)->nullable(false)->comment('チェックイン');
            $table->integer('payment')->length(1)->nullable(false)->comment('支払方法 0:現地支払 1:事前支払');
            $table->integer('transportation')->length(1)->nullable(false)->comment('交通手段 0:公共交通機関 1:車');
            $table->char('postal_code', 8)->nullable(false)->comment('郵便番号');
            $table->string('prefecture_cd', 8)->nullable(false)->comment('都道府県');
            $table->string('city_name', 64)->nullable(false)->comment('市区町村');
            $table->string('town_name', 64)->nullable(false)->comment('町名番地');
            $table->string('other_address', 256)->nullable(false)->comment('その他住所');
            $table->string('tel', 32)->nullable(false)->comment('電話番号');
            $table->string('emergency_contact', 32)->nullable()->comment('緊急連絡先');
            $table->string('email', 256)->nullable(false)->comment('メールアドレス');
            $table->integer('status')->length(1)->nullable(false)->comment('ステータス 0:予約済 1:キャンセル');
            $table->boolean('del_flg')->nullable(false)->comment('削除フラグ');
            $table->timestamp('ins_date')->nullable(false)->comment('登録日時');
            $table->string('ins_prg', 64)->nullable(false)->comment('登録プログラム');
            $table->timestamp('upd_date')->nullable(false)->comment('更新日時');
            $table->string('upd_prg', 64)->nullable(false)->comment('更新プログラム');
        });
        //ALTER 文を実行しテーブルにコメントを設定
        DB::statement("ALTER TABLE reserves COMMENT '予約'");
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserves');
    }
}
