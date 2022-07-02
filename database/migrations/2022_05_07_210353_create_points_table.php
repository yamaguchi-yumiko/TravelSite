<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');//外部キー制約
            $table->foreignId('reserves_id')->constrained('reserves');//外部キー制約
            $table->boolean('acquisition_use_flg')->nullable(false)->comment('獲得利用フラグ');
            $table->integer('point')->nullable(false)->comment('ポイント数');
            $table->integer('point_total')->nullable(false)->comment('ポイント残高');
            $table->boolean('del_flg')->nullable(false)->comment('削除フラグ');
            $table->timestamp('ins_date')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->string('ins_prg', 64)->nullable(false)->comment('登録プログラム');
            $table->timestamp('upd_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->string('upd_prg', 64)->nullable(false)->comment('更新プログラム');
        });
        DB::statement("ALTER TABLE points COMMENT 'ポイント履歴'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
}
