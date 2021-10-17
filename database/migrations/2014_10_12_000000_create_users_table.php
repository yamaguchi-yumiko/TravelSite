<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('user_id', 32)->unique()->nullable(FALSE)->comment('会員ID');
            $table->string('password')->nullable(FALSE)->comment('パスワード');
            $table->string('last_name', 64)->nullable(FALSE)->comment('姓');
            $table->string('first_name', 64)->nullable(FALSE)->comment('名');
            $table->string('last_name_kana', 64)->nullable(FALSE)->comment('姓カナ');
            $table->string('first_name_kana', 64)->nullable(FALSE)->comment('名カナ');
            $table->integer('gender')->length(1)->nullable(FALSE)->comment('性別');
            $table->char('birthday', 8)->nullable(FALSE)->comment('生年月日');
            $table->char('postal_code', 7)->nullable(FALSE)->comment('郵便番号');
            $table->string('prefecture_cd', 2)->nullable(FALSE)->comment('都道府県CD');
            $table->string('city_name', 64)->nullable(FALSE)->comment('市区町村');
            $table->string('town_name', 64)->nullable(FALSE)->comment('町名番地');
            $table->string('other_address', 256)->nullable()->comment('その他住所');
            $table->string('tel', 32)->nullable(FALSE)->comment('電話番号');
            $table->string('emergency_contact', 32)->nullable()->unique()->comment('緊急連絡先');
            $table->string('email', 256)->unique()->nullable(FALSE)->comment('メールアドレス');
            $table->boolean('del_flg')->nullable(FALSE)->default(FALSE)->comment('削除フラグ');
            $table->timestamp('ins_date')->nullable(FALSE)->comment('登録日時');
            $table->string('ins_prg', 64)->nullable(FALSE)->comment('登録プログラム');
            $table->timestamp('upd_date')->nullable(FALSE)->comment('更新日時');
            $table->string('upd_prg', 64)->nullable(FALSE)->comment('登録プログラム');
        });
        DB::statement("ALTER TABLE users COMMENT '会員'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
