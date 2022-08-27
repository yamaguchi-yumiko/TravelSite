<?php

namespace App\Libs;
use Illuminate\Support\Facades\DB;
/**
 *共通関数
 */
class Util
{
    /**
     *宿泊者の人数の合計を計算
     * @param array $room_gests 宿泊者情報
     */
    public static function getGuestNumber(array $room_gests)
    {
        $adultsNumberTotal = array_sum(array_column($room_gests, 'adults_number'));
        $childNumberTotal = array_sum(array_column($room_gests, 'child_number'));
        return $adultsNumberTotal + $childNumberTotal;
    }

    /**
     * 日付の差分が何日かを計算
     * @param string $check_in チェックイン
     * @param string $check_out チェックアウト
     */
    public static function getStayNumber(string $check_in, string $check_out)
    {
        $check_in = strtotime($check_in);
        $check_out = strtotime($check_out);
        return ($check_out - $check_in) / (60 * 60 * 24);
    }

    /**
     * チェックインの日付から曜日を割り出して一文字表記で返す
     * @param string $check_in チェックイン
     */
    public static function getDate(string $check_in)
    {
        $week = ['日', '月', '火', '水', '木', '金', '土',];
        $week_date = date("w", strtotime($check_in));
        return $date = date("Y年m月d日", strtotime($check_in)) . '(' . $week[$week_date] . ')';
    }
}
