<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '1',
            'ROOM_FACILITY' => '風呂／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／ドライヤー／ユカタ／新聞／夕刊／朝刊／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '15畳＋踏込1.5畳',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '2',
            'ROOM_FACILITY' => '風呂／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／ドライヤー／ユカタ／新聞／夕刊／朝刊／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '25畳＋踏込1.5畳',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '3',
            'ROOM_FACILITY' => '風呂／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／ドライヤー／ユカタ／新聞／夕刊／朝刊／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '35畳＋踏込1.5畳',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '4',
            'ROOM_FACILITY' => '風呂／シャワー／洗浄器付トイレ等／冷房（無料）／暖房（無料）／テレビ（無料）／貸金庫（無料）／ビデオデッキ／ポット',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／ハンディタオル／かみそり／化粧品／ドライヤー／ユカタ／新聞／夕刊／朝刊／シャンプーリンス／石鹸ボディーソープ／スリッパ',
            'ROOM_SIZE' => '【本館／54平米～】和室12．5畳＋広縁（チェア付）',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '5',
            'ROOM_FACILITY' => '風呂／シャワー／洗浄器付トイレ等／冷房（無料）／暖房（無料）／テレビ（無料）／貸金庫（無料）／ビデオデッキ／ポット',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／ハンディタオル／かみそり／化粧品／ドライヤー／ユカタ／新聞／夕刊／朝刊／シャンプーリンス／石鹸ボディーソープ／スリッパ',
            'ROOM_SIZE' => '【本館／54平米～】和室15畳＋広縁（チェア付）',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '6',
            'ROOM_FACILITY' => '風呂／シャワー／洗浄器付トイレ等／冷房（無料）／暖房（無料）／テレビ（無料）／貸金庫（無料）／ビデオデッキ／ポット',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／ハンディタオル／かみそり／化粧品／ドライヤー／ユカタ／新聞／夕刊／朝刊／シャンプーリンス／石鹸ボディーソープ／スリッパ',
            'ROOM_SIZE' => '【本館／54平米～】和室18畳＋広縁（チェア付）',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '7',
            'ROOM_FACILITY' => '風呂／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）／温泉給湯',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／化粧品／ドライヤー／ユカタ／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '10畳＋洋間',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '8',
            'ROOM_FACILITY' => '風呂／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）／温泉給湯',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／化粧品／ドライヤー／ユカタ／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '15畳＋洋間',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '9',
            'ROOM_FACILITY' => '風呂／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）／温泉給湯',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／化粧品／ドライヤー／ユカタ／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '18畳＋洋間',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '10',
            'ROOM_FACILITY' => '風呂／シャワー／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）／ポット',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／ドライヤー／ユカタ／新聞／朝刊／シャンプーリンス／石鹸ボディーソープ／スリッパ',
            'ROOM_SIZE' => '38平米',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '11',
            'ROOM_FACILITY' => '風呂／シャワー／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）／ポット',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／ドライヤー／ユカタ／新聞／朝刊／シャンプーリンス／石鹸ボディーソープ／スリッパ',
            'ROOM_SIZE' => '48平米',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '12',
            'ROOM_FACILITY' => '風呂／シャワー／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）／ポット',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／バスローブ／ハンディタオル／かみそり／ドライヤー／ユカタ／新聞／朝刊／シャンプーリンス／石鹸ボディーソープ／スリッパ',
            'ROOM_SIZE' => '58平米',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '13',
            'ROOM_FACILITY' => '風呂／シャワーブース／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／かみそり／ドライヤー／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '58平米',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '14',
            'ROOM_FACILITY' => '風呂／シャワーブース／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／かみそり／ドライヤー／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '78平米',
        ]);
        DB::table('roomdetails')->insert([
            'room_ROOM_NUMBER' => '15',
            'ROOM_FACILITY' => '風呂／シャワーブース／洗浄器付トイレ等／冷房（無料）／暖房（無料）／冷蔵庫／テレビ（無料）／貸金庫（無料）',
            'ROOM_AMENITIES' => '歯ブラシ／タオル／バスタオル／かみそり／ドライヤー／シャンプーリンス／石鹸ボディーソープ',
            'ROOM_SIZE' => '100平米',
        ]);
    }
}
