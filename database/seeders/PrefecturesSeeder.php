<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefectures = [
            ['prefecture_cd' => 1, 'name' => '北海道'],
            ['prefecture_cd' => 2, 'name' => '青森県'],
            ['prefecture_cd' => 3, 'name' => '岩手県'],
            ['prefecture_cd' => 4, 'name' => '宮城県'],
            ['prefecture_cd' => 5, 'name' => '秋田県'],
            ['prefecture_cd' => 6, 'name' => '山形県'],
            ['prefecture_cd' => 7, 'name' => '福島県'],
            ['prefecture_cd' => 8, 'name' => '茨城県'],
            ['prefecture_cd' => 9, 'name' => '栃木県'],
            ['prefecture_cd' => 10, 'name' => '群馬県'],
            ['prefecture_cd' => 11, 'name' => '埼玉県'],
            ['prefecture_cd' => 12, 'name' => '千葉県'],
            ['prefecture_cd' => 13, 'name' => '東京都'],
            ['prefecture_cd' => 14, 'name' => '神奈川県'],
            ['prefecture_cd' => 15, 'name' => '新潟県'],
            ['prefecture_cd' => 16, 'name' => '富山県'],
            ['prefecture_cd' => 17, 'name' => '石川県'],
            ['prefecture_cd' => 18, 'name' => '福井県'],
            ['prefecture_cd' => 19, 'name' => '山梨県'],
            ['prefecture_cd' => 20, 'name' => '長野県'],
            ['prefecture_cd' => 21, 'name' => '岐阜県'],
            ['prefecture_cd' => 22, 'name' => '静岡県'],
            ['prefecture_cd' => 23, 'name' => '愛知県'],
            ['prefecture_cd' => 24, 'name' => '三重県'],
            ['prefecture_cd' => 25, 'name' => '滋賀県'],
            ['prefecture_cd' => 26, 'name' => '京都府'],
            ['prefecture_cd' => 27, 'name' => '大阪府'],
            ['prefecture_cd' => 28, 'name' => '兵庫県'],
            ['prefecture_cd' => 29, 'name' => '奈良県'],
            ['prefecture_cd' => 30, 'name' => '和歌山県'],
            ['prefecture_cd' => 31, 'name' => '鳥取県'],
            ['prefecture_cd' => 32, 'name' => '島根県'],
            ['prefecture_cd' => 33, 'name' => '岡山県'],
            ['prefecture_cd' => 34, 'name' => '広島県'],
            ['prefecture_cd' => 35, 'name' => '山口県'],
            ['prefecture_cd' => 36, 'name' => '徳島県'],
            ['prefecture_cd' => 37, 'name' => '香川県'],
            ['prefecture_cd' => 38, 'name' => '愛媛県'],
            ['prefecture_cd' => 39, 'name' => '高知県'],
            ['prefecture_cd' => 40, 'name' => '福岡県'],
            ['prefecture_cd' => 41, 'name' => '佐賀県'],
            ['prefecture_cd' => 42, 'name' => '長崎県'],
            ['prefecture_cd' => 43, 'name' => '熊本県'],
            ['prefecture_cd' => 44, 'name' => '大分県'],
            ['prefecture_cd' => 45, 'name' => '宮崎県'],
            ['prefecture_cd' => 46, 'name' => '鹿児島県'],
            ['prefecture_cd' => 47, 'name' => '沖縄県'],
        ];
        DB::table('prefectures')->insert($prefectures);
    }
}
