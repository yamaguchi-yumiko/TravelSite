<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('user_id', 32)->nullable(false)->comment('会員ID');
            $table->string('password')->nullable(false)->comment('パスワード');
            $table->string('last_name', 64)->nullable(false)->comment('姓');
            $table->string('first_name', 64)->nullable(false)->comment('名');
            $table->string('last_name_kana', 64)->nullable(false)->comment('姓カナ');
            $table->string('first_name_kana', 64)->nullable(false)->comment('名カナ');
            $table->integer('admin_level')->nullable(false)->comment('アクセスレベル');
            $table->rememberToken();
            $table->boolean('del_flg')->nullable(false)->default(false)->comment('削除フラグ');
            $table->timestamp('ins_date')->nullable(false)->comment('登録日時');
            $table->string('ins_prg', 64)->nullable(false)->comment('登録プログラム');
            $table->timestamp('upd_date')->nullable(false)->comment('更新日時');
            $table->string('upd_prg', 64)->nullable(false)->comment('登録プログラム');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_users');
    }
}
