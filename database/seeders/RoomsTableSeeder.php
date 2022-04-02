<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '1',
            'ROOM_NAME' => '松',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '食事なし',
            'ROOM_STICK' => '露天風呂、大浴場、禁煙ルーム、ネット可能、送迎、現地払い可能',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '59800',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '1',
            'ROOM_NAME' => '竹',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '朝食',
            'ROOM_STICK' => '露天風呂、大浴場、禁煙ルーム、ネット可能、送迎、現地払い可能',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '102800',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '1',
            'ROOM_NAME' => '梅',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '夕食',
            'ROOM_STICK' => '露天風呂、大浴場、禁煙ルーム、ネット可能、送迎、現地払い可能',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '152800',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '2',
            'ROOM_NAME' => '松',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '食事なし',
            'ROOM_STICK' => '家族風呂あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '67100',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '2',
            'ROOM_NAME' => '竹',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '朝食',
            'ROOM_STICK' => '家族風呂あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '88800',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '2',
            'ROOM_NAME' => '梅',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '夕食',
            'ROOM_STICK' => '家族風呂あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '120000',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '3',
            'ROOM_NAME' => '松',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '食事なし',
            'ROOM_STICK' => '大浴場あり、露天風呂あり、温泉、無線LAN、local_parking、駐車場あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '48500',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '3',
            'ROOM_NAME' => '竹',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '朝食',
            'ROOM_STICK' => '大浴場あり、露天風呂あり、温泉、無線LAN、local_parking、駐車場あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '72800',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '3',
            'ROOM_NAME' => '梅',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '夕食',
            'ROOM_STICK' => '大浴場あり、露天風呂あり、温泉、無線LAN、local_parking、駐車場あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '110800',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '4',
            'ROOM_NAME' => '松',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '食事なし',
            'ROOM_STICK' => '無線LAN、駐車場あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '23402',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '4',
            'ROOM_NAME' => '竹',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '朝食',
            'ROOM_STICK' => '無線LAN、駐車場あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '48000',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '4',
            'ROOM_NAME' => '梅',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '夕食',
            'ROOM_STICK' => '無線LAN、駐車場あり',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '77000',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '5',
            'ROOM_NAME' => '松',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '食事なし',
            'ROOM_STICK' => '無線LAN',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '10000',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '5',
            'ROOM_NAME' => '竹',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '朝食',
            'ROOM_STICK' => '無線LAN',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '30000',
            'ROOM_DEL' => '0',
        ]);
        DB::table('rooms')->insert([
            'hotel_HOTEL_NUMBER' => '5',
            'ROOM_NAME' => '梅',
            'ROOM_TYPE' => '和室',
            'ROOM_FOOD' => '夕食',
            'ROOM_STICK' => '無線LAN',
            'ROOM_IMG' => 'storage/images/43290140001838750.jpg',
            'ROOM_RESERVE' => '1',
            'ROOM_PAYMENT' => '現地/事前支払い',
            'ROOM_PRICE' => '50000',
            'ROOM_DEL' => '0',
        ]);
    }
}
