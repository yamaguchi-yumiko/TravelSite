<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'HOTEL_NUMBER' => '1',
            'HOTEL_NAME' => '古屋旅館',
            'HOTEL_NAME_KANA' => 'フルヤリョカン',
            'HOTEL_STATION' => 'ＪＲ熱海駅',
            'HOTEL_URL' => 'https://atami-furuya.co.jp/',
            'HOTEL_ROOM' => '26',
            'HOTEL_KEY' => '大浴場あり、露天風呂あり、温泉、wifi、無線LAN、local_parking、駐車場あり',
            'HOTEL_PRICE' => '59800',
            'HOTEL_IMG' => 'storage/images/43290141000080005.jpg',
            'HOTEL_POST' => '413-0012',
            'HOTEL_PREF' => '静岡県',
            'HOTEL_CITY' => '熱海市',
            'HOTEL_STREET' => '東海岸町５−２４',
            'HOTEL_BUILD' => '',
            'HOTEL_PHONE' => '0557-81-0001',
            'HOTEL_DEL' => '1',
            'HOTEL_LOCATION_INFO' => '35.09819261831004, 139.07460606627268',
        ]);
        DB::table('hotels')->insert([
            'HOTEL_NUMBER' => '2',
            'HOTEL_NAME' => '浅田屋',
            'HOTEL_NAME_KANA' => 'アサダヤ',
            'HOTEL_STATION' => 'JR金沢駅',
            'HOTEL_URL' => 'https://www.asadaya.co.jp/ryokan/',
            'HOTEL_ROOM' => '5',
            'HOTEL_KEY' => '家族風呂あり',
            'HOTEL_PRICE' => '67100',
            'HOTEL_IMG' => 'storage/images/innphoto_asadaya01.jpg',
            'HOTEL_POST' => '920-0906',
            'HOTEL_PREF' => '石川県',
            'HOTEL_CITY' => '金沢市',
            'HOTEL_STREET' => '十間町23',
            'HOTEL_BUILD' => '',
            'HOTEL_PHONE' => '076-231-2228',
            'HOTEL_DEL' => '1',
            'HOTEL_LOCATION_INFO' => '36.57064131165946, 136.6564058946927',
        ]);
        DB::table('hotels')->insert([
            'HOTEL_NUMBER' => '3',
            'HOTEL_NAME' => '望楼ＮＯＧＵＣＨＩ函館',
            'HOTEL_NAME_KANA' => 'ボウロウノグチハコダテ',
            'HOTEL_STATION' => 'ＪＲ函館駅',
            'HOTEL_URL' => 'https://www.bourou-hakodate.com/',
            'HOTEL_ROOM' => '79',
            'HOTEL_KEY' => '大浴場あり、露天風呂あり、温泉、無線LAN、local_parking、駐車場あり',
            'HOTEL_PRICE' => '49500',
            'HOTEL_IMG' => 'storage/images/16100281300000347.jpg',
            'HOTEL_POST' => '042-0932',
            'HOTEL_PREF' => '北海道',
            'HOTEL_CITY' => '函館市',
            'HOTEL_STREET' => '湯川町１丁目１７−２２',
            'HOTEL_BUILD' => '',
            'HOTEL_PHONE' => '0570-026573',
            'HOTEL_DEL' => '1',
            'HOTEL_LOCATION_INFO' => '41.77885569549551, 140.78422532419117',
        ]);
        DB::table('hotels')->insert([
            'HOTEL_NUMBER' => '4',
            'HOTEL_NAME' => 'ウェスティン都ホテル京都',
            'HOTEL_NAME_KANA' => 'ウェスティンミヤコホテルキョウト',
            'HOTEL_STATION' => 'ＪＲ京都',
            'HOTEL_URL' => 'https://www.miyakohotels.ne.jp/westinkyoto/',
            'HOTEL_ROOM' => '287',
            'HOTEL_KEY' => '無線LAN、駐車場あり',
            'HOTEL_PRICE' => '23402',
            'HOTEL_IMG' => 'storage/images/62300021300000362.jpg',
            'HOTEL_POST' => '605-0052',
            'HOTEL_PREF' => '京都府',
            'HOTEL_CITY' => '京都市',
            'HOTEL_STREET' => '東山区粟田口華頂町1(三条けあげ)',
            'HOTEL_BUILD' => '',
            'HOTEL_PHONE' => '075-771-7111',
            'HOTEL_DEL' => '1',
            'HOTEL_LOCATION_INFO' => '35.00922378200338, 135.78854886812434',
        ]);
        DB::table('hotels')->insert([
            'HOTEL_NUMBER' => '5',
            'HOTEL_NAME' => 'ＯＫＩＮＡＷＡ　ＫＡＲＩＹＵＳＨＩ　ＲＥＳＯＲＴ　ＥＸＥＳ　ＩＳＨＩＧＡＫＩ',
            'HOTEL_NAME_KANA' => 'オキナワカリユシリゾートエグゼスイシガキ',
            'HOTEL_STATION' => '新石垣空港',
            'HOTEL_URL' => 'https://kariyushi-ishigaki.jp/',
            'HOTEL_ROOM' => '50',
            'HOTEL_KEY' => '無線LAN',
            'HOTEL_PRICE' => '10000',
            'HOTEL_IMG' => 'storage/images/87240121300000171.jpg',
            'HOTEL_POST' => '907-0243',
            'HOTEL_PREF' => '沖縄県',
            'HOTEL_CITY' => '石垣市',
            'HOTEL_STREET' => '宮良９２３−１',
            'HOTEL_BUILD' => '',
            'HOTEL_PHONE' => '0980-86-8001',
            'HOTEL_DEL' => '1',
            'HOTEL_LOCATION_INFO' => '24.358236677263672, 124.21977042493356',
        ]);
    }
}
