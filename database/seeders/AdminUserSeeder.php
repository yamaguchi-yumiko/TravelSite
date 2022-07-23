<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'user_id' => 'Zaq12wsx',
            'password' => Hash::make('password'),
            'last_name' => '菅',
            'first_name' => '義偉',
            'last_name_kana' => 'スガ',
            'first_name_kana' => 'ヨシヒデ',
            'admin_level' => 1,
            'ins_date' => new Datetime(),
            'ins_prg' => 'migration',
            'upd_date' => new Datetime(),
            'upd_prg' => 'migration',
        ]);

        DB::table('admin_users')->insert([
            'user_id' => 'A123456789a',
            'password' => Hash::make('password'),
            'last_name' => '泉',
            'first_name' => '健太',
            'last_name_kana' => 'イズミ',
            'first_name_kana' => 'ケンタ',
            'admin_level' => 1,
            'ins_date' => new Datetime(),
            'ins_prg' => 'migration',
            'upd_date' => new Datetime(),
            'upd_prg' => 'migration',
        ]);
    }
}
